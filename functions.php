<?php

require_once( __DIR__ . '/walker/comment.php');
require_once( __DIR__ . '/walker/menu-footer.php');
require_once( __DIR__ . '/walker/menu-sidebar.php');
require_once( __DIR__ . '/walker/menu-social-list.php');
require_once( __DIR__ . '/walker/menu-social-icon.php');
require_once( __DIR__ . '/walker/menu-top.php');
require_once( __DIR__ . '/class/mailpoet-form-custom.php');

remove_filter('the_content', 'wpautop');

function register_my_menus() {
  register_nav_menus(
    array(
    'menu-sidebar'     => __( 'Menu sidebar',      'jskd-blog-theme' ),
    'menu-top'         => __( 'Menu top',           'jskd-blog-theme' ),
    'menu-footer'         => __( 'Menu top',           'jskd-blog-theme' ),
		'menu-social-icon' => __( 'Social Links Menu',  'jskd-blog-theme' ),
		'menu-social-list' => __( 'Social Links Menu',  'jskd-blog-theme' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


$req_class="w3-right w3-text-red";
$input_class="w3-input w3-hover-theme w3-theme-l4 w3-border-0";

function theme_queue_js(){
  if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
    wp_enqueue_script( 'comment-reply' );
}



add_action('wp_print_scripts', 'theme_queue_js');


add_filter( 'comment_form_default_fields', 'w3css_comment_form_fields' );
function w3css_comment_form_fields( $fields ) {
  $commenter=wp_get_current_commenter();
  global $req_class;
  global $input_class;
  $fields=array(
    'author' => '
      <p>
        <label for="author">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          Nom ou pseudonyme <span class="required">*</span>
        </label>
        <label for="author" class="'.$req_class.'">Obligatoire</label>
        <input required class="'.$input_class.'" id="author" name="author"
          type="text" value="'.esc_attr( $commenter['comment_author'] ).'"
          size="30" />
      </p>',
    'email'  => '
      <p>
        <label for="email">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          '. __('Email') .' *
        </label>
        <label for="email" class="'.$req_class.'">Obligatoire</label>
        <input required class="'.$input_class.'" id="email" name="email"
          value="'.esc_attr($commenter['comment_author_email']).'"
          size="30" type="email" />
        <label for="email" class="w3-small w3-right">
          '. __( 'Your email address will not be published.' ) .'
        </label>
      </p>',
/*
    'url' => '
      <p>
        <label for="url">
          <i class="fa fa-globe" aria-hidden="true"></i>
          '. __( 'Website' ) .'
        </label>
        <input class="'.$input_class.'" id="url" name="url" type="url"
          value="'.esc_attr($commenter['comment_author_url']).'" size="30" />
          </p>',
 */
  );
  return $fields;
}

add_filter( 'comment_form_defaults', 'w3css_comment_form' );
function w3css_comment_form( $args ) {
  global $req_class;
  global $input_class;
  $args['comment_field']='
    <p>
      <label for="comment">
        <i class="fa fa-comment-o" aria-hidden="true"></i>
        ' . _x( 'Comment', 'noun' ) . ' *
      </label>
      <label for="comment" class="'.$req_class.'">Obligatoire</label>
      <textarea required class="'.$input_class.'" id="comment" name="comment"
        cols="45" rows="8"></textarea>
      <label for="comment"class="w3-small w3-right-align">
        Vous pouvez utiliser ces balises et attributs
        <abbr title="HyperText Markup Language">HTML</abbr>:
        <code>'.allowed_tags().'</code>
      </label>
    </p>';
  $args['class_submit'] = 'w3-ripple w3-btn w3-theme-d2'; // since WP 4.1
  $args['class_form'] = "w3-container padding-0";
  $args['comment_notes_after'] = ' ';
  $args['comment_notes_before'] = ' ';
  $args['cancel_reply_before']='<span class="w3-right">';
  $args['cancel_reply_after']='</span>';
  return $args;
}


