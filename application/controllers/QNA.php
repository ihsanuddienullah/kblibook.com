<?php 
 
class QNA extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
	}
	function index(){
		
		// $this->load->view('v_header');
		$data['kategori'] = $this->m_kategori->viewjoin();
		$this->load->view('v_pilihan',$data);
		// $this->load->view('v_halaman',$data);
		
	}
	function pilihan1(){
		$this->load->view('v_halaman');
		
	}
	function pilihan2(){
		// $a = $_POST['a'];
		$data['kelompok'] = $this->m_kategori->viewKel();
		$this->load->view('v_jawabpekerjaan',$data);
		
	}
	
	function pilihpekerjaan(){
		$output = '';
		$query = $this->input->post('query');
		

		
			$data = $this->m_kategori->fetch_data($query);
		
		
		// $data = $this->m_kategori->viewKel();
		// $data = $this->m_kategori->viewK();
		

		// if($data->num_rows() > 0)
		// {
		// foreach($data->result() as $row)
		// {
		// $output .= '
		// 	<tr>
		// 	<td>'.$row->kode_kategori.'</td>
		// 	<td>'.$row->kode_kategori.'</td>
		// 	<td>'.$row->judul_kategori.'</td>
		// 	<td>'.$row->deskripsi_kategori.'</td>
			
			
		// 	</tr>
		// ';
		// }
		// }
		// else
		// {
		// $output .= '<tr>
		// 	<td colspan="5">No Data Found</td>
		// 	</tr>';
		// }
		
		// echo $output;
		echo json_encode($data);
	}
	function jawabkategori(){
		
		$data['kategori'] = $this->m_kategori->viewjoin();
		$this->load->view('v_jawabKategori',$data);
	}
	function jawabgolPok(){
		$jumlah = $this->input->post('check_list');
		if(empty($jumlah)){
			$a = "false";
		}else{
			$a = $jumlah;
		}
		$cek = $a;
		if ("false" == $cek){
			$data['kategori'] = $this->m_kategori->viewjoin();
			$this->load->view('v_jawabKategori',$data);
		}else{
			$where = "";
			foreach ($cek as $objek){
					if($where == null){
						$where = "kode_kategori='$objek'";
					}else{
						$where = $where." OR kode_kategori='$objek'";
					}
					
				}
			$data['golPokok'] = $this->m_kategori->cariGolpok($where);
			$this->load->view('v_header');	

			$this->load->view('v_jawabGolPokok', $data);
		}
	}
	function jawabGol(){
		$jumlah = $this->input->post('check_list');
		if(empty($jumlah)){
			$a = "false";
		}else{
			$a = $jumlah;
		}
		$cek = $a;
		if ("false" == $cek){
			$data['kategori'] = $this->m_kategori->viewjoin();
			$this->load->view('v_jawabKategori',$data);
		}else{
			$where = "";
			foreach ($cek as $objek){
					if($where == null){
						$where = "kode_golonganpokok='$objek'";
					}else{
						$where = $where." OR kode_golonganpokok='$objek'";
					}
				}
			$data['gol'] = $this->m_kategori->cariGol($where);
			$this->load->view('v_header');
			$this->load->view('v_jawabGol', $data);
		}
	}
	function jawabSubGol(){
		$jumlah = $this->input->post('check_list');
		if(empty($jumlah)){
			$a = "false";
		}else{
			$a = $jumlah;
		}
		$cek = $a;
		if ("false" == $cek){
			$data['kategori'] = $this->m_kategori->viewjoin();
			$this->load->view('v_jawabKategori',$data);
		}else{
			$where = "";
			foreach ($cek as $objek){
					if($where == null){
						$where = "kode_golongan='$objek'";
					}else{
						$where = $where." OR kode_golongan='$objek'";
					}	
				}
			$data['subGol'] = $this->m_kategori->cariSubgol($where);
			$this->load->view('v_header');
			$this->load->view('v_jawabSubGol', $data);
		}
	}
	function jawabKel(){
		$jumlah = $this->input->post('check_list');
		if(empty($jumlah)){
			$a = "false";
		}else{
			$a = $jumlah;
		}
		$cek = $a;
		if ("false" == $cek){
			$data['kategori'] = $this->m_kategori->viewjoin();
			$this->load->view('v_jawabKategori',$data);
		}else{
			$where = "";
			foreach ($cek as $objek){
					if($where == null){
						$where = "kode_subgolongan='$objek'";
					}else{
						$where = $where." OR kode_subgolongan='$objek'";
					}
				}
			$data['kel'] = $this->m_kategori->cariKel($where);
			$this->load->view('v_header');
			$this->load->view('v_jawabKel', $data);
		}
	}
	function kesimpulan(){
		$jumlah = $this->input->post('check_list');
		if(empty($jumlah)){
			$a = "false";
		}else{
			$a = $jumlah;
		}
		$cek = $a;
		if ("false" == $cek){
			$data['kategori'] = $this->m_kategori->viewjoin();
			$this->load->view('v_jawabKategori',$data);
		}else{
			$where = "";
			foreach ($cek as $objek){
					if($where == null){
						$where = "kode_kelompok='$objek'";
					}else{
						$where = $where." OR kode_kelompok='$objek'";
					}
				}
			$data['kel'] = $this->m_kategori->cariKel($where);
			$this->load->view('v_header');
			$this->load->view('v_kesimpulan', $data);
		}
	}
}