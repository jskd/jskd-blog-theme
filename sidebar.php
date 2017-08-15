<div class="col-md-4 col-md-offset-8">
  <div class="w3-card-4">
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
		echo '<li class="w3-padding-small"><a href="'.get_permalink().'" class="decoration-none w3-hover-theme w3-block w3-padding decoration-none">' . get_the_title() . '</a></li>';
	}
	wp_reset_postdata();
}
?>
      </ul>
    </div>
  </div>
  <div class="w3-card-4 w3-margin-top">
    <div class="w3-container w3-theme-d1">
      <h3>Derniers comentaires</h3>
    </div>
    <div class="w3-container">
      <ul class="w3-ul">
<?php 
$args = array(
    'number' => 2
);

// The Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop
if ( $comments ) {
  foreach ( $comments as $comment ) {

?>

<li style="padding-left: 0; padding-right: 0;">
  <a href=" <?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID ; ?>" class="decoration-none w3-hover-theme w3-block w3-padding decoration-none">

    <div class="w3-row">
      <div class="w3-col w3-tooltip" style="width: 50px;">
        <span style="position:absolute;left:0;bottom:18px" class="w3-text w3-tag">
          <?php echo $comment->comment_author; ?>
        </span>
        <?php echo get_avatar( $comment->comment_author_email, 50, $default, $alt, array(
          'class' => 'w3-left w3-circle w3-margin-right'
        )); ?> 
      </div>
    <div class="w3-rest">
<div  style="text-overflow: ellipsis; height: 3em;">
<?php echo wp_filter_nohtml_kses(  $comment->comment_content ) ?>
</div><div class="w3-tag w3-blue">
<?php echo get_the_title(   $comment->comment_post_ID  ) ?> </span>
</div></div>
      </a></li>

<?php


	}
} else {
	echo 'No comments found.';
}
?>
      </ul>
    </div>
   </div>
  </div>
</div><!-- /.blog-sidebar -->
