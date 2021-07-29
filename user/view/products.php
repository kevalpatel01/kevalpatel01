<html>
<head>
<h1>product details</h1>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>name</th>
<th>model</th>
<th>price</th>
<th>operation</th>
</tr>

<?php
include('userclass.php');
//if(empty($_SESSION['username'])) {
  //  header('location:login.php');
//}
//else {
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
$products="select * from products";
$result = $conn->query($products);
//echo $result->num_rows;
//$table = $result->fetch_array();
//echo "<pre>";
//print_r($table);
while($table = $result->fetch_array()) {
 

?>
<tr>
 <td><?php echo $table['name']. "<br>";?></td>
 <td><?php echo $table['name']. "<br>";?></td>
 <td><?php echo $table['model']. "<br>";?></td>
 <td><?php echo $table['price']. "<br>";?></td>
 <td><td><input type="button" value="Delete" onclick="deleteRow(this)"/></td> 
 </tr>
 <?php
}

/*
else {
    header('location:userlogin.php');
}*/
 ?>
 </table>
<a href = "userdashboard.php">userdashboard</a>
 </body>
 </html>
