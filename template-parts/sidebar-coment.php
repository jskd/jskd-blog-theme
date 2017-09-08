

    <div class="w3-container w3-theme-d1">
      <h3>Derniers comentaires</h3>
    </div>
    <div class="w3-container">
      <ul class="w3-ul">
<?php 
$args = array(
  'number' => 2,
  'status' => 'approve'
);

// The Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop
if ( $comments ) {
  foreach ( $comments as $comment ) {

?>

<li class="padding-left-0 padding-right-0">
  <a href=" <?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID ; ?>" class="decoration-none w3-hover-theme w3-block w3-padding-small decoration-none">

    <div class="w3-row">
      <div class="w3-col w3-tooltip section-avatar">
        <?php echo get_avatar( $comment->comment_author_email, 96, $default, $alt, array(
          'class' => 'w3-left w3-margin-right comment-avatar'
        )); ?> 
      </div>
    <div class="w3-rest comment-ellipsis section-comment">

<?php echo wp_filter_nohtml_kses(  $comment->comment_content ) ?>
</div><div class="w3-leftbar w3-border-blue w3-small section-detail">
<i class="fa fa-newspaper-o fa-fw" aria-hidden="true"></i>
<?php echo get_the_title(   $comment->comment_post_ID  ) ?> <br>
<i class="fa fa-calendar-o fa-fw" aria-hidden="true"></i>

<?php echo date_i18n("j F", strtotime(  $comment->comment_date ))   ?> <br>

<i class="fa fa-user-o fa-fw" aria-hidden="true"></i>
<?php echo $comment->comment_author; ?>


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


