<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenisfilm extends CI_Controller{
    private $alert ='';

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['judul'] = 'Jenis Film';
        $this->load->model('setting/themes/themesModel');
        $this->load->model('masterdata/jenisfilm/jenisfilmModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
    }

    public function index(){
     $data['jenisfilm']= $this->jenisfilmModel->all();
     $data['judul']= $_SESSION['judul'];
     $this->template('master/jenisfilm/list',$data);
    }

public function template($content,$data=null){
    $data['session']= 'Master Data';
    $data['session_child']= 'Jenis Film';
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
            'jenis_film'=>$this->input->post('jenis_film'),
           
        );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        if($this->input->post('id_jenis')== '')
        {
            
            if($this->jenisfilmModel->insert($array))
            {
            
                redirect('jenisfilm');
            }
            else{
              
                redirect('jenisfilm');
            }
        }
        else{
           
            if($this->jenisfilmModel->update($array, array('id_jenis'=>$this->input->post('id_jenis'))))
            {
              
                redirect('jenisfilm');
            }
            else{
               
                redirect('jenisfilm');
            }  
        }
    }
    $data['satu']= $this->jenisfilmModel->getWhere(array('id_jenis'=>$this->uri->segment(3)))->row_array();
    if ($data['satu'] != null)
    {
        $data['judulform']= 'Edit Jenis Film';
        $data['tombol']= 'update';
    }

    // $data['alert'] = $this->alert;
    $this->template('master/jenisfilm/form',$data);
}

  
   public function hapus(){
    if($this->uri->segment(3)) $this->jenisfilmModel->delete(array('id_jenis'=>$this->uri->segment(3)));
    redirect('jenisfilm');
}

  

}