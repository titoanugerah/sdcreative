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
    $data['content'] = $this->admin_model->cWebConf();
    $this->load->view('template', $data);
  }
}
 ?>
