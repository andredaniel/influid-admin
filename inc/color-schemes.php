<?php

class InfluidColorSchemes {

  /**
   * List of colors registered in this plugin.
   *
   * @since 1.0
   * @access private
   * @var array $colors List of colors registered in this plugin. 
   *                    Needed for registering colors-fresh dependency.
   */
  private $colors = array( 
    'influid'
  );

  function __construct() {
    add_action( 'admin_enqueue_scripts', array( $this, 'load_default_css' ) );
    add_action( 'admin_init' , array( $this, 'add_colors' ) );
  }

  /**
   * Register color schemes.
   */
  function add_colors() {
    $suffix = is_rtl() ? '-rtl' : '';

    wp_admin_css_color(
      'influid', __( 'Influid', 'admin_schemes' ), 
      plugins_url( "../influid/colors$suffix.css", __FILE__ ),
      array( '#282c38', '#1f222e', '#0ac896', '#fff' ),
      array( 'base' => '#282c38', 'focus' => '#1f222e', 'current' => '#0ac896' )
    );

  }

  /**
   * Make sure core's default `colors.css` gets enqueued, since we can't
   * @import it from a plugin stylesheet. Also force-load the default colors 
   * on the profile screens, so the JS preview isn't broken-looking.
   */ 
  function load_default_css() {

    global $wp_styles, $_wp_admin_css_colors;

    $color_scheme = get_user_option( 'admin_color' );

    $scheme_screens = apply_filters( 'acs_picker_allowed_pages', array( 'profile', 'profile-network' ) );
    if ( in_array( $color_scheme, $this->colors ) || in_array( get_current_screen()->base, $scheme_screens ) ){
      $wp_styles->registered[ 'colors' ]->deps[] = 'colors-fresh';
    }

  }

}
global $acs_colors;
$acs_colors = new InfluidColorSchemes;
