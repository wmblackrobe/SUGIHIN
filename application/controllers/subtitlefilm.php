<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subtitlefilm extends CI_Controller{
    private $alert ='';

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['judul'] = 'Subtitle Film';
        $this->load->model('setting/themes/themesModel');
        $this->load->model('masterdata/subtitlefilm/subtitlefilmModel');
        $this->load->model('masterdata/film/filmModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
    }

    public function index(){
     $data['subtitlefilm']= $this->subtitlefilmModel->all();
     $data['judul']= $_SESSION['judul'];
     $this->template('master/subtitlefilm/list',$data);
    }

public function template($content,$data=null){
    $data['session']= 'Master Data';
    $data['session_child']= 'Subtitle Film';
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
            'bahasa'=>$this->input->post('bahasa'),
            'url'=>$this->input->post('url'),
           
        );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        if($this->input->post('id_subtitle')== '')
        {
            
            if($this->subtitlefilmModel->insert($array))
            {
            
                redirect('subtitlefilm');
            }
            else{
              
                redirect('subtitlefilm');
            }
        }
        else{
           
            if($this->subtitlefilmModel->update($array, array('id_subtitle'=>$this->input->post('id_subtitle'))))
            {
              
                redirect('subtitlefilm');
            }
            else{
               
                redirect('subtitlefilm');
            }  
        }
    }
    $data['satu']= $this->subtitlefilmModel->getWhere(array('id_subtitle'=>$this->uri->segment(3)))->row_array();
    if ($data['satu'] != null)
    {
        $data['judulform']= 'Edit Subtitle Film';
        $data['tombol']= 'update';
    }

    // $data['alert'] = $this->alert;
    $this->template('master/subtitlefilm/form',$data);
}

  
   public function hapus(){
    if($this->uri->segment(3)) $this->subtitlefilmModel->delete(array('id_subtitle'=>$this->uri->segment(3)));
    redirect('subtitlefilm');
}

  

}