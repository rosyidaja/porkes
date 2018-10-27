<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_a_artikel_detail extends CI_Controller {

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
		$data['content'] = 'v_a_artikel_detail';
        $this->load->view('v_a_template',$data);
	}

	public function delete($id){
		// $data = $this->a->delete_detail($id);
		$data = $this->a->delete($id);
		redirect(base_url('C_a_artikel_detail/index'));
	}

	public function update($id){
		$data['aksi'] = 'aksi_update';
		$data['ke'] = 'Update Data';
		$data['tabel'] = $this->a->tampildata();
		$data['detail'] = $this->a->tampildataDetail($id);
		// $this->load->view('v-tambah', $data);

		$data['content'] = 'v-tambah';
		$this->load->view('v-header', $data);
	}

	public function aksi_update(){
		$post = $this->input->post();
		$id_karyawan = $post['id_karyawan'];
		
		$nik = $post['nik'];
		$nama_lengkap = $post['nama_lengkap'];
		$nama_panggilan = $post['nama_panggilan'];
		$alamat = $post['alamat'];
		$no_telp = $post['no_telp'];
		$jenis_kelamin = $post['jenis_kelamin'];
		$tempat_lahir = $post['tempat_lahir'];
		$tanggal_lahir = $post['tanggal_lahir'];

		$data = array(
			'nik' => $nik,
			'nama_lengkap' => $nama_lengkap,
			'nama_panggilan' => $nama_panggilan,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir
		);

		$hasil = $this->a->update($id_karyawan,$data);

		// $id_karyawan_detail = $post['id_karyawan_detail'];

		$no_ktp = $post['no_ktp'];
		$email = $post['email'];
		$gol_darah = $post['gol_darah'];
		$tanggal_masuk = $post['tanggal_masuk'];

		$data1 = array(
			'no_ktp' => $no_ktp,
			'email' => $email,
			'gol_darah' => $gol_darah,
			'tanggal_masuk' => $tanggal_masuk
		);

		$hasil1 = $this->a->update_detail($id_karyawan,$data1);		

		redirect(base_url('c_m_karyawan/index'));
	}
}
