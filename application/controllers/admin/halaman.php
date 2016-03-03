<?php 
	/**
	* 
	*/
	class Halaman extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		public function index(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/halaman_view');
			$this->load->view('admin/footer');
		}

		public function listhalaman(){
			$this->load->model('admin/halaman_model');
			$jtStartIndex = $this->input->get('jtStartIndex'); 
			$jtPageSize = $this->input->get('jtPageSize'); 
			$jtSorting = $this->input->get('jtSorting');

			$all_halaman = $this->halaman_model->get_all_halaman();
			$result = $this->halaman_model->get_all_paging_sorting_halaman($jtStartIndex,$jtPageSize,$jtSorting);
			

			$rows = $result->result_array(); 
			$recordCount = $all_halaman->num_rows(); 
			
			$jTableResult = array(); 
			$jTableResult['Result'] = "OK"; 
			$jTableResult['TotalRecordCount'] = $recordCount; 
			$jTableResult['Records'] = $rows; 
			
			print json_encode($jTableResult);
		}

		public function createhalaman(){
			$this->load->model('admin/halaman_model');
			$id = $this->input->post('no');
			$judul = $this->input->post('judul_halaman');
			$isi = $this->input->post('isi_halaman');
			
			$result = $this->halaman_model->post_create_halaman($judul,$isi);
			$result = $this->halaman_model->get_create_halaman();
			$rows = $result->result_array();


			$jTableResult = array();
			$jTableResult['Result'] = "OK";
			$jTableResult['Record'] = $rows;
			print json_encode($jTableResult);
		}
	}
 ?>