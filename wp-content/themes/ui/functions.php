<?php

function add_scripts_and_styles_to_head() {
  wp_enqueue_style( 'app', get_template_directory_uri() . '/dist/styles/main.css', array(), substr(md5(mt_rand()), 0, 12), 'all' );
  // wp_enqueue_script( 'barba', 'https://unpkg.com/@barba/core', null, null, true );
  // wp_enqueue_script( 'gsap', 'https://unpkg.com/gsap@latest/dist/gsap.min.js', null, null, true );
  wp_enqueue_script( 'app', get_template_directory_uri() . '/dist/scripts/main.js', array(), substr(md5(mt_rand()), 0, 12), true );
}

add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles_to_head' );

add_theme_support('post-thumbnails');

function add_favicon() {
  echo '<link rel="shortcut icon" href="'.get_template_directory_uri().'/favicon.ico" />';
}
add_action('wp_head', 'add_favicon');

function add_menus() {
  register_nav_menus( array(
    'header-menu' => esc_html__( 'Header Menu', 'UI' ),
    'footer-menu' => esc_html__( 'Footer Menu', 'UI' ),
  ));
}
add_action( 'init', 'add_menus' );

/**
 * 
 * 
 * 
* Custom walker class - FOOTER
*
*
*
*/
class Footer_Nav_Walker extends Walker_Nav_Menu {

  /**
  * Starts the list before the elements are added.
  *
  * Adds classes to the unordered list sub-menus.
  *
  * @param string $output Passed by reference. Used to append additional content.
  * @param int    $depth  Depth of menu item. Used for padding.
  * @param array  $args   An array of arguments. @see wp_nav_menu()
  */
  function start_lvl( &$output, $depth = 0, $args = array() ) {
      // Depth-dependent classes.
      $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
      $display_depth = ( $depth + 1); // because it counts the first submenu as 0
      $classes = array(
          'sub-menu',
          ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
          ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
          'menu-depth-' . $display_depth
      );
      $class_names = implode( ' ', $classes );

      // Build HTML for output.
      $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
  }

  /**
  * Start the element output.
  *
  * Adds main/sub-classes to the list items and links.
  *
  * @param string $output Passed by reference. Used to append additional content.
  * @param object $item   Menu item data object.
  * @param int    $depth  Depth of menu item. Used for padding.
  * @param array  $args   An array of arguments. @see wp_nav_menu()
  * @param int    $id     Current item ID.
  */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      global $wp_query;
      $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

      // Depth-dependent classes.
      $depth_classes = array(
          ( $depth == 0 ? 'main-menu-item c-nav_menu_section' : 'sub-menu-item' ),
          ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
          ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
          'menu-item-depth-' . $depth
      );
      $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

      // Passed classes.
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

      // Build HTML.
      $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

      // Link attributes.
      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
      $attributes .= ' class="menu-link c-nav_link' . ( $depth > 0 ? ' sub-menu-link' : ' footer-nav-item u-no-pointer-events' ) . '"';

      // Build HTML output and pass through the proper filter.
      $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
          $args->before,
          $attributes,
          $args->link_before,
          apply_filters( 'the_title', $item->title, $item->ID ),
          $args->link_after,
          $args->after
      );
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}

/**
 * 
 * 
 * 
* Custom walker class - HEADER
*
*
*
*/
class Header_Nav_Walker extends Walker_Nav_Menu {

  /**
  * Starts the list before the elements are added.
  *
  * Adds classes to the unordered list sub-menus.
  *
  * @param string $output Passed by reference. Used to append additional content.
  * @param int    $depth  Depth of menu item. Used for padding.
  * @param array  $args   An array of arguments. @see wp_nav_menu()
  */
  function start_lvl( &$output, $depth = 0, $args = array() ) {
      // Depth-dependent classes.
      $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
      $display_depth = ( $depth + 1); // because it counts the first submenu as 0
      $classes = array(
          'sub-menu c-nav_dropdown',
          ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
          ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
          'menu-depth-' . $display_depth
      );
      $class_names = implode( ' ', $classes );

      // Build HTML for output.
      $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
  }

