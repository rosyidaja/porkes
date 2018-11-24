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
		// $this->db->join('m_faskesdet_layanan fl','f.faskes_id = fl.faskes_id','left');
		// $result = $this->db->get('m_faskes f');
		// return $result->result();
		
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
				faskes_aktif,
				faskesdetlayanan_nama,
				faskesdetpoli_nama
			FROM
				m_faskes
				LEFT JOIN m_propinsi ON ( faskes_provinsi_id = propinsi_id )
				LEFT JOIN m_kota ON ( faskes_kota_id = kota_id )
				LEFT JOIN m_kelurahan ON ( faskes_kelurahan_id = kelurahan_id )
				LEFT JOIN m_kecamatan ON ( faskes_kecamatan_id = kecamatan_id )
				-- LEFT JOIN m_faskesdet_layanan ON ( faskesdetlayanan_faskes_id = faskes_id )
				LEFT JOIN ( SELECT GROUP_CONCAT( faskesdetlayanan_nama) AS faskesdetlayanan_nama,  faskesdetlayanan_faskes_id FROM m_faskesdet_layanan GROUP BY faskesdetlayanan_faskes_id ) AS layanan ON ( faskesdetlayanan_faskes_id = faskes_id )
				LEFT JOIN ( SELECT GROUP_CONCAT( faskesdetpoli_nama ) AS faskesdetpoli_nama,  faskesdetpoli_faskes_id FROM m_faskesdet_poli GROUP BY faskesdetpoli_faskes_id ) AS poli ON ( faskesdetpoli_faskes_id = faskes_id )
				where faskes_aktif = 'y' ";
		$result = $this->db->query($sql);
		return $result->result();
	}

	function tampildata_poli(){
		// $this->db->join('m_faskesdet_layanan fl','f.faskes_id = fl.faskes_id','left');
		// $result = $this->db->get('m_faskes f');
		// return $result->result();
		$sql = " SELECT
				faskes_id,
				faskesdetpoli_nama
			FROM
				m_faskes
				LEFT JOIN m_faskesdet_poli ON ( faskesdetpoli_faskes_id = faskes_id )
				where faskes_aktif = 'y' ";
		// $this->db->limit(3);
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
				faskes_background,
				faskesdetlayanan_nama,
				faskesdetpoli_nama,
				faskesdetdokter_nama,
				faskesdetgaleri_foto
			FROM
				m_faskes
				LEFT JOIN m_propinsi ON ( faskes_provinsi_id = propinsi_id )
				LEFT JOIN m_kota ON ( faskes_kota_id = kota_id )
				LEFT JOIN m_kelurahan ON ( faskes_kelurahan_id = kelurahan_id )
				LEFT JOIN m_kecamatan ON ( faskes_kecamatan_id = kecamatan_id )

				LEFT JOIN ( SELECT GROUP_CONCAT( faskesdetgaleri_foto) AS faskesdetgaleri_foto,  faskesdetgaleri_faskes_id FROM m_faskesdet_galeri GROUP BY faskesdetgaleri_faskes_id ) AS galeri ON ( faskesdetgaleri_faskes_id = faskes_id )

				LEFT JOIN ( SELECT GROUP_CONCAT( faskesdetdokter_nama) AS faskesdetdokter_nama,  faskesdetdokter_faskes_id FROM m_faskesdet_dokter GROUP BY faskesdetdokter_faskes_id ) AS dokter ON ( faskesdetdokter_faskes_id = faskes_id )

				LEFT JOIN ( SELECT GROUP_CONCAT( faskesdetlayanan_nama) AS faskesdetlayanan_nama,  faskesdetlayanan_faskes_id FROM m_faskesdet_layanan GROUP BY faskesdetlayanan_faskes_id ) AS layanan ON ( faskesdetlayanan_faskes_id = faskes_id )

				LEFT JOIN ( SELECT GROUP_CONCAT( faskesdetpoli_nama ) AS faskesdetpoli_nama,  faskesdetpoli_faskes_id FROM m_faskesdet_poli GROUP BY faskesdetpoli_faskes_id ) AS poli ON ( faskesdetpoli_faskes_id = faskes_id )
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

	function tampildataDetail_faskes($id=''){
		$this->db->where('faskes_id',$id);
		$result = $this->db->get('m_faskes');
		return $result->row();
	}

	function tampilDokter($id){
		$this->db->where('faskesdetdokter_faskes_id',$id);
		$result = $this->db->get('m_faskesdet_dokter');
		return $result->result();
	}

	function tampilPoli($id){
		$this->db->where('faskesdetpoli_faskes_id',$id);
		$result = $this->db->get('m_faskesdet_poli');
		return $result->result();
	}
	function tampilLayanan($id){
		$this->db->where('faskesdetlayanan_faskes_id',$id);
		$result = $this->db->get('m_faskesdet_layanan');
		return $result->result();
	}
	function tampilGaleri($id){
		$this->db->where('faskesdetgaleri_faskes_id',$id);
		$result = $this->db->get('m_faskesdet_galeri');
		return $result->result();
	}

	function getFaskesDet($id,$tabel,$kolom){
		$this->db->where($kolom,$id);
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

	function delete_det($id,$tabel,$kolom){
		$this->db->where($kolom,$id);
		$result = $this->db->delete($tabel);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
 }