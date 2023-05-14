<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="#" class="logo">
            <i class='bx bxs-movie-play' ></i> Movies
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!--Menu-->
        <ul class="navbar">
            <li><a href="index.php#home" class="home-active">Home</a></li>
            <li><a href="index.php#movies">Movies</a></li>
            <li><a href="index.php#coming">Coming</a></li>
         </ul>
         <?php
         if (isset($_SESSION['logged_in']))
         {
            $user_name = $_SESSION['logged_in']." ";

            echo "<div>$user_name<a href='' class='btn'>Sign out</a></div>";

         }
         else echo '<a href="registration.php" class="btn">Sign up</a>';

         ?>

    </header>
</body>
</html>