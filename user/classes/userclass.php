<?php
include(__DIR__ . '/../classes/userdatabase.php');
//error_reporting(0);

class user extends Database
{
    public static $table = 'userdetails';
    public function __construct()
    {
        //$this->table = "userdetails";
        parent::__construct();
    }

    public function userregistration($username, $password, $mobileno, $email)
    {
        //$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
        $table = self::$table;
        $sql1 = "INSERT INTO $table (username , password, mobileno, email) values ('$username','$password','$mobileno','$email')";
        //$result = $this->conn->query($sql1);
        //echo $sql1;exit;
        if ($this->conn->query($sql1)) {
            //echo "here";exit;
            return true;
        } else {
            return false;
        }
    }


    public function userlogin($username, $password)
    {
        //$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
        $table = self::$table;
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $sql2 = "select * from $table where username = '$username' and password = '$password'";
        $result = $this->conn->query($sql2);
        //echo "$sql2";exit;
        if ($result->num_rows > 0) {
            //echo "here";exit;
            return true;
        } else {
            return false;
        }
    }


    public function userexists($username,$mobileno)
    {
        //$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
        $table = self::$table;
        $sql3 = "select username from $table where username = '$username' and mobileno = '$mobileno'";
        $result = $this->conn->query($sql3);
        // echo $sql3;exit;
        //print_r($result);exit;
        if ($result->num_rows > 0) {
           // echo "a";exit;
            return true;
        } else {
            return false;
        }
    }


    public function getusername($username)
    {
        //$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
        $table = self::$table;
        $sql4 = "select username from $table where username = '$username'";
        $result = $this->conn->query($sql4);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

}
