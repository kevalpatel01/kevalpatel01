<?php
session_start();
//include('classes/userclass.php');
$action = isset($_GET['action'])?$_GET['action']:"";

include('view/header.php');
include('view/message.php');

if($action !=''){
    include('action/'.$action.'.php');
}
//var_dump($_SESSION['login']);exit;
//echo "here";exit;
if(!empty($_SESSION['login'])) {
    include('view/userdashboard.php');
} else {
    include('view/userlogin.php');
}

include('view/footer.php');

?>

