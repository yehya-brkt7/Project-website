
<?php 

$server = "sql105.epizy.com";
$username = "epiz_27386400";
$password = "hkUVlcbPhXaNm";
$dbname = "epiz_27386400_register";
$email    = "";
$errors = array(); 

// connect to the database

//database_connection.php

$connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

?>