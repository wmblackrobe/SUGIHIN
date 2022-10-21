<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryfilmModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        
        $this->db->select('sub_jenis_film.*, film.judul_film as judul, jenis_film.jenis_film ');
        $this->db->from('sub_jenis_film');
        $this->db->join('film','film.id_film = sub_jenis_film.id_film');
        $this->db->join('jenis_film','jenis_film.id_jenis = sub_jenis_film.id_jenis');
        $query =  $this->db->get();
        return $query;
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('sub_jenis_film');
    }


    public function insert($data)
    {
        $this->db->insert('sub_jenis_film',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('sub_jenis_film',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('sub_jenis_film',$where);
    }

}
?>