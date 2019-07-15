<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('client_model');

  }

  public function newOrder()
  {
    $data['content'] = $this->client_model->cNewOrder();
    $this->load->view('template',$data);
  }

  public function createOrder($id)
  {
    redirect(base_url('placeOrder/'.$this->client_model->createOrder($id)));
  }

  public function placeOrder($id)
  {
    $data['content'] = $this->client_model->cPlaceOrder($id);
    $this->load->view('template',$data);
  }

}



 ?>
