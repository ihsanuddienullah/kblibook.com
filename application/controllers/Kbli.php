<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kbli extends CI_Controller {
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
	function __construct(){
		parent::__construct();
	
		$this->load->model('m_pesan'); // Load admin ke controller ini
	}
	public function index()
	{
		$Csaran['saran1'] = 0;
		$this->load->view('index',$Csaran);
	}
	function tambahpesan(){
		// $kode_pesan=$this->input->post('kode_pesan');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$subjek=$this->input->post('subjek');
		$pesan=$this->input->post('pesan');
		$data = array(

			'nama' => $nama,
			'email' => $email,
			'subjek' => $subjek,
			'pesan' => $pesan
		);
		$id = $this->m_pesan->save('saran',$data); // Panggil fungsi save() yang ada di SiswaModel.php
		$Csaran['saran1'] = 1;
		$this->load->view('index',$Csaran);
	}
	function download()
	{
		force_download('assets/img/kbli-2017.pdf',NULL);
	}
}
