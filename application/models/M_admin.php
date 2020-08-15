<?php 
 
class M_admin extends CI_Model{	
	// Fungsi untuk menampilkan semua data siswa
    public function view(){
        return $this->db->get('user')->result();
      }
      
      // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
    //   public function view_by($nis){
    //     $this->db->where('nis', $nis);
    //     return $this->db->get('siswa')->row();
    //   }
    // Fungsi untuk melakukan simpan data ke tabel siswa
    public function save($username,$password,$nama,$level,$blokir){
        
        // $this->db->insert('user', $data); // Untuk mengeksekusi perintah insert data
        $this->db->query("INSERT INTO user VALUES('','$username','$password','$nama','$level','$blokir')");
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('user'); // Untuk mengeksekusi perintah delete data
      }
      public function edit($id,$data){
        $this->db->where('id', $id);
        $this->db->update('user', $data); // Untuk mengeksekusi perintah update data
      }
      
      public function ubah($where){
        return $this->db->get_where('user',$where)->result();
      }
      public function Ckategori(){
        $this->db->select('kode_kategori');
        $query = $this->db->get('kategori');
        return count($query->result()); 
      }
      public function Cgolpokok(){
        $this->db->select('kode_golonganpokok');
        $query = $this->db->get('golonganpokok');
        return count($query->result()); 
      }
      public function Cgolongan(){
        $this->db->select('kode_golongan');
        $query = $this->db->get('golongan');
        return count($query->result()); 
      }
      public function Csubgolongan(){
        $this->db->select('kode_subgolongan');
        $query = $this->db->get('subgolongan');
        return count($query->result()); 
      }
      public function Ckelompok(){
        $this->db->select('kode_kelompok');
        $query = $this->db->get('kelompok');
        return count($query->result()); 
      }
      public function Csaran(){
        $this->db->select('kode_saran');
        $query = $this->db->get('saran');
        return count($query->result()); 
      }
}