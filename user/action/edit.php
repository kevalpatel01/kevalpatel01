<?php
session_start();
//include('/view/header.php');
include('../classes/productclass.php');
//error_reporting(0);
$edit = new products();
$id = ($_GET['id']);

$sql = "SELECT  `name`, `model`, `price`,`filename` FROM `products` WHERE id = '$id'";
$result = $edit->conn->query($sql);
$table = $result->fetch_array();
if (isset($_POST) && !empty($_POST) ) {
  $name = ($_POST['name']);
  $model = ($_POST['model']);
  $price = ($_POST['price']);
  //if (isset($_FILES['filename']['name'])) {
  $filename = ($_FILES['filename']['name']);
  $target = "../image/" . basename($_FILES['filename']['name']);
    move_uploaded_file($_FILES['filename']['tmp_name'], $target);

  //$filename = ($_FILES['filename']['name']);

 /*$imageFileType =pathinfo($filename,PATHINFO_EXTENSION);
 
  // if(!empty($_FILES['filename']['name'])) {
  //echo $filename;exit;
  //$filename = $_GET['filename'];
  $extensions =array("jpg","jpeg","png","gif");
  if( !in_array($imageFileType,$extensions)  ) {
    //echo "a";exit;
    $_SESSION['message'] = "uploaded image format not valid!!";


    header('location:http://localhost/user/index.php');
    //echo "a";exit;
  }else {
  

    //echo "a1";exit;
    $target = "../image/" . basename($_FILES['filename']['name']);
    move_uploaded_file($_FILES['filename']['tmp_name'], $target);

    //$operation = ($_POST['operation']);
   //echo "a";exit;
  }*/

  $result = $edit->editrow($id, $name, $model, $price, $filename);
  //print_r($result);exit;
  //echo $result;exit;
  if ($result) {
    $_SESSION['message'] = "row edited!!";
    header('location:http://localhost/user/index.php');
  } else {
    $_SESSION['message'] = "error in editing row";
  }
}


//}
//}



?>
<html>

<head>

</head>

<body>
  <link rel="stylesheet" href="../css/style.css" />
  <div class="wrapper fadeInDown">
    <div id="formContent">



      <div class="fadeIn first">
        <img src="https://w7.pngwing.com/pngs/811/233/png-transparent-computer-icons-user-login-desktop-others-blue-computer-prints.png" id="icon" alt="User Icon" />
      </div>
      <h1>edit product</h1>
      
      
      <form action="edit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <td width="10" height="10">
        <?php  echo "<img src='../image/".$table['filename']."'>";?>
        </td>
        <!--<td width="10" height="10"><?php echo "<img src='image/". $table['filename']."'>" . "<br>";?></td>-->
        <input type="file" id="myfile" name="filename" accept=".jpeg,.jpg,.png,.gif"/><br />
        
        <input type="text" id="name" name="name" value="<?php echo $table['name']; ?>" placeholder="enter name" required>
        <input type="text" id="model" name="model" value="<?php echo $table['model']; ?>" placeholder="enter model" required>
        <input type="text" id="price" name="price" value="<?php echo $table['price']; ?>" placeholder="enter price" required>
        <input name="edit" type="submit" class="fadeIn fourth" value="edit">
      </form>



    </div>
  </div>

</body>

</html>