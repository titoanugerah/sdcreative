<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('staff_model');
  }

  public function listJob()
  {
    $data['content'] = $this->staff_model->cListJob();
    $this->load->view('template', $data);
  }
}


 ?>
