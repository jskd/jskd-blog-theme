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

		<div class="col-md-8">

(index)
<?php
// set the "paged" parameter (use 'page' if the query is on a static front page)
if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; 
}


$args = array(
  'posts_per_page' => 3,
  'paged'          => $paged
);

$the_query = new WP_Query( $args ); 

?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php
add_filter( 'paginate_links', function( $link )
{
    return  
       filter_input( INPUT_GET, 'nk' )
       ? remove_query_arg( 'nk', $link )
       : $link;
} );
$args = array(
	'format'             => 'page/%#%',
	'total'              => 1,
  'current'            => $paged,
  'total' => $the_query->max_num_pages,
	'show_all'           => true,
	'end_size'           => 1,
	'mid_size'           => 2,
	'prev_next'          => true,
	'prev_text'          => __('&laquo;'),
	'next_text'          => __('&raquo;'),
	'type'               => 'plain',
	'add_args'           => false,
	'add_fragment'       => '',
	'before_page_number' => '',
	'after_page_number'  => ''
); ?>
<div class="w3-center">
<div class="w3-bar w3-border w3-round">
<?php 
$paginate= paginate_links( $args );
$paginate=str_replace("page-numbers", "w3-button w3-hover-theme", $paginate);
$paginate=str_replace("w3-hover-theme current", "w3-theme-d1 pointer-events-none", $paginate);
echo $paginate;
?>
</div>
</div>

		</div> <!-- col -->

		<?php get_sidebar(); ?>

	</div> <!-- row -->

<?php get_footer(); ?>
