<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo_gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view("header");
		$this->load->view('gallery_photo');
		$this->load->view("footer");
	}
}
