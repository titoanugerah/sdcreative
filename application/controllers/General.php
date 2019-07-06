<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('general_model');
	}

	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$this->load->view('front/home');
	}
}
