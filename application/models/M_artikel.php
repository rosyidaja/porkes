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
 }