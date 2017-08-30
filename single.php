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

		<div class="col-md-8 w3-padding-16">


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
    $paginate= get_the_post_navigation(array(
        'prev_text' => '&laquo;  %title',
        'next_text' => '%title &raquo;',
      ) );
// Remove div of link
$paginate = preg_replace("/<\/?div[^>]*\>/i", "", $paginate); 
// Remove title
$paginate = preg_replace("/<h2[^<]*<\/h2\>/i", "", $paginate); 
// Add w3.css style
$paginate = str_replace('rel="prev"', 'class="w3-btn w3-border w3-ripple w3-hover-theme" rel="prev"', $paginate); 
$paginate = str_replace('rel="next"', 'class="w3-btn w3-border w3-ripple w3-hover-theme w3-right" rel="next"', $paginate); 

echo($paginate);

		// End the loop.
		endwhile;
?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>
