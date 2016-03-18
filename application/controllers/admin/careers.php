<?php 
	/**
	* 
	*/
	class Careers extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		public function index(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/careers_view');
			$this->load->view('admin/footer');
		}

		public function listcareers(){
			$this->load->model('admin/careers_model');
			$jtStartIndex = $this->input->get('jtStartIndex'); 
			$jtPageSize = $this->input->get('jtPageSize'); 
			$jtSorting = $this->input->get('jtSorting');

			$all_careers = $this->careers_model->get_all_careers();
			$result = $this->careers_model->get_all_paging_sorting_careers($jtStartIndex,$jtPageSize,$jtSorting);
			

			$rows = $result->result_array(); 
			$recordCount = $all_careers->num_rows(); 
			
			$jTableResult = array(); 
			$jTableResult['Result'] = "OK"; 
			$jTableResult['TotalRecordCount'] = $recordCount; 
			$jTableResult['Records'] = $rows; 
			
			print json_encode($jTableResult);
		}

		public function createcareers(){
			$this->load->model('admin/careers_model');
			$id = $this->input->post('no');
			$judul = $this->input->post('judul_careers');
			$isi = $this->input->post('isi_careers');
			
			$result = $this->careers_model->post_create_careers($judul,$isi);
			$result = $this->careers_model->get_create_careers();
			$rows = $result->result_array();


			$jTableResult = array();
			$jTableResult['Result'] = "OK";
			$jTableResult['Record'] = $rows;
			print json_encode($jTableResult);
		}

		public function updatecareers(){
			$this->load->model('admin/careers_model');
			$id = $this->input->post('id_careers');
			$judul = $this->input->post('judul_careers');
			$isi = $this->input->post('isi_careers');

			$result = $this->careers_model->post_update_careers($id,$judul,$isi);

			$jTableResult = array();
			$jTableResult['Result'] = "OK";
			print json_encode($jTableResult);
		}

		public function hapuscareers(){
			$this->load->model('admin/careers_model');
			$id = $this->input->post('id_careers');

			$result = $this->careers_model->post_delete_careers($id);

			$jTableResult = array();
			$jTableResult['Result'] = "OK";
			print json_encode($jTableResult);
		}
	}
 ?>