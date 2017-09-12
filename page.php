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

<div class="row">
  <main class="col-md-8 w3-padding-16">
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
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main>
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>
