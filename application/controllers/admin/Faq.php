<?php 
  /**
  * 
  */
  class Faq extends CI_Controller
  {
    
   function __construct()
    {
      parent::__construct();
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
      $this->load->view('admin/faq_view');
      $this->load->view('admin/footer');
    }

    public function listfaq(){
      $this->load->model('admin/faq_model');
      $jtStartIndex = $this->input->get('jtStartIndex'); 
      $jtPageSize = $this->input->get('jtPageSize'); 
      $jtSorting = $this->input->get('jtSorting');

      $all_faq = $this->faq_model->get_all_faq();
      $result = $this->faq_model->get_all_paging_sorting_faq($jtStartIndex,$jtPageSize,$jtSorting);
      

      $rows = $result->result_array(); 
      $recordCount = $all_faq->num_rows(); 
      
      $jTableResult = array(); 
      $jTableResult['Result'] = "OK"; 
      $jTableResult['TotalRecordCount'] = $recordCount; 
      $jTableResult['Records'] = $rows; 
      
      print json_encode($jTableResult);
    }

    public function createfaq(){
      $this->load->model('admin/faq_model');
      $id = $this->input->post('no');
      $judul = $this->input->post('question');
      $isi = $this->input->post('answer');
      
      $result = $this->faq_model->post_create_faq($judul,$isi);
      $result = $this->faq_model->get_create_faq();
      $rows = $result->result_array();


      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      $jTableResult['Record'] = $rows;
      print json_encode($jTableResult);
    }

    public function updatefaq(){
      $this->load->model('admin/faq_model');
      $id = $this->input->post('id_faq');
      $ques = $this->input->post('question');
      $answer = $this->input->post('answer');

      $result = $this->faq_model->post_update_faq($id,$ques,$answer);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }

    

    public function hapusfaq(){
      $this->load->model('admin/faq_model');
      $id = $this->input->post('id_faq');

      $result = $this->faq_model->post_delete_faq($id);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }
  }
 ?>