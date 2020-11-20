<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'cybersec';

$link = mysqli_connect($host, $user, $password, $db_name);
$query = "SET NAMES 'utf8'";
mysqli_query($link, $query);
?>
