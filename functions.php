<?php
//defining url to assets folder
define('ASSETS_URL', get_template_directory_uri() . '/assets');

function adding_styles_n_scripts_to_my_theme(){
  //adding css files
  wp_enqueue_style('reset', ASSETS_URL . '/css/reset.css', array(), false, false);
  wp_enqueue_style('bootstrap_css', ASSETS_URL . '/css/bootstrap.min.css', array(), false, false);
  wp_enqueue_style('fonts_style_sheet', ASSETS_URL . '0/fonts/stylesheet.css', array(), false, false);
  wp_enqueue_style('MCRS', ASSETS_URL . '/css/MCRS.css', array(), false, false);
  wp_enqueue_style('font_awesome', ASSETS_URL . '/css/font-awesome.min.css', array(), false, false);

  //adding javascript files
  wp_enqueue_script('bootstrap', ASSETS_URL . '/js/bootstrap.min.js', array(), false, true);
  wp_enqueue_script('breakpoints', ASSETS_URL . '/js/breakpoints.min.js', array(), false, true);
  wp_enqueue_script('browser', ASSETS_URL . '/js/browser.min.js', array(), false, true);
  wp_enqueue_script('main_js', ASSETS_URL . '/js/main.js', array('jquery'), false, true);
  wp_enqueue_script('utilities', ASSETS_URL . '/js/util.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'adding_styles_n_scripts_to_my_theme' );

//hiding admin bar
function hide_admin_bar() {
  show_admin_bar(false);
}
add_action('init', 'hide_admin_bar');

//adding theme support
function my_theme_supports(){
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  // add_theme_support('custom-logo');
}
add_action('init', 'my_theme_supports');

//registering menus
function my_theme_menus() {

	register_nav_menus( array(
        'main-menu' => __( 'Pagrindinis meniu' ),
        'footer-menu' => __( 'Footerio meniu' )
    ));
}
add_action( 'init', 'my_theme_menus' );
