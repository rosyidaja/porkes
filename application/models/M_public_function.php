<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_public_function extends CI_Model{

	public function __construct(){
		parent::__construct();
	}   
    function getKota($search){
        $sql = " Select kota_id,kota_nama from m_kota where kota_aktif = 'y' ";
        if($search != ''){
            $search = strtolower($search);
            $sql .= " AND lower(kota_nama) like '%".$search."%' ";
        }
        $result = $this->db->query($sql);
        return $result;
    }
    function getProvinsi($search){
        $sql = " Select propinsi_id,propinsi_nama from m_propinsi where propinsi_aktif = 'y' ";
        if($search != ''){
            $search = strtolower($search);
            $sql .= " AND lower(propinsi_nama) like '%".$search."%' ";
        }
        $result = $this->db->query($sql);
        return $result;
    }
    function getKecamatan($search){
        $sql = " Select kecamatan_id,kecamatan_nama from m_kecamatan where kecamatan_aktif = 'y' ";
        if($search != ''){
            $search = strtolower($search);
            $sql .= " AND lower(kecamatan_nama) like '%".$search."%' ";
        }
        $result = $this->db->query($sql);
        return $result;
    }
    function getKelurahan($search){
        $sql = " Select kelurahan_id,kelurahan_nama from m_kelurahan where kelurahan_aktif = 'y' ";
        if($search != ''){
            $search = strtolower($search);
            $sql .= " AND lower(kelurahan_nama) like '%".$search."%' ";
        }
        $result = $this->db->query($sql);
        return $result;
    }

    function listPoli($id){
        $today = date("N");
        /* $sql = "select 
                    jadwalpoli_id,
                    jadwalpoli_faskes_id,
                    jadwalpoli_dokter_id,
                    faskesdetdokter_nama as dokter_nama,
                    jadwalpoli_poli_id,
                    faskesdetpoli_nama as poli_nama,
                    jadwalpoli_estimasi
                from
                    m_jadwal_poli
                LEFT JOIN m_faskesdet_dokter ON (jadwalpoli_dokter_id = faskesdetdokter_id)
                LEFT JOIN m_faskesdet_poli ON (jadwalpoli_poli_id = faskesdetpoli_id)
                where 
                    jadwalpoli_aktif = 'y' and
                    jadwalpoli_faskes_id = ".$id." and
                    jadwalpoli_hari like '%".$today."%'
                "; */
        $sql = "select 
                    faskesdetpoli_id,
                    faskesdetpoli_faskes_id,
                    faskesdetpoli_kode,
                    faskesdetpoli_nama as poli_nama,
                    faskesdetpoli_aktif
                from m_faskesdet_poli
                where
                    faskesdetpoli_aktif = 'y' and
                    faskesdetpoli_faskes_id = ".$id."";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function listDokter($id){
        $today = date("N");
        /* $sql = "select 
                    jadwalpoli_id,
                    jadwalpoli_faskes_id,
                    jadwalpoli_dokter_id,
                    faskesdetdokter_nama as dokter_nama,
                    jadwalpoli_poli_id,
                    faskesdetpoli_nama as poli_nama,
                    jadwalpoli_estimasi
                from
                    m_jadwal_poli
                LEFT JOIN m_faskesdet_dokter ON (jadwalpoli_dokter_id = faskesdetdokter_id)
                LEFT JOIN m_faskesdet_poli ON (jadwalpoli_poli_id = faskesdetpoli_id)
                where 
                    jadwalpoli_aktif = 'y' and
                    jadwalpoli_faskes_id = ".$id." and
                    jadwalpoli_hari like '%".$today."%'
                "; */
        $sql = "select 
                    faskesdetdokter_id,
                    faskesdetdokter_faskes_id,
                    faskesdetdokter_nama as dokter_nama,
                    faskesdetdokter_aktif,
                    faskesdetdokter_telfon,
                    faskesdetdokter_foto as dokter_foto
                from m_faskesdet_dokter
                where
                    faskesdetdokter_aktif = 'y' and
                    faskesdetdokter_faskes_id = ".$id."";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function listGaleri($id){
        $today = date("N");
        /* $sql = "select 
                    jadwalpoli_id,
                    jadwalpoli_faskes_id,
                    jadwalpoli_dokter_id,
                    faskesdetdokter_nama as dokter_nama,
                    jadwalpoli_poli_id,
                    faskesdetpoli_nama as poli_nama,
                    jadwalpoli_estimasi
                from
                    m_jadwal_poli
                LEFT JOIN m_faskesdet_dokter ON (jadwalpoli_dokter_id = faskesdetdokter_id)
                LEFT JOIN m_faskesdet_poli ON (jadwalpoli_poli_id = faskesdetpoli_id)
                where 
                    jadwalpoli_aktif = 'y' and
                    jadwalpoli_faskes_id = ".$id." and
                    jadwalpoli_hari like '%".$today."%'
                "; */
        $sql = "select 
                    faskesdetgaleri_id,
                    faskesdetgaleri_faskes_id,
                    faskesdetgaleri_aktif,
                    faskesdetgaleri_foto as galeri_foto
                from m_faskesdet_galeri
                where
                    faskesdetgaleri_aktif = 'y' and
                    faskesdetgaleri_faskes_id = ".$id."";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function listLayanan($id){
        $today = date("N");
        /* $sql = "select 
                    jadwalpoli_id,
                    jadwalpoli_faskes_id,
                    jadwalpoli_dokter_id,
                    faskesdetdokter_nama as dokter_nama,
                    jadwalpoli_poli_id,
                    faskesdetpoli_nama as poli_nama,
                    jadwalpoli_estimasi
                from
                    m_jadwal_poli
                LEFT JOIN m_faskesdet_dokter ON (jadwalpoli_dokter_id = faskesdetdokter_id)
                LEFT JOIN m_faskesdet_poli ON (jadwalpoli_poli_id = faskesdetpoli_id)
                where 
                    jadwalpoli_aktif = 'y' and
                    jadwalpoli_faskes_id = ".$id." and
                    jadwalpoli_hari like '%".$today."%'
                "; */
        $sql = "select 
                    faskesdetlayanan_id,
                    faskesdetlayanan_faskes_id,
                    faskesdetlayanan_nama as layanan_nama,
                    faskesdetlayanan_aktif
                from m_faskesdet_layanan
                where
                    faskesdetlayanan_aktif = 'y' and
                    faskesdetlayanan_faskes_id = ".$id."";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getPoli($id){
        $sql = $this->db->where('faskesdetpoli_id',$id)
                        ->get('m_faskesdet_poli');
        
        if($sql->num_rows()){
            return $sql->row();
        }
    }

    function getPoliByKode($kode){
        $sql = $this->db->where('faskesdetpoli_kode',$kode)
                        ->get('m_faskesdet_poli');
        
        if($sql->num_rows()){
            return $sql->row();
        }
    }

    function getfaskesByKode($kode){
        $sql = $this->db->where('faskes_kode',$kode)
                        ->get('m_faskes');
        
        if($sql->num_rows()){
            return $sql->row();
        }
    }

    function get_level($id_level)
    {
        //$this->db->where('l.id_level',$id_level);
       // $this->db->join('tbl_m_level l','l.id_level = u.id_level');
        $result = $this->db->get('s_user');
        $result = $result->row();
        return $result->user_level;
    }
 }