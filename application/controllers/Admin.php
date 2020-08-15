<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('index.php/login'));
		}
		$this->load->model('m_admin');
	}
 
	function index(){
		
		$where = array('username' => $this->session->userdata("nama"));
		$data['user'] = $this->m_admin->ubah($where);
		$Ckategori['kategori'] = $this->m_admin->Ckategori();
		$Cgolpokok['golpokok'] = $this->m_admin->Cgolpokok();
		$Cgolongan['golongan'] = $this->m_admin->Cgolongan();
		$Csubgolongan['subgolongan'] = $this->m_admin->Csubgolongan();
		$Ckelompok['kelompok'] = $this->m_admin->Ckelompok();
		$Csaran['saran'] = $this->m_admin->Csaran();
		$this->load->view('v_admin/v_Aindex',$data+$Ckategori+$Cgolpokok+$Cgolongan+$Csubgolongan+$Ckelompok+$Csaran);
	}
}