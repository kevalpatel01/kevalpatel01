<?php
//session_start();
//include('userdatabase.php');
include('classes/userclass.php');
include('view/pagination.php');
if (!empty($_SESSION['login'])) {
  $forusername = new user();
  $username = $_SESSION['username'];
  $_SESSION['username'] = "$username";
  if (!$forusername) {
    header('location:userlogin.php');
  }
  $result = $forusername->getusername($username);
  if ($result == 1) {
    $_SESSION['username'] = "$username";
    //echo "welcome $username";
  } else {
    //echo "here";exit;
    //header('location:userlogin.php');
  }
} else {
  header('location:index.php');
}
?>
<br>
<html>

<!--<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 50%;

    }

    td,
    th {
      border: 2px solid rgb(39, 34, 34);
      text-align: left;
      padding: 10px;
      box-shadow: px 3px 0px transparent;
      background-color: white;

    }

    .pagination a {
      color: black;
      float: center;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
    }

    .pagination a.active {
      background-color: dodgerblue;
      color: white;
    }

    .pagination a:hover:not(.active) {
      background-color: #ddd;
    }
  </style>
</head>-->

<body style="background-color:powderblue;">
  <!--<link rel="stylesheet"href="css/table.css"/>-->
  <center>
    <!--<h1>welcome <?php echo "$username"; ?></h1>-->
    <form action="userdashboard.php" method="POST">
    </form>

   <!-- <h1>product details</h1>

    <table>


      <th>id</th>
      <th>name</th>
      <th>model</th>
      <th>price</th>
      <th colspan="2">operation</th>
      </tr>-->

     <!-- <tr>

        <?php
        /*$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
        } else {
          $pageno = 1;
        }
        $no_rows = 2;
        $currentPage = $pageno;
        $offset = ($pageno - 1) * $no_rows;
        $pagination = "SELECT * FROM products";
        $result = $conn->query($pagination);
        $no_results = $result->num_rows;
        $no_pages = ($no_results / $no_rows);
        $sql = "SELECT * FROM products LIMIT $offset,$no_rows";
        $result1 = $conn->query($sql);
        //$table = " ";
        //print_r($result);
        while ($table = $result1->fetch_array()) {

        ?>-->
      <tr>
        <td><?php echo $table['id'] . "<br>"; ?></td>
        <td><?php echo $table['name'] . "<br>"; ?></td>
        <td><?php echo $table['model'] . "<br>"; ?></td>
        <td><?php echo $table['price'] . "<br>"; ?></td>
        <td><button><a href="action/edit.php?id=<?php echo $table['id'];
                                                echo $table['name'];
                                                echo $table['model'];
                                                echo $table['price']; ?>">edit</a></button>
          <button><a href="action/delete.php?id=<?php echo $table['id']; ?>">delete</a></button>
        </td>
        
      </tr>

      </style>
    <?php
        }*/

    ?>
    <!--<tr>
      <th><button><a href="action/add.php">add</a></button></th>
    </tr>
    </table>
      </center>
      <center>
      <tr>
        <td>
          <div>
            <ul class="pagination">
              <!--<td><a href="?pageno=1">First</a></td>
              <?php if ($no_results > 1) { ?>
                <a href="<?php if ($currentPage == 1) {
                              // $active = "active";
                              echo '#'; 
                            } else {
                              //$active = "";
                              echo "?pageno=" . ($currentPage - 1);
                            } ?>">
                    <-Prev </a>
        <td><?php for ($pageno = 1; $pageno <= $no_pages; $pageno++) {
                  echo '<a href="index.php?pageno=' . $pageno . '">' . $pageno . '</a>';
                } ?></td>
        <td class="<?php if ($currentPage < $no_pages) {
                      echo 'disabled';  ?>">
          <a href="<?php if ($pageno <= $no_pages) {
                        echo '#';
                      } else {
                        echo "?pageno=" . ($currentPage + 1);
                      }
                    } ?>">next-></a>
        </td>
        <td>
        <?php } ?>

        </ul>
        </div>
        </td>
      </tr>-->
                  </center>
</body>

</html>