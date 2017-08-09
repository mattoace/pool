<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class PlaylistController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Playlist','playlist');
    }
 
    public function index()
    {
        $this->load->helper('url');
        
    }
 
    public function fetchPlaylist()
    {
        $list = $this->playlist->getPlaylist();        
        echo json_encode($list);
    }


 
}

