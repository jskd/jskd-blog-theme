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
		echo '<li class="padding-left-0 padding-right-0"><a href="'.get_permalink().'" class="decoration-none w3-hover-theme w3-block w3-padding decoration-none">' . get_the_title() . '</a></li>';
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

<li class="padding-left-0 padding-right-0">
  <a href=" <?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID ; ?>" class="decoration-none w3-hover-theme w3-block w3-padding decoration-none">

    <div class="w3-row" style="line-height: 1em;">
      <div class="w3-col w3-tooltip" style="width: 3em;">
        <span style="position:absolute;left:0;bottom:18px" class="w3-text w3-tag">
          <?php echo $comment->comment_author; ?>
        </span>
        <?php echo get_avatar( $comment->comment_author_email, 45, $default, $alt, array(
          'class' => 'w3-left w3-circle w3-margin-right'
        )); ?> 
      </div>
    <!--<div class="w3-rest comment-ellipsis" style="height: 3em; line-height: 1em;     overflow:hidden;
    text-overflow:ellipsis; text-overflow: '…';">-->
    <div class="w3-rest comment-ellipsis" style="height: 3em; line-height: 1em;">

<?php echo wp_filter_nohtml_kses(  $comment->comment_content ) ?>
</div><div class="w3-panel w3-leftbar" style="margin-top: 8px; margin-bottom: 0px;">
<i class="fa fa-newspaper-o fa-fw" aria-hidden="true"></i>
<?php echo get_the_title(   $comment->comment_post_ID  ) ?> <br>
<i class="fa fa-calendar-o fa-fw" aria-hidden="true"></i>

<?php echo date_i18n( get_option( 'date_format' ), strtotime(  $comment->comment_date ))   ?>


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
 <div class="w3-card-4 w3-margin-top">
<form class="w3-container" method="post" action="http://localhost/~jskd/blog/?na=s" onsubmit="return newsletter_check(this)">
<h2>Newsletter</h2>
Restez informés en vous inscrivant à la newsletter
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>

    <div class="w3-rest">


      <input class="w3-input w3-border" name="ne" type="text" required placeholder="Email">
</div>


<button class="w3-button w3-section w3-blue w3-ripple">S'abonner</button>

  </div>
</div><!-- /.blog-sidebar -->
