<?php 
	/**
	* 
	*/
	class News extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	    	$this->load->library('form_validation');
		}

		public function index(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/news_view');
			$this->load->view('admin/footer');
		}
		public function tambah(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/tambah_news_view');
			$this->load->view('admin/footer');
		}

		public function createnew(){
	    	$fileName = $_FILES['userfile'];

			$config['upload_path']    = './assets/gambar/news/';
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
				echo "<script>
					alert('Gambar yang anda upload tidak sesuai dengan persyaratan, silahkan dilakukan pengecekan ukuran gambar');
					window.location.href='" . base_url() . "admin/news/tambah';
					</script>";
			}
			if( $this->upload->do_upload('userfile')){
				$flag_upload = 1;
				$this->load->model('admin/news_model');
				// $this->load->library('upload', $config);
				$judul = $_POST['judul'];
			    $isi = $_POST['isi'];
			    
			    		
				
				$masukkan_news = $this->news_model->tambah_news($judul,$isi,$gab);
				if($masukkan_news == 1 && $flag_upload == 1){
					redirect('admin/news');
				}
			}			
		}

		public function listnews(){
			$this->load->model('admin/news_model');
			$jtStartIndex = $this->input->get('jtStartIndex'); 
			$jtPageSize = $this->input->get('jtPageSize'); 
			$jtSorting = $this->input->get('jtSorting');

			$all_news = $this->news_model->get_all_news();
			$result = $this->news_model->get_all_paging_sorting_news($jtStartIndex,$jtPageSize,$jtSorting);
			

			$rows = $result->result_array(); 
			$recordCount = $all_news->num_rows(); 
			
			$jTableResult = array(); 
			$jTableResult['Result'] = "OK"; 
			$jTableResult['TotalRecordCount'] = $recordCount; 
			$jTableResult['Records'] = $rows; 
			
			print json_encode($jTableResult);
			
		}

		public function updateviewnews($id=NULL){
			$this->load->model('admin/news_model');
			$get_data_news = $this->news_model->get_data_news($id);
			$data = $get_data_news->row_array();

			$nama = explode("/", $data['pic_news']);
			// print_r($nama);
			$data['nama'] = $nama[4];


			$this->tampilanupdate($data);
		}

		public function tampilanupdate($data){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/update_news_view', $data);
			$this->load->view('admin/footer');
		}

		public function updatenews(){

		
			if($_FILES['userfile']['name'] == NULL){
				$this->load->model('admin/news_model');
			// $this->load->library('upload', $config);
				$judul = $_POST['judul'];
			    $isi = $_POST['isi'];
			    $id = $_POST['id'];
			    
			    $masukkan_news = $this->news_model->update_news($id,$judul,$isi);
				if($masukkan_news == 1){
					redirect('admin/news');
				}
			}
			else{
				$judul = $_POST['judul'];
			    $isi = $_POST['isi'];
			    $id = $_POST['id'];
				$fileName = $_FILES['userfile'];
			
				$config['upload_path']    = './assets/gambar/news/';
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
					echo "<script>
					window.location.href='" . base_url() . "admin/news/updateviewnews/".$id."';
					alert('Gambar yang anda upload tidak sesuai dengan persyaratan, silahkan dilakukan pengecekan ukuran gambar');
					</script>";
					
				}
				if( $this->upload->do_upload('userfile')){
					$flag_upload = 1;
					$this->load->model('admin/news_model');
			// $this->load->library('upload', $config);
				
				    
					$masukkan_news = $this->news_model->update_wtihpic_news($id,$judul,$isi,$gab);
					if($masukkan_news == 1 && $flag_upload == 1){
						redirect('admin/news');
					}
				}	
				
			}


			
				
		}

		public function hapusnews(){
	      $this->load->model('admin/news_model');
	      $id = $this->input->post('id_news');

	      $result = $this->news_model->post_delete_news($id);

	      $jTableResult = array();
	      $jTableResult['Result'] = "OK";
	      print json_encode($jTableResult);
	    }


	}
 ?>