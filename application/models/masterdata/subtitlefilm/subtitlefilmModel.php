<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubtitlefilmModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        
        $this->db->select('subtitle_film.*, film.judul_film as judul');
        $this->db->from('subtitle_film');
        $this->db->join('film','film.id_film = subtitle_film.id_film');
        $query =  $this->db->get();
        return $query;
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('subtitle_film');
    }


    public function insert($data)
    {
        $this->db->insert('subtitle_film',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('subtitle_film',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('subtitle_film',$where);
    }

}
?>