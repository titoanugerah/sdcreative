<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model{
  public function __construct()
  {
    $this->load->library('form_validation');
  }

  //core
  public function getDataRow($table, $whereVar, $whereVal)
  {
    $where = array($whereVar => $whereVal );
    return $this->db->get_where($table, $where)->row();
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

  //FUNCTIONAL
  public function setSession($id)
  {
    $account = $this->getDataRow('account', 'id', $id);
    $data= array(
      'login' => true,
      'role' => $account->role,
      'id' => $account->id,
      'username' => $account->username,
      'password' => $account->password,
      'fullname' => $account->fullname,
      'email'     => $account->email,
      'phone_number'     => $account->phone_number,
      'display_picture' => $account->display_picture,
    );
    return $data;
  }

  //APPLICATION
  public function cHome()
  {
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    return $data;
  }

  public function cLogin()
  {
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    return $data;
  }

  public function loginValidation()
  {
    $data['status'] = $this->getNumRows2('account', 'username', $this->input->post('username'), 'password', md5($this->input->post('password')));
    if ($data['status']==1) {$data['account'] = $this->setSession($this->getDataRow2('account', 'username', $this->input->post('username'), 'password', md5($this->input->post('password')))->id);}
    return $data;
  }

  public function cDashboard()
  {
    $data['webconf'] = $this->getDataRow('webconf','id', 1);
    $data['view_name'] = 'dashboard';
    return $data;
  }

  public function cProfile()
  {
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    $data['view_name'] = 'profile';
    return $data;
  }

  public function updateAccount()
  {
    $where = array('id' => $this->session->userdata['id']);
    if ($this->input->post('password')=='') {
      $data = array('username' => $this->input->post('username'), 'fullname' => $this->input->post('fullname'), 'phone_number' => $this->input->post('phone_number'));
      $this->db->where($where);
      $data['status'] = $this->db->update('account', $data);
    } else {
      $data = array('username' => $this->input->post('username'), 'password' => md5($this->input->post('username')), 'fullname' => $this->input->post('fullname'), 'phone_number' => $this->input->post('phone_number'));
      $this->db->where($where);
      $data['status'] = $this->db->update('account', $data);
    }
    if ($data['status']==1) {$data['session'] = $this->setSession($this->session->userdata['id']);}
    return $data;
  }

  public function updateDisplayPicture()
  {
    if($this->updateData('account','id', $this->session->userdata['id'],'display_picture','display_picture_'.$this->session->userdata['id'].$this->uploadFile('display_picture_'.$this->session->userdata['id'], 'jpg|jpeg|png')['ext'])){$data=$this->setSession($this->session->userdata['id']);}
    return $data;
  }

  public function cDetailOrder($id)
  {
    $data['account'] = $this->getAllData('account');
    $data['detailOrder'] = $this->getSomeData('view_detail_order','id_order',$id);
    $data['package'] = $this->getAllData('view_package');
    $data['order'] = $this->getDataRow('view_order', 'id', $id);
    $data['webconf'] = $this->getDataRow('webconf', 'id', 1);
    $data['view_name'] = 'detailOrder';

    return $data;
  }

}

 ?>
