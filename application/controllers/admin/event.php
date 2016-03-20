<?php 
	/**
	* 
	*/
	class Event extends CI_Controller
	{
		
		
		private $data = array(
		    'dir' => array(
		        'original' => 'assets/gambar/galeri/',
		        'thumb' => 'assets/gambar/thumbs/'
		    ),
		    'total' => 0,
		    'images' => array(),
		    'error' => '',
		    'id' => '',
		    'letak' => ''
		);

		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	    	$this->load->library('form_validation');
	    	$this->load->helper('date');
	    	$this->is_logged_in();
		}
		public function is_logged_in()
	    {
	        $user = $this->session->userdata('username');
	        if (!isset($user)) {
				redirect(base_url());
			}
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

		public function indextraining(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/training_view');
			$this->load->view('admin/footer');
		}

		public function listtraining(){
			$this->load->model('admin/event_model');
			$jtStartIndex = $this->input->get('jtStartIndex'); 
			$jtPageSize = $this->input->get('jtPageSize'); 
			$jtSorting = $this->input->get('jtSorting');

			$all_event = $this->event_model->get_all_training();
			$result = $this->event_model->get_all_paging_sorting_training($jtStartIndex,$jtPageSize,$jtSorting);
			

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
			// $this->load->library('leaflet');
			// $config = array(
			//     'center'         => '-0.959, 100.39716', // Center of the map
			//     'zoom'           => 12, // Map zoom
			//     );
			// $this->leaflet->initialize($config);

			// $marker = array(
			//     'latlng'        =>'-0.959, 100.39716', // Marker Location
			//     'popupContent'  => 'Hi, iam a popup!!', // Popup Content
			//     );
			// $this->leaflet->add_marker($marker);

			// $this->data['map'] =  $this->leaflet->create_map();
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/tambah_event_view',$data);
			$this->load->view('admin/footer');
		}

		public function tambahtraining(){
			$this->load->model('admin/event_model');
			$data['negara'] = $this->event_model->getAllNegara();
			$data['kota'] = $this->event_model->getAllKota();
			// $this->load->library('leaflet');
			// $config = array(
			//     'center'         => '-0.959, 100.39716', // Center of the map
			//     'zoom'           => 12, // Map zoom
			//     );
			// $this->leaflet->initialize($config);

			// $marker = array(
			//     'latlng'        =>'-0.959, 100.39716', // Marker Location
			//     'popupContent'  => 'Hi, iam a popup!!', // Popup Content
			//     );
			// $this->leaflet->add_marker($marker);

			// $this->data['map'] =  $this->leaflet->create_map();
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/tambah_training_view',$data);
			$this->load->view('admin/footer');
		}

		public function createnew(){
	    	
	    	$this->load->helper('date');

			$config['upload_path']    = './assets/gambar/event/';
			$config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['overwrite']       = TRUE;
            $config['max_size']        = '1000000';  // Can be set to particular file size
            $config['max_height']      = '768';
            $config['max_width']       = '1024';
            $new_name = now().$_FILES["userfile"]['name'];
			$config['file_name'] = $new_name; 

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			$fileName = $_FILES['userfile'];
			

			// rename
			// move_uploaded_file


			$data_upload_files = $this->upload->data();

	        $image = $data_upload_files['full_path'];	

	        
	        $gab = $image;
	        
			// $image = 'image.jpg'; 
		    // $directory = '/path/to/image'; 
		    // $image_location = $directory . "/" . $image; 
		    			
			if(! $this->upload->do_upload('userfile')){
				$upload_error = array('error' => $this->upload->display_errors());
				echo "<script>
					alert('Gambar yang anda upload tidak sesuai dengan persyaratan, silahkan dilakukan pengecekan ukuran gambar');
					window.location.href='" . base_url() . "admin/Event/tambah';
					</script>";
				
			}
			if( $this->upload->do_upload('userfile')){
				$flag_upload = 1;
				$pos=$_POST['latlang'];
				$pis = preg_replace("/[^0-9,.,-]/", "",$pos);
				$pie = explode(",", $pis);
				
				$this->load->model('admin/event_model');
				// $this->load->library('upload', $config);
				$nama = $_POST['nama'];
			    $waktu = $_POST['reservationtime'];
			    // $lat = $_POST['lat'];
			    // $lang = $_POST['lang'];
			    // // $animals = array('--Select Animal--', 'Cat', 'Dog', 'Cow');
				$kota = $_POST['kota'];
				$negara = $_POST['negara'];
				$tipe = $_POST['tipe'];
				$link = $_POST['link'];
				$detail = $_POST['detail'];
				
				$data = array(); 
				$data = (explode(" ",$waktu));
				// print_r((explode(" ",$waktu)));
				// Array ( [0] => 03/05/2016 [1] => 00:00 [2] => [3] => - [4] => 03/05/2016 [5] => 23:59 [6] => )
				
				$tanggal_awal = $data[0];
				$tanggal_akhir = $data[4];
				$jam_awal = $data[1];
				$jam_akhir = $data[5];
				
				
				$masukkan_event = $this->event_model->masuk_event($nama,$pie[0],$pie[1],$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link,$gab,$detail);
				if($masukkan_event == 1 && $flag_upload == 1 && $tipe == 'Training'){
					redirect('admin/Event/indextraining');
				}
				else if($masukkan_event == 1 && $flag_upload == 1){
					redirect('admin/Event');
				}	
			}
				

		}

		public function updateviewevent($id=NULL){
			$this->load->model('admin/event_model');
			$get_data_news = $this->event_model->get_data_event($id);
			$data = $get_data_news->row_array();

			$data['baru'] = $data['tanggal_mulai_event']." ".$data['jam_mulai_event']."  - ".$data['tanggal_akhir_event']." ".$data['jam_akhir_event'];

			$nama = explode("/", $data['pic_event']);
			// echo $data['baru'];
			// print_r($data['baru']);
			$data['nama'] = $nama[4];
			$data['negara'] = $this->event_model->getAllNegara();
			$data['kota'] = $this->event_model->getAllKota();


			$this->tampilanupdate($data);
		}

		public function tampilanupdate($data){
			// $this->load->model('admin/event_model');
			// $data['negara'] = $this->event_model->getAllNegara();
			// $data['kota'] = $this->event_model->getAllKota();
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/update_event_view', $data);
			$this->load->view('admin/footer');
		}

		public function updateevent(){

			if($_FILES['userfile']['name'] == NULL){
				
				if($_POST['latlang'] != NULL){
					$pos=$_POST['latlang'];
					$pis = preg_replace("/[^0-9,.,-]/", "",$pos);
					$pie = explode(",", $pis);
				}
				else{
					$pie =  array();
					$pie[0] = $_POST['lat'];
					$pie[1] = $_POST['lang'];
				}

				$this->load->model('admin/event_model');
				// $this->load->library('upload', $config);
				$nama = $_POST['nama'];
			    $waktu = $_POST['reservationtime'];
			   
				$kota = $_POST['kota'];
				$negara = $_POST['negara'];
				$tipe = $_POST['tipe'];
				$link = $_POST['link'];
				$id = $_POST['id'];
				$detail = $_POST['detail'];
				
				$data = array(); 
				$data = (explode(" ",$waktu));
				
				$tanggal_awal = $data[0];
				$tanggal_akhir = $data[4];
				$jam_awal = $data[1];
				$jam_akhir = $data[5];

				// print_r($pie);
				
				$masukkan_event = $this->event_model->update_without_event($id,$nama,$pie[0],$pie[1],$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link,$detail);
				if($masukkan_event == 1){
					redirect('admin/event');
				}	
			}
			else{
				$this->load->helper('date');
				$id = $_POST['id'];
				$config['upload_path']    = './assets/gambar/event/';
				$config['allowed_types']  = 'gif|jpg|png|jpeg';
	            $config['overwrite']       = TRUE;
	            $config['max_size']        = '1000000';  // Can be set to particular file size
	            $config['max_height']      = '768';
	            $config['max_width']       = '1024';
	             $new_name 				   = now().$_FILES["userfile"]['name'];;
			$config['file_name'] 	   = $new_name;  

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				$fileName = $_FILES['userfile'];
				

				$data_upload_files = $this->upload->data();

		        $image = $data_upload_files['full_path'];	

		        
		        $gab = $image;
		        
				// $image = 'image.jpg'; 
			    // $directory = '/path/to/image'; 
			    // $image_location = $directory . "/" . $image; 
			    			
				if(! $this->upload->do_upload('userfile')){
					$upload_error = array('error' => $this->upload->display_errors());
					// echo $config['upload_path'];
					echo "<script>

					alert('Gambar yang anda upload tidak sesuai dengan persyaratan, silahkan dilakukan pengecekan ukuran gambar');
					window.location.href='" . base_url() . "admin/Event/updateviewevent/".$id."';
					</script>";
					
				}
				if( $this->upload->do_upload('userfile')){
					$flag_upload = 1;
					if($_POST['latlang'] != NULL){
						$pos=$_POST['latlang'];
						$pis = preg_replace("/[^0-9,.,-]/", "",$pos);
						$pie = explode(",", $pis);
					}
					else{
						$pie =  array();
						$pie[0] = $_POST['lat'];
						$pie[1] = $_POST['lang'];
					}
					
					$this->load->model('admin/event_model');
					// $this->load->library('upload', $config);
					$nama = $_POST['nama'];
				    $waktu = $_POST['reservationtime'];
				    // $lat = $_POST['lat'];
				    // $lang = $_POST['lang'];
				    // // $animals = array('--Select Animal--', 'Cat', 'Dog', 'Cow');
					$kota = $_POST['kota'];
					$negara = $_POST['negara'];
					$tipe = $_POST['tipe'];
					$link = $_POST['link'];
					$detail = $_POST['detail'];
					
					
					$data = array(); 
					$data = (explode(" ",$waktu));
					// print_r((explode(" ",$waktu)));
					// Array ( [0] => 03/05/2016 [1] => 00:00 [2] => [3] => - [4] => 03/05/2016 [5] => 23:59 [6] => )
					
					$tanggal_awal = $data[0];
					$tanggal_akhir = $data[4];
					$jam_awal = $data[1];
					$jam_akhir = $data[5];
					
					
					$masukkan_event = $this->event_model->update_with_event($id,$nama,$pie[0],$pie[1],$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link,$gab,$detail);
					if($masukkan_event == 1 && $flag_upload == 1){
						redirect('admin/event');
					}	
				}
			}
		}

		 public function hapusevent(){
		    $this->load->model('admin/event_model');
		    $id = $this->input->post('id_event');
		    $get_data_news = $this->event_model->get_data_event($id);
			$data = $get_data_news->row_array();

			$string = str_replace('./a', 'a', $data['pic_event']);
			 // ./assets/gambar/event/

			unlink($string);
		   
		    $result = $this->event_model->post_delete_event($id);

		    $jTableResult = array();
		    $jTableResult['Result'] = "OK";
		    print json_encode($jTableResult);
		}


	}
 ?>