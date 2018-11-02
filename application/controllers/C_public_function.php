<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_public_function extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_public_function');
	}

    function getKota(){
        $search = $this->input->get('search');
        $data = $this->M_public_function->getKota($search);
        if ($data->num_rows() > 0) {
            $list = array();
            $key=0;
            foreach($data->result() as $row){
                $list[$key]['id'] = $row->kota_id;
                $list[$key]['text'] = $row->kota_nama; 
                $key++;
            }

            echo json_encode($list);
        } else {
            echo "hasil kosong";
        }
    }
    
    function getProvinsi(){
        $search = $this->input->get('search');
        $data = $this->M_public_function->getProvinsi($search);
        if ($data->num_rows() > 0) {
            $list = array();
            $key=0;
            foreach($data->result() as $row){
                $list[$key]['id'] = $row->propinsi_id;
                $list[$key]['text'] = $row->propinsi_nama; 
                $key++;
            }

            echo json_encode($list);
        } else {
            echo "hasil kosong";
        }
    }

    function getKecamatan(){
        $search = $this->input->get('search');
        $data = $this->M_public_function->getKecamatan($search);
        if ($data->num_rows() > 0) {
            $list = array();
            $key=0;
            foreach($data->result() as $row){
                $list[$key]['id'] = $row->kecamatan_id;
                $list[$key]['text'] = $row->kecamatan_nama; 
                $key++;
            }

            echo json_encode($list);
        } else {
            echo "hasil kosong";
        }
    }

    function getKelurahan(){
        $search = $this->input->get('search');
        $data = $this->M_public_function->getKelurahan($search);
        if ($data->num_rows() > 0) {
            $list = array();
            $key=0;
            foreach($data->result() as $row){
                $list[$key]['id'] = $row->kelurahan_id;
                $list[$key]['text'] = $row->kelurahan_nama; 
                $key++;
            }

            echo json_encode($list);
        } else {
            echo "hasil kosong";
        }
    }

}
