<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class UserController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User','user');
    }
 
    public function index()
    {
        $this->load->helper('url');
        
    }
 
      public function register(){ 

             $array = array(
                    'firstname'=>$this->input->post("firstname"),
                    'secondname' => $this->input->post("secondname"),
                    'email' => $this->input->post("email"),
                    'username' => $this->input->post("username"),
                    'pass' => $this->input->post("pass")
                ); 
         $qcd = $this->user->addNew($array);
         echo json_encode(array("id"=>$qcd));
      }

      public function check(){ 

        $username = $this->input->post("username");

        $pass = $this->input->post("pass");

        $array = array('username' => $username, 'pass' => $pass);

        $qcd = $this->user->login_check($array); 

           if ($qcd->num_rows()>0) {
                $result = $qcd->row_array();
                $id = $result['id'];
            } else {
                $result = false;
                $id = 0;
            }

      //  if($result){
           
           // setcookie( "userlogin", $result['id'], time() + (86400 * 30), "/" ); 

            //header("location: user-profile");

          //}else{

           // header("location: signin?auth=1");

         // }  
      echo json_encode(array("id"=>$id));
      }
 
}

