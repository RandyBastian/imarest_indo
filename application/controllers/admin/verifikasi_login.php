<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifikasi_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/login_model','',TRUE);
	}

	function index(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data =  array('username' => $username);
		$this->load->model('admin/login_model');
		if ($this->login_model->login_admin($username,$password)==1){
			$this->session->set_userdata($data);
			redirect('admin/event', 'refresh');
		}
		else{
			redirect('admin/login?status=0', 'refresh');
			//$this->load->view('login_view');
		}
	}

	function check_database_admin($password)
	{
//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

//query the database
		$result = $this->login_model->login_admin($username, $password);



		if($result)
		{
			$sess_array = array(
					'username' => $username,
					'password' => $password
					);
			$this->session->userdata('logged_in', $sess_array);
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('Invalid username or password');
			return false;
		}
	}

/*
	function index()
	{
//This method will have the credentials validation
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
//Field validation failed.  User redirected to login page
			$this->load->view('login_view');
		}
		else
		{
//Go to private area
			redirect('home', 'refresh');
		}

	}

*/

	function check_database($password)
	{
//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

//query the database
		$result = $this->user->login($username, $password);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username
					);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
}
?>