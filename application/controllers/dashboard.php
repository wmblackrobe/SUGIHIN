<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('setting/themes/themesModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
        $_SESSION['judul'] = 'Dashboard';
    }

    public function index(){
    $data['session']= 'Dashboard';
    $data['session_child']= '';
    $data['judul']= $_SESSION['judul'];
    $data['menu_parent']= $this->menuModel->all();
    $data['menu_child']= $this->menuChildModel->all();
    $this->template('admin/dashboard/dashboard',$data);
    }


    public function template($content,$data=null){
    $data['themes']= $this->themesModel->all();
    $data['content']= $this->load->view($content,$data,true);
    $this->load->view('admin/template/main',$data);
    }
    
}
?>