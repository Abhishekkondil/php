<?php

class HomeController extends CI_Controller
{
  
    public function index()
    {
              //echo "this is index function controller";
              $this->load->view('home');
    }
    
    public function test()
    {
        echo "this is test function controller";
    }
}