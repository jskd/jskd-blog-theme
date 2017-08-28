<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>


		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

  <?php 


add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

    $inputclass= "w3-input w3-hover-theme w3-theme-l4 w3-border-0";

    $fields   =  array(
      'author' => '<div class="form-group comment-form-author">
      
      ' . '<label for="author">
<i class="fa fa-user-o" aria-hidden="true"></i>
     

 Nom ou pseudonyme '. ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
            <label for="author" class="w3-right w3-text-red">Obligatoire</label> ' .
                    '<input required class="'.$inputclass.'" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
                      'email'  => '<p><label for="email">
<i class="fa fa-envelope-o" aria-hidden="true"></i>
                      
                      
                      
                      ' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ). '</label>
            <label for="email" class="w3-right w3-text-red">Obligatoire</label> ' .
        '<input required class="'.$inputclass.'" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
        <label for="email" class="w3-small w3-right">'. __( 'Your email address will not be published.' ) . '</label>
        </p>',
'url'    => '<p class="comment-form-url"><label for="url">
<i class="fa fa-globe" aria-hidden="true"></i>


' . __( 'Website' ) . '</label> ' .
                    '<input class="'.$inputclass.'" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>'        
    );
    
    return $fields;
}


add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">
            
<i class="fa fa-comment-o" aria-hidden="true"></i>
            
            ' . _x( 'Comment', 'noun' ) . ' <span class="required">*</span></label>
            <label for="comment" class="w3-right w3-text-red">Obligatoire</label>
            <textarea required class="w3-input w3-hover-theme w3-theme-l4 w3-border-0" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>'.
            '<label for="comment"class="form-allowed-tags w3-small w3-right-align">' .
      'Vous pouvez utiliser ces balises et attributs <abbr title="HyperText Markup Language">HTML</abbr>:'  .
      ' <code>' . allowed_tags() . '</code>'
     . '</label>'
.' </div>';
    $args['class_submit'] = 'w3-ripple w3-btn w3-theme-d2'; // since WP 4.1
$args['class_form'] = "w3-container";
$args['comment_notes_after'] = ' ';

$args['comment_notes_before'] = ' ';

    return $args;
}







/*

$fields =  array(

  'author' =>
    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></p>',

  'email' =>
    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>'.

'<p class="comment-notes">' .
    __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
    '</p>',

  'url' =>
    '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></p>',
);

      
$args = array(
  'id_form'           => 'commentform',
  'class_form'      => 'comment-form',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Leave a Reply' ),
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit'      => __( 'Post Comment' ),
  'format'            => 'xhtml',

  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => $required_text,

  'comment_notes_after' => '<p class="form-allowed-tags">' .
    sprintf(
      __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
      ' <code>' . allowed_tags() . '</code>'
    ) . '</p>',

);
      
      
      
 */
      
      
      
      
comment_form(); ?>

</div><!-- .comments-area -->
