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

	public function delete($id='',$data=''){
		$this->db->where('artikel_id',$id);
		$result = $this->db->delete('m_artikel',$data);
		return $result;
	}
 }