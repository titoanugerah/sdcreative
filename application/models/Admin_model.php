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
    $data['category'] = $this->getAllData('category');
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
    $data['list'] = $this->getSomeData('package', 'id_category', $id);
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
}

 ?>
