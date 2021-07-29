    <?php

session_start();
session_unset();
session_destroy();
echo"logout successful..";
header('location:http://localhost/user/index.php');


?>
<br> 
<a href="userlogin.php">Login</a>
