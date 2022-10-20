<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ThemesModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function all(){
        $this->db->select('themes.*');
        $this->db->from('themes');
        $this->db->where('id_themes', '1');
        $query =  $this->db->get();
        return $query;
    }

    
    

    

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('themes');
    }


    public function insert($data)
    {
        $this->db->insert('themes',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('themes',$data);   
    }

   
}
?>