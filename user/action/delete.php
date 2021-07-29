<?php
session_start();
//include('../view/userdatabase.php');
include('../classes/productclass.php');

$delete = new products();
$id = $_GET['id'];
//$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
$result=$delete->deleterow($id);
if($result) {
    //mysqli_close($conn);
    $_SESSION['message'] = "Row deleted !!";
    header('location:http://localhost/user/index.php');
}
else {
    $_SESSION['message'] = "Error on row delete !!";
}
?>
<!--<html>
<body>
<script>
alert(areyousuretodeleterow ? );</script></body></html>-->