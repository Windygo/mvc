<?php

/*
* Base Controller
* Loads models and views
*/

class Controller {
  //load model
  public function model($model) {
    //Require model file
    require_once('../app/models/'. $model . '.php');

    //Instantiate the model
    return new $model;    
  }

  public function view($view, $data=[]) { // use array $data to pass dynamic values    
    
    //Check for the view file    
    if (file_exists('../app/views/'. $view . '.php')){     
      require_once('../app/views/'. $view . '.php');
    } else {
      // $view does not exist
      die('View does not exist');  //die() will stop the application
    }
  
  }
  
}