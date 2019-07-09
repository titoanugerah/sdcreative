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
		$data['content'] = $this->general_model->cHome();
		$this->load->view('front/home',$data);
	}

	public function login()
	{
		if ($this->input->post('loginValidation')) {
			if ($this->general_model->loginValidation()['status']==1)  {$this->session->set_userdata($this->general_model->loginValidation()['account']); redirect(base_url('dashboard'));}
		} else {
			$data['content'] = $this->general_model->cLogin();
			$this->load->view('login', $data);
		}
	}

	public function dashboard()
	{
		$data['content']=$this->general_model->cDashboard();
		$this->load->view('template',$data);
	}

	public function profile()
	{
		$data['content'] = $this->general_model->cProfile();
		$this->load->view('template', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}
