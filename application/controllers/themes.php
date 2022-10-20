<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends CI_Controller{
    private $alert ='';

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['judul'] = 'Themes';
        $this->load->model('setting/themes/themesModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
    }

    public function index(){
     $data['themes']= $this->themesModel->all();
     $data['judul']= $_SESSION['judul'];
     $this->template('admin/themes/form',$data);
    }

public function template($content,$data=null){
    $data['session']= 'Setting';
    $data['session_child']= 'Themes';
    $data['judul']= $_SESSION['judul'];
    $data['menu_parent']= $this->menuModel->all();
    $data['menu_child']= $this->menuChildModel->all();
    $data['content']= $this->load->view($content,$data,true);
    $this->load->view('admin/template/main',$data);
   }
  
  

   public function formaction(){
   
       if($this->input->post('simpan'))
       {
           $array = array(
               'nama_app'=>$this->input->post('nama_app'),
               'version'=>$this->input->post('version'),
               'disclaimer'=>$this->input->post('disclaimer'),
               'logo'=>$_FILES['logo']['name'],
               'logo_front'=>$_FILES['logo_front']['name'],
               
           );
                                
           $this->themesModel->update($array, array('id_themes'=>$this->input->post('id_themes')));
           redirect('themes');

                   
        
        
       }
   }

}