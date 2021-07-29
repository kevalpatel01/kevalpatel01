<!--<html>
<head>
<title>userlogin</title>
<link rel = "style">
<h1>login</h1>
</head>
<body>

<form action ="index.php?action=login" method ="POST">
<label for="username">username:</label>
<input type="text" name="username"required><br><br>
<label for="password">password:</label>
<input type="password" id="psw" name="password"required><br><br> 
<input name="login" type="submit" value="login">
</form>
<p>not registered yet?<a href="view/userregistration.php">register here</a></p>
</body>
</html>-->

<html>
<body>
<!--<link rel = "stylesheet" href="css/style.css"/>-->
<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first">
      <img src="https://w7.pngwing.com/pngs/811/233/png-transparent-computer-icons-user-login-desktop-others-blue-computer-prints.png" id="icon" alt="User Icon" />
    </div>
    <h1>login</h1>
    <form action ="index.php?action=login" method ="POST">
      <input type="text" id="username" class="fadeIn second" name="username"  placeholder = "username"required>
      <input type="password" id="psw" class="fadeIn third" name="password" placeholder="password"required>
      <input name="login" type="submit" class="fadeIn fourth" value="login">
    </form> 

    
    <div id="formFooter">
      <a class="underlineHover" href="view/userregistration.php"><h2>register yourself</h2></a>
    </div>

  </div>
</div>
</body>
</html>

