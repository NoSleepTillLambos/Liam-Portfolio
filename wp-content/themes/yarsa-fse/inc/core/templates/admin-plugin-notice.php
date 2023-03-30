<?php
$screen = get_current_screen();
//
if ( ! empty( $screen->base ) && ( 'appearance_page_yarsa-fse-info' === $screen->base || 'appearance_page_olive-one-click-demo-import' === $screen->base ) ) {
	return false;
}
// Current user object
$user = wp_get_current_user();
// Get display name from user object
$display_name = $user->display_name;
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/yarsa-pro/";
?>
<div class="notice notice-info is-dismissible yarsa-fse-admin-notice">
	<div class="yarsa-fse-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, ', 'yarsa-fse' ); ?> <?php echo $display_name; ?></h2>
		<h3><?php esc_html_e( 'Welcome to', 'yarsa-fse' ); ?> <?php esc_html_e( 'Yarsa Fse Theme!', 'yarsa-fse' ); ?></h3>
		<p><?php esc_html_e( 'Explore beautiful hand-crafted site templates and setup your site in few clicks.', 'yarsa-fse' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=yarsa-fse-info' ) ); ?>" class="yarsa-fse-admin-notice-primary-button"><?php esc_html_e( 'Explore Now!', 'yarsa-fse' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=yarsa-fse-info' ) ); ?>"><?php esc_html_e( 'Learn more about Yarsa Pro Theme', 'yarsa-fse' ); ?></a>
	</div>
</div>
<?php
