<?php 
/*
Theme Name: Blog theme
Author: Jerome Skoda
Description: Bootstrap Blog template
Version: 0.0.1
Tags: blog bootstrap
Template Name: Newsletter Page
*/
?>

<?php get_header(); ?>

  <div id="id01" class="w3-modal" style="display: block;">
    <div class="w3-modal-content w3-card-4">
      <div class="w3-container w3-theme-l2"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
          <h2><?php the_title() ?></h2>
      </div>
      <div class="w3-container">
      <p>
 <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();the_content(); ?>

<?php  endwhile;
endif;




?>
</p>
</div>
</div>
</div>



	<div class="row">

		<div class="col-md-8">
<?php 

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 3, 'paged' => $paged );
query_posts($args);
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

/*
$args = array(
	'base'               => 'http://toto.php',
	'format'             => '?paged=%#%',
	'total'              => 1,
	'current'            => 0,
	'show_all'           => false,
	'end_size'           => 1,
	'mid_size'           => 2,
	'prev_next'          => true,
	'prev_text'          => __('« Previous'),
	'next_text'          => __('Next »'),
	'type'               => 'plain',
	'add_args'           => false,
	'add_fragment'       => '',
	'before_page_number' => '',
	'after_page_number'  => '');

echo paginate_links( $args );

$defaults = array(
		'before'           => '<p>' . __( 'Pages:' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page' ),
		'previouspagelink' => __( 'Previous page' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
wp_link_pages( $defaults );*/
		?>
<?php //next_posts_link(); ?>
<?php// previous_posts_link(); ?>

<?php 

$url = explode( '?', esc_url_raw( add_query_arg( array() ) ) );

$no_query_args = $url[0];


$args = array(
  'base'               =>  $no_query_args . "%_%",
//  'format'             => '?page=%#%',
 // 'total'              => 1,
 // 'current'            => 0,
  'show_all'           => False,
  'end_size'           => 1,
  'mid_size'           => 2,
  'prev_next'          => True,
  'prev_text'          => __('« Previous'),
  'next_text'          => __('Next »'),
  'type'               => 'plain',
  'add_args'           => False,
  'add_fragment'       => '',
  'before_page_number' => '',
  'after_page_number'  => ''
); ?>

<div class="pagelink">fddfgdfggdf<?php echo paginate_links( $args ); ?></div>


		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>

