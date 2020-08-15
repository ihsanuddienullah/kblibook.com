<?php 
 
class M_pesan extends CI_Model{	
	// Fungsi untuk menampilkan semua data siswa
  public function save($db,$data){
    $this->db->insert($db, $data);
  }
  public function view(){
    return $this->db->get('saran')->result();
  }
  
  public function delete($kode_saran){
    $this->db->where('kode_saran', $kode_saran);
    $this->db->delete('saran'); // Untuk mengeksekusi perintah delete data
  }
}