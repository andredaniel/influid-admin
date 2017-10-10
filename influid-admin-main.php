<?php

// Define de root path of the plugin
define('INFLUID_ADMIN_PATH', ABSPATH . 'wp-content/plugins/influid-admin');

// Load admin scripts
function influid_admin_script() {
  wp_enqueue_script('influid-admin', plugins_url('/dist/bundle.js', __FILE__));
}
add_action('admin_enqueue_scripts', 'influid_admin_script');
add_action('login_enqueue_scripts', 'influid_admin_script');


// Add a custom class on body
add_filter('body_class', 'influid_body_class');
function influid_body_class($classes) {
  $classes[] = 'influid-admin';
  return $classes;
}


// 
require INFLUID_ADMIN_PATH . '/inc/color-schemes.php';
