<?php

class Users extends Controller {
  public function __constructor(){
    //Load our model
  }

  public function index(){
    //
  }

  public function register(){
    //Check for POST

    //Sanitize POST data
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      //Process form
      $data = array(
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      );

    //Validate email
    if (empty($data['email'])){
      $data['email_err'] = 'Please enter email';
    }

    //Validate name
    if (empty($data['name'])){
      $data['name_err'] = 'Please enter name';
    }

    //Validate password
    if (empty($data['password'])){
        $data['password_err'] = 'Please enter password';
    } else {
      if (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must be at least 6 characters long';  
      }
    }

    //Validate confirm password
    if (empty($data['password'])){
      $data['password_err'] = 'Please enter password';
    } else {
      if ($data['password'] != $data['confirm_password'] ) {
        $data['password_err'] = 'Passwords do not match';  
      }
    }

    //Make sure all errors are empty (i.e. all entries legit)
    if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err']))
    {
      //Validated
      die('SUCCESS'); 
    } else {
      //Load view with errors
      $this->view('users/register',$data);

    }


    } else {
      //Init data
      $data = array(
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      );
      //Load view
      $this->view('users/register', $data);
    }
  }

  public function login(){
    //Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      //Process form
    } else {
      //Init data
      $data = array(       
        'email' => '',
        'password' => '',        
        'email_err' => '',
        'password_err' => ''        
      );
      //Load view
      $this->view('users/login', $data);
    }
  }
}