<?php 
	/**
	* 
	*/
	class Kontak extends CI_Controller
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
      $this->load->view('admin/kontak_view');
      $this->load->view('admin/footer');
    }

    public function listkontak(){
      $this->load->model('admin/kontak_model');
      $jtStartIndex = $this->input->get('jtStartIndex'); 
      $jtPageSize = $this->input->get('jtPageSize'); 
      $jtSorting = $this->input->get('jtSorting');

      $all_kontak = $this->kontak_model->get_all_kontak();
      $result = $this->kontak_model->get_all_paging_sorting_kontak($jtStartIndex,$jtPageSize,$jtSorting);
      

      $rows = $result->result_array(); 
      $recordCount = $all_kontak->num_rows(); 
      
      $jTableResult = array(); 
      $jTableResult['Result'] = "OK"; 
      $jTableResult['TotalRecordCount'] = $recordCount; 
      $jTableResult['Records'] = $rows; 
      
      print json_encode($jTableResult);
    }

    public function createkontak(){
      $this->load->model('admin/kontak_model');
      $id = $this->input->post('id_contact');
      $nama = $this->input->post('nama_contact');
      $telp = $this->input->post('telp_contact');
      $email = $this->input->post('email_contact');
      
      $result = $this->kontak_model->post_create_kontak($nama,$telp,$email);
      $result = $this->kontak_model->get_create_kontak();
      $rows = $result->result_array();


      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      $jTableResult['Record'] = $rows;
      print json_encode($jTableResult);
    }

    public function updatekontak(){
      $this->load->model('admin/kontak_model');
      $id = $this->input->post('id_contact');
      $nama = $this->input->post('nama_contact');
      $telp = $this->input->post('telp_contact');
      $email = $this->input->post('email_contact');

      $result = $this->kontak_model->post_update_kontak($id,$nama,$telp,$email);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }

    

    public function hapuskontak(){
      $this->load->model('admin/kontak_model');
      $id = $this->input->post('id_contact');

      $result = $this->kontak_model->post_delete_kontak($id);

      $jTableResult = array();
      $jTableResult['Result'] = "OK";
      print json_encode($jTableResult);
    }
	}
 ?>