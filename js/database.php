<?php
$connection = new mysqli("localhost","root","","user");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}
?>