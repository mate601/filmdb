<?php
    session_start();

    $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    <?php include_once("header.php"); ?>

    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="img/home1.jpg" alt="Venom: Let there Be Carnage movie cover">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: Let there <br> Be Carnage</h1>
                    <a href="https://www.imdb.com/video/vi1533394969/?playlistId=tt7097896&ref_=tt_pr_ov_vi" class="btn">Watch Trailer</a>
                  
                </div>
            </div>

            <div class="swiper-slide container">
                <img src="img/home2.png" alt="Avengers: Infinity War movie cover">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Avengers: <br> Infinity War</h1>
                    <a href="https://www.imdb.com/video/vi528070681/?playlistId=tt4154756&ref_=tt_pr_ov_vi" class="btn">Watch Trailer</a>
                   
                </div>
            </div>

            <div class="swiper-slide container">
                <img src="img/home3.jpg" alt="Spider-Man: Far from Home movie cover">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man: <br> Far from Home</h1>
                    <a href="https://www.imdb.com/video/vi2600385561/?playlistId=tt6320628&ref_=tt_pr_ov_vi" class="btn">Watch Trailer</a>
                </div>
            </div>

            <div class="swiper-slide container">
                <img src="img/home4.jpg" alt="">
                <div class="home-text">
                    <span>Christopher Nolan</span>
                    <h1>Interstellar</h1>
                    <a href="https://www.imdb.com/video/vi1586278169/?playlistId=tt0816692&ref_=tt_pr_ov_vi" class="btn">Watch Trailer</a>
                   
                </div>
            
          </div>
          
          <div class="swiper-pagination"></div>
    </section>


    <?php
        require("database.php");

        $dbh = $db;
            
        $reuslt = $dbh->query("SELECT * FROM films WHERE films.mod LIKE 'thisweek'");
            
        $films = $reuslt->fetchAll(PDO::FETCH_ASSOC);

    ?>

    <section class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>

        <div class="movies-container">
            <?php foreach($films as $key => $film_item) { ?>
                <div class="box">
                    <div class="box-img">
                        <a href=<?= $film_item['link'] ?> > <img src=<?= $film_item['picture'] ?> alt=<?= $film_item['picturedesc'] ?> > </a>
                    </div>
                    <h3><?= $film_item['title'] ?></h3>
                    <span><?= $film_item['length']?> min | <?= $film_item['description']?></span>
                </div>

            <?php } ?>
        </div>

    </section>


    <?php

        $dbh = $db;
            
        $resultcoming = $dbh->query("SELECT * FROM films WHERE films.mod LIKE 'coming'");

        $filmscoming = $resultcoming->fetchAll(PDO::FETCH_ASSOC);

    ?>

    <section class="coming" id="coming">
    <h2 class="heading">Coming Soon</h2>
        <div class="coming-container swiper">

            <div class="swiper-wrapper">


                <?php foreach($filmscoming as $key => $filmscoming_item) { ?>
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <a href=<?= $filmscoming_item['link'] ?> > <img src= <?= $filmscoming_item['picture'] ?> alt=<?= $filmscoming_item['picturedesc'] ?> ></a>
                        </div>
                        <h3><?= $filmscoming_item['title']?></h3>
                        <span><?= $filmscoming_item['length']?> min | <?= $filmscoming_item['description']?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="footer">
        <a href="index.php" class="logo">
            <i class='bx bxs-movie-play' ></i> Movies
        </a>
        <div class="social"></div>
        <a href="#"><i class='bx bxl-facebook' ></i></a>
        <a href="#"><i class='bx bxl-twitter' ></i></a>
        <a href="#"><i class='bx bxl-instagram' ></i></a>
        <a href="#"><i class='bx bxl-tiktok' ></i></a>
    </section>

   


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
</body>
<footer>

</footer>
</html>