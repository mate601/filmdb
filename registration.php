<?php
session_start();

  include("database.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration </title>
    <link rel="stylesheet" href="style_reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <form action="user_register.php" method="post">
    <div class="wrapper">
      <div class="container main">
          <div class="row">
              <div class="col-md-6 side-image">
                  <div class="text">
                      
                  </div>
              </div>
              <div class="col-md-6 right">
                   <div class="input-box">
                      <header><h1>Create account</h1></header>
                      <div class="input-field">
                        <input type="text" class="input" id="name" required autocomplete="off" name="name">
                        <label for="name">Name</label>
                    </div>
                      <div class="input-field">
                          <input type="text" class="input" id="email" required autocomplete="off" name="email">
                          <label for="email">Email</label>
                      </div>
                      <div class="input-field">
                          <input type="password" class="input" id="password" required name="password">
                          <label for="password">Password</label>
                      </div>

                      <div class="input-field">
                        <input type="password" class="input" id="confirm_password" required name="confirm_password">
                        <label for="confirm_password">Confirm password</label>
                    </div>

                      <div class="input-field">
                          <input type="submit" class="submit" value="Sign Up">
                          
                      </div>
                      <div class="signin">
                          <span>Already have an account? <a href="user_login.php">Login here</a></span>
                          <br><br>
                          <span><a href="index.php">Back to Movies</a></span>
                      </div>
                   </div>
              </div>
          </div>
      </div>
  </div>
</form>
</body>
</html>