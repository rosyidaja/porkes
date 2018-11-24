<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_a_faskes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_faskes','a');
	}

	public function index()
	{
		$data['content'] = 'v_a_tambah_faskes';
        $this->load->view('v_a_template',$data);
	}

	public function detail()
	{
		$data['tabel'] = $this->a->tampildata();
		$data['content'] = 'v_a_faskes_detail';
        $this->load->view('v_a_template',$data);
	}

	function list_faskes(){
		$result = $this->a->tampildata();
		echo json_encode($result);
	}

	public function content($id=""){
		if($id!= ""){
			$data['faskes_id'] = $id;
			$data['faskes_nama'] = $this->a->tampildataDetail($id)->faskes_nama;
			$data['tabel_dokter'] = $this->a->tampilDokter($id);
			$data['tabel_poli'] = $this->a->tampilPoli($id);
			$data['tabel_layanan'] = $this->a->tampilLayanan($id);
			$data['tabel_galeri'] = $this->a->tampilGaleri($id);
			$data['content'] = 'v_a_content_faskes';
			$data['config_page'] = 'config/faskes_content';
			$this->load->view('v_a_template',$data);
		}else{
			redirect(base_url('C_a_faskes/detail'));
		}
	}
	public function add(){
		$data['aksi'] = 'create';
		 $data['ke'] = 'Tambah Data';
		// $this->load->view('v-tambah', $data);

		$data['content'] = 'v_a_tambah_faskes';
		$this->load->view('v_a_template', $data);
	}

	public function create(){
		$post = $this->input->post();
		/*Deklarasi Pengambilan parameter */
		$faskes_nama = $post['nama_faskes'];
		$faskes_alamat = $post['alamat_faskes'];
		$propinsi_id = $post['provinsi'];
		$kota_id = $post['kota'];
		$kelurahan_id = $post['kelurahan'];
		$kecamatan_id = $post['kecamatan'];
		$faskes_lokasi = $post['lokasi_faskes'];
		$faskes_latitude = $post['latitude_faskes'];
		$faskes_longitude = $post['longitude_faskes'];
		$faskes_status = $post['faskes_status'];
		
		/*Proses Upload */
		/*Config file untuk upload */
		$config['upload_path']          = './assets/upload/faskes/';
		$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';
 
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('faskes_foto')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			/*Ketika Sukses Upload mengambil nama file*/
			$faskes_foto = $this->upload->data('file_name');
		}

		if (!$this->upload->do_upload('faskes_background')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$faskes_background = $this->upload->data('file_name');
		}
		/*End Proses Upload */

			$data = array(
			'faskes_nama' => $faskes_nama,
			'faskes_alamat' => $faskes_alamat,
			'faskes_provinsi_id' => $propinsi_id,
			'faskes_kota_id' => $kota_id,
			'faskes_kelurahan_id' => $kelurahan_id,
			'faskes_kecamatan_id' => $kecamatan_id,
			'faskes_lokasi' => $faskes_lokasi,
			'faskes_latitude' => $faskes_latitude,
			'faskes_longitude' => $faskes_longitude,
			'faskes_status' => $faskes_status,
			'faskes_background' => $faskes_background,
			'faskes_foto' => $faskes_foto
			);

		$hasil = $this->a->insert($data);
		if ($hasil) {
				$this->session->set_flashdata('pesan','Data Berhasil Tersimpan !');
			}else{
				$this->session->set_flashdata('pesan','Data Gagal Tersimpan !');
			}
			redirect(base_url('C_a_faskes/add'));
		}

		public function delete($id){
			// $data = $this->a->delete_detail($id);
			$data = $this->a->delete($id);
			redirect(base_url('C_a_faskes/detail'));
		}

		public function update($id){
			$data['aksi'] = 'aksi_update';
			$data['ke'] = 'Ubah Data';
			// $data['tabel'] = $this->a->tampildata();
			$data['detail'] = $this->a->tampildataDetail($id);

			$data['content'] = 'v_a_tambah_faskes';
			$this->load->view('v_a_template', $data);
		}

		public function aksi_update($id){
			$post = $this->input->post();
			/*Deklarasi Pengambilan parameter */
			$faskes_id = $id;
			$faskes_nama = $post['nama_faskes'];
			$faskes_alamat = $post['alamat_faskes'];
			$propinsi_id = $post['provinsi'];
			$kota_id = $post['kota'];
			$kelurahan_id = $post['kelurahan'];
			$kecamatan_id = $post['kecamatan'];
			$faskes_lokasi = $post['lokasi_faskes'];
			$faskes_latitude = $post['latitude_faskes'];
			$faskes_longitude = $post['longitude_faskes'];
			$faskes_status = $post['faskes_status'];
			
			$data = array(
				'faskes_nama' => $faskes_nama,
				'faskes_alamat' => $faskes_alamat,
				'faskes_provinsi_id' => $propinsi_id,
				'faskes_kota_id' => $kota_id,
				'faskes_kelurahan_id' => $kelurahan_id,
				'faskes_kecamatan_id' => $kecamatan_id,
				'faskes_lokasi' => $faskes_lokasi,
				'faskes_latitude' => $faskes_latitude,
				'faskes_longitude' => $faskes_longitude,
				'faskes_status' => $faskes_status
			);

			/*Proses Upload */
			/*Config file untuk upload */
			
			$config['upload_path']          = './assets/upload/faskes/';
			$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';
	 
			$this->upload->initialize($config);
			if(!$_FILES["faskes_foto"]["name"]){
				if (!$this->upload->do_upload('faskes_foto')){
					$error = array('error' => $this->upload->display_errors());
				}else{
					/*Ketika Sukses Upload mengambil nama file*/
					$faskes_foto = $this->upload->data('file_name');
					$data['faskes_foto'] = $faskes_foto;
				}
			}
			
			if(!$_FILES["faskes_background"]["name"]){
				if (!$this->upload->do_upload('faskes_background')){
					$error = array('error' => $this->upload->display_errors());
				}else{
					$faskes_background = $this->upload->data('file_name');
					$data['faskes_background'] = $faskes_background;
				}
			}
			
			/*End Proses Upload */
	
				
	
			$hasil = $this->a->update($faskes_id,$data);
			if ($hasil) {
					$this->session->set_flashdata('pesan','Data Berhasil Diperbarui !');
				}else{
					$this->session->set_flashdata('pesan','Data Gagal Diperbarui !');
				}
				redirect(base_url('C_a_faskes/detail'));
			}

			public function task(){
				$param = $this->input->post('param');
				$id = $this->input->post('id');
				$nama = $this->input->post('nama');
				$telfon = $this->input->post('telfon');
				$kode = $this->input->post('kode');
				$layanan = $this->input->post('layanan');
				$faskes_id = $this->input->post('faskes_id');
				
				if($param == 'dokter'){
					$data = array(
						"faskesdetdokter_nama" => $nama,
						"faskesdetdokter_telfon" => $telfon,
						"faskesdetdokter_faskes_id" => $faskes_id
					);
					/*Proses Upload */
					/*Config file untuk upload */
					
					$config['upload_path']          = './assets/upload/dokter/';
					$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';
			
					$this->upload->initialize($config);
					
					if($_FILES["foto_modal"]["name"] != ''){
						if (!$this->upload->do_upload('foto_modal')){
							$error = array('error' => $this->upload->display_errors());
						}else{
							/*Ketika Sukses Upload mengambil nama file*/
							$foto_modal = $this->upload->data('file_name');
							$data['faskesdetdokter_foto'] = $foto_modal;
						}
					}
					if($id != 0){
						$result = $this->a->faskes_det_updt($id,$data,'m_faskesdet_dokter','faskesdetdokter_id');
					}else{
						$result = $this->a->faskes_det($data,'m_faskesdet_dokter');
					}
					
				}else if($param == 'poli'){
					$data = array(
						"faskesdetpoli_nama" => $nama,
						"faskesdetpoli_kode" => $kode,
						"faskesdetpoli_faskes_id" => $faskes_id
					);
					if($id != 0){
						$result = $this->a->faskes_det_updt($id,$data,'m_faskesdet_poli','faskesdetpoli_id');
					}else{
						$result = $this->a->faskes_det($data,'m_faskesdet_poli');
					}
					
				}else if($param == 'layanan'){
					$data = array(
						"faskesdetlayanan_nama" => $layanan,
						"faskesdetlayanan_faskes_id" => $faskes_id
					);
					if($id != 0){
						$result = $this->a->faskes_det_updt($id,$data,'m_faskesdet_layanan','faskesdetlayanan_id');
					}else{
						$result = $this->a->faskes_det($data,'m_faskesdet_layanan');
					}
					
				}else if($param == 'galeri'){
					if($_FILES["foto_modal"]["name"] != ''){
						/*Proses Upload */
						/*Config file untuk upload */
						$data = array(
							"faskesdetgaleri_faskes_id" => $faskes_id
						);
						$config['upload_path']          = './assets/upload/galeri/';
						$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';
				
						$this->upload->initialize($config);
						if (!$this->upload->do_upload('foto_modal')){
							$error = array('error' => $this->upload->display_errors());
						}else{
							/*Ketika Sukses Upload mengambil nama file*/
							$foto_modal = $this->upload->data('file_name');
							$data['faskesdetgaleri_foto'] = $foto_modal;
						}
						$result = $this->a->faskes_det($data,'m_faskesdet_galeri');
					}else{
						$result = 0;
					}
				}
				
					if ($result > 0) {
						$this->session->set_flashdata('pesan','Data Berhasil Diperbarui !');
					}else{
						$this->session->set_flashdata('pesan','Data Gagal Diperbarui !');
					}
					echo $result;
				}
			
			function getDetail(){
				$id = $this->input->post("id");
				$param = $this->input->post("param");
				if($param == 'dokter'){
					$result = $this->a->getFaskesDet($id,'m_faskesdet_dokter','faskesdetdokter_id');
				}else if($param == 'poli'){
					$result = $this->a->getFaskesDet($id,'m_faskesdet_poli','faskesdetpoli_id');
				}else if($param == 'layanan'){
					$result = $this->a->getFaskesDet($id,'m_faskesdet_layanan','faskesdetlayanan_id');
				}
				
				echo json_encode($result);
			}


			function delete_det(){
				$id = $this->input->post("id");
				$param = $this->input->post("param");
				if($param == 'dokter'){
					$result = $this->a->delete_det($id,'m_faskesdet_dokter','faskesdetdokter_id');
				}else if($param == 'poli'){
					$result = $this->a->delete_det($id,'m_faskesdet_poli','faskesdetpoli_id');
				}else if($param == 'layanan'){
					$result = $this->a->delete_det($id,'m_faskesdet_layanan','faskesdetlayanan_id');
				}else if($param == 'galeri'){
					$result = $this->a->delete_det($id,'m_faskesdet_galeri','faskesdetgaleri_id');
				}

				if ($result > 0) {
					$this->session->set_flashdata('pesan','Data Berhasil Dihapus !');
				}else{
					$this->session->set_flashdata('pesan','Data Gagal Dihapus !');
				}
				echo $result;
			}
}
