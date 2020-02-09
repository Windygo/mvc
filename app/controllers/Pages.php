<?php

class Pages extends Controller {

  public function __construct(){
    
  }

  public function index(){

    $data = array(
      'title' => 'SharePosts', 
      'description' => 'Simple social network built on the Eshel PHP MVC framework'      
    );

    $this->view('index', $data);  //don't add the .php -- it is added by the controller
  }

  public function about(){ 
    $data = array(
      'title' => 'About Us',  
      'description' => 'App to share posts with other users.'   
    );

    $this->view('about', $data);  //don't add the .php -- it is added by the controller
  }

  public function vars(){ 
    $data = array(
      'title' => 'Vars',     
    );

    $this->view('vars', $data);  //don't add the .php -- it is added by the controller
  }
}
