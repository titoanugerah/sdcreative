<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model
{

  function __construct()
  {

  }
  //CORE
  public function getDataRow($table, $whereVar, $whereVal)
  {
    $where = array($whereVar => $whereVal );
    return $this->db->get_where($table, $where)->row();
  }

  public function getSomeData($table, $whereVar, $whereVal)
  {
    $where = array($whereVar => $whereVal );
    return $this->db->get_where($table, $where)->result();
  }

  public function getSomeDataS($table, $whereVar, $whereVal,$status)
  {
    $where = array($whereVar => $whereVal, 'status' => $status);
    return $this->db->get_where($table, $where)->result();
  }

  public function getAllData($table)
  {
    return $this->db->get($table)->result();
  }

  public function getDataRow2($table, $var1, $val1, $var2, $val2)
  {
    $where = array($var1 => $val1, $var2 => $val2);
    $data = $this->db->get_where($table, $where);
    return $data->row();
  }

  public function getNumRows($table, $var, $val)
  {
    $where = array($var => $val);
    $query = $this->db->get_where($table, $where);
    return $query->num_rows();
  }

  public function getNumRows2($table, $var1, $val1, $var2, $val2)
  {
    $where = array($var1 => $val1, $var2 => $val2);
    $data = $this->db->get_where($table, $where);
    return $data->num_rows();
  }

  public function updateData($table, $varWhere, $valWhere, $varSet, $valSet)
  {
    $where = array($varWhere => $valWhere);
    $data = array($varSet => $valSet);
    $this->db->where($where);
    $status = $this->db->update($table, $data);
    return $status;
  }

  public function deleteData($table, $var, $val)
  {
    $where = array($var => $val);
    return $this->db->delete($table, $where);
  }

  public function uploadFile($filename,$allowedFile)
  {
    $config['upload_path'] = APPPATH.'../assets/upload/';
    $config['overwrite'] = TRUE;
    $config['file_name']     =  str_replace(' ','_',$filename);
    $config['allowed_types'] = $allowedFile;
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('fileUpload')) {
      $upload['status']=0;
      $upload['message']= "Mohon maaf terjadi error saat proses upload : ".$this->upload->display_errors();
    } else {
      $upload['status']=1;
      $upload['message'] = "File berhasil di upload";
      $upload['ext'] = $this->upload->data('file_ext');
    }
    return $upload;
  }

  public function sentEmail($to, $fullname, $subject, $content)
  {
    $account = $this->getDataRow('webconf', 'id', 1);
    $config = [
      'protocol' => 'sentmail',
      'smtp_host' => $account->host,
      'smtp_user' => $account->email,
      'smtp_pass' => $account->password,
      'smtp_crypto' => $account->crypto,
      'charset' => 'utf-8',
      'crlf' => 'rn',
      'newline' => "\r\n",
      'smtp_port' => $account->port
    ];
    $this->load->library('email', $config);
    $this->email->from($account->email);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message('
    Yth. '.$fullname.'
    Di tempat.

    '.$content.'

    Atas perhatiannya kami ucapkan terima kasih.

    Admin
    ');
    $sent = $this->email->send();
    error_reporting(0);
  }

  //APPLICATION
  public function cNewOrder()
  {
    $data['view_name'] = 'newOrder';
    $data['category'] = $this->getAllData('category');
    $data['package'] = $this->getAllData('package');
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    return $data;
  }

  public function createOrder($id)
  {
    $this->db->insert('order',$data = array('id_customer' => $this->session->userdata['id'], 'status' => 1 ));
    $id_order = $this->db->insert_id();
    $this->db->insert('detail_order', $data = array('id_order' => $id_order, 'id_package' => $id ));
    return $id_order;
  }

  public function cPlaceOrder($id)
  {
    $data['order'] = $this->getDataRow('view_order','id',$id);
    $data['detailOrder'] = $this->getSomeData('view_detail_order','id_order', $id);
    $data['view_name'] = 'placeOrder';
    $data['package'] = $this->getAllData('view_package');
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    return $data;
  }

  public function cOrderHistory()
  {
    $data['order'] = $this->getSomeData('view_order', 'id_customer', $this->session->userdata['id']);
    $data['view_name'] = 'orderHistory';
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    return $data;
  }

  public function addOrder($id_order)
  {
    return $this->db->insert('detail_order',$data = array('id_order' => $id_order, 'id_package' => $this->input->post('id_package')));
  }

  public function addPromo($id)
  {
    if ($this->getDataRow('view_promo', 'promo_code', $this->input->post('promo'))->available>0) {
      $this->updateData('order', 'id', $id, 'promo', $this->input->post('promo'));
      $this->updateData('order', 'id', $id, 'date_event', $this->input->post('date_event'));
    }
  }

  public function deletePromo($id)
  {

    $this->updateData('order', 'id', $id, 'date_event', $this->input->post('date_event'));
    return $this->updateData('order', 'id', $id, 'promo', null);
  }
}
 ?>
