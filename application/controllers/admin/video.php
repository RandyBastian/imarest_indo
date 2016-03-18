<?php 
  /**
  * 
  */
  class Video extends CI_Controller
  {
    
    // function __construct(argument)
    // {
    //   # code...
    // }

    public function index(){
      $this->load->view('admin/header_topbar');
      $this->load->view('admin/video_view');
      $this->load->view('admin/footer');
    }

    public function listvideo(){
      $this->load->model('admin/video_model');
      $jtStartIndex = $this->input->get('jtStartIndex'); 
      $jtPageSize = $this->input->get('jtPageSize'); 
      $jtSorting = $this->input->get('jtSorting');

      $all_video = $this->video_model->get_all_video();
      $result = $this->video_model->get_all_paging_sorting_video($jtStartIndex,$jtPageSize,$jtSorting);
      

      $rows = $result->result_array(); 
      $recordCount = $all_video->num_rows(); 
      
      $jTableResult = array(); 
      $jTableResult['Result'] = "OK"; 
      $jTableResult['TotalRecordCount'] = $recordCount; 
      $jTableResult['Records'] = $rows; 
      
      print json_encode($jTableResult);
    }

    public function createvideo(){
      $this->load->model('admin/video_model');
      $id = $this->input->post('no');
      $judul = $this->input->post('nama_video');
      $isi = $this->input->post('link_video');
      
      $result = $this->video_model->post_create_video($judul,$isi);
      $result = $this->video_model->get_create_video();
      $rows = $result->result_array();


      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      $jTableResult['Record'] = $rows;
      print json_encode($jTableResult);
    }

    public function updatevideo(){
      $this->load->model('admin/video_model');
      $id = $this->input->post('id_video');
      $ques = $this->input->post('nama_video');
      $answer = $this->input->post('link_video');

      $result = $this->video_model->post_update_video($id,$ques,$answer);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }

    

    public function hapusvideo(){
      $this->load->model('admin/video_model');
      $id = $this->input->post('id_video');

      $result = $this->video_model->post_delete_video($id);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }
  }
 ?>