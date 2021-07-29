<html>

<head>
    <title>
    </title>
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>


    <?php
    //session_start();
    //include('classes/userclass.php');
    //include('./action/login.php');
    //include('view/userdashboard.php');
    //include('index.php');
    //$username = $_SESSION['username'];
    if (isset($_SESSION['username'])) {


    ?>

        <form align="right">
            <h1>welcome
                <?php echo $_SESSION['username']; ?></h1>
            </h1>

            <button><a href="view/userlogout.php">logout</a></button>
        <?php
    }
        ?>
        </form>