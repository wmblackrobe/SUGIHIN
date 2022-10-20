<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('setting/themes/themesModel');
        $this->load->model('setting/menu/menuModel');
        $this->load->model('setting/menu/menuChildModel');
        $this->load->model('setting/icon/iconModel');
        $_SESSION['judul'] = 'Menu';
    }

    public function index(){
        $data['semua']= $this->menuModel->all();
        $data['menu_child']= $this->menuChildModel->all();
        $data['judul']= $_SESSION['judul'];
        $this->template('admin/menu/menu_list',$data);
    }


    public function template($content,$data=null){
    $data['content']= $this->load->view($content,$data,true);
    $data['themes']= $this->themesModel->all();
    $data['session']= 'Setting';
    $data['session_child']= 'Menu';
    $data['judul']= $_SESSION['judul'];
    $data['menu_parent']= $this->menuModel->all();
    $data['menu_child']= $this->menuChildModel->all();
    $this->load->view('admin/template/main',$data);
    }


    public function form(){
        $data['icondata']= $this->iconModel->all();

        if($this->input->post('simpan'))
        {
            $array = array(
                'menu_parent'=>$this->input->post('menu_parent'),
                'icon'=>$this->input->post('icon'),
                'flag'=>$this->input->post('flag'),
                'url'=>$this->input->post('url'),
                'urutan'=>$this->input->post('urutan'),
            );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
            if($this->input->post('id_menu_parent')== '')
            {
                
                if($this->menuModel->insert($array))
                {
                
                    redirect('menu');
                }
                else{
                  
                    redirect('menu');
                }
            }
            else{
               
                if($this->menuModel->update($array, array('id_menu_parent'=>$this->input->post('id_menu_parent'))))
                {
                  
                    redirect('menu');
                }
                else{
                   
                    redirect('menu');
                }  
            }
        }
        $data['satu']= $this->menuModel->getWhere(array('id_menu_parent'=>$this->uri->segment(3)))->row_array();
        if ($data['satu'] != null)
        {
            $data['judulform']= 'Edit Menu Utama';
            $data['tombol']= 'update';
        }

        // $data['alert'] = $this->alert;
        $this->template('admin/menu/form',$data);
    }

    public function formChild(){
        $data['icondata']= $this->iconModel->all();
        $data['menuparent']= $this->menuModel->all();
        if($this->input->post('simpan'))
        {
            $array = array(
                'menu_child'=>$this->input->post('menu_child'),
                'id_menu_parent'=>$this->input->post('id_menu_parent'),
                'icon'=>$this->input->post('icon'),
                'url'=>$this->input->post('url-mc'),
            );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
            if($this->input->post('id_menu_child') == '')
            {
                
                if($this->menuChildModel->insert($array))
                {
                    
                    redirect('menu');
                }
                else{
                  
                    redirect('menu');
                }
            }
            else{
               
                if($this->menuChildModel->update($array, array('id_menu_child'=>$this->input->post('id_menu_child'))))
                {
                   
                    redirect('menu');
                }
                else{
                  
                    redirect('menu');
                }  
            }
        }
        $data['satu']= $this->menuChildModel->getWhere(array('id_menu_child'=>$this->uri->segment(3)))->row_array();
        if ($data['satu'] != null)
        {
            $data['judulchild']= 'Edit Menu Child';
            $data['tombol']= 'update';
        }

      
        $this->template('admin/menu/formChild',$data);
    }

   

    public function hapus(){
        if($this->uri->segment(3)) $this->menuModel->delete(array('id_menu_parent'=>$this->uri->segment(3)));
        redirect('menu');
    }

    public function hapusChild(){
        if($this->uri->segment(3)) $this->menuChildModel->delete(array('id_menu_child'=>$this->uri->segment(3)));
        redirect('menu');
    }

    
}
?>