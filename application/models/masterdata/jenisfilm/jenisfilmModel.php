<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisfilmModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        return $this->db->get('jenis_film');
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('jenis_film');
    }


    public function insert($data)
    {
        $this->db->insert('jenis_film',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('jenis_film',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('jenis_film',$where);
    }
}
?>