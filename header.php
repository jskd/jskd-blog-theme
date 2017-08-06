<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Template for Bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous" >

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.bgimg {
    background: url(<?php echo get_theme_file_uri() ?>/assets/images/banniere--max.png) no-repeat center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
max-width: 100%; height: auto;
min-height: 380px;
}
.padding-0 {
  padding: 0;
}

.text-shadow-black {
  text-shadow:
    -5px 0    10px rgba(0,0,0,0.7),
    0    5px  10px rgba(0,0,0,0.7),
    5px  0    10px rgba(0,0,0,0.7),
    0    -5px 10px rgba(0,0,0,0.7);
}

.cubesat-slot-1 {
  border-style: none;
  position: absolute;
  height: 200px;
  top: 25%;
  left: 50%;
}

.cubesat-slot-1 {
  border-style: none;
  position: absolute;
  height: 200px;
  top: 0%;
  left: 13%;
}
.cubesat-slot-2 {
  border-style: none;
  position: absolute;
  height: 200px;
  top: 48%;
  left: 42%;
}
.cubesat-slot-3 {
  border-style: none;
  position: absolute;
  height: 200px;
  top: 27%;
  left: 84%;
}
</style>
      <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
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

<header class="container-fluid bgimg padding-0 text-shadow-black">
  <img class="cubesat-slot-1" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat-1" />
  <img class="cubesat-slot-2" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat-1" />
  <img class="cubesat-slot-3" src="<?php echo get_theme_file_uri() ?>/assets/images/cubesat-1" />
  <div class="container" style="height: 380px">
    <div class="w3-display-container w3-grayscale-min" style="height: 100%">
      <div class="w3-display-middle w3-text-white" style="width: 100%;">
        <span class="w3-xxlarge">Jérôme Skoda</span><br />
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

<div class="container">
