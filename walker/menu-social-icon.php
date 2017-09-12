<?php
class WalkerMenuSocialIcon extends Walker {

  var $db_fields = array(
      'parent' => 'menu_item_parent', 
      'id'     => 'db_id' 
  );
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf(
      '<li><a href="%s" title="%s" class="decoration-none %s">
        <i class="fa %s fa-fw"></i>
      </a></li>',
    $item->url, $item->title, $item->attr_title, $item->classes[0] );
  }
}
