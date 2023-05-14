<?php

$host = 'localhost';
$db_name = $user_name = 'filmdb';
$password = "";//'dw)N*qXsg8FbZO0R';

try {
  $db = new PDO(
    "mysql:host=$host;dbname=$db_name",
    /*$user_name*/"root",
    $password
  );
  return $db;
}
catch (PDOException $e) {
  die("Connection error: " . $e->getMessage());
}

/*$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="filmdb";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
  die("failed to connect!");
}*/