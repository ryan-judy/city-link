<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


function wpb_adding_scripts() {
  
  wp_register_script('mdb', get_template_directory_uri() . '/js/mdb.js', array('jquery'),'1.1', true);
    wp_enqueue_script('mdb');

     wp_register_script('jquery.event.move', get_template_directory_uri() . '/js/jquery.event.move.js', array('jquery'),'3.2', true);

    wp_enqueue_script('jquery.event.move');

     wp_register_script('slider', get_template_directory_uri() . '/js/slider.js', array('jquery'),'3.2', true);

    wp_enqueue_script('slider');

  
     wp_register_script('jquery.twentytwenty.js', get_template_directory_uri() . '/js/jquery.twentytwenty.js', array('jquery'),'3.2', true);

    wp_enqueue_script('jquery.twentytwenty.js');

  }
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  


function wpb_adding_styles() {
wp_register_style('twentytwenty', plugins_url('/css/twentytwenty.css', __FILE__));
wp_enqueue_style('twentytwenty');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );  
