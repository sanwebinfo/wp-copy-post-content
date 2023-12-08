<?php
/*
Plugin Name: WP Copy Post Content
Description: A Simple Plugin to Copy Full Post content to Clipboard - Built using Clipboard JS.
Version: 1.0.0
Author: sanweb
Author URI: https://sanweb.info/
Requires at least: 6.0
Tested up to: 6.4.2
Text Domain: wp-copy-post-content
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html
*/

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'wpclipboard_after_post_content' ) ) {

function wpclipboard_after_post_content( $content ) {
	if ( is_single() ) {
		wp_enqueue_script( 'clipboard-polyfill', plugin_dir_url( __FILE__ ) . 'clipboard.js', false, NULL );
		wp_enqueue_script( 'copy-post-to-clipboard', plugin_dir_url( __FILE__ ) . 'copy-post-to-clipboard.js', false, NULL );
		$content = '<div id="randomwords">' . $content . '</div>' .  '<br><button style="padding: 12px 28px;margin:auto;display:block" class="copybtn" id="btncopy" data-clipboard-target="#randomwords"><b>&#8594; Copy Word &larr;</b></button><br><div id="copied"></div>';
	}
	return $content;
}
}
add_filter( 'the_content', 'wpclipboard_after_post_content');
