<?php
/*
 * Porkes v 1.0.0
 * Portal Kesehatan
 * @package		: master
 * @datecreate	: 20 November 2018
 * @desc		: Controller untuk checkin
 * @author		: Rosyid			rosyidaja21@gmail.com
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class C_checkin extends CI_Controller {
	var $API ="";
	function __construct(){
		parent::__construct();
		$this->load->model('M_public_function');
		$this->load->model('M_booking');
		$this->API="http://localhost/altair/altair/ehealth/ehealth/antrian";
	}

	public function index()
	{
			$data['head_top_resource'] = 'v_head_top_resource';
			$data['navbar'] = 'v_navbar';
			$data['content'] = 'v_checkin';
			$data['footer'] = 'v_footer';
			$data['bottom_resource'] = 'v_bottom_resource';
			$this->load->view('v_page',$data);
    }

    function checkin(){
		date_default_timezone_set("Asia/Bangkok");
		$post = $this->input->post();
        $query = $post['param'];
        
        $data = $this->M_booking->getData($query);
		// Get Data Pasien dengan API
		$param = array('antrian_kode' =>  $query);
		$checkin = json_decode($this->curl->simple_post($this->API.'/checkin',$param, array(CURLOPT_BUFFERSIZE => 10)));
        
        if($checkin->code === '203'){
            $message = array(
                'status' => 'error',
                'header' => 'error', 
                'message' => $checkin->message
              );
            $this->session->set_flashdata('notification', $message);
            redirect(base_url('C_checkin'));
            return;
        }else{
            if($checkin->code === '200'){
                $message = array(
                    'status' => 'success',
                    'header' => 'success',
                    'message'=> 'Sukses Checkin'
                  );
                $this->M_booking->layani($data->booking_pendaftaran_id,'Checkin');
                $this->session->set_flashdata('notification', $message);
                redirect(base_url('C_checkin'));
            }else{
                $message = array(
                    'status' => 'error',
                    'header' => 'error', 
                    'message' => $checkin->message
                  );
                  $this->session->set_flashdata('notification', $message);
                redirect(base_url('C_checkin'));
            }
        }
		
	}
}
