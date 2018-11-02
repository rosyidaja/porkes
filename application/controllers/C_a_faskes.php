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

	public function content($id=""){
		if($id!= ""){
			$data['content'] = 'v_a_content_faskes';
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

		public function update($id){

			$data['aksi'] = 'aksi_update';
			$data['ke'] = 'Ubah Data';
			$data['tabel'] = $this->a->tampildata();
			$data['detail'] = $this->a->tampildataDetail($id);
			// $this->load->view('v-tambah', $data);

			$data['content'] = 'v_a_tambah_faskes';
			$this->load->view('v_a_template', $data);

		}

		public function aksi_update(){
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
}
