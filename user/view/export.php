<?php
session_start();
include('../classes/productclass.php');
$export = new products;
if (isset($_POST["export"])) {
    //echo "a";exit;
    //$filename = $_FILES["filename"]["tmp_name"];
    //$file = fopen($filename, 'a+');

    /*$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "SELECT * FROM products ORDER BY id asc";
    $result = $conn->query($query);
    //print_r($result);exit;
    $filename = "productdetails.csv";
    $fp = fopen('php://memory', 'w');
    $fields = array('sku', 'name', 'model', 'price');
    fputcsv($fp, $fields, ",");
    

   
    while ($table = mysqli_fetch_array($result)) {
        $lineData = array($table['sku'],$table['name'], $table['model'], $table['price']);
        fputcsv($fp, $lineData, ",");
        //print_r($lineData);exit;
    }
    fseek($fp, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($fp);
    fclose($fp);
    exit;*/
    $filename = "productdetails.csv";
    $result = $export->exportfile($filename);
    if($result) {
        $_SESSION['message'] =  "error exportinging file!!";
    } else {
        $_SESSION['message'] =  "file exported successfully!!";
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

            <form action="export.php" method="POST" enctype="multipart/form-data">
                <!--<label>Select File</label>
<input type="file" name="filename" id="myfile" accept=".csv" required>
-->
                <button type="submit" id="submit" name="export">export</button>
            </form>
        </div>
    </div>

</body>

</html>