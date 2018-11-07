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
		$sql = " SELECT
				faskes_id,
				faskes_nama,
				faskes_alamat,
				faskes_provinsi_id,
				propinsi_nama,
				faskes_kota_id,
				kota_nama,
				faskes_kelurahan_id,
				kelurahan_nama,
				faskes_kecamatan_id,
				kecamatan_nama,
				faskes_lokasi,
				faskes_longitude,
				faskes_latitude,
				faskes_foto,
				faskes_background,
				faskes_status,
				faskes_aktif
			FROM
				m_faskes
				LEFT JOIN m_propinsi ON ( faskes_provinsi_id = propinsi_id )
				LEFT JOIN m_kota ON ( faskes_kota_id = kota_id )
				LEFT JOIN m_kelurahan ON ( faskes_kelurahan_id = kelurahan_id )
				LEFT JOIN m_kecamatan ON ( faskes_kecamatan_id = kecamatan_id )
				where faskes_aktif = 'y' ";
		$result = $this->db->query($sql);
		return $result->result();
	}

	function tampildataDetail($id=''){
		$sql = " SELECT
				faskes_id,
				faskes_nama,
				faskes_alamat,
				faskes_provinsi_id,
				propinsi_nama,
				faskes_kota_id,
				kota_nama,
				faskes_kelurahan_id,
				kelurahan_nama,
				faskes_kecamatan_id,
				kecamatan_nama,
				faskes_lokasi,
				faskes_longitude,
				faskes_latitude,
				faskes_foto,
				faskes_background
			FROM
				m_faskes
				LEFT JOIN m_propinsi ON ( faskes_provinsi_id = propinsi_id )
				LEFT JOIN m_kota ON ( faskes_kota_id = kota_id )
				LEFT JOIN m_kelurahan ON ( faskes_kelurahan_id = kelurahan_id )
				LEFT JOIN m_kecamatan ON ( faskes_kecamatan_id = kecamatan_id )
				where faskes_id = ".$id;
		$result = $this->db->query($sql);
		return $result->row();
	}

	public function delete($id='',$data=''){
		$this->db->where('faskes_id',$id);
		$result = $this->db->delete('m_faskes',$data);
		return $result;
	}

	public function update($id='',$data=''){
		$this->db->where('faskes_id',$id);
		// $this->db->join('tbl_karyawan_detail kd','k.id_karyawan = kd.id_karyawan');
		$result = $this->db->update('m_faskes',$data);
		return $result;
	}

	public function faskes_det($data='',$tabel){
		$this->db->insert($tabel,$data);
		return $this->db->insert_id();//mengambil id yng terakhir 
	}

	function tampilDokter($id){
		$this->db->where('faskesdetdokter_faskes_id',$id);
		$result = $this->db->get('m_faskesdet_dokter');
		return $result->result();
	}

	function getFaskesDet($id,$tabel){
		$this->db->where('faskesdetdokter_id',$id);
		$result = $this->db->get($tabel);
		return $result->row();
	}

	function faskes_det_updt($id,$data,$tabel,$kolom){
		$this->db->where($kolom,$id);
		$result = $this->db->update($tabel,$data);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
 }