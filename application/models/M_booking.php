<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function insert($data){
		$this->db->insert('t_booking',$data);
		return $this->db->insert_id();//mengambil id yng terakhir 
	}

    public function layani($id,$status){
        $res = $this->db->set('booking_status',$status)
                        ->where('booking_pendaftaran_id',$id)
                        ->update('t_booking');
        if($res){
            return 1;
        }else{
            return 0;
        }
    }

    function getData($kode){
        $sql = $this->db->where('booking_kode',$kode)
                        ->get('t_booking');
        $result = $sql->row();
        if($sql->num_rows() > 0){
            return $result;
        }else{
            return 0;
        }
    }

 }