<?php

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


class WalkerMenuTop extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
      );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf( '<div class="col-sm-2">
        <a href="%s" class="w3-button w3-block w3-padding decoration-none">%s</a>
      </div>',
      $item->url,
      $item->title
    );
  }
}


class WalkerMenuSidebar extends Walker {

  // Tell Walker where to inherit it's parent and id values
  var $db_fields = array(
      'parent' => 'menu_item_parent', 
      'id'     => 'db_id' 
  );
  /**
   * At the start of each element, output a <li> and <a> tag structure.
   * 
   * Note: Menu objects include url and title properties, so we will use those.
   */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf('<a href="%s" class="decoration-none w3-bar-item w3-button">%s</a>',
      $item->url,
      $item->title );
  }
}


class WalkerMenuFooter extends Walker {

  // Tell Walker where to inherit it's parent and id values
  var $db_fields = array(
      'parent' => 'menu_item_parent', 
      'id'     => 'db_id' 
  );
  /**
   * At the start of each element, output a <li> and <a> tag structure.
   * 
   * Note: Menu objects include url and title properties, so we will use those.
   */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf('<li><a href="%s" class="decoration-none w3-hover-theme">%s</a></li>',
      $item->url,
      $item->title );
  }
}


class WalkerMenuSocialIcon extends Walker {

  var $db_fields = array(
      'parent' => 'menu_item_parent', 
      'id'     => 'db_id' 
  );
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf(
      '<a href="%s" title="%s" class="decoration-none">
        <i class="fa %s fa-fw"></i>
      </a>',
      $item->url, $item->title, $item->classes[0] );
  }
}


class WalkerMenuSocialList extends Walker {

  // Tell Walker where to inherit it's parent and id values
  var $db_fields = array(
      'parent' => 'menu_item_parent', 
      'id'     => 'db_id' 
  );
  /**
   * At the start of each element, output a <li> and <a> tag structure.
   * 
   * Note: Menu objects include url and title properties, so we will use those.
   */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf(
      '<li><a href="%s" class="decoration-none w3-hover-theme">
        <i class="fa %s fa-fw"></i> %s
      </a></li>',
      $item->url, $item->classes[0], $item->title );
  }
}
