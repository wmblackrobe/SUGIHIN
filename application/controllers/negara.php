<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negara extends CI_Controller{
    private $alert ='';

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['judul'] = 'Negara';
        $this->load->model('setting/themes/themesModel');
        $this->load->model('masterdata/negara/negaraModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
    }

    public function index(){
     $data['negara']= $this->negaraModel->all();
     $data['judul']= $_SESSION['judul'];
     $this->template('master/negara/list',$data);
    }

public function template($content,$data=null){
    $data['session']= 'Master Data';
    $data['session_child']= 'Negara';
    $data['judul']= $_SESSION['judul'];
    $data['themes']= $this->themesModel->all();
    $data['menu_parent']= $this->menuModel->all();
    $data['menu_child']= $this->menuChildModel->all();
    $data['content']= $this->load->view($content,$data,true);
    $this->load->view('admin/template/main',$data);
   }
  
   public function form(){
   

    if($this->input->post('simpan'))
    {
        $array = array(
            'nama_negara'=>$this->input->post('nama_negara'),
            'logo_bendera'=>$_FILES['logo_bendera']['name'],
           
        );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        if($this->input->post('id_negara')== '')
        {
            
            if($this->negaraModel->insert($array))
            {
            
                redirect('negara');
            }
            else{
              
                redirect('negara');
            }
        }
        else{
           
            if($this->negaraModel->update($array, array('id_negara'=>$this->input->post('id_negara'))))
            {
              
                redirect('negara');
            }
            else{
               
                redirect('negara');
            }  
        }
    }
    $data['satu']= $this->negaraModel->getWhere(array('id_negara'=>$this->uri->segment(3)))->row_array();
    if ($data['satu'] != null)
    {
        $data['judulform']= 'Edit Negara';
        $data['tombol']= 'update';
    }

    // $data['alert'] = $this->alert;
    $this->template('master/negara/form',$data);
}

  
   public function hapus(){
    if($this->uri->segment(3)) $this->negaraModel->delete(array('id_negara'=>$this->uri->segment(3)));
    redirect('negara');
}

  

}