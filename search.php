<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<main class="w3-col m7 l8">

  <h2>Recherche</h2>
  <p>
    <?php get_search_form(); ?>
  </p>

  <p>
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

?>
<ul>
<?php


	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>
<li>
<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
</li>
      <?php } ?>
    </ul>
<?php
	  /* Restore original Post Data */
	  wp_reset_postdata();
  } else {
	  echo "Aucun résultat";
  }
?>
  </p>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
