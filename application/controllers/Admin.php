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
    if ($this->input->post('createCategory')) {$this->admin_model->createCategory();}
    $data['content'] = $this->admin_model->cCategory();
    $this->load->view('template', $data);
  }

  public function detailCategory($id)
  {
    if ($this->input->post('updateImage')) {$this->admin_model->updateImageCategory($id);}
    else if ($this->input->post('updateCategory')) {$this->admin_model->updateCategory($id);}
    else if ($this->input->post('createPackage')) {$this->admin_model->createPackage($id);}
    else if ($this->input->post('updatePackage')) {$this->admin_model->updatePackage();}
    else if ($this->input->post('deletePackage')) {$this->admin_model->deletePackage();}
    else if ($this->input->post('restorePackage')) {$this->admin_model->restorePackage();}
    $data['content'] = $this->admin_model->cDetailCategory($id);
    $this->load->view('template', $data);
  }

}
 ?>
