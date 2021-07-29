<html>
    <body>
        <strong>
        <center>
        <?php
//session_start();
//echo         $_SESSION['message'];exit;
$message = isset($_SESSION['message'])?$_SESSION['message']:"";

if($message != ''){
    echo $message;
    $_SESSION['message'] = '';
} 
        ?>
        </center>
</strong>   
    </body>
</html>