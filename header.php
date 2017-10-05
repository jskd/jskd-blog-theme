<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/cubesat-plax.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/w3.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head();?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/print.css" type="text/css">
  </head>
  <body class="<?php echo join(' ', get_body_class()); ?> w3-theme-d5">
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
    <nav id="menu-top" class="w3-theme-d3 w3-row w3-top hidden-print padding-0">
      <div class="w3-row-padding row-max-width w3-hide-small">
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
        ));
?>
        <div class="w3-rest">
          <a href="#" class="w3-button w3-block w3-padding" onclick="search_toggle()">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
        </div>
      </div>

        <!-- Extra small nav -->
        <div class="w3-row row-max-width w3-hide-medium w3-hide-large">
          <div class="w3-col s8">
            <a href="#" class="w3-button w3-block w3-padding" onclick="menu_open()">
           <i class="fa fa-bars" aria-hidden="true"></i> Menu
           </a>
        </div>
        <div class="w3-col s4">
          <a href="#" class="w3-button w3-block w3-padding" onclick="search_toggle()">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <!-- Search bar -->
      <div id="search-bar" class="w3-row w3-theme-l1">
          <div class="w3-row row-max-width">
            <div class="w3-col s12 w3-padding">
              <?php get_search_form() ?>
            </div>
          </div>
        </div>

    </nav>

    <header id="web-banner" class="w3-row w3-theme-d4 hidden-print padding-0">
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
      <div class="w3-row-padding row-max-width header-container">
        <div class="w3-display-container" style="height: 100%">
          <div class="w3-display-middle" style="width: 100%;">
            <span class="w3-xxlarge">Jérôme Skoda</span><br>
            <span class="w3-xlarge">Passionné d'informatique et de cubesat</span>
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
          'menu_class' => 'menu-social-icon',
          'walker'  => new  WalkerMenuSocialIcon()
        )); ?>
          </div>
        </div>
      </div>
    </header>

    <?php get_template_part( 'template-parts/newsletter-modal' ); ?>

    <div class="w3-row w3-theme-l5 padding-0 w3-padding-16 main-div" >
      <div class="w3-row-padding row-max-width main-div"> 
