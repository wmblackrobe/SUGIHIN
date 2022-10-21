<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoryfilm extends CI_Controller{
    private $alert ='';

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['judul'] = 'Category Film';
        $this->load->model('setting/themes/themesModel');
        $this->load->model('masterdata/jenisfilm/jenisfilmModel');
        $this->load->model('masterdata/film/filmModel');
        $this->load->model('masterdata/categoryfilm/categoryfilmModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
    }

    public function index(){
     $data['categoryfilm']= $this->categoryfilmModel->all();
     $data['judul']= $_SESSION['judul'];
     $this->template('master/categoryfilm/list',$data);
    }

public function template($content,$data=null){
    $data['session']= 'Master Data';
    $data['session_child']= 'Category Film';
    $data['judul']= $_SESSION['judul'];
    $data['themes']= $this->themesModel->all();
    $data['jenisfilm']= $this->jenisfilmModel->all();
    $data['film']= $this->filmModel->all();
    $data['menu_parent']= $this->menuModel->all();
    $data['menu_child']= $this->menuChildModel->all();
    $data['content']= $this->load->view($content,$data,true);
    $this->load->view('admin/template/main',$data);
   }
  
   public function form(){
   

    if($this->input->post('simpan'))
    {
        $array = array(
            'id_film'=>$this->input->post('id_film'),
            'id_jenis'=>$this->input->post('id_jenis'),
        );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        if($this->input->post('id_sub_film')== '')
        {
            
            if($this->categoryfilmModel->insert($array))
            {
            
                redirect('categoryfilm');
            }
            else{
              
                redirect('categoryfilm');
            }
        }
        else{
           
            if($this->categoryfilmModel->update($array, array('id_sub_film'=>$this->input->post('id_sub_film'))))
            {
              
                redirect('categoryfilm');
            }
            else{
               
                redirect('categoryfilm');
            }  
        }
    }
    $data['satu']= $this->categoryfilmModel->getWhere(array('id_sub_film'=>$this->uri->segment(3)))->row_array();
    if ($data['satu'] != null)
    {
        $data['judulform']= 'Edit Category Film';
        $data['tombol']= 'update';
    }

    // $data['alert'] = $this->alert;
    $this->template('master/categoryfilm/form',$data);
   }

  
   public function hapus(){
    if($this->uri->segment(3)) $this->categoryfilmModel->delete(array('id_sub_film'=>$this->uri->segment(3)));
    redirect('categoryfilm');   
   }

  

}