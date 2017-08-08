<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blog Template for Bootstrap</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/cubesat-plax.css">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/bootstrap-4.0.0-alpha6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/w3.css">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">

<style>
.header-container {
  height: 480px;
  overflow: hidden;
}


.padding-0 {
  padding: 0;
}

footer, header {
  padding: 0;
  background: #333
}

main {

  padding: 0;
  background: #FFF


}

body {
  background: #333;
}


.text-shadow-black {
  overflow: hidden;
  text-shadow:
    -5px 0    10px rgba(0,0,0,0.7),
    0    5px  10px rgba(0,0,0,0.7),
    5px  0    10px rgba(0,0,0,0.7),
    0    -5px 10px rgba(0,0,0,0.7);
}

</style>

    <?php wp_head();?>
  </head>


<body>

<nav class="container-fluid w3-top  w3-black  hidden-print padding-0">
  <div class="container">
    <div class="row no-gutters justify-content-center hidden-xs-down">
      <div class="col-sm-2">
        <a href="#" class="w3-button w3-block w3-black">Blog</a>
      </div>
      <div class="col-sm-2">
        <a href="#menu" class="w3-button w3-block w3-black">Projets</a>
      </div>
      <div class="col-sm-2">
        <a href="#about" class="w3-button w3-block w3-black">Tutoriels</a>
      </div>
      <div class="col-sm-2">
        <a href="#where" class="w3-button w3-block w3-black">Contact</a>
      </div>
      <div class="col-sm-1">
        <a href="#" class="w3-button w3-block w3-black">
          <i class="fa fa-search" aria-hidden="true"></i>
        </a>
      </div>
    </div>

    <!-- Extra small nav -->
    <div class="row no-gutters justify-content-center hidden-sm-up">
      <div class="col-8">
        <a href="#" class="w3-button w3-block w3-black nav-item">
          <i class="fa fa-bars" aria-hidden="true"></i> Menu
        </a>
      </div>
      <div class="col-4">
        <a href="#" class="w3-button w3-block w3-black nav-item">
          <i class="fa fa-search" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</nav>

<header class="container-fluid text-shadow-black hide-overflow">
  <div id="plax-zone">
    <img id="earth" src="<?php echo get_theme_file_uri() ?>/assets/images/header/header.jpg" alt="earth web banner">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-0.png" alt="cubesat 0">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-1.png" alt="cubesat 1">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-2.png" alt="cubesat 2">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-3.png" alt="cubesat 3">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-4.png" alt="cubesat 4">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-5.png" alt="cubesat 5">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-6.png" alt="cubesat 6">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-7.png" alt="cubesat 7">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-8.png" alt="cubesat 8">
    <img class="cubesat" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat/cubesat-9.png" alt="cubesat 9">
  </div>
  <div class="container header-container">
    <div class="w3-display-container w3-grayscale-min" style="height: 100%">
      <div class="w3-display-middle w3-text-white" style="width: 100%;">
        <span class="w3-xxlarge">Jérôme Skoda</span><br>
        <span class="w3-xlarge">Passionné d'informatique et de nanosatellite</span>
      </div>
      <div class="w3-display-bottommiddle w3-left w3-right-align w3-text-white w3-xxlarge" style="width: 100%">
        <i class="fa fa-github-square" aria-hidden="true"></i>
        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
        <i class="fa fa-rss-square" aria-hidden="true"></i>
        <i class="fa fa-envelope-square" aria-hidden="true"></i>
      </div>
    </div>
  </div>
</header>

<main class="container-fluid hide-overflow">
  <div class="container content">
