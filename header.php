<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Template for Bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/cubesat-plax.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/bootstrap-4.0.0-alpha6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/w3.css">
   <!-- <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/w3-theme-blue-grey.css"> -->
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
      <?php
        wp_nav_menu( array(
  'theme_location' => 'menu-sidebar',
 'container'       => '',
  'items_wrap'      => '%3$s',
  'link_before' => '',
  'link_after' => '',
  'before' => '',
  'after' => '',
  'walker'  => new WalkerMenuSidebar()
));
?>
    </nav>

    <!-- Menu top -->
    <nav id="menu-top" class="container-fluid w3-top hidden-print padding-0">
      <div class="row w3-theme-d3">
        <div class="container">
          <div class="row no-gutters justify-content-center hidden-xs-down">



<?php 

wp_nav_menu( array(
  'theme_location' => 'menu-top',
  'container'       => '',
  'items_wrap'      => '%3$s',
  'link_before' => '',
  'link_after' => '',
  'before' => '',
  'after' => '',
  'walker'  => new WalkerMenuTop()
)); ?>
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



<?php 

wp_nav_menu( array(
  'theme_location' => 'menu-social-icon',
  'container'       => '',
  'link_before' => '',
  'link_after' => '',
  'before' => '',
  'after' => '',
  'walker'  => new  WalkerMenuSocialIcon()
)); ?>
          </div>
        </div>
      </div>
    </header>

    <!-- Newsletter modal -->
    <div id="newsletter-modal" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-theme-l5" style="max-width:600px">
        <header class="w3-container w3-theme-d1">
          <span onclick="close_newsletter_modal()" title="Close Modal"
            class="w3-button w3-xlarge w3-hover-red w3-display-topright">
            &times;
          </span>
          <h2>Abonnement à la newsletter</h2>
        </header>
          <div class="w3-container w3-margin-top">

          Restez informés en vous inscrivant à la newsletter. 
        </div>
        <form id="newsletter-modal-form" method="post" action="/?na=s">
          <div class="w3-container w3-margin-top">
            <label for="newsletter-modal-email">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              Adresse de messagerie *
            </label>
            <label for="newsletter-modal-email" class="w3-right w3-text-red">
              Obligatoire
            </label>
            <input required id="newsletter-modal-mail" name="ne" type="email"
              class="w3-input w3-hover-theme w3-theme-l4 w3-border-0" value=""
              placeholder="Entrer son email pour s'abonner" size="30">
            <label for="enewsletter-modal-mail" class="w3-small w3-right">
              Votre adresse de messagerie ne sera pas publiée.
            </label>
          </div>
        </form>

       <div class="w3-container">
         <div id="newsletter-modal-error" class="w3-panel w3-pale-red w3-leftbar w3-border w3-border-red w3-padding">
           L'adresse de messagerie n'est pas valide.
         </div>
         <div id="newsletter-modal-sucess" class="w3-panel w3-pale-green w3-leftbar w3-border w3-border-green w3-padding">
           Merci, vous êtes abonné à la newsletter. <br>
           Vous recevrez un e-mail de confirmation dans quelques minutes. 
           Suivez le lien pour confirmer votre abonnement. <br>
           Si le courrier électronique prend plus de 15 minutes pour apparaître dans 
           votre messagerie, vérifiez votre dossier de spam.
         </div>
       </div>
       <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
         <button id="newsletter-modal-submit" type="button" class="w3-button w3-green w3-margin-right"  onclick="submit_newsletter_modal()"> S'abonner</button>
         <button id="newsletter-modal-close" type="button" class="w3-button w3-red" onclick="close_newsletter_modal()"> Annuler</button>
       </div>
     </div>
     </div>

    <main class="container-fluid w3-theme-l5" style="padding-top: 24px; padding-bottom: 24px;">
      <div class="container"> 
