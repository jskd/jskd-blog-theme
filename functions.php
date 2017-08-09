<?php

function register_my_menus() {
  register_nav_menus(
    array(
    'menu-sidebar' => __( 'Menu sidebar',      'jskd-blog-theme' ),
    'menu-top'      => __( 'Menu top',           'jskd-blog-theme' ),
		'social'        => __( 'Social Links Menu',  'jskd-blog-theme' ),
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
        <a href="%s" %s class="w3-button w3-block w3-padding">%s</a>
      </div>',
      $item->url,
      ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
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
    $output .= sprintf('<a href="%s" %s class="w3-bar-item w3-button">%s</a>',
      $item->url,
      ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
      $item->title );
  }
}





