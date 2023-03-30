<?php
/**
 * Add theme page
 */
function yarsa_fse_menu() {
	add_theme_page( esc_html__( 'Yarsa Fse Theme', 'yarsa-fse' ), esc_html__( 'Yarsa Fse Theme', 'yarsa-fse' ), 'edit_theme_options', 'yarsa-fse-info', 'yarsa_fse_theme_page_display' );
}
add_action( 'admin_menu', 'yarsa_fse_menu' );

/**
 * Display About page
 */
function yarsa_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function yarsa_fse_admin_plugin_notice() {
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'yarsa_fse_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'yarsa_fse_admin_plugin_notice' );


function yarsa_fse_hide_theme_info_noticebar() {
	check_ajax_referer( 'yarsa_fse-nonce', 'yarsa-fse-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'yarsa_fse_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_yarsa_fse_hide_theme_info_noticebar', 'yarsa_fse_hide_theme_info_noticebar' );
