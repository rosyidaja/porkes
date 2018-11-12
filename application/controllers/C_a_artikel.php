<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_a_artikel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_artikel','a');
	}

	public function index()
	{
		$data['tabel'] = $this->a->tampildata();
		$data['content'] = 'v_a_tambah_artikel';
        $this->load->view('v_a_template',$data);
	}

	public function detail()
	{
		$data['tabel'] = $this->a->tampildata();
		$data['content'] = 'v_a_artikel_detail';
        $this->load->view('v_a_template',$data);
	}

	public function delete($id){
		// $data = $this->a->delete_detail($id);
		$data = $this->a->delete($id);
		redirect(base_url('C_a_artikel/detail'));
	}

	public function add(){
		// $data['tabel'] = $this->M_Artikel->tampildata();
		$data['aksi'] = 'create';
		$data['ke'] = 'Tambah Data';
		// $this->load->view('v-tambah', $data);

		$data['content'] = 'v_a_tambah_artikel';
		$this->load->view('v_a_template', $data);
	}

	public function create(){
		$post = $this->input->post();

		// $this->form_validation->set_rules('email','Email','required');
		$artikel_id = $post['artikel_id'];
		$artikel_judul = $post['artikel_judul'];
		$artikel_isi = $post['artikel_isi'];
		// $artikel_foto = $post['artikel_foto'];
		$artikel_status = $post['artikel_status'];
		// $artikel_created_date = $post['artikel_created_date'];

		$config['upload_path']          = './assets/upload/artikel/';
		$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';
 
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('artikel_foto')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data_foto = $this->upload->data('file_name');
		}

			$data = array(
			'artikel_id' => $artikel_id,
			'artikel_judul' => $artikel_judul,
			'artikel_isi' => $artikel_isi,
			'artikel_foto' => $data_foto,
			'artikel_status' => $artikel_status,
			'artikel_created_date' => date('Y-m-d H:i:s'),
			'artikel_created_by' => $this->session->userdata('user')->nama_lengkap
			);

		$hasil = $this->a->insert($data);
		if ($hasil) {
				$this->session->set_flashdata('pesan','Data Berhasil Tersimpan !');
			}else{
				$this->session->set_flashdata('pesan','Data Gagal Tersimpan !');
			}
			redirect(base_url('C_a_artikel/add'));
		}

	public function update($id){

		$data['aksi'] = 'aksi_update';
		$data['ke'] = 'Ubah Data';
		// $data['tabel'] = $this->a->tampildata();
		$data['detail'] = $this->a->tampildataDetail($id);
		// $this->load->view('v-tambah', $data);

		$data['content'] = 'v_a_tambah_artikel';
		$this->load->view('v_a_template', $data);

		}

	public function aksi_update(){
		$post = $this->input->post();
		$artikel_id = $post['artikel_id'];
		
		$artikel_judul = $post['artikel_judul'];
		$artikel_isi = $post['artikel_isi'];
		// $artikel_foto = $post['artikel_foto'];
		$artikel_status = $post['artikel_status'];

		$config['upload_path']          = './assets/upload/artikel/';
		$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';
 
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('artikel_foto')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data_foto = $this->upload->data('file_name');
		}

			$data = array(
			'artikel_id' => $artikel_id,
			'artikel_judul' => $artikel_judul,
			'artikel_isi' => $artikel_isi,
			'artikel_foto' => $data_foto,
			'artikel_status' => $artikel_status,
			'artikel_created_by' => $this->session->userdata('user')->user_name
			);

		$hasil = $this->a->update($artikel_id,$data);
		if ($hasil) {
			$this->session->set_flashdata('pesan','Data Berhasil Di Perbarui !');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal Di Perbarui !');
		}
		redirect(base_url('C_a_layanan/add'));
	}
}
