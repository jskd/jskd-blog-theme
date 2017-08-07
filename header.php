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
    background: url("<?php echo get_theme_file_uri() ?>/assets/images/header/header.jpg") no-repeat center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
max-width: 100%; height: auto;
height: 480px;
}

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



.cubesat {
  position: absolute;
  display: none;
}


.cubesat-col-0 {
  left: 0px;
}

.cubesat-col-1 {
  left: 160px;
}
.cubesat-col-2 {
  left: 320px;
}
.cubesat-col-3 {
  left: 480px;
}
.cubesat-col-4 {
  left: 640px;
}
.cubesat-col-5 {
  left: 800px;
}

.cubesat-col-6 {
  left: 960px;
}

.cubesat-col-7 {
  left: 1120px;
}

.cubesat-col-8 {
  left: 1280px;
}

.cubesat-col-9 {
  left: 1440px;
}

.cubesat-col-10 {
  left: 1600px;
}

.cubesat-col-11 {
  left: 1760px;
}


.cubesat-row-0 {
  top: 40px;
  max-height: 30px;
  max-width: 30px;
}
.cubesat-row-1 {
  top: 76px;
  max-height: 40px;
  max-width: 40px;
}
.cubesat-row-2 {
  top: 112px;
  max-height: 50px;
  max-width: 50px;
}

.cubesat-row-3 {
  top: 148px;
  max-height: 50px;
  max-width: 50px;
}
.cubesat-row-4 {
  top: 184px;
  max-height: 60px;
  max-width: 60px;
}
.cubesat-row-5 {
  top: 220px;
  max-height: 70px;
  max-width: 70px;
}

.cubesat-row-6 {
  top: 256px;
  max-height: 80px;
  max-width: 80px;
}

.cubesat-row-7 {
  top: 292px;
  max-height: 90px;
  max-width: 90px;
}

.cubesat-row-8 {
  top: 328px;
  max-height: 100px;
  max-width: 100px;
}

.cubesat-row-9 {
  top: 364px;
  max-height: 110px;
  max-width: 110px;
}
#earth {
  position: absolute;
  top: -100px;
  left: -150px;
}

#plax-zone {
  width: 1920px;
  height: 480px;
  overflow: hidden;
  position: absolute;
  margin-left: auto;
  margin-right: auto;
  left: 0px;
  right: 0px;
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
