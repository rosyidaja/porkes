<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert($data=''){
		$this->db->insert('m_artikel',$data);
		return $this->db->insert_id();//mengambil id yng terakhir 
	}

	function tampildata(){
		$result = $this->db->get('m_artikel');
		return $result->result();
	}

	function tampildataPublish(){
		$result = $this->db->where('artikel_status','P')
						 ->get('m_artikel');
		return $result->result();
	}


	function tampildata_h_artikel(){
		$this->db->limit(4);
		$result = $this->db->where('artikel_status','P')
						->get('m_artikel');
		return $result->result();
	}

	function tampildataDetail($id=''){
		$this->db->where('artikel_id',$id);
		$result = $this->db->get('m_artikel');
		return $result->row();
	}

	public function delete($id='',$data=''){
		$this->db->where('artikel_id',$id);
		$result = $this->db->delete('m_artikel',$data);
		return $result;
	}

	public function update($id='',$data=''){
		$this->db->where('artikel_id',$id);
		// $this->db->join('tbl_karyawan_detail kd','k.id_karyawan = kd.id_karyawan');
		$result = $this->db->update('m_artikel',$data);
		return $result;
	}
 }