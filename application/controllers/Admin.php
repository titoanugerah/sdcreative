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
    if ($this->input->post('updateEmail')) {$this->admin_model->updateEmail();}
    if ($this->input->post('updateSocmed')) {$this->admin_model->updateSocmed();}
    if ($this->input->post('updateGeneral')) {$this->admin_model->updateGeneral();}
    $data['content'] = $this->admin_model->cWebConf();
    $this->load->view('template', $data);
  }

  public function category()
  {
    $data['content'] = $this->admin_model->cCategory();
    $this->load->view('template', $data);
  }
}
 ?>
