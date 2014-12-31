<?php

/*
 * Plugin Name: Simple jQuery Countdown
 * Plugin URI:
 * Description: My Custom Simple jQuery Countdown
 * Version: 1.0
 * Author: Tapan Kumer Das
 * Author URI: http://21coder.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
if (!defined('ABSPATH'))
  exit;  // if direct access

require_once( plugin_dir_path(__FILE__) . 'includes/tkd-countdown-shortcodes.php');

function tkd_countdown_init_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('tkd_countdown_js', plugins_url('/js/jquery.countdown.js', __FILE__));
}

add_action("init", "tkd_countdown_init_scripts");
