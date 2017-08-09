<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Playlist extends CI_Model {
 
   
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
   public function getPlaylist()
      { 
       $query = $this->db->query('
            SELECT * FROM music
        '); 
    return $query->result();
    }
 
}