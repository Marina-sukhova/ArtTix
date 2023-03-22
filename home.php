<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The ArtHouse Tix</title>
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="app.css">
    <link rel="icon" type="image/x-icon" href="/public/favicon.ico">
    <script src="https://kit.fontawesome.com/f04dcfa3ef.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="nav-wrapper">

            <?php
            include("nav.php");
            ?>
        </div>
    </header>

    <main>

        <!-- HERO SECTION -->
        <div class="hero-section">
            <!-- HERO SLIDE -->
            <div class="hero-slide">
                <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                    <!-- SLIDE ITEM -->
                    <div class="hero-slide-item">
                        <img src="./img/black-banner.png" alt="">
                        <div class="overlay"></div>
                        <div class="hero-slide-item-content">
                            <div class="item-content-wraper">
                                <div class="item-content-title top-down">
                                    Black Panther
                                </div>
                                <div class="movie-infos top-down delay-2">
                                    <div class="movie-info">
                                        <i class="bx bxs-star"></i>
                                        <span>9.5</span>
                                    </div>
                                    <div class="movie-info">
                                        <i class="bx bxs-time"></i>
                                        <span>120 mins</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>HD</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>16+</span>
                                    </div>
                                </div>
                                <div class="item-content-description top-down delay-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                                </div>
                                <div class="item-action top-down delay-6">
                                    <a href="#" class="btn btn-hover">
                                        <i class="bx bxs-right-arrow"></i>
                                        <span>Watch now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SLIDE ITEM -->
                    <!-- SLIDE ITEM -->
                    <div class="hero-slide-item">
                        <img src="./img/supergirl-banner.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="hero-slide-item-content">
                            <div class="item-content-wraper">
                                <div class="item-content-title top-down">
                                    Supergirl
                                </div>
                                <div class="movie-infos top-down delay-2">
                                    <div class="movie-info">
                                        <i class="bx bxs-star"></i>
                                        <span>9.5</span>
                                    </div>
                                    <div class="movie-info">
                                        <i class="bx bxs-time"></i>
                                        <span>120 mins</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>HD</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>16+</span>
                                    </div>
                                </div>
                                <div class="item-content-description top-down delay-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                                </div>
                                <div class="item-action top-down delay-6">
                                    <a href="#" class="btn btn-hover">
                                        <i class="bx bxs-right-arrow"></i>
                                        <span>Watch now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SLIDE ITEM -->
                    <!-- SLIDE ITEM -->
                    <div class="hero-slide-item">
                        <img src="./img/wanda-banner.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="hero-slide-item-content">
                            <div class="item-content-wraper">
                                <div class="item-content-title top-down">
                                    Wanda Vision
                                </div>
                                <div class="movie-infos top-down delay-2">
                                    <div class="movie-info">
                                        <i class="bx bxs-star"></i>
                                        <span>9.5</span>
                                    </div>
                                    <div class="movie-info">
                                        <i class="bx bxs-time"></i>
                                        <span>120 mins</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>HD</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>16+</span>
                                    </div>
                                </div>
                                <div class="item-content-description top-down delay-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                                </div>
                                <div class="item-action top-down delay-6">
                                    <a href="#" class="btn btn-hover">
                                        <i class="bx bxs-right-arrow"></i>
                                        <span>Watch now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SLIDE ITEM -->
                </div>
            </div>
            <!-- END HERO SLIDE -->
            <!-- TOP MOVIES SLIDE -->
            <div class="top-movies-slide">
                <div class="owl-carousel" id="top-movies-slide">
                    <!-- MOVIE ITEM -->
                    <div class="movie-item">
                        <img src="./img/series/supergirl.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Supergirl
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <div class="movie-item">
                        <img src="./img/movies/captain-marvel.png" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Captain Marvel
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <div class="movie-item">
                        <img src="./img/cartoons/demon-slayer.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Infinity Train
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <div class="movie-item">
                        <img src="./img/movies/blood-shot.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Bloodshot
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <div class="movie-item">
                        <img src="./img/series/wanda.png" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Wanda Vision
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <div class="movie-item">
                        <img src="./img/movies/bat-man.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                The Dark Knight
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MOVIE ITEM -->
                </div>
            </div>
            <!-- END TOP MOVIES SLIDE -->
        </div>
        <!-- END HERO SECTION -->

        <!-- LATEST MOVIES SECTION -->
        <div class="section">
            <div class="container">
                <div class="section-header">
                    latest movies
                </div>
                <div class="movies-slide carousel-nav-center owl-carousel">
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/movies/theatre-dead.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Theatre of the dead
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/movies/transformer.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Transformer
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/movies/resident-evil.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Resident Evil
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/movies/captain-marvel.png" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Captain Marvel
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/movies/hunter-killer.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Hunter Killer
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/movies/blood-shot.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Bloodshot
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/movies/call.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Call
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                </div>
            </div>
        </div>
        <!-- END LATEST MOVIES SECTION -->

        <!-- LATEST SERIES SECTION -->
        <div class="section">
            <div class="container">
                <div class="section-header">
                    Upcoming Movie
                </div>
                <div class="movies-slide carousel-nav-center owl-carousel">
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/series/supergirl.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Supergirl
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/series/stranger-thing.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Stranger Things
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/series/star-trek.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Star Trek
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/series/penthouses.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Penthouses
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/series/mandalorian.jpg" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Mandalorian
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/series/the-falcon.webp" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                The Falcon And The Winter Soldier
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                    <!-- MOVIE ITEM -->
                    <a href="#" class="movie-item">
                        <img src="./img/series/wanda.png" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Wanda Vision
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END MOVIE ITEM -->
                </div>
            </div>
        </div>
        <!-- END LATEST SERIES SECTION -->



        <!-- FOOTER SECTION -->
        <footer class="section">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-6 col-sm-12">
                        <div class="content">
                            <a href="#" class="logo">
                                <i class='bx bx-movie-play bx-tada main-color'></i>Fl<span class="main-color">i</span>x
                            </a>
                            <p>
                            The ArtHouse Tix is a platform that connects film enthusiasts with independent, foreign, and classic films at arthouse cinemas. The website and app aggregate movie showtimes and ticketing information from various sources and present it in a user-friendly interface. With its comprehensive and convenient features, Arthouse Tickets is the perfect solution for individuals seeking a unique movie-going experience at arthouse cinemas.

                            </p>
                            <div class="social-list">
                                <a href="#" class="social-item">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="social-item">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="social-item">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-3 col-md-6 col-sm-6">
                                <div class="content">
                                    <p><b>ArtHouse</b></p>
                                    <ul class="footer-menu">
                                        <li><a href="#">About project</a></li>
                                        <li><a href="#">My profile</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-3 col-md-6 col-sm-6">
                                <div class="content">
                                    <p><b>Help</b></p>
                                    <ul class="footer-menu">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-3 col-md-6 col-sm-6">
                                <div class="content">
                                    <p><b>Download app</b></p>
                                    <ul class="footer-menu">
                                        <li>
                                            <a href="#">
                                                <img src="./img/google-play.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="./img/app-store.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER SECTION -->

        <!-- COPYRIGHT SECTION -->
        <div class="copyright">
            Copyright 2021 &copy
            Marina Sukhova</a>
        </div>
        <!-- END COPYRIGHT SECTION -->

        <!-- SCRIPT -->
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- OWL CAROUSEL -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
        <!-- APP SCRIPT -->
        <script src="app.js"></script>



    </main>
</body>

</html>