<?php

/**
 * Plugin Name
 *
 * @package           swiper
 * @author            Ali Hasan
 * @copyright         2025 Ali Hasan
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Post Gallery Slider
 * Plugin URI:        #
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ali Hasan
 * Author URI:        #
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

require_once( dirname( __FILE__ ) . '/inc/enqueue.php' );
require_once( dirname( __FILE__ ) . '/inc/post-type.php' );
require_once( dirname( __FILE__ ) . '/inc/customizer.php' );
require_once( dirname( __FILE__ ) . '/inc/shortcode.php' );
