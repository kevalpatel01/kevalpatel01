<?php
session_start();
include('../classes/productclass.php');
//$msg=" ";
// echo "A"; exit;
// print_r($_POST); exit;
//if(empty($_POST['add'])) {
  /*$targetDir = "image/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);*/
        
$add = new products();
if(isset($_POST) && !empty($_POST)) {
  
        $name = ($_POST['name']);
        $model = ($_POST['model']);
        $price = ($_POST['price']);
        //$filename = ($_POST['filename']);
        $filename = ($_FILES['filename']['name']);
        
        $imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
        $extensions =array("jpg","jpeg","png","gif");
        //print_r($extensions);exit;
        //echo $filename;exit;
        if(!in_array($imageFileType,$extensions)) {
          //echo "1";exit;
          $_SESSION['message'] = "uploaded image format not valid!!";
            //header('location:http://localhost/user/index.php');
        }else {
          //echo "this image cannot be uploaded!!";
          $target = "../image/".basename($_FILES['filename']['name']);
          move_uploaded_file($_FILES['filename']['tmp_name'], $target);
        }
        $result = $add->addrow($name,$model,$price,$filename);       
if($result) {
    $_SESSION['message'] = "row added!!";

    header('location:http://localhost/user/index.php');
}
else {
    $_SESSION['message'] = "error in adding row";
}
        
}
?>
<html>

<body>
<link rel="stylesheet" href="../css/style.css"/>
<div class="wrapper fadeInDown">
  <div id="formContent">
    


    <div class="fadeIn first">
      <img src="https://w7.pngwing.com/pngs/811/233/png-transparent-computer-icons-user-login-desktop-others-blue-computer-prints.png" id="icon" alt="User Icon" />
    </div>
    <h1> add new product<h1>
    <tr>
      
      
    <form action ="add.php?action=add" method ="POST" enctype="multipart/form-data">
 <!--<th><input type = "text" id="id"name= "id" placeholder="enter id"></th>-->
 <!--<th><input type="image" id="image" alt="Login"
       src="/media/examples/login-button.png"></th>-->
    <th><input type="file" id="myFile" name="filename" accept=".jpeg,.jpg,.png,.gif" required></th>
 <th><input type = "text" id="name" name="name" placeholder="enter name"required></th>
<th><input type = "text" id="model" name="model"placeholder="enter model"required></th>
<th><input type = "text" id ="price" name="price" placeholder= "enter price"required></th>
<input name = "add" type="submit" class="fadeIn fourth" value="add">
</form>
</tr>

    

  </div>
</div>

</body>
</html>