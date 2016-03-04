<?php 
  if(!defined('MATTWP_THEME_DIR')) {
    define('MATTWP_THEME_DIR', get_theme_root().'/'.get_template().'/');
  } 

  if(!defined('MATTWP_THEME')) {
    define('MATTWP_THEME', WP_CONTENT_URL.'/themes/'.get_template().'/');
  }

  require_once (dirname(__FILE__) . '/framework/mattwp-config.php');

  // MENU

  function my_menu() {
    register_nav_menus(
      array(
        'header-menu' => __('General menu')
      )
    );
  }
  add_action( 'init', 'my_menu' );

  // SLIDER CUSTOM POST TYPE

  function slider_register() {  
    $args = array(  
        'label' => __('Slider'),  
        'singular_label' => __('Slide'),  
        'public' => true,  
        'has_archive' => true,
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => array( 'slug' => 'slider', 'with_front' => true ),  
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')  
       );  
   
    register_post_type( 'slider' , $args );  
    flush_rewrite_rules( false );
  }
  add_action('init', 'slider_register'); 

    // sidebars

  add_action( 'widgets_init', 'default_sidebar' );
  function default_sidebar() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'mattwp-theme' ),
        'id' => 'main-sidebar',
        'description' => __( 'Widgets in sidebar', 'mattwp-theme' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ) );
  }