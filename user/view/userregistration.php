<?php
session_start();
include('../classes/userclass.php');
include('../view/message.php');
$newuser = new user();

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    //echo "$mobileno";exit;
    $register = $newuser -> userexists($username,$mobileno);
    //echo "here";exit;
    //echo $register;exit;
    //print_r($register)
    if($register > 0) {
        //$_SESSION['message'] = "user already registered!!"; 
        //echo $_SESSION['message'];
        //echo "a";exit;
        $_SESSION['message'] = "user already registered!!";
        //echo "a";exit;
        //$_SESSION['message'] = "user already registered!!";
        //echo "user already registered!!";
        header('location:userregistration.php');
      }

    else {

        $register = $newuser -> userregistration($username,$password,$mobileno,$email);
        //echo $mobileno;exit;
        //print_r($register);exit;
        if($register) {
          //echo "a1";exit;
          $_SESSION['message'] = "registraton successful!!";
          //echo $_SESSION['message'];
          // echo "registration successful!!"; 
           header('location:userregistration.php');           
        }
        else {
          $_SESSION['message'] = "something went wrong.plz try again!!";
            header('location:userregistration.php');
        }
    }
}
?>
<!--<html>
<head>
<title>userregistration</title>
<h1>registration</h1>
</head>
<body>
<form action="userregistration.php" method="POST">
<input type="text" name="username"required><br><br>
<input type="password" name="password"required><br><br>
<input name="register" type="submit" value="register">
</form>

<p>already registered?<a href="http://localhost/user/index.php">Login here</a>
</table>
</body>
</html>-->
<html>
<body>
<link rel = "stylesheet" href="../css/style.css"/>
<div class="wrapper fadeInDown">
  <div id="formContent">
    


    <div class="fadeIn first">
      <img src="https://w7.pngwing.com/pngs/811/233/png-transparent-computer-icons-user-login-desktop-others-blue-computer-prints.png" id="icon" alt="User Icon" />
    </div>
    <h1>registration</h1>

    <form action="userregistration.php" method="POST">
      <input type="text"  class="fadeIn second" name="username" placeholder="username"required>
      <input type="password"  class="fadeIn third" name="password" placeholder="password"required>
      <input type="text" class="fadeIn third" name="email" placeholder="email"required>
      <input type="text"   class="fadeIn third" name="mobileno" placeholder="mobile number"required>
      <input name = "register" type="submit" class="fadeIn fourth" value="register">
    </form>

    
    <div id="formFooter">
      <a class="underlineHover" href="http://localhost/projects/user/index.php"><h2>login yourself</h2></a>
    </div>

  </div>
</div>
</body>
</html>
