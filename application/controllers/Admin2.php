<?php 
 
class Admin2 extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url('index.php/login'));
        }
        $this->load->model('m_admin'); 
      }
      
	function index(){
        $Cadmin['admin'] = "";
        $data['user'] = $this->m_admin->view();
		    $this->load->view('v_admin/v_tambahA', $data+$Cadmin);
    }
    function tambah(){
            $Cadmin['admin'] = "tambahkan";
            $username=$this->input->post('username');
            $password=base64_encode($this->input->post('password'));
            $nama=$this->input->post('nama');
            $level=$this->input->post('level');
            $blokir=1;
            $this->m_admin->save($username,$password,$nama,$level,$blokir);

            $data['user'] = $this->m_admin->view();
		        $this->load->view('v_admin/v_tambahA',$data+$Cadmin);
      }
    public function hapus(){
      $Cadmin['admin'] = "hapus";
      $delete_id=$this->input->post('delete_id');
      $this->m_admin->delete($delete_id); 
      $data['user'] = $this->m_admin->view();
		  $this->load->view('v_admin/v_tambahA',$data+$Cadmin);
    }
    function edit($id){
      
      $where = array('id' => $id);
      $data['user'] = $this->m_admin->ubah($where); 
      
		  $this->load->view('v_admin/v_editA', $data);
    }
    public function ubah(){
        $Cadmin['admin'] = "ubah";
        $id=$this->input->post('id');
          $data = array(
            "username" => $this->input->post('username'),
            "password" => base64_encode($this->input->post('password')),
            "nama" => $this->input->post('nama'),
            "blokir" => 1,
            "level" => $this->input->post('level')
          );
          $this->m_admin->edit($id,$data); 
          $data['user'] = $this->m_admin->view();
		      $this->load->view('v_admin/v_tambahA',$data+$Cadmin);
    }
    public function blok($id){
        $data = array(
          "blokir" => 1
        );
        $this->m_admin->edit($id,$data); 
        redirect(base_url('index.php/Admin2'));
    }
    public function blok2($id){
      $data = array(
        "blokir" => 0
      );
      $this->m_admin->edit($id,$data); 
      redirect(base_url('index.php/Admin2'));
}
}