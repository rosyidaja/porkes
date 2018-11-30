<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_master_user extends CI_Controller {

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
		$this->load->model('M_login','a');
	}

	public function index()
	{
        $data['content'] = 'v_a_tambah_user';
        $this->load->view('v_a_template',$data);
	}
	public function detail()
	{
		$data['title'] = 'List User';
		$data['tabel'] = $this->a->tampildata();
        $data['content'] = 'v_a_user_detail';
        $this->load->view('v_a_template',$data);
	}

	public function add(){
		// $data['tabel'] = $this->m_login->tampildata_pwd();
		// $data['karyawan'] = $this->m_login->get_karyawan_not_user();
		$data['title'] = 'Tambah User';
		$data['ket'] = 'Tambah Data';
		$data['content'] = 'v_a_tambah_user';
		$data['aksi'] = 'create';
		$this->load->view('v_a_template', $data);
		// $this->load->view('v-tambah_user', $data);
	}

	public function create(){
		$post = $this->input->post();
		$user_id = $post['user_id'];
		$user_nama = $post['user_nama'];
		$user_name = $post['user_name'];
		$user_password = $post['user_password'];
		$user_level = $post['user_level'];

		$a = $this->form_validation->set_rules('user_name','user_name','trim|is_unique[s_user.user_name]|xss_clean|required');
		$b = $this->form_validation->set_rules('user_password','Password','required|matches[user_repassword]');
		$c = $this->form_validation->set_rules('user_repassword','Password Confirmation','required');

		$config['upload_path']          = './assets/upload/user/';
		$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';
 
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('user_foto')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data_foto = $this->upload->data('file_name');
		}

		if($this->form_validation->run() == FALSE)
		{
			// $data['karyawan'] = $this->m_login->get_karyawan_not_user();
			$data['aksi'] = 'create';
			$data['ket'] = 'Tambah Data';
			$this->load->view('v_a_tambah_user', $data);
		}
		else
		{
			unset($data['user_repassword']);
			$data = array(
				'user_name' => $post['user_name'],
				'user_nama' => $post['user_nama'],
				'user_password' => $post['user_password'],
				'user_level' => $post['user_level'],
				'user_id' => $user_id
			);
			if(!empty($data))$result = $this->a->insert($data);


			if($result)
			{
				$this->session->set_flashdata('sukses','Berhasil menambah data user !');
			}
			else
			{
				$this->session->set_flashdata('gagal','Gagal menambah user !');
			}
				redirect(base_url('C_master_user/add'));
		}
	}

	public function update($id){
		$data['title'] = 'Edit User';
		$data['aksi'] = 'update_pwd';
		$data['ket'] = 'Edit Password';
		$data['detail'] = $this->a->tampildataDetail($id);
		// $this->load->view('v-ganti', $data);
		$data['content'] = 'v_a_tambah_user';
		$this->load->view('v_a_template', $data);

	}

	public function update_pwd(){
		$post = $this->input->post();
		$user_id = $post['user_id'];
		// $user_nama = $post['user_nama'];
		// $user_name = $post['user_name'];
		$user_password = $post['user_password'];
		$user_level = $post['user_level'];

		$user_password = $post['user_password'];
		$pwd_konfirmasi = $post['user_repassword'];

		if($user_password != $pwd_konfirmasi) {
			$this->session->set_flashdata('gagal','Password konfirmasi tidak sama !');
			redirect(base_url('C_master_user/update'));
		}
		else{
			$pwd_lama=$post['pwd_lama'];
			$pwd_baru=$post['user_password'];

			if($pwd_lama == $pwd_baru)
			{
				$this->session->set_flashdata('gagal','Password sama dengan password lama !');
				redirect(base_url('C_master_user/update'));				
			}
			// if(empty($post['password']))unset($post['password']);
			else{
				$data = array(
					'user_password' => $post['user_password']
				);
				$result = $this->a->update_pwd($post['user_id'],$data);
			}
		}

		$data = array(
			'user_id' => $post['user_id'],
			'user_level' => $post['user_level']
		);

		$config['upload_path']          = './assets/upload/user/';
		$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('user_foto')){
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
			// return;
			// redirect(base_url('C_master_user/detail'));
		}else{
			/*Ketika Sukses Upload mengambil nama file*/
			$user_foto = $this->upload->data('file_name');
			$data['user_foto'] = $user_foto;
		}

		$hasil = $this->a->update($user_id,$data);

		if ($hasil){
			$this->session->set_flashdata('sukses','Berhasil Ubah Data !');
			//$this->session->set_userdata('user');
		}
		else{
			$this->session->set_flashdata('gagal','Gagal ubah password !');
			//redirect(base_url('C_master_user/detail'));
		}
			redirect(base_url('C_master_user/detail'));
	}

	public function update_pwd_profile($id){
		$data['title'] = 'Edit User';
		$data['ket'] = 'Edit Password';
		$data['detail'] = $this->a->tampildataDetail($id);
		// $this->load->view('v-ganti', $data);
		$data['content'] = 'v_a_tambah_user';
		$data['aksi'] = 'aksi_update_pwd_profile';
		$this->load->view('v_a_template', $data);

	}

	public function aksi_update_pwd_profile(){
		$post = $this->input->post();
		$user_id = $post['user_id'];
		// $user_nama = $post['user_nama'];
		// $user_name = $post['user_name'];
		$user_password = $post['user_password'];
		$user_level = $post['user_level'];

		$user_password = $post['user_password'];
		$pwd_konfirmasi = $post['user_repassword'];

		// if ($user_name == $user_name_baru) {
		// 	$this->session->set_flashdata('gagal','Username sama dengan yang lama !');
		// 	redirect(base_url('C_master_user/update_pwd'));
		// }
		// else{
		// 	$data = array(
		// 		'user_name' => $post['user_name_baru']
		// 	);
		// 	$hasil = $this->m_login->update_pwd($post['user_id'],$data);
		// 	$this->session->set_flashdata('sukses','Username Berhasil diperbarui');
		// 	// print_r($post['id_user']);exit();
		// }


		if($user_password != $pwd_konfirmasi) {
			$this->session->set_flashdata('gagal','Password konfirmasi tidak sama !');
			redirect(base_url('C_admin/update_pwd_profile'));
		}
		else{
			$pwd_lama=$post['pwd_lama'];
			$pwd_baru=$post['user_password'];

			if($pwd_lama == $pwd_baru)
			{
				$this->session->set_flashdata('gagal','Password sama dengan password lama !');
				redirect(base_url('C_master_user/update_pwd_profile'));				
			}
			// if(empty($post['password']))unset($post['password']);
			else{
				$data = array(
					'user_password' => $post['user_password']
				);
				$result = $this->a->update($post['user_id'],$data);
			}
		}

		$data = array(
			'user_id' => $post['user_id'],
			'user_level' => $post['user_level']
		);

		$config['upload_path']          = './assets/upload/user/';
		$config['allowed_types']        = 'JPEG|JPG|PNG|jpeg|jpg|png';

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('user_foto')){
			$error = array('error' => $this->upload->display_errors());

		}else{
			/*Ketika Sukses Upload mengambil nama file*/
			$user_foto = $this->upload->data('file_name');
			$data['user_foto'] = $user_foto;
		}

		$result = $this->a->update($user_id,$data);

		if($result){
			$bebas = $this->a->get_user($post['user_id']);
			$this->session->set_flashdata('sukses','Berhasil Ubah Data !');
			$this->session->set_userdata('user',$bebas);
			//redirect(base_url('C_admin/index'));
		}
		else{
			$this->session->set_flashdata('gagal','Gagal ubah password !');
		}
			redirect(base_url('C_admin/index'));
	}

	public function delete($id){
		// $data = $this->a->delete_detail($id);
		$data = $this->a->delete($id);
		redirect(base_url('C_master_user/detail'));
	}
}