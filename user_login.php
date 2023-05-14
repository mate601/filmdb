<?php

include("database.php");

$is_invalid = FALSE;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  /** @var \PDO $db */
  $db = require './database.php';
  $email = $_POST['email'];
  $query = "SELECT * FROM users WHERE email = '$email'";
  $stmt = $db->prepare($query);
  $stmt->execute([
    $_POST['email']
  ]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
  if ($user) {
    if (password_verify($_POST['password'], $user['password'])) {
      die ("Login successful.");
    }
  }
  $is_invalid = TRUE;
}

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

      <div><h1>Login</h1></div>
      <br><br>

      <?php if ($is_invalid): ?>

      <em>Invalid login.</em>
      

      <?php endif; ?>

      <form method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" value="<?= htmlspecialchars($_POST  ['email'] ?? "")?>">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
      </div>
      
      <div class="form-group">
        <button type="submit" value="login" class="btn btn-primary mt-3 ">Log in</button>
        <a href="registration.php"><label for="SignUp">Sign Up Here</label></a>
      </div>
      </form>
    </div>
  
</body>
</html>