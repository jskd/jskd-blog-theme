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


function pdesc( $atts, $content = null ) {
	return '<div class="container padding-0 w3-margin-bottom">
  <div class="row  align-items-center">' . do_shortcode($content) . '</div></div>';
}
add_shortcode( 'pdesc-container', 'pdesc' );


function pdesc_brief( $atts, $content = null ) {
	return '<div class="col-sm-8">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'pdesc-brief', 'pdesc_brief' );


function pdesc_link( $atts, $content = null ) {
	return '<div class="col-sm-4">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'pdesc-link', 'pdesc_link' );

function pdesc_button( $atts, $content = null ) {
  $a = shortcode_atts( array(
		'href' => '',
	), $atts );
	return '<a class="w3-btn w3-white w3-border w3-border-blue w3-round" style="width:100%" href="' . esc_attr($a['href']) . '"> ' . do_shortcode($content) . '</a>';
}
add_shortcode( 'pdesc-button', 'pdesc_button' );



function pslide( $atts, $content = null ) {
  return '<div class="w3-content w3-display-container">' . do_shortcode($content) . '
 <div class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</div>
</div>

<script>var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}</script>';
}
add_shortcode( 'pslide', 'pslide' );



function pslide_img( $atts, $content = null ) {
  $a = shortcode_atts( array(
		'src' => '',
	), $atts );
	return '<div class="w3-display-container mySlides">
  <img src="' . esc_attr($a['src']) . '" style="width:100%">
  <div class="w3-display-bottomleft w3-container w3-padding-16 w3-black">
  ' . do_shortcode($content) . '
  </div>
</div>';
}



add_shortcode( 'pslide-img', 'pslide_img' );




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


