<?php

/*
Plugin Name: Influid Admin
Plugin URI: http://influid.com.br/
Description: Influid Wordpress Admin
Author: André Daniel
Version: 0.1
Author URI: https://github.com/andredaniel
*/

function influid_admin_style() {
    wp_enqueue_style('influid-admin', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'influid_admin_style');
add_action('login_enqueue_scripts', 'influid_admin_style');

function influid_admin_footer() {
    // footer admin credits
 }
 
 add_action('admin_footer', 'influid_admin_footer');
 
//  Adds a custom class on body
// Apply filter
add_filter('body_class', 'influid_body_class');

function influid_body_class($classes) {
    $classes[] = 'influid-admin';
    return $classes;
}
