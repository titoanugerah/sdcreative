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
    if ($this->input->post('addOrder')) {$this->client_model->addOrder($id);}
    $data['content'] = $this->client_model->cPlaceOrder($id);
    $this->load->view('template',$data);
  }

  public function orderHistory()
  {
    $data['content'] = $this->client_model->cOrderHistory();
    $this->load->view('template',$data);
  }

  public function deleteDetailOrder($id_order, $id_package)
  {
    $this->client_model->deleteData('detail_order', 'id', $id_package);
    redirect(base_url('placeOrder/'.$id_order));
  }

  

}



 ?>
