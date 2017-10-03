<?php 
/*
Theme Name: Blog theme
Author: Jerome Skoda
Description: Bootstrap Blog template
Version: 0.0.1
Tags: blog bootstrap
*/
?>

<?php get_header(); ?>

<main class="w3-col m7 l8">

  <div class="w3-small">
    <a href="<?php echo get_home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a>
    <?php foreach($post->ancestors as $ancestor) { ?>
      <i class="fa fa-caret-right" aria-hidden="true"></i>
      <a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a>
    <?php } ?>
    <i class="fa fa-caret-right" aria-hidden="true"></i>
    <?php echo get_the_title($post); ?>
  </div>

  <?php
  while ( have_posts() ) : the_post();

    // Include the page content template.
    get_template_part( 'content', 'page' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() > 0 ) :
      comments_template();
    endif;

  endwhile;
  ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
