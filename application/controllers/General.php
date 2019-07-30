<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('general_model');
		$this->load->model('admin_model');
		$this->load->model('client_model');
		$this->load->model('staff_model');
		error_reporting(0);
	}

	public function index()
	{
		$this->home();
	}

	public function register()
	{
		$status = null;
		if ($this->input->post('register')) {$status = $this->general_model->register();}
		$data['content'] = $this->general_model->cRegister($status);
		$this->load->view('register', $data);
	}

	public function home()
	{
		$data['content'] = $this->general_model->cHome();
		$this->load->view('front/home',$data);
	}

	public function login()
	{
		if ($this->input->post('loginValidation')) {
			if ($this->general_model->loginValidation()['status']==1)  {$this->session->set_userdata($this->general_model->loginValidation()['account']);
			if ($this->session->userdata['role']== 'admin'){redirect(base_url('dashboard'));} elseif($this->session->userdata['role']== 'client') {redirect(base_url('newOrder'));}elseif($this->session->userdata['role']== 'staff') {redirect(base_url('listJob'));}}
		}
		$data['content'] = $this->general_model->cLogin();
		$this->load->view('login', $data);
	}

	public function dashboard()
	{
		$data['content']=$this->general_model->cDashboard();
		$this->load->view('template',$data);
	}

	public function profile()
	{
		if ($this->input->post('updateAccount')) {if($this->general_model->updateAccount()['status']){$this->session->set_userdata($this->general_model->updateAccount()['session']);}}
		elseif ($this->input->post('upload')){$this->session->set_userdata($this->general_model->updateDisplayPicture());}
		$data['content'] = $this->general_model->cProfile();
		$this->load->view('template', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(''));
	}

	public function detailOrder($id)
	{
		if($this->input->post('addOrder')){$this->admin_model->addOrder($id);}
		elseif($this->input->post('acceptOrder')){$this->admin_model->acceptOrder($id);}
		elseif($this->input->post('declineOrder')){$this->admin_model->declineOrder($id);}
		elseif($this->input->post('verifyPayment1')){$this->admin_model->verifyPayment($id, 5);}
		elseif($this->input->post('uploadPayment1')){$this->client_model->uploadPayment($id, 1);}
		elseif($this->input->post('setPIC')){$this->admin_model->setPIC($id);}
		elseif($this->input->post('addExtraOrder')){$this->staff_model->addExtraOrder($id);}
		elseif($this->input->post('confirmExecution')){$this->staff_model->confirmExecution($id);}
		elseif($this->input->post('addLink1')){$this->staff_model->addLink($id,1,8);}
		elseif($this->input->post('uploadPayment2')){$this->client_model->uploadPayment($id, 2); }
		elseif($this->input->post('verifyPayment2')){$this->admin_model->verifyPayment($id, 11);}
		elseif($this->input->post('addLink2')){$this->staff_model->addLink($id,2,12);}
		elseif($this->input->post('confirmDelivery')){$this->admin_model->confirmDelivery($id);}
		elseif($this->input->post('confirmPackage')){$this->client_model->confirmPackage($id);}
		elseif($this->input->post('submitRating')){$this->client_model->submitRating($id);}
		$data['content'] = $this->general_model->cDetailOrder($id);
		$this->load->view('template', $data);
	}

	public function deleteDetailOrder($id_order, $id_package)
	{
		$this->general_model->deleteData('detail_order', 'id', $id_package);
		if ($this->session->userdata['role']=='client') {redirect(base_url('placeOrder/'.$id_order));}
		elseif ($this->session->userdata['role']=='admin') {redirect(base_url('detailOrder/'.$id_order));}
		elseif ($this->session->userdata['role']=='staff') {redirect(base_url('detailOrder/'.$id_order));}
	}

	public function invoice($id)
	{
		$data['content'] = $this->general_model->cInvoice($id);
		$this->load->view('template',$data);
	}

	public function staffList()
	{
		$data['content'] = $this->general_model->cStaffList();
		$this->load->view('front/staffList',$data);
	}

	public function whatWeDo()
	{
		$data['content'] = $this->general_model->cWhatWeDo();
		$this->load->view('front/whatWeDo',$data);
	}

}
