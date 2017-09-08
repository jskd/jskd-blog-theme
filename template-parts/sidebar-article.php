<?php

?>
    <div class="w3-container w3-theme-d1">
      <h3>Derniers articles</h3>
    </div>
    <div class="w3-container">
      <ul class="w3-ul">
<?php
$args = array(
	'posts_per_page'      => 4,
  'post_statuc' => 'publish',
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li class="padding-left-0 padding-right-0"><a href="'.get_permalink().'" class="decoration-none w3-hover-theme w3-block w3-padding decoration-none">' . get_the_title() . '</a></li>';
	}
	wp_reset_postdata();
}
?>
      </ul>
    </div>
