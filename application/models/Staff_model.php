<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model
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
  public function cListJob()
  {
    $id = $this->session->userdata['id'];
    $data['order'] = $this->db->query('select * from view_order where pic_1 = '.$id.' or pic_2 = '.$id.' or pic_3 = '.$id.' or pic_4 = '.$id.' or pic_5 = '.$id.' or pic_6 = '.$id.' or pic_7 = '.$id.' or pic_8 = '.$id.' or pic_9 = '.$id.' or pic_10 = '.$id)->result();
    $data['webconf'] = $this->getDataRow('webconf','id',1);
    $data['view_name'] = 'listJob';
    return $data;
  }

  public function addExtraOrder($id_order)
  {
    if (!$this->db->query('select * from detail_order where id_order = '.$id_order.' and id_package = '.$this->input->post('id_package'))->num_rows()>0) {return $this->db->insert('detail_order',$data = array('id_order' => $id_order, 'id_package' => $this->input->post('id_package')));}
  }

  public function confirmExecution($id_order)
  {
    $this->updateData('order', 'id', $id_order, 'date_execution', date('Y-m-d H:i:s'));
    $this->updateData('order', 'id', $id_order, 'status', 7);
  }

  public function addLink($id_order, $link, $status)
  {
    $this->updateData('order', 'id', $id_order, 'link_'.$link, $this->input->post('link_'.$link));
    $this->updateData('order', 'id', $id_order, 'status', $status);
    $this->updateData('order', 'id', $id_order, 'date_result_'.$link, date('Y-m-d H:i:s'));

  }

}

 ?>
