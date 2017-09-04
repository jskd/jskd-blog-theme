<aside class="col-md-4 col-md-offset-8 hidden-print w3-padding-16">
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
  <a href=" <?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID ; ?>" class="decoration-none w3-hover-theme w3-block w3-padding-small decoration-none">

    <div class="w3-row">
      <div class="w3-col w3-tooltip section-avatar">
        <?php echo get_avatar( $comment->comment_author_email, 96, $default, $alt, array(
          'class' => 'w3-left w3-margin-right comment-avatar'
        )); ?> 
      </div>
    <div class="w3-rest comment-ellipsis section-comment">

<?php echo wp_filter_nohtml_kses(  $comment->comment_content ) ?>
</div><div class="w3-leftbar w3-small section-detail">
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


   </div>
  <div class="w3-card-4 w3-margin-top">
    <header class="w3-container w3-theme-d1">
      <h3>Newsletter</h3>
    </header>
<div class="w3-container" >
      <div class="w3-section">
        Restez informés en vous inscrivant à la newsletter
      </div>
    <form  class="w3-section" id="newsletter-sidebar-form" method="post" action="/?na=s">
        <div class="w3-row">
          <div class="w3-col" style="width:50px">
            <i class="w3-xxlarge fa fa-envelope-o"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-hover-theme w3-theme-l4 w3-border-0" placeholder="Entrer son email" name="ne" type="email" required placeholder="Email">
          </div>
        </div>
    </form>


       <div class="w3-section">
         <div id="newsletter-sidebar-error" class="w3-panel w3-pale-red w3-leftbar w3-border w3-border-red w3-padding">
           L'adresse de messagerie n'est pas valide.
         </div>
         <div id="newsletter-sidebar-sucess" class="w3-panel w3-pale-green w3-leftbar w3-border w3-border-green w3-padding">
           Merci, vous êtes abonné à la newsletter. <br>
           Vous recevrez un e-mail de confirmation dans quelques minutes. 
           Suivez le lien pour confirmer votre abonnement. <br>
           Si le courrier électronique prend plus de 15 minutes pour apparaître dans 
           votre messagerie, vérifiez votre dossier de spam.
         </div>
       </div>

      <div class="w3-section" id="newsletter-sidebar-submit" >
        <button class="w3-button w3-green" onclick="submit_newsletter_sidebar()">S'abonner</button>
      </div>

</div>
  </div>
</aside><!-- /.blog-sidebar -->
