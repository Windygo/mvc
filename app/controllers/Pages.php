<?php

class Pages extends Controller {

  public function __construct(){
    
  }

  public function index(){

    $data = array(
      'title' => 'Eshel MVC',        
    );

    $this->view('index', $data);  //don't add the .php -- it is added by the controller
  }

  public function about(){ 
    $data = array(
      'title' => 'About Us',     
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
