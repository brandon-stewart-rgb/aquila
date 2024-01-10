<?/**
 * Summary.
 *
 * theme functions
 *
 * @package Aquila
 */

//  echo '<pre>';
//  print_r( get_stylesheet_uri() );
//  wp_die();

//  echo '<pre>';
//  print_r( filemtime( get_template_directory() . '/style.css'));
//  wp_die();


 function aquila_enqueue_scripts() {
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() , [], filemtime( get_template_directory() . '/style.css'), 'all' );
 }
 add_action ( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );
?>
