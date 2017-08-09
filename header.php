<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Template for Bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/cubesat-plax.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/bootstrap-4.0.0-alpha6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/w3.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head();?>
  </head>
  <body class="w3-theme-d5">

    <!-- Overlay -->
    <div id="menu-overlay" class="w3-overlay w3-animate-opacity" onclick="menu_close()">
    </div>
    <div id="search-overlay" class="w3-overlay w3-animate-opacity" onclick="search_close()">
    </div>

    <!-- Menu Sidebar -->
    <nav id="menu-sidebar" class="w3-sidebar w3-bar-block w3-animate-left w3-theme-l1">
      <button class="w3-bar-item w3-button  w3-theme-d1" onclick="menu_close()">
        <i class="fa fa-times" aria-hidden="true"></i> Fermer
      </button>
      <a href="#" class="w3-bar-item w3-button">Blog</a>
      <a href="#" class="w3-bar-item w3-button">Projets</a>
      <a href="#" class="w3-bar-item w3-button">Tutoriels</a>
      <a href="#" class="w3-bar-item w3-button">Contact</a>
    </nav>

    <!-- Menu top -->
    <nav id="menu-top" class="container-fluid w3-top hidden-print padding-0">
      <div class="row w3-theme-d3">
        <div class="container">
          <div class="row no-gutters justify-content-center hidden-xs-down">
            <div class="col-sm-2">
              <a href="#" class="w3-button w3-block w3-padding">Blog</a>
            </div>
            <div class="col-sm-2">
              <a href="#menu" class="w3-button w3-block w3-padding">Projets</a>
            </div>
            <div class="col-sm-2">
              <a href="#about" class="w3-button w3-block w3-padding">Tutoriels</a>
            </div>
            <div class="col-sm-2">
              <a href="#where" class="w3-button w3-block w3-padding">Contact</a>
            </div>
            <div class="col-sm-1">
              <button class="w3-button w3-block w3-padding" onclick="search_toggle()">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <!-- Extra small nav -->
          <div class="row no-gutters justify-content-center hidden-sm-up">
            <div class="col-8">
              <button class="w3-button w3-block w3-padding" onclick="menu_open()">
                <i class="fa fa-bars" aria-hidden="true"></i> Menu
              </button>
            </div>
            <div class="col-4">
              <button class="w3-button w3-block w3-padding" onclick="search_toggle()">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div> <!-- Container -->
      </div> <!-- Row -->

      <!-- Search bar -->
      <div id="search-bar" class="row w3-theme-l1">
        <div class="container">
          <div class="row no-gutters justify-content-center">
            <div class="col-12 w3-padding">
              <?php get_search_form() ?>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <header class="container-fluid w3-theme-d4">
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
        <div class="w3-display-container" style="height: 100%">
          <div class="w3-display-middle" style="width: 100%;">
            <span class="w3-xxlarge">Jérôme Skoda</span><br>
            <span class="w3-xlarge">Passionné d'informatique et de nanosatellite</span>
          </div>
          <div class="w3-display-bottommiddle w3-left w3-right-align w3-xxlarge" style="width: 100%">
            <i class="fa fa-github-square" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            <i class="fa fa-rss-square" aria-hidden="true"></i>
            <i class="fa fa-envelope-square" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </header>

    <main class="container-fluid w3-theme-l5">
      <div class="container">
