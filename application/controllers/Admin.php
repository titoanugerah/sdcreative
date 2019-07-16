<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin_model');
  }

  public function webConf()
  {
    if ($this->input->post('upload')) {$this->admin_model->uploadLogo();}
    else if ($this->input->post('updateEmail')) {$this->admin_model->updateEmail();}
    else if ($this->input->post('updateSocmed')) {$this->admin_model->updateSocmed();}
    else if ($this->input->post('updateGeneral')) {$this->admin_model->updateGeneral();}
    $data['content'] = $this->admin_model->cWebConf();
    $this->load->view('template', $data);
  }

  public function category()
  {
    if ($this->input->post('createCategory')) {$this->admin_model->createCategory();redirect(base_url('category'));}
    $data['content'] = $this->admin_model->cCategory();
    $this->load->view('template', $data);
  }

  public function detailCategory($id)
  {
    if ($this->input->post('updateImage')) {$this->admin_model->updateImageCategory($id);}
    else if ($this->input->post('updateCategory')) {$this->admin_model->updateCategory($id);}
    else if ($this->input->post('createPackage')) {$this->admin_model->createPackage($id);redirect(base_url('detailCategory/'.$id));}
    else if ($this->input->post('updatePackage')) {$this->admin_model->updatePackage();}
    else if ($this->input->post('uploadImage')) {$this->admin_model->updateImagePackage();}
    else if ($this->input->post('deletePackage')) {$this->admin_model->deletePackage();}
    else if ($this->input->post('restorePackage')) {$this->admin_model->restorePackage();}
    else if ($this->input->post('deleteCategory') && md5($this->input->post('password'))==$this->session->userdata['password']) {$this->admin_model->deleteCategory($id);redirect(base_url('category'));}
    $data['content'] = $this->admin_model->cDetailCategory($id);
    $this->load->view('template', $data);
  }

  public function account()
  {
    $keyword = null;
    if ($this->input->post('find')) {$keyword = $this->input->post('keyword');}
    if ($this->input->post('createAccount')) {$this->admin_model->createAccount();redirect(base_url('account'));}
    $data['content'] = $this->admin_model->cAccount($keyword);
    $this->load->view('template', $data);
  }

  public function detailAccount($id)
  {
    $data['content'] = $this->admin_model->cDetailAccount($id);
    $this->load->view('template', $data);
  }

  public function recapOrder()
  {
    $data['content'] = $this->admin_model->cRecapOrder();
    $this->load->view('template', $data);
  }

}
 ?>