  /**
  * Start the element output.
  *
  * Adds main/sub-classes to the list items and links.
  *
  * @param string $output Passed by reference. Used to append additional content.
  * @param object $item   Menu item data object.
  * @param int    $depth  Depth of menu item. Used for padding.
  * @param array  $args   An array of arguments. @see wp_nav_menu()
  * @param int    $id     Current item ID.
  */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      global $wp_query;
      $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

      // Depth-dependent classes.
      $depth_classes = array(
          ( $depth == 0 ? 'main-menu-item c-nav_menu_item' : 'sub-menu-item c-nav_dropdown_item' ),
          ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
          ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
          'menu-item-depth-' . $depth
      );
      $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

      // Passed classes.
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

      // Build HTML.
      $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

      // Link attributes.
      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
      $attributes .= ' class="menu-link c-nav_link' . ( $depth > 0 ? ' sub-menu-link' : ' header-nav-item' ) . '"';

      // <span class="u-icon"><svg width="10" height="6" xmlns="http://www.w3.org/2000/svg"><path d="M5.25 4.432L1.36.542l-.706.708L5.25 5.846 9.846 1.25 9.14.543z" fill="#333" fill-rule="nonzero"/></svg></span>
      
      // Build HTML output and pass through the proper filter.
      $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
          $args->before,
          $attributes,
          $args->link_before,
          apply_filters( 'the_title', $item->title, $item->ID ),
          $args->link_after,
          $args->after
      );
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}

/**
 * 
 * 
 * 
* Custom walker class - HEADER
*
*
*
*/
function menu_set_dropdown( $sorted_menu_items, $args ) {
  $last_top = 0;
  foreach ( $sorted_menu_items as $key => $obj ) {
      // it is a top lv item?
      if ( 0 == $obj->menu_item_parent ) {
          // set the key of the parent
          $last_top = $key;
      } else {
          $sorted_menu_items[$last_top]->classes['c-nav_heading -hover'] = 'c-nav_heading -hover';
      }
  }
  return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );

/**
* Automatically add IDs to headings such as <h2></h2>
* https://jeroensormani.com/automatically-add-ids-to-your-headings/
*/
function auto_id_headings( $content ) {
  $content = preg_replace_callback( '/(\<h[1-6](.*?))\>(.*)(<\/h[1-6]>)/i', function( $matches ) {
    if ( ! stripos( $matches[0], 'id=' ) ) :
      $matches[0] = $matches[1] . $matches[2] . ' id="' . sanitize_title( $matches[3] ) . '">' . $matches[3] . $matches[4];
    endif;
    return $matches[0];
  }, $content );
  
  return $content;

}
add_filter( 'the_content', 'auto_id_headings' );

//
//
//

// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
  $menu_name = 'header-menu'; // specify custom menu slug
  if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '<nav>' ."\n";
    $menu_list .= "\t\t\t\t". '<ul class="c-nav_menu_list -main">' ."\n";
    foreach ((array) $menu_items as $key => $menu_item) {
      $delay = $key + 1;
      $title = $menu_item->title;
      $url = $menu_item->url;
      $menu_list .= "\t\t\t\t\t". '<li class="c-nav_menu_item delay-' . $delay . '"><a href="'. $url .'" data-route="menu" id="webaim-primary-nav">'. $title .'<sup class="c-nav_menu_item_sup">420</sup></a></li>' ."\n";
    }
    $menu_list .= "\t\t\t\t". '</ul>' ."\n";
    $menu_list .= "\t\t\t". '</nav>' ."\n";
  } else {
    // $menu_list = '<!-- no list defined -->';
  }
  echo $menu_list;
}

function wp_nav_menu_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);


















// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function tempnav() {
  $menu_name = 'header-menu'; // specify custom menu slug
  if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '<nav>' ."\n";
    $menu_list .= "\t\t\t\t". '<ul>' ."\n";
    foreach ((array) $menu_items as $key => $menu_item) {
      $delay = $key + 1;
      $title = $menu_item->title;
      $url = $menu_item->url;
      $menu_list .= "\t\t\t\t\t". '<li style="display: inline-block; margin-right: 1rem;"><a href="'. $url .'" data-route="menu">'. $title .'</a></li>' ."\n";
    }
    $menu_list .= "\t\t\t\t". '</ul>' ."\n";
    $menu_list .= "\t\t\t". '</nav>' ."\n";
  } else {
    // $menu_list = '<!-- no list defined -->';
  }
  echo $menu_list;
}

?>
