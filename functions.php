<?php
  function styles_and_scripts()
  {

    // Register stylesheets
    
    // wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/dist/css/bootstrap.css' );
    wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/style.css');

    // Enqueue stylesheets
    wp_enqueue_style( 'retina' );
    // wp_enqueue_style(  );
    wp_enqueue_style( ['bootstrap_css', 'theme-styles'] );

    // Enqueue JS

    wp_enqueue_script( 'vendor_js', get_template_directory_uri() . '/dist/js/vendors.min.js' );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/dist/js/custom.min.js', array(), false, true);
  }
  

  add_action( 'wp_enqueue_scripts', 'styles_and_scripts' );

  // Remove WP bloat

  function remove_bloat() {
    remove_action( 'wp_head', 'rest_output_link_wp_head' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );

    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // filter to remove TinyMCE emojis
    add_filter( 'emoji_svg_url', '__return_false' );

    // filter to remove the DNS prefetch
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  }

  add_action( 'after_setup_theme', 'remove_bloat' );
  add_action( 'init', 'disable_wp_emojicons' );

  // filter to disable TinyMCE emojicons
  function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
      return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
      return array();
    }
  }
?>