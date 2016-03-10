<?php 
	/**
	* 
	*/
	class Upload extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

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

		public function index(){
			$this->load->view('admin/header_topbar');
			$this->load->view('admin/upload_view');
			$this->load->view('admin/footer');
		}

		public function listupload(){
		      $this->load->model('admin/upload_model');
		      $jtStartIndex = $this->input->get('jtStartIndex'); 
		      $jtPageSize = $this->input->get('jtPageSize'); 
		      $jtSorting = $this->input->get('jtSorting');

		      $all_upload = $this->upload_model->get_all_upload();
		      $result = $this->upload_model->get_all_paging_sorting_upload($jtStartIndex,$jtPageSize,$jtSorting);
		      

		      $rows = $result->result_array(); 
		      $recordCount = $all_upload->num_rows(); 
		      
		      $jTableResult = array(); 
		      $jTableResult['Result'] = "OK"; 
		      $jTableResult['TotalRecordCount'] = $recordCount; 
		      $jTableResult['Records'] = $rows; 
		      
		      print json_encode($jTableResult);
	    }



	    public function createupload(){
	      $this->load->model('admin/upload_model');
	      // $id = $this->input->post('no');
	      $this->load->helper('date');
		  $date = date('Y-m-d');
	      $nama = $this->input->post('nama_galeri');
	      
	      

	      $string = str_replace(' ', '-', $nama); // Replaces all spaces with hyphens.

   		  $nama = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars

	      $dir = $date.$nama;

	      mkdir('./assets/gambar/galeri/'.$dir, 0777, true);
	      mkdir('./assets/gambar/thumbs/'.$dir, 0777, true);

	      $result = $this->upload_model->post_create_upload($nama,$date,$dir);
	      $result = $this->upload_model->get_create_upload();
	      $rows = $result->result_array();

	      $jTableResult = array();
	      $jTableResult['Result'] = "OK";
	      $jTableResult['Record'] = $rows;
	      print json_encode($jTableResult);
	    }

	    public function updateupload(){
	      $this->load->model('admin/upload_model');
	      $id = $this->input->post('id_galeri');
	      $nama = $this->input->post('nama_galeri');

	      $result = $this->upload_model->post_update_upload($id,$nama);

	      $jTableResult = array();
	      $jTableResult['Result'] = "OK";
	      print json_encode($jTableResult);
	    }

	    

	    public function hapusupload(){
	      $this->load->model('admin/upload_model');
	      $id = $this->input->post('id_galeri');

	      $result = $this->upload_model->post_delete_upload($id);

	      $jTableResult = array();
	      $jTableResult['Result'] = "OK";
	      print json_encode($jTableResult);
	    }

	    public function upload_foto($letak)
		{
		    $fileName = $_FILES['userfile'];

			$config['upload_path']    = $this->data['dir']['original'].$letak."/";
			$config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['overwrite']       = TRUE;
            $config['max_size']        = '1000000';  // Can be set to particular file size
            $config['max_height']      = '768';
            $config['max_width']       = '1024'; 

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			// $data_upload_files = $this->upload->data();

	        // $image = $data_upload_files['full_path'];

		    // $c_upload['upload_path']    = $this->data['dir']['original'];
		    // $c_upload['allowed_types']  = 'gif|jpg|png|jpeg';
		    // $c_upload['max_size']       = '500';
		    // $c_upload['max_width']      = '1600';
		    // $c_upload['max_height']     = '1200';
		    // $c_upload['remove_spaces']  = TRUE;

		    // $this->load->library('upload', $c_upload);

			// print_r($config);
		    if ($this->upload->do_upload('userfile')) {

		        $img = $this->upload->data();
		        // create thumbnail
		        $new_image = $this->data['dir']['thumb'].$letak."/".'thumb_'.$img['file_name'];

		        $c_img_lib = array(
		            'image_library'     => 'gd2',
		            'source_image'      => $img['full_path'],
		            'maintain_ratio'    => TRUE,
		            'width'             => 100,
		            'height'            => 100,
		            'new_image'         => $new_image
		        );

		        $this->load->library('image_lib', $c_img_lib);
		        $this->image_lib->resize();
		    } if(! $this->upload->do_upload('userfile')){
				$upload_error = array('error' => $this->upload->display_errors());
				print_r($upload_error);	
			}
		}


	    public function hasilupload($id=null){
	    	$this->load->model('admin/upload_model');
	    	$name = $this->upload_model->cari_folder($id);
	    	$nama = $name->result_array();

	    	// print_r($nama);
	    	$this->data['id'] = $id;

	    	$this->data['letak'] = $nama[0]['letak_folder'];	
	    
	    	

	    	if ($this->input->post('btn_upload')) {
		        $this->upload_foto($nama[0]['letak_folder']);
		    }
		    $start=0;
		    $this->load->library('pagination');

		    $c_paginate['base_url'] = site_url('admin/Upload/hasilupload');
		    $c_paginate['per_page'] = '9';
		    	    	// print_r($nama);
		    $finish = $start + $c_paginate['per_page'];
		    $letak_galeri = $this->data['dir']['original'].$nama[0]['letak_folder'];
		    $letak_thumbs =  $this->data['dir']['thumb'].$nama[0]['letak_folder'];
		    // print_r($letak_galeri);
		    // print_r($letak_thumbs);
		    if (is_dir($this->data['dir']['thumb'].$nama[0]['letak_folder']))
		    {
		        $i = 0;
		        if ($dh = opendir($this->data['dir']['thumb'].$nama[0]['letak_folder'])) {
		            while (($file = readdir($dh)) !== false) {
		                // get file extension
		                $ext = strrev(strstr(strrev($file), ".", TRUE));
		                if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
		                    if ($start <= $this->data['total'] && $this->data['total'] < $finish) {
		                        $nama[0]['letak_folder']."/".$this->data['images'][$i]['thumb'] = $file;
		                        print_r($nama[0]['letak_folder']."/".$this->data['images'][$i]['thumb']);
		                        $nama[0]['letak_folder']."/".$this->data['images'][$i]['original'] = str_replace('thumb_', '', $file);
		                        $i++;
		                    }
		                    $this->data['total']++;
		                }
		            }
		            closedir($dh);
		        }
		    }



		    $c_paginate['total_rows'] = $this->data['total'];

		    $this->pagination->initialize($c_paginate);

		    $this->load->view('admin/header_topbar');
		    $this->load->view('admin/lihatgaleri_view', $this->data);
			$this->load->view('admin/footer');
		}
		public function delete()
		{
		    $letak=$this->uri->segment(4); // 1stsegment
			$nama_file=$this->uri->segment(5);
			$id = $this->uri->segment(6);
		    unlink($this->data['dir']['original'].$letak."/".$nama_file);
		    unlink($this->data['dir']['thumb'].$letak."/".'thumb_'.$nama_file);
		    redirect('admin/Upload/hasilupload/' . $id);
		}
	}
 ?>