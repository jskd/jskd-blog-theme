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



<?php

echo '<a href="'.get_home_url().'">Acceuil</a>';

foreach($post->ancestors as $ancestor)

  echo ' <i class="fa fa-caret-right" aria-hidden="true"></i> <a href="'.get_permalink($ancestor).'">'.get_the_title($ancestor).'</a>';


echo ' <i class="fa fa-caret-right" aria-hidden="true"></i> '.get_the_title($post);

?>


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
