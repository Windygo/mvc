<?php
/*
* App core class
* Creates URL & loads core WP_oEmbed_Controller
* URL FORMAT - /controller/method/params
*/

class Core {
  protected $currentController ='Pages';
  protected $currentMethod ='index';
  
  protected $params = [];

  public function __construct(){
    //print_r($this->getUrl()); 

    $url = $this->getUrl();

    // Look in controllers for first value from the array

    if (file_exists('../app/controllers/'. ucwords($url[0]) .'.php')){
      // If exists set as controller
      $this->currentController = ucwords($url[0]);
      // Unset 0 index
      unset ($url[0]);
    }

      // Require the controller
      require_once ('../app/controllers/' . $this->currentController . '.php');
    
      // Instantiate the controller class
      $this->currentController = new $this->currentController;

      //Check for 2nd part of url  
      if (isset($url[1])){        
        //Check to see if the method exists in the controller
        if (method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1];
          // Unset 1 index
          unset ($url[1]);
        }
      }

      //Get params
      $this->params = $url ? (array_values($url)) : []; //any params added otherwise stays empty

      //Call callback with an array of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

  }


  public function getUrl(){

    if (isset($_GET['url'])){
      $url = rtrim($_GET['url'],'/'); //removes slashes from url
      $url = filter_var($url, FILTER_SANITIZE_URL); //removes any characters that a url should not have
      $url = explode('/', $url); //breaks the url by '/' into an array
      return $url;
    }
  }
  
}