<html>

<head>
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
</head>

<body>
  <body>
  
    <center>
  <h1>product details</h1>
  
  <button style="text-align:right;"><a href="view/import.php">import</a></button></th> 
  <button style="text-align:right;"><a href="view/export.php">export</a></button></th>
                    <br/>
                    <br/>
                    
  <table>
    <th>id</th>
    <th>sku</th>
    <th >image</th>
    <th>name</th>
    <th>model</th>
    <th>price</th>
    <th colspan="2">operation</th>
    </tr>
    <?php
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if (isset($_GET['pageno'])) {
      $pageno = $_GET['pageno'];
    } else {
      $pageno = 1;
    }
    $no_rows = 3;
    $currentPage = $pageno;
    $offset = ($pageno - 1) * $no_rows;
    $pagination = "SELECT * FROM PRODUCTS";
    $result = $conn->query($pagination);
    $no_results = $result->num_rows;
    $no_pages = ceil($no_results / $no_rows);
    $sql = "SELECT * FROM products ORDER BY id DESC LIMIT $offset,$no_rows";
    $result1 = $conn->query($sql);
    //$table = " ";
    //print_r($result);
    //$lastpage = $no_pages;
    while ($table = $result1->fetch_array()) {

    ?>
      <tr>
        <td><?php echo $table['id'] . "<br>"; ?></td>
        <td><?php echo $table['sku'] . "<br>"; ?></td>
        <td width="10" height="10"><?php echo "<img src='image/". $table['filename']."'>" . "<br>";?></td>
        <td><?php echo $table['name']. "<br>"; ?></td>
        <td><?php echo $table['model'] . "<br>"; ?></td>
        <td><?php echo $table['price'] . "<br>"; ?></td>
        <td><button><a href="action/edit.php?id=<?php echo $table['id']; ?>" >edit</a></button>
          <button><a href="action/delete.php?id=<?php echo $table['id']; ?>"onclick="return confirm('Are you sure you want to delete this row?');">delete</a></button>
        </td>
      </tr>

    <?php
    }

    ?>
    <tr>
      <th><button><a href="action/add.php">add</a></button></th>
    </tr>
  </table>
  <tr>
        <td>
          <div>
            <ul class="pagination">
              <td><a href="?pageno=1">First</a></td>
              <?php if ($no_results >$no_rows) { ?>
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
                    <td><a href="?pageno=<?php echo $no_pages; ?>">Last</a>
        </td>
        <td>
        <?php } ?>

        </ul>
        </div>
        </td>
      </tr>
      
  </center>
</body>

</html>