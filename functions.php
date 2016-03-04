<?php 
  if(!defined('MR_THEME_DIR')) {
    define('MR_THEME_DIR', get_theme_root().'/'.get_template().'/');
  } 

  if(!defined('MR_THEME_URL')) {
    define('MR_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
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