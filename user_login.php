<?php
  session_start();
/*include("database.php");*/

$is_invalid = FALSE;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  /** @var \PDO $db */
  $db = require './database.php';
  $email = $_POST['email'];
  $query = "SELECT * FROM users WHERE email = ?";
  $stmt = $db->prepare($query);
  $stmt->execute([
    $_POST['email']
  ]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);



  $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
  if ($user) {
   
    if (password_verify($_POST['password'], $user['password'])) {
      
      $_SESSION['logged_in'] = $user['name'];
      header ('location:login_success.php');
    }
  }

  $is_invalid = TRUE;
}

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login </title>
    <link rel="stylesheet" href="style_reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

     


    <form method="post">
    <div class="wrapper">
      <div class="container main">
          <div class="row">
              <div class="col-md-6 side-image">
                  <div class="text">
                      
                  </div>
              </div>
              <div class="col-md-6 right">
                   <div class="input-box">
                      <header>
                        <h1>Login</h1>
                          <h3>
                            <?php if ($is_invalid): ?>

                                <em>Invalid login.</em>

                            <?php endif; ?>
                          </h3>
                      </header>
                     
                      <div class="input-field">
                          <input type="text" class="input" id="email" required autocomplete="off" name="email" value="<?= htmlspecialchars($_POST  ['email'] ?? "")?>">
                          <label for="email">Email</label>
                      </div>
                      <div class="input-field">
                          <input type="password" class="input" id="password" required name="password">
                          <label for="password">Password</label>
                      </div>

                      <div class="input-field">
                          <input type="submit" class="submit" value="Enter">
                          
                      </div>
                      <div class="signin">
                          <span>Don't have an account? <a href="registration.php">Sign up here</a></span>
                          <br><br>
                          <span><a href="index.php">Back to Movies</a></span>
                      </div>
                   </div>
              </div>
          </div>
      </div>
  
</form>
</body>
</html>