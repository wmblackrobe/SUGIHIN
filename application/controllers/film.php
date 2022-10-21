<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends CI_Controller{
    private $alert ='';

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['judul'] = 'Film';
        $this->load->model('setting/themes/themesModel');
        $this->load->model('masterdata/film/filmModel');
        $this->load->model('masterdata/negara/negaraModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
    }

    public function index(){
     $data['film']= $this->filmModel->all();
     $data['judul']= $_SESSION['judul'];
     $this->template('master/film/list',$data);
    }

    public function template($content,$data=null){
    $data['session']= 'Master Data';
    $data['session_child']= 'Film';
    $data['judul']= $_SESSION['judul'];
    $data['themes']= $this->themesModel->all();
    $data['menu_parent']= $this->menuModel->all();
    $data['menu_child']= $this->menuChildModel->all();
    $data['content']= $this->load->view($content,$data,true);
    $this->load->view('admin/template/main',$data);
   }
  
   public function form(){
    $data['negaradata']= $this->negaraModel->all();

    if($this->input->post('simpan'))
    {
        $array = array(
            'judul_film'=>$this->input->post('judul_film'),
            'director'=>$this->input->post('director'),
            'pemeran'=>$this->input->post('pemeran'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'tahun'=>$this->input->post('tahun'),
            'id_negara'=>$this->input->post('id_negara'),
            'poster'=>$_FILES['poster']['name'],
        );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        if($this->input->post('id_film')== '')
        {
            
            if($this->filmModel->insert($array))
            {
            
                redirect('film');
            }
            else{
              
                redirect('film');
            }
        }
        else{
           
            if($this->filmModel->update($array, array('id_film'=>$this->input->post('id_film'))))
            {
              
                redirect('film');
            }
            else{
               
                redirect('film');
            }  
        }
    }
    $data['satu']= $this->filmModel->getWhere(array('id_film'=>$this->uri->segment(3)))->row_array();
    if ($data['satu'] != null)
    {
        $data['judulform']= 'Edit Film';
        $data['tombol']= 'update';
    }

    // $data['alert'] = $this->alert;
    $this->template('master/film/form',$data);
}

  
   public function hapus(){
    if($this->uri->segment(3)) $this->filmModel->delete(array('id_film'=>$this->uri->segment(3)));
    redirect('film');
   }

  

}