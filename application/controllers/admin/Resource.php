<?php 
	/**
	* 
	*/
	class Resource extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	    	$this->load->library('form_validation');
		}

		public function index(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/resource_view');
			$this->load->view('admin/footer');
		}
		public function tambah(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/tambah_resource_view');
			$this->load->view('admin/footer');
		}

		public function createnew(){
	    	$fileName = $_FILES['userfile'];

			$config['upload_path']    = './assets/gambar/resource/';
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
				print_r($upload_error);
				
			}
			if( $this->upload->do_upload('userfile')){
				$flag_upload = 1;
			}
			
			$this->load->model('admin/resource_model');
			// $this->load->library('upload', $config);
			$judul = $_POST['judul'];
		    $isi = $_POST['isi'];
		    
		    		
			
			$masukkan_resource = $this->resource_model->tambah_resource($judul,$isi,$gab);
			if($masukkan_resource == 1 && $flag_upload == 1){
				redirect('admin/resource');
			}	

		}

		public function listresource(){
			$this->load->model('admin/resource_model');
			$jtStartIndex = $this->input->get('jtStartIndex'); 
			$jtPageSize = $this->input->get('jtPageSize'); 
			$jtSorting = $this->input->get('jtSorting');

			$all_resource = $this->resource_model->get_all_resource();
			$result = $this->resource_model->get_all_paging_sorting_resource($jtStartIndex,$jtPageSize,$jtSorting);
			

			$rows = $result->result_array(); 
			$recordCount = $all_resource->num_rows(); 
			
			$jTableResult = array(); 
			$jTableResult['Result'] = "OK"; 
			$jTableResult['TotalRecordCount'] = $recordCount; 
			$jTableResult['Records'] = $rows; 
			
			print json_encode($jTableResult);
			
		}

	}
 ?>