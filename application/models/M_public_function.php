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
 }