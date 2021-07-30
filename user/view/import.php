<?php
session_start();
//include('../classes/userdatabase.php');
include('../classes/productclass.php');
$import = new products();
if (isset($_POST["Import"])) {

  /* $filename=$_FILES["filename"]["tmp_name"];  
    if($_FILES["filename"]["size"]>0){ 
    //$file = fopen($filename, "r");
    $file = fopen($filename, 'r');
    $column = fgetcsv($file, 1024, ',');
    //echo $filename;
    //echo sizeof($column);
    //print_r($filename);exit;
    
    while (($column  = fgetcsv($file, 10000, ",")) !== FALSE)
           { 
            
           $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

            $prevQuery = "SELECT id  FROM products WHERE name = '".$column[1]."'";
                $prevResult = $conn->query($prevQuery);
                //echo $prevQuery;exit;
               // echo "<pre>";
                //print_r($column);
               if($prevResult->num_rows > 0){

                    $update="UPDATE products SET sku = '$column[0]',name = '$column[1]', model = '$column[2]', price = '$column[3]' WHERE name = '".$column[1]."'";
                    $result=$conn->query($update);
                   //echo $update;exit;
                }else{
                      //echo "a";exit;
             $sql = "INSERT INTO products (`sku`,`name`, `model`, `price`) VALUES ( '".$column[0]."','".$column[1]."', '".$column[2]."','".$column[3]."')";                   
             $result = $conn->query($sql);
                   if(!isset($result)) {
                       echo "error uploading file!!";
                   } else {
                       echo "file uploaded successfully!!";
                       header('location:http://localhost/user/index.php');
                   } 
                  }
           } 
           //fclose($file);
        }*/

  $result = $import->importfile($filename);
  if ($result) {
    $_SESSION['message'] =  "error uploading file!!";
  } else {
    $_SESSION['message'] =  "file uploaded successfully!!";
    header('location:http://localhost/user/index.php');
  }
}
?>

<html>

<body>
  <link rel="stylesheet" href="../css/style.css" />
  <div class="wrapper fadeInDown">
    <div id="formContent">



      <div class="fadeIn first">
        <img src="https://icon-library.com/images/excel-sheet-icon/excel-sheet-icon-18.jpg" id="icon" alt="User Icon" />
      </div>

      <form action="import.php" method="POST" enctype="multipart/form-data">
        <label>Select File</label>
        <input type="file" name="filename" id="myfile" accept=".csv" required>

        <button type="submit" id="submit" name="Import">Import</button>
      </form>
    </div>
  </div>

</body>

</html>