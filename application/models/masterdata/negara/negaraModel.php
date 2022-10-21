<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NegaraModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        return $this->db->get('negara');
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('negara');
    }


    public function insert($data)
    {
        $this->db->insert('negara',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('negara',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('negara',$where);
    }
}
?>