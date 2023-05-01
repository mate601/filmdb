<?php

$host = 'localhost';
$db_name = $user_name = 'filmdb';
$password = 'dw)N*qXsg8FbZO0R';

try {
  $db = new PDO(
    "mysql:host=$host;dbname=$db_name",
    $user_name,
    $password
  );
  return $db;
}
catch (PDOException $e) {
  die("Connection error: " . $e->getMessage());
}