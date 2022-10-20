<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuChildModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        $this->db->select('menu_child.*, menu_parent.menu_parent as mp');
        $this->db->from('menu_child');
        $this->db->join('menu_parent','menu_parent.id_menu_parent = menu_child.id_menu_parent ');
        $query =  $this->db->get();
        return $query;
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('menu_child');
    }

    public function insert($data)
    {
        $this->db->insert('menu_child',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('menu_child',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('menu_child',$where);
    }

    
}