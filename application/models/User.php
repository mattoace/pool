<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Model { 
 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    } 

   public function fetch()
      { 
       $query = $this->db->query('
           
        '); 
    return $query->result();
    }
   

    public function addNew($arrObject){ 
      $this->db->insert('user', $arrObject);
      return $this->db->insert_id();
    }
    public function saveRecord($arrObject,$id){        
      $this->db->where('id',$id);
      $this->db->update('user',$arrObject);
      return $id;
    }
 
    public function deleteRecord($id){
      $this->db->where('id', $id);
      $this->db->delete('user'); 
    }

    public function login_check($array){ 
        $this->db->select('*');
        $this->db->from('user');     
        $this->db->where($array); 
        $query = $this->db->get();
        //var_dump($this->db->last_query()); exit();
     return $query;    
    }
 
}