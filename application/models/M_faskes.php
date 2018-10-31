<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faskes extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert($data=''){
		$this->db->insert('m_faskes',$data);
		return $this->db->insert_id();//mengambil id yng terakhir 
	}

	function tampildata(){
		$result = $this->db->get('m_faskes');
		return $result->result();
	}

	public function delete($id='',$data=''){
		$this->db->where('faskes_id',$id);
		$result = $this->db->delete('m_faskes',$data);
		return $result;
	}
 }