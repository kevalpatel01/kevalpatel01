<?php
include(__DIR__ . '/../classes/userdatabase.php');
//include(__DIR__ . '/../classes/userclass.php');
class products extends database
{
    public static $table = 'products';
    public function __construct()
    {
        //$this->table = "products";
        parent::__construct();
        //self::$table;
        //global $conn;
        //$this->conn = $conn;
    }

    public function deleterow($id)
    {
        //$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
        $table = self::$table;
        $del = "delete from $table where id = '$id'";
        $result = $this->conn->query($del);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function addrow($name, $model, $price, $filename)
    {
        //$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

        $table = self::$table;
        $add = "INSERT INTO $table (`name`, `model`, `price`,`filename`) VALUES ( '$name', '$model', '$price','$filename')";
        //echo $add;exit;
        $result = $this->conn->query($add);
        //print_r($result);exit;
        if ($result) {
            //echo "a";exit;
            return true;
        } else {
            return false;
        }
    }


    public function editrow($id, $name, $model, $price, $filename)
    {


        //$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        $table = self::$table;
        /* $name = ($_POST['name']);
  $model = ($_POST['model']);
  $price = ($_POST['price']);
  $filename = ($_FILES['filename']['name']);
  $imageFileType =pathinfo($filename,PATHINFO_EXTENSION);*/
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        if ($filename !== "") {
            /*$imageFileType =pathinfo($filename,PATHINFO_EXTENSION);
    $extensions =array("jpg","jpeg","png","gif");
    if( !in_array($imageFileType,$extensions)  ) {
      //echo "a";exit;
      $_SESSION['message'] = "uploaded image format not valid!!";
      header('location:http://localhost/user/index.php');
      echo "a";exit;
  
    }
  
  else {
  
      $target = "../image/" . basename($_FILES['filename']['name']);
      move_uploaded_file($_FILES['filename']['tmp_name'], $target);
     */
            $query = "UPDATE products SET name='$name',model='$model',price='$price',filename='$filename' WHERE id = '$id'";
            //echo "a";exit;


        } else {
            $query = "UPDATE products SET name='$name',model='$model',price='$price' WHERE id='$id'";
        }
        $result = $this->conn->query($query);
        //$target = "../image/" . basename($_FILES['filename']['name']);
        //move_uploaded_file($_FILES['filename']['tmp_name'], $target);
        //print_r($edit);exit;

        //echo $edit;exit;
        if ($result) {
            //echo "1";exit;
            return true;
        } else {
            return false;
        }
    }


    public function importfile($filename)
    {
        $table = self::$table;
        $filename = $_FILES["filename"]["tmp_name"];
        if ($_FILES["filename"]["size"] > 0) {
            //echo "a";exit;
            //$file = fopen($filename, "r");
            $header = array();
            $final_result = array();
            $file = fopen($filename, 'a+');
            //$column = fgetcsv($file, 100000, ',');
            $row = 1;
            //echo $header;exit;
            //print_r($column);exit;
            while (($column = fgetcsv($file, 100000, ",")) !== FALSE) {
                if ($row == 1) {
                    $header = array_values($column);
                } else {
                    $final_result[] = array_combine($header, array_values($column));
                }
                $row++;
            }
            foreach ($final_result as $column) {
                //echo "a";exit;
                $sku = $column['sku'];
                $name = $column['name'];
                $model = $column['model'];
                $price = $column['price'];

                $prevquery = "SELECT id  FROM $table WHERE sku = '" . $sku . "'";
                $prevresult = $this->conn->query($prevquery);

                if ($prevresult->num_rows > 0) {

                    $update = "UPDATE $table SET sku = '$sku',name = '$name', model = '$model', price = '$price' WHERE sku = '.$sku.'";
                    $result = $this->conn->query($update);
                    //echo "a";exit;
                } else {
                    $sql = "INSERT INTO $table (`sku`,`name`, `model`, `price`) VALUES ( '" . $sku . "','" . $name . "', '" . $model . "','" . $price . "')";
                    $result = $this->conn->query($sql);
                }
                /*if($result) {
                        return true;
                    //$_SESSION['message'] = "error uploading file!!";
                   } else {
                       return false;
                    //$_SESSION['message'] = "file uploaded successfully!!";
                       //header('location:http://localhost/user/index.php');
                   } */
            }
        }
    }


    public function exportfile($filename)
    {
        //$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM products ORDER BY id asc";
        $result = $this->conn->query($query);
        //print_r($result);exit;
        $filename = "productdetails.csv";
        $fp = fopen('php://memory', 'w');
        $fields = array('sku', 'name', 'model', 'price');
        fputcsv($fp, $fields, ",");



        while ($table = mysqli_fetch_array($result)) {
            $lineData = array($table['sku'], $table['name'], $table['model'], $table['price']);
            fputcsv($fp, $lineData, ",");
            //print_r($lineData);exit;*/
        }
        fseek($fp, 0);
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        fpassthru($fp);
        fclose($fp);
        exit;
    }
}
