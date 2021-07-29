
<?php
session_start();
include('classes/userclass.php');
$login = new user();
//public $conn;
//echo "$login";exit;
if (isset($_POST['login'])) {
    //session_start();
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    //$_SESSION['login'] = true;
    //$_SESSION['username'] = "$username";
    //$_SESSION['password'] = "$password";
    $result = $login->userlogin($username, $password);
    //$login =$conn->result($userlogin);
    //echo "here";exit;
    /*$_SESSION['login'] = true;
        $_SESSION['username'] = "$username";
        $_SESSION['password'] = "$password";*/
    if ($result) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = "$username";
        $_SESSION['password'] = "$password";
        header('location:index.php');
    } else {

        $_SESSION['message'] = "Incorrect Login";

        header('location:index.php');

        //header('location:userlogin.php');
    }
}
?>
