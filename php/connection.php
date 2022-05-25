<?php
// database connection
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cabanaspostales';
$connection = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($connection, "utf8");
?>
