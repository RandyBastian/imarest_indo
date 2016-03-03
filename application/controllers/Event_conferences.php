<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_conferences extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view("header");
		$this->load->view('event_conferences');
		$this->load->view("footer");
	}
}
