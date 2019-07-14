<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
  public function __construct()
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
  public function cWebConf()
  {
    $data['webconf'] = $this->getDataRow('webconf','id',1);
    $data['view_name'] = 'webConf';
    return $data;
  }

  public function uploadLogo()
  {
    $this->updateData('webConf','id','1','logo', 'logo'.$this->uploadFile('logo', 'jpg|jpeg|png|ico')['ext']);
  }

  public function updateGeneral()
  {
    $this->updateData('webconf','id',1,'website_name',$this->input->post('website_name'));
    $this->updateData('webconf','id',1,'office_number',$this->input->post('office_number'));
    $this->updateData('webconf','id',1,'address',$this->input->post('address'));
  }

  public function updateEmail()
  {
    $this->updateData('webconf','id',1,'host',$this->input->post('host'));
    $this->updateData('webconf','id',1,'email',$this->input->post('email'));
    $this->updateData('webconf','id',1,'password',$this->input->post('password'));
    $this->updateData('webconf','id',1,'port',$this->input->post('port'));
    $this->updateData('webconf','id',1,'crypto',$this->input->post('crypto'));
  }

  public function updateSocmed()
  {
    $this->updateData('webconf','id',1,'facebook',$this->input->post('facebook'));
    $this->updateData('webconf','id',1,'youtube',$this->input->post('youtube'));
    $this->updateData('webconf','id',1,'instagram',$this->input->post('instagram'));
  }

  public function cCategory()
  {
    $data['category'] = $this->getSomeData('category', 'status', 1);
    $data['webconf'] = $this->getDataRow('webconf','id',1);
    $data['view_name'] = 'category';
    return $data;
  }

  public function createCategory()
  {
    $this->db->insert('category', $data = array('category' => $this->input->post('category'), 'id_admin' => $this->session->userdata['id']));
    return $this->updateData('category', 'id', $this->db->insert_id(), 'image', 'category_'.$this->db->insert_id().$this->uploadFile('category_'.$this->db->insert_id(),'jpg|png|jpeg')['ext']);
  }

  public function cDetailCategory($id)
  {
    $data['deleted'] = $this->getSomeDataS('package', 'id_category', $id,0);
    $data['list'] = $this->getSomeDataS('package', 'id_category', $id,1);
    $data['detail'] = $this->getDataRow('category','id',$id);
    $data['webconf'] = $this->getDataRow('webconf','id',1);
    $data['view_name'] = 'detailCategory';
    return $data;
  }

  public function updateImageCategory($id)
  {
    return $this->updateData('category', 'id', $id, 'image', 'category_'.$id.$this->uploadFile('category_'.$id,'jpg|png|jpeg')['ext']);
  }

  public function updateCategory($id)
  {
    $this->updateData('category','id',$id,'category',$this->input->post('category'));
    $this->updateData('category','id',$id,'info',$this->input->post('info'));
  }

  public function createPackage($id)
  {
    $data = array('package' => $this->input->post('package'), 'price' => $this->input->post('price'), 'description' => $this->input->post('description'),'pic_count' => $this->input->post('pic_count'),'id_admin' => $this->session->userdata['id'],'id_category' => $id);
    $this->db->insert('package', $data);
    return $this->updateData('package', 'id', $this->db->insert_id(), 'image', 'package_'.$this->db->insert_id().$this->uploadFile('package_'.$this->db->insert_id(),'jpg|png|jpeg')['ext']);
  }

  public function updatePackage()
  {
    $id = $this->input->post('id');
    $data = array('package' => $this->input->post('package'), 'price' => $this->input->post('price'), 'description' => $this->input->post('description'),'pic_count' => $this->input->post('pic_count'),'id_admin' => $this->session->userdata['id']);
    $where = array('id' => $this->input->post('id'));
    $this->db->where($where);
    $this->db->update('package', $data);
  }

  public function deletePackage()
  {
    $id = $this->input->post('id');
    $this->updateData('package','id',$id,'status',0);
  }

  public function restorePackage()
  {
    $id = $this->input->post('id');
    $this->updateData('package','id',$id,'status',1);
  }

  public function deleteCategory($id)
  {
    $this->updateData('package','id_category',$id,'status',0);
    $this->updateData('category','id',$id,'status',0);
  }

  public function cAccount($keyword)
  {
    if ($keyword==null) {$data['account'] = $this->getAllData('account');}
    else{$data['account'] = $this->db->query('select * from account where id  LIKE "%'.$keyword.'%" or username LIKE "%'.$keyword.'%" or fullname LIKE "%'.$keyword.'%"')->result();}
    $data['webconf'] = $this->getDataRow('webconf','id',1);
    $data['view_name'] = 'account';
    return $data;
  }

  public function createAccount()
  {
    $newPassword = random_int(100000,999999);
    $data = array('username' => $this->input->post('username'), 'password' => md5($newPassword), 'email' => $this->input->post('email'), 'role' => 'staff', 'display_picture' => 'no.jpg' );
    $this->db->insert('account', $data);
    $content = "Kami menginformasikan bahwa akun anda berhasil dibuat, silahkan login menggunakan username ".$this->input->post('username')."  serta password ".$newPassword." silahkan kunjungi http://mylogical.world untuk memulai";
    $this->sentEmail($this->input->post('email'), $this->input->post('username'), 'Selamat datang pengguna baru ', $content);
  }

  public function cDetailAccount($id)
  {
    $data['detail'] = $this->getDataRow('account', 'id', $id);
    $data['webconf'] = $this->getDataRow('webconf','id',1);
    $data['view_name'] = 'detailAccount';
    return $data;
  }

  public function updateImagePackage()
  {
    $id = $this->input->post('id');
    return $this->updateData('package', 'id', $id, 'image', 'package_'.$id.$this->uploadFile('package_'.$id,'jpg|png|jpeg')['ext']);
  }
}

 ?>
