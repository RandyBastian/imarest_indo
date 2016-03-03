<?php 
	/**
	* 
	*/
	class Event extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	    	$this->load->library('form_validation');
		}

		public function index(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/event_view');
			$this->load->view('admin/footer');
		}

		// public function get_negara()
		// {
		// 	$this->load->model('admin/event_model');
		// 	$result = $this->event_model->get_neg();
		// 	$rows = $result->result_array();

		// 	$jTableResult = array(); 
		// 	$jTableResult['Result'] = "OK"; 
		// 	$jTableResult['Options'] = $rows; 
		// 	print json_encode($jTableResult);
		// }

		// public function get_kota()
		// {
		// 	$this->load->model('admin/event_model');
		// 	$result = $this->event_model->get_kota();
		// 	$rows = $result->result_array();

		// 	$jTableResult = array(); 
		// 	$jTableResult['Result'] = "OK"; 
		// 	$jTableResult['Options'] = $rows; 
		// 	print json_encode($jTableResult);
		// }

		public function listevent(){
			$this->load->model('admin/event_model');
			$jtStartIndex = $this->input->get('jtStartIndex'); 
			$jtPageSize = $this->input->get('jtPageSize'); 
			$jtSorting = $this->input->get('jtSorting');

			$all_event = $this->event_model->get_all_event();
			$result = $this->event_model->get_all_paging_sorting_event($jtStartIndex,$jtPageSize,$jtSorting);
			

			$rows = $result->result_array(); 
			$recordCount = $all_event->num_rows(); 
			
			$jTableResult = array(); 
			$jTableResult['Result'] = "OK"; 
			$jTableResult['TotalRecordCount'] = $recordCount; 
			$jTableResult['Records'] = $rows; 
			
			print json_encode($jTableResult);
			
		}

		public function tambah(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/tambah_event_view');
			$this->load->view('admin/footer');
		}
	}
 ?>