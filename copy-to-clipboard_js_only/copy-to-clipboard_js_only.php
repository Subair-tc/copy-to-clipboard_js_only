<?php
/*
Plugin Name: copy to clipboard
Version: 1.0
Description: Copy to clipboard using JS (clipboard.js-master.js)
Author: Subair T C
Author URI:
Plugin URI:
Text Domain: copy-to-clipboard_js_only
Domain Path: /languages
*/

function copy_to_clipboard_js_only_scripts() {

	wp_register_script( 'clipboard-js', plugins_url( '/js/clipboard.min.js', __FILE__ ), true );
	wp_enqueue_script( 'clipboard-js' );
	
	wp_register_script( 'clipboard-custom-js', plugins_url( '/js/clipboard-custom.js', __FILE__ ), true );
	wp_enqueue_script( 'clipboard-custom-js' );
	
	//wp_register_script( 'clipboard-action-js', plugins_url( '/js/clipboard-action.js', __FILE__ ), true );
	//wp_enqueue_script( 'clipboard-action-js' );

}
add_action( 'wp_enqueue_scripts', 'copy_to_clipboard_js_only_scripts' );


function ctl_copy_to_clipboard_fun( $atts ) {
	
	$atts = shortcode_atts( array(
		'target_item' => '#ctl_copy_to_btn_class',
		'button_text' => 'copy'
	), $atts, 'ctl_copy_to_clipboard' );
	
	return '<button class="btn ctl_copy_to_btn" data-clipboard-action="copy" data-clipboard-target="'.$atts['target_item'].'">'.$atts['button_text'].'</button>';
}
add_shortcode( 'ctl_copy_to_clipboard', 'ctl_copy_to_clipboard_fun' );
