<?php
/*
 * Porkes v 1.0.0
 * Portal Kesehatan
 * @package		: master
 * @datecreate	: 11 september 2018
 * @desc		: Controller untuk booking
 * @author		: Rosyid			rosyidaja21@gmail.com
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_public_function');
		$this->load->model('M_booking');
		
    }

    function daftar(){
		$task=$this->uri->segment(3);
		switch($task){
			case "create" :
				$this->insert();
				break;
			case "layani" :
				$this->layani();
				break;
			default:
                $resultMsg = helpResponse('400',null, $msg = '', $status = '');
				echo json_encode($resultMsg);
				break;
		}	
	}

	public function insert()
	{
        $nik         = $this->input->get_post('booking_pasien_nik');
        $nik         = preg_replace('/[^0-9]/', '', $nik);
        
        $norm        = trim($this->input->get_post('booking_pasien_norm'));
        $nama        = htmlentities($this->input->get_post('booking_pasien_nama'), ENT_QUOTES);

		$id        = $this->input->get_post('booking_pendaftaran_id');
		$poli        = $this->input->get_post('poli_kode');
		$faskes_kode = $this->input->get_post('faskes_kode');
		$tanggal     = $this->input->get_post('booking_tanggal');
		$norut       = $this->input->get_post('nomer_urut');
        $status      = $this->input->get_post('booking_status');
        
        $poliDet     = $this->M_public_function->getPoliByKode($poli);
        $faskesDet   = $this->M_public_function->getfaskesByKode($faskes_kode);
        
        if(!is_object($poliDet)){
            $resultMsg = helpResponse('400',null, $msg = 'Poli tidak Valid!', $status = 'Error');
        }elseif(!is_object($faskesDet)){
            $resultMsg = helpResponse('400',null, $msg = 'Faskes tidak Valid!', $status = 'Error');
        }else{
            $data = array(
                'booking_faskes_id'						=> $faskesDet->faskes_id,
                'booking_faskespoli_id'					=> $poliDet->faskesdetpoli_id,
                'booking_urut'							=> $norut,
                'booking_pasien_norm'					=> $norm,
                'booking_status'						=> $status,
                'booking_tanggal'						=> $tanggal,
                'booking_pendaftaran_id'				=> $id,
                'booking_tipe'			    			=> 2,
                'booking_pasien_nama'					=> htmlentities($nama,ENT_QUOTES)
            );
            $result = $this->M_booking->insert($data);
            if($result > 0){
                $resultMsg = helpResponse('201',null, $msg = '', $status = '');
            }else{
                $resultMsg = helpResponse('500',null, $msg = '', $status = '');
            }
        }

        echo json_encode($resultMsg);
	}

    function layani(){
        $status         = $this->input->get_post('status');
        $id             = $this->input->get_post('booking_pendaftaran_id');

        $result = $this->M_booking->layani($id,$status);
        
        if($result > 0){
            $resultMsg = helpResponse('202',null, $msg = '', $status = '');
        }else{
            $resultMsg = helpResponse('304',null, $msg = '', $status = '');
        }
    }
	
}
