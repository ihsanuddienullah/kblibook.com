<?php 
 
class Saran extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('index.php/login'));
		}
		$this->load->model('m_pesan');
	}
 
	function index(){
		$Csaran['saran1'] = 0;
		$data['saran'] = $this->m_pesan->view();
		$this->load->view('v_admin/v_Saran',$data+$Csaran);
    }
    public function hapus(){
		$Csaran['saran1'] = 1;
		$delete_id=$this->input->post('delete_id');
		$this->m_pesan->delete($delete_id); 
		$data['saran'] = $this->m_pesan->view();
		$this->load->view('v_admin/v_Saran',$data+$Csaran);
	}
}