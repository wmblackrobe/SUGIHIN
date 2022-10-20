<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        $this->db->from('menu_parent');
        $this->db->order_by("urutan", "asc");
        $query = $this->db->get();
        return $query;
    }

    public function allwithchild(){

        $this->db->select('menu_child.*, menu_parent.*');
        $this->db->from('menu_parent');
        $this->db->join('menu_child','menu_parent.id_menu_parent = menu_child.id_menu_parent ');
        $this->db->order_by("menu_parent.urutan", "asc");
        $query = $this->db->get();
        return $query;
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('menu_parent');
    }

    public function insert($data)
    {
        $this->db->insert('menu_parent',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('menu_parent',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('menu_parent',$where);
    }

    
}