<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view("header");
		$this->load->view('membership');
		$this->load->view("footer");
	}

	public function student()
	{
		$this->load->view("header");
		$this->load->view('membership/student');
		$this->load->view("footer");
	}

	public function affiliate()
	{
		$this->load->view("header");
		$this->load->view('membership/affiliate');
		$this->load->view("footer");
	}

	public function member()
	{
		$this->load->view("header");
		$this->load->view('membership/member');
		$this->load->view("footer");
	}

	public function fellow()
	{
		$this->load->view("header");
		$this->load->view('membership/fellow');
		$this->load->view("footer");
	}

	public function marine_membership()
	{
		$this->load->view("header");
		$this->load->view('membership/marine');
		$this->load->view("footer");
	}
}
