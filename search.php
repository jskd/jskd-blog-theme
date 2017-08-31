<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

	<div class="row">

		<main class="col-md-8 w3-padding-16">


<h2>Recherche</h2>
<?php get_search_form(); ?>
<?php /* Start the Loop */ ?>
			<?php // The Query
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$the_query = new WP_Query($search_query);


// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>

<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<?php
		echo '<li>' . get_the_title() . '</li>';
	}
	echo '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	echo "Aucun résultat";
}
 ?>
		</main>

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>
