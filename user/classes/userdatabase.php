<?php

    define('DB_SERVER','localhost');
    define ('DB_USER' , 'root'); 
    define ('DB_PASSWORD' ,'');
    define  ('DB_NAME' , 'user');
    

class Database {
    /*define'servername','localhost';
    define 'username' , 'root'; 
    define 'password' ,'';
    define  'dbname' , ''user;*/

    public  $conn;

    public function __construct() {
        $this->conn = $this->dbconnection();
    }
    
    public function dbconnection() {
    $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
    //$query="UPDATE products SET sku='$sku',filename='$filename' name='$name',model='$model',price='$price' WHERE id='$id'";
      //  $result = $conn->query($query);
    if($conn->connect_error) {
        die("connection failed:" .$conn->connect_error);
    }   
        //echo "connected successfully!!";
        //echo "database connected!!";
        return $conn;
    }
}
