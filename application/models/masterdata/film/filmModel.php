<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FilmModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){

        $this->db->select('film.*, negara.nama_negara as nn');
        $this->db->from('film');
        $this->db->join('negara','negara.id_negara = film.id_negara ');
        $query =  $this->db->get();
        return $query;
      
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('film');
    }


    public function insert($data)
    {
        $this->db->insert('film',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('film',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('film',$where);
    }
}
?>