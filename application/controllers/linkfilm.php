<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Linkfilm extends CI_Controller{
    private $alert ='';

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['judul'] = 'Link Film';
        $this->load->model('setting/themes/themesModel');
        $this->load->model('masterdata/linkfilm/linkfilmModel');
        $this->load->model('masterdata/film/filmModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
    }

    public function index(){
     $data['linkfilm']= $this->linkfilmModel->all();
     $data['judul']= $_SESSION['judul'];
     $this->template('master/linkfilm/list',$data);
    }

public function template($content,$data=null){
    $data['session']= 'Master Data';
    $data['session_child']= 'Link Film';
    $data['judul']= $_SESSION['judul'];
    $data['themes']= $this->themesModel->all();
    $data['menu_parent']= $this->menuModel->all();
  
    $data['menu_child']= $this->menuChildModel->all();
    $data['content']= $this->load->view($content,$data,true);
    $this->load->view('admin/template/main',$data);
   }
  
   public function form(){
    $data['film']= $this->filmModel->all();

    if($this->input->post('simpan'))
    {
        $array = array(
            'id_film'=>$this->input->post('id_film'),
            'nama_link'=>$this->input->post('nama_link'),
            'asal_link'=>$this->input->post('asal_link'),
            'url'=>$this->input->post('url'),
           
        );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        if($this->input->post('id_link')== '')
        {
            
            if($this->linkfilmModel->insert($array))
            {
            
                redirect('linkfilm');
            }
            else{
              
                redirect('linkfilm');
            }
        }
        else{
           
            if($this->linkfilmModel->update($array, array('id_link'=>$this->input->post('id_link'))))
            {
              
                redirect('linkfilm');
            }
            else{
               
                redirect('linkModel');
            }  
        }
    }
    $data['satu']= $this->linkfilmModel->getWhere(array('id_link'=>$this->uri->segment(3)))->row_array();
    if ($data['satu'] != null)
    {
        $data['judulform']= 'Edit Link Film';
        $data['tombol']= 'update';
    }

    // $data['alert'] = $this->alert;
    $this->template('master/linkfilm/form',$data);
}

  
   public function hapus(){
    if($this->uri->segment(3)) $this->linkfilmModel->delete(array('id_link'=>$this->uri->segment(3)));
    redirect('linkfilm');
}

  

}