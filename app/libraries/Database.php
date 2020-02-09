<?php

/*
* DBO Datbase Class
* Connect to database
* Create prepared statements
* Bind values
* Returns rows & results
*/

class Database {

  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbname = DB_NAME;

  private $dbh; //database handler
  private $stmt;
  private $error;

  public function __construct(){
    // Set DSN -- Data Source Name
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    $options = array(
      PDO::ATTR_PERSISTENT => true, //persisent connection, better performance
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    //create PDO instance
    try {
      $this->dbh = new PDO ($dsn, $this->user, $this->pass, $options);
    } catch(PDOException $e){
      $this->error = $e->getMessage();  //will give the error message
      echo $this->error;
    }
  } //construct

  //Prepare statement with query
  public function query ($sql){
    $this->stmt = $this->dbh->prepare($sql);
  }

  //Bind values
  public function bind ($param, $value, $type = null){
    if (is_null($type)) {
      switch(true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default: 
          $type = PDO::PARAM_STR;
          break;
      } //switch
    } // if
    
    $this->stmt->bindValue($param, $value, $type);      
  }  //bind


// Exectute the prepares statement
public function execute() {
  return $this->stmt->execute();
} //execute    

// Get result set as array of objects
public function resultSet() {
  $this->execute();
  return $this->stmt->fetchAll(PDO::FETCH_OBJ);
} //result all rows   

//Get single row as object
public function single() {
  $this->execute();
  return $this->stmt->fetch(PDO::FETCH_OBJ);
} //result single row  

//Get row count -- a PDO method
public function rowCount(){
  return $this->stmt->rowCount();
}

} //class


