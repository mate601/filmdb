<?php
session_start();

  include("database.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>

  <body>

  <?php include_once("header.php"); ?>
  
  <div class="container">

  <h1>Signup</h1>

  <form class="form-group" action="user_register.php" method="post">
  
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" id="name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" type="email" id="email" name="email">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input
        class="form-control"
        type="password"
        id="password"
        name="password"
      >
      <label for="confirm_password">Confirm password</label>
      <input
        class="form-control"
        type="password"
        id="confirm_password"
        name="confirm_password"
      >
    </div>
    
    <div class="form-group">
      <button class="btn btn-primary mt-3" type="submit">
        Register
      </button>
      <a href="user_login.php"><label for="Login">Login Here</label></a>
    </div>
  </form>

  </div>
    
  </body>
</html>