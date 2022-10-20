<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IconModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        return $this->db->get('icon');
    }

    
}