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

		
		public function get_negara()
		{
			$this->load->model('admin/event_model');
			$result = $this->event_model->get_neg();
			$rows = $result->result_array();

			$jTableResult = array(); 
			$jTableResult['Result'] = "OK"; 
			$jTableResult['Options'] = $rows; 
			print json_encode($jTableResult);
		}

		public function get_kota()
		{
			$this->load->model('admin/event_model');
			$result = $this->event_model->get_kota();
			$rows = $result->result_array();

			$jTableResult = array(); 
			$jTableResult['Result'] = "OK"; 
			$jTableResult['Options'] = $rows; 
			print json_encode($jTableResult);
		}

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
			$this->load->model('admin/event_model');
			$data['negara'] = $this->event_model->getAllNegara();
			$data['kota'] = $this->event_model->getAllKota();
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/tambah_event_view',$data);
			$this->load->view('admin/footer');
		}

		public function createnew(){
	    	$fileName = $_FILES['userfile'];

			$config['upload_path']    = './assets/gambar/event/';
			$config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['overwrite']       = TRUE;
            $config['max_size']        = '1000000';  // Can be set to particular file size
            $config['max_height']      = '768';
            $config['max_width']       = '1024'; 

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			$data_upload_files = $this->upload->data();

	        $image = $data_upload_files['full_path'];	

	        
	        $gab = $image.$fileName['name'];
	        
			// $image = 'image.jpg'; 
		    // $directory = '/path/to/image'; 
		    // $image_location = $directory . "/" . $image; 
		    			
			if(! $this->upload->do_upload('userfile')){
				$upload_error = array('error' => $this->upload->display_errors());
				
			}
			if( $this->upload->do_upload('userfile')){
				$flag_upload = 1;
			}
			
			$this->load->model('admin/event_model');
			// $this->load->library('upload', $config);
			$nama = $_POST['nama'];
		    $waktu = $_POST['reservationtime'];
		    $lat = $_POST['lat'];
		    $lang = $_POST['lang'];
		    // $animals = array('--Select Animal--', 'Cat', 'Dog', 'Cow');
			$kota = $_POST['kota'];
			$negara = $_POST['negara'];
			$tipe = $_POST['tipe'];
			$link = $_POST['link'];
			$data = array(); 
			$data = (explode(" ",$waktu));
			// print_r((explode(" ",$waktu)));
			// Array ( [0] => 03/05/2016 [1] => 00:00 [2] => [3] => - [4] => 03/05/2016 [5] => 23:59 [6] => )
			
			$tanggal_awal = $data[0];
			$tanggal_akhir = $data[4];
			$jam_awal = $data[1];
			$jam_akhir = $data[5];
			
			
			$masukkan_event = $this->event_model->masuk_event($nama,$lat,$lang,$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link,$gab);
			if($masukkan_event == 1 && $flag_upload == 1){
				redirect('admin/event');
			}	

		}
	}
 ?>