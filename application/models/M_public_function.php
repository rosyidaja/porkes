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
 }