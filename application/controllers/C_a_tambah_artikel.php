<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_a_tambah_artikel extends CI_Controller {

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
		$this->load->model('M_Artikel','a');
	}

	public function index()
	{
		$data['tabel'] = $this->a->tampildata();
		$data['content'] = 'v_a_tambah_artikel';
        $this->load->view('v_a_template',$data);
	}

	public function add(){
		// $data['tabel'] = $this->M_Artikel->tampildata();
		$data['aksi'] = 'create';
		// $data['ke'] = 'Tambah Data';
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
		$artikel_foto = $post['artikel_foto'];
		$artikel_status = $post['artikel_status'];
		// $artikel_created_date = $post['artikel_created_date'];

		$config['upload_path']          = './assets/img/';
		$config['allowed_types']        = 'gif|jpg|png';
 
		$this->load->library('upload', $config);
 
		if ($this->upload->do_upload('artikel_foto')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			$data = array('artikel_foto' => $this->upload->data('file_name'));
			$this->load->view('v_upload_sukses', $data);
		}

		// if ($artikel_foto=''){}else{
		// 	$config['upload_path']='./assets/img/';
		// 	$config['allowed_types']='jpg|gif|png|jpeg';

		// 	$this->load->library('upload',$config);

		// 	if (!$this->upload->do_upload('artikel_foto')) {
		// 		$this->session->set_flashdata('pesan','Upload Gagal Tersimpan !!');
		// 		redirect(base_url('C_a_tambah_artikel/index'));
		// 	}else{
		// 		$artikel_foto = $this->upload->data('file_name');
		// 	}

			$data = array(
			'artikel_id' => $artikel_id,
			'artikel_judul' => $artikel_judul,
			'artikel_isi' => $artikel_isi,
			'artikel_foto' => $artikel_foto,
			'artikel_status' => $artikel_status,
			'artikel_created_date' => date('Y-m-d H:i:s'),
			'artikel_created_by' => 'Super Admin'
			);

		$hasil = $this->a->insert($data);
		if ($hasil) {
				$this->session->set_flashdata('pesan','Data Berhasil Tersimpan !');
			}else{
				$this->session->set_flashdata('pesan','Data Gagal Tersimpan !');
			}
			redirect(base_url('C_a_tambah_artikel/add'));
		}

		// if($this->form_validation->run() != false){
		// 	echo "Form validation oke";
		// }else{
		// 	$this->load->view('v_a_artikel_detail');
		// }

		
	}

// 	function do_upload(){
 
//     $this->load->library('upload');
 
//     $files = $_FILES;
//     $cpt = count($_FILES['userfile']['name']);
//     for($i=0; $i<$cpt; $i++){
//         $_FILES['userfile']['name']		= $files['userfile']['name'][$i];
//         $_FILES['userfile']['type']		= $files['userfile']['type'][$i];
//         $_FILES['userfile']['tmp_name']	= $files['userfile']['tmp_name'][$i];
//         $_FILES['userfile']['error']	= $files['userfile']['error'][$i];
//         $_FILES['userfile']['size']		= $files['userfile']['size'][$i];    
 
// 	    $this->upload->initialize($this->set_upload_options());
// 	    $this->upload->do_upload();
 
// 	    $upload_data 	= $this->upload->data();
// 		    $file_name 	=   $upload_data['file_name'];
// 		    $file_type 	=   $upload_data['file_type'];
// 		    $file_size 	=   $upload_data['file_size'];
 
// 	    // Output control
// 			$data['getfiledata_file_name'] = $file_name;
// 			$data['getfiledata_file_type'] = $file_type;
// 			$data['getfiledata_file_size'] = $file_size;
//         // Insert Data for current file
//             $this->m_upload->insertNotices($form_input_Data);
 
//         //Create a view containing just the text "Uploaded successfully"
// 		$this->load->view('upload_success', $data);
 
// 	}
 
// }
// private function set_upload_options(){   
// 	//  upload an image options
//     $config = array();
//     $config['upload_path'] = './fileselif/';
//     $config['allowed_types'] = 'gif|jpg|png|pdf';
//     $config['max_size']      = '0';
//     $config['overwrite']     = FALSE;
 
 
//     return $config;
// }
// }
