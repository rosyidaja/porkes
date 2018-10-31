<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_a_faskes extends CI_Controller {

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

	public function add(){
		$data['tabel'] = $this->a->tampildata();
		$data['aksi'] = 'create';
		// $data['ke'] = 'Tambah Data';
		// $this->load->view('v-tambah', $data);

		$data['content'] = 'v_a_tambah_faskes';
		$this->load->view('v_a_template', $data);
	}

	public function create(){
		$post = $this->input->post();

		// $this->form_validation->set_rules('email','Email','required');
		$layanan_id = $post['layanan_id'];
		$layanan_judul = $post['layanan_judul'];
		$layanan_deskripsi = $post['layanan_deskripsi'];

		$config['upload_path']          = './assets/upload/layanan/';
		$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';
 
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('layanan_foto')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data_foto = $this->upload->data('file_name');
		}

			$data = array(
			'layanan_id' => $layanan_id,
			'layanan_judul' => $layanan_judul,
			'layanan_deskripsi' => $layanan_deskripsi,
			'layanan_foto' => $data_foto,
			'layanan_created_date' => date('Y-m-d H:i:s'),
			'layanan_created_by' => $this->session->userdata('user')->user_name
			);

		$hasil = $this->a->insert($data);
		if ($hasil) {
				$this->session->set_flashdata('pesan','Data Berhasil Tersimpan !');
			}else{
				$this->session->set_flashdata('pesan','Data Gagal Tersimpan !');
			}
			redirect(base_url('C_a_layanan/add'));
		}
}
