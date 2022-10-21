<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LinkfilmModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        
        $this->db->select('link_film.*, film.judul_film as judul');
        $this->db->from('link_film');
        $this->db->join('film','film.id_film = link_film.id_film');
        $query =  $this->db->get();
        return $query;
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('link_film');
    }


    public function insert($data)
    {
        $this->db->insert('link_film',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('link_film',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('link_film',$where);
    }

}
?>