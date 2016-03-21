<?php 
  /**
  * 
  */
  class Negara extends CI_Controller
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
      $this->load->view('admin/negara_view');
      $this->load->view('admin/footer');
    }

    public function listnegara(){
      $this->load->model('admin/faq_model');
      $jtStartIndex = $this->input->get('jtStartIndex'); 
      $jtPageSize = $this->input->get('jtPageSize'); 
      $jtSorting = $this->input->get('jtSorting');

      $all_negara = $this->faq_model->get_all_negara();
      $result = $this->faq_model->get_all_paging_sorting_negara($jtStartIndex,$jtPageSize,$jtSorting);
      

      $rows = $result->result_array(); 
      $recordCount = $all_negara->num_rows(); 
      
      $jTableResult = array(); 
      $jTableResult['Result'] = "OK"; 
      $jTableResult['TotalRecordCount'] = $recordCount; 
      $jTableResult['Records'] = $rows; 
      
      print json_encode($jTableResult);
    }

    public function createnegara(){
      $this->load->model('admin/faq_model');
      // $id = $this->input->post('no');
      $nama = $this->input->post('nama_negara');
      
      $result = $this->faq_model->post_create_negara($nama);
      $result = $this->faq_model->get_create_negara();
      $rows = $result->result_array();


      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      $jTableResult['Record'] = $rows;
      print json_encode($jTableResult);
    }

    public function updatenegara(){
      $this->load->model('admin/faq_model');
      $id = $this->input->post('id_negara');
      $nama = $this->input->post('nama_negara');

      $result = $this->faq_model->post_update_negara($id,$nama);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }

    

    public function hapusnegara(){
      $this->load->model('admin/faq_model');
      $id = $this->input->post('id_negara');

      $result = $this->faq_model->post_delete_negara($id);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }
  }
 ?>