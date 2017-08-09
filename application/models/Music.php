<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Music extends CI_Model {
 
   
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    public function addNewMp3($arrObject){ 
      $this->db->insert('music', $arrObject);
      return $this->db->insert_id();
    }

    public function addNewVideo($arrObject){ 
      $this->db->insert('videos', $arrObject);
      return $this->db->insert_id();
    }
 
}