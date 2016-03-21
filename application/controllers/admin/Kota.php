<?php 
  /**
  * 
  */
  class Kota extends CI_Controller
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
      $this->load->view('admin/kota_view');
      $this->load->view('admin/footer');
    }

    public function listkota(){
      $this->load->model('admin/faq_model');
      $jtStartIndex = $this->input->get('jtStartIndex'); 
      $jtPageSize = $this->input->get('jtPageSize'); 
      $jtSorting = $this->input->get('jtSorting');

      $all_kota = $this->faq_model->get_all_kota();
      $result = $this->faq_model->get_all_paging_sorting_kota($jtStartIndex,$jtPageSize,$jtSorting);
      

      $rows = $result->result_array(); 
      $recordCount = $all_kota->num_rows(); 
      
      $jTableResult = array(); 
      $jTableResult['Result'] = "OK"; 
      $jTableResult['TotalRecordCount'] = $recordCount; 
      $jTableResult['Records'] = $rows; 
      
      print json_encode($jTableResult);
    }

    public function createkota(){
      $this->load->model('admin/faq_model');
      // $id = $this->input->post('no');
      $nama = $this->input->post('nama_kota');
      
      $result = $this->faq_model->post_create_kota($nama);
      $result = $this->faq_model->get_create_kota();
      $rows = $result->result_array();


      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      $jTableResult['Record'] = $rows;
      print json_encode($jTableResult);
    }

    public function updatekota(){
      $this->load->model('admin/faq_model');
      $id = $this->input->post('id_kota');
      $nama = $this->input->post('nama_kota');

      $result = $this->faq_model->post_update_kota($id,$nama);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }

    

    public function hapuskota(){
      $this->load->model('admin/faq_model');
      $id = $this->input->post('id_kota');

      $result = $this->faq_model->post_delete_kota($id);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }
  }
 ?>