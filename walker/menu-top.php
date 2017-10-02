<?php
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
    $output .= sprintf( '<div class="w3-col" style="width: 22%%">
        <a href="%s" class="w3-button w3-block w3-padding decoration-none">%s</a>
      </div>',
      $item->url,
      $item->title
    );
  }
}
