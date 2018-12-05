<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_faskes()
	{
		$result = $this->db->get('m_faskes');
		return $result->result();		
	}

	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function get_login($user_name,$user_password){
		$this->db->where('user_name',$user_name);
		$this->db->where('user_password',$user_password);
		$result = $this->db->get('s_user');
		return $result->row();
	}

	public function get_user($user_id){
		$this->db->where('user_id',$user_id);
		$result = $this->db->get('s_user');
		return $result->row();
	}

	public function update_pwd($id='',$data=''){
		$this->db->where('user_id',$id);
		$result = $this->db->update('s_user',$data);
		return $result;
	}

	public function update($id='',$data=''){
		$this->db->where('user_id',$id);
		$result = $this->db->update('s_user',$data);
		return $result;
	}

	function tampildata(){
		// $this->db->join('tbl_karyawan_detail kd','k.id_karyawan = kd.id_karyawan','left');
		$result = $this->db->get('s_user');
		return $result->result();
	}

	function tampildataDetail($id=''){
		// $this->db->join('tbl_karyawan_detail kd','k.id_karyawan = kd.id_karyawan','left');
		$result =$this->db->select('*')
				->from('s_user')
				->join('m_faskes','s_user.user_faskes_id = m_faskes.faskes_id','left')
				->where('user_id',$id)->get();
		return $result->row();
	}
	
	public function insert($data=''){
		// $this->db->join('tbl_karyawan k','u.id.karyawan = k.id.karyawan');
		$result = $this->db->insert('s_user',$data);
		return $result;
	}

	public function delete($id='',$data=''){
		$this->db->where('user_id',$id);
		$result = $this->db->delete('s_user',$data);
		return $result;
	}

	// public function tampildatauser(){
	// 	// $this->db->where('user_id',$id);
	// 	// $this->db->join('tbl_karyawan k','u.id_user = k.id_user');
	// 	$result = $this->db->get('s_user');
	// 	return $result->row();
	// }

// 	public function get_user($id_user){
// 		$this->db->where('u.id_user',$id_user);
// 		// $this->db->where('password',$password);
// 		$this->db->join('tbl_karyawan k','u.id_karyawan = k.id_karyawan');
// 		$this->db->join('tbl_karyawan_detail kd','k.id_karyawan = kd.id_karyawan');
// 		$result = $this->db->get('tbl_user u');
// 		return $result->row();
// 	}	

// 	public function insert($data=''){
// 		// $this->db->join('tbl_karyawan k','u.id.karyawan = k.id.karyawan');
// 		$result = $this->db->insert('tbl_user',$data);
// 		return $result;
// 	}

// 	public function delete($id='',$data=''){
// 		$this->db->where('id_user',$id);
// 		$result = $this->db->delete('tbl_user',$data);
// 		return $result;
// 	}

// 	// public function insert_kar($data='')
// 	// {
// 	// 	$result = $this->db->insert('tbl_karyawan_detail',$data);
// 	// 	return $result;
// 	// }

// 	public function get_karyawan_not_user()
// 	{
// 		$this->db->where('k.id_karyawan NOT IN (SELECT `id_karyawan` FROM `tbl_user`)');
// 		$result = $this->db->get('tbl_karyawan k');
// 		return $result->result();		
// 	}

// 	public function tampildata_pwd()
// 	{
// 		$this->db->where('s_user');
// 		return $result->result();
// 	}

// 	public function update_pwd($id='',$data=''){
// 		$this->db->where('id_user',$id);
// 		$result = $this->db->update('tbl_user',$data);
// 		return $result;
// 	}

// 	public function password_konfirmasi(){
// 		$old = ($this->input->post('old'));
// 		$this->db->where('password',$old);
// 		$query = $this->db->get('tbl_user');
// 		return $query->result();
// 	}

// 	public function tampildata_user()
// 	{
// 		$this->db->join('tbl_user u','k.id_karyawan = u.id_karyawan');
// 		$result = $this->db->get('tbl_karyawan k');
// 		return $result->result();
// 	}

// 	public function tampildatadetail_pwd($id=''){
// 		$this->db->where('id_user',$id);
// 		// $this->db->join('tbl_karyawan k','u.id_user = k.id_user');
// 		$result = $this->db->get('tbl_user');
// 		return $result->row();
// 	}
 }