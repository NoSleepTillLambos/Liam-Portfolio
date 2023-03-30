<?php
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/yarsa-pro/";
$doc_url = "https://olivethemes.com/documentations/";
$support_url = "https://olivethemes.com/support/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
$plugin_is_installed = file_exists( WP_PLUGIN_DIR. '/olive-one-click-demo-import' );
$plugin_is_active = is_plugin_active( 'olive-one-click-demo-import/olive-one-click-demo-import.php' );
?>
<div class="yarsa-fse--about-page--wrapper">
        <div id="yarsa-fse-admin-about-page">
                <div class="yarsa-fse-admin-card-header">
                        <div class="yarsa-fse-header-left">
                                <h2>
                                        <?php echo esc_html( $theme->Name ); ?>
                                </h2>
                                <p>
                                        <?php esc_html_e( 'Multipurpose WordPress Full Site Editing Theme', 'yarsa-fse' ); ?>
                                </p>

                        </div>
                        <div class="yarsa-fse-header-right">
                                <div class="yarsa-fse-card-header-button-group">
                                        <!-- <a href="<?php echo $pro_purchase_url; ?>"
                                                class="yarsa-fse-admin-button"
                                                target="_blank">
                                                <span class="dashicons dashicons-admin-customizer"></span>
                                                <?php printf( esc_html( 'Get Yarsa Pro', 'yarsa-fse' ), $theme->Name ); ?>
                                        </a> -->
                                        <a href="<?php echo $doc_url; ?>"
                                                class="yarsa-fse-admin-button premium-button" target="_blank"
                                                rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                                                <?php esc_html_e( 'Documentations', 'yarsa-fse' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>

				<div class="olive-one-click-demo-import-banner">
						<h2><?php esc_html_e( 'Download Advanced Site Templates for Free!', 'yarsa-fse' ); ?></h2>
						<p><?php esc_html_e( 'Install', 'yarsa-fse' ); ?> <a href="https://wordpress.org/plugins/olive-one-click-demo-import/" target="__blank"><?php esc_html_e( 'Olive One Click Demo Import', 'yarsa-fse' ); ?></a> <?php esc_html_e( 'and access to all the Olive Demo templates. This plugin will help you download site template in few clicks.', 'yarsa-fse' ); ?></p>
						<?php if ( ! $plugin_is_installed  ): ?>
						<a href="javascript:void(0);"  class="yarsa-fse-admin-button yarsa-fse-install-plugin" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Install Plugin', 'yarsa-fse' ), $theme->Name ); ?>
                                        </a>
						<?php elseif ( $plugin_is_installed && ! $plugin_is_active ): ?>
							<a href="javascript:void(0);"  class="yarsa-fse-admin-button yarsa-fse-activate-plugin" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Activate Plugin', 'yarsa-fse' ), $theme->Name ); ?>
                                        </a>
						<?php else:?>
							<a href="<?php echo esc_url( admin_url( 'themes.php?page=olive-one-click-demo-import' ) ); ?>"  class="yarsa-fse-admin-button" >
                                                <span class="dashicons dashicons-arrow-down-alt"></span>
                                                <?php printf( esc_html( 'Explore Site Templates', 'yarsa-fse' ), $theme->Name ); ?>
                                        </a>
						<?php endif; ?>
						<small><?php esc_html_e( 'Note: Clicking the button will both install and activate Olive One Click Demo Import plugin', 'yarsa-fse' ); ?></small>
				</div>

                <div class="feature-list">
                        <div class="yarsa-fse-about-container">
                                <div class="yarsa-fse-admin-card features">
                                        <div class="yarsa-fse-about-container yarsa-fse-compare-table">
                                                <div class="admin-grid-1">
                                                        <h3>
                                                                <?php echo esc_html( $free_theme_name ); ?>
                                                                <?php esc_html_e( 'Free Vs Pro', 'yarsa-fse' ); ?>
                                                        </h3>
                                                        <p class="yarsa-fse-compare-table-subtitle"><a
                                                                        href="<?php echo $pro_purchase_url; ?>"
                                                                        target="__blank">
                                                                        <?php echo esc_html( 'Get Yarsa Pro', 'yarsa-fse' ); ?>
                                                                        <i
                                                                                class="dashicons dashicons-arrow-right-alt"></i>
                                                                </a></p>
                                                        <table>
                                                                <thead>
                                                                        <tr>
                                                                                <th>
																				<?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Free', 'yarsa-fse' ); ?>
                                                                                </th>
                                                                                <th>
                                                                                        <?php esc_html_e( 'Features', 'yarsa-fse' ); ?>
                                                                                </th>
                                                                                <th>
																				<?php esc_html_e( 'Yarsa Pro', 'yarsa-fse' ); ?>
                                                                                </th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Easy Setup', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Responsive', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Advance Color Options', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Multiple Block Layout', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( '100+ Fonts', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Advance Slider Block ', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Post Listing Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'WooCommerce Filter Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Gallery Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Star Rating Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Icon Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Post Carousel Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Google Map Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Testimonials Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td><span
                                                                                                class="dashicons dashicons-no"></span>
                                                                                        </td>
                                                                                <td>
                                                                                        <?php esc_html_e( 'Team Block', 'yarsa-fse' ); ?>
                                                                                        </td>
                                                                                <td><span
                                                                                                class="dashicons dashicons-yes"></span>
                                                                                        </td>
                                                                        </tr>
                                                                </tbody>
                                                        </table>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="yarsa-fse-about-side">
                                <div class="yarsa-fse-admin-card member"><span><i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i> <i class="fa fa-star"
                                                        aria-hidden="true"></i></span>
                                        <h3 class="yarsa-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Love our product?', 'yarsa-fse' ); ?>
                                        </h3>
                                        <h4 class="yarsa-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Motivate us by
                                                giving 5 star on
                                                our profile.', 'yarsa-fse' ); ?>
                                        </h4><a href="https://wordpress.org/support/theme/yarsa-fse/reviews/?filter=5"
                                                class="yarsa-fse-admin-button large is-default"
                                                target="__blank">
                                                <?php esc_html_e( 'Rate Us', 'yarsa-fse' ); ?>
                                        </a>
                                </div>
                                <div class="yarsa-fse-admin-card cart-two">
                                        <h3 class="yarsa-fse-admin-card-title is-small">
                                                <?php esc_html_e( 'Still have question?
                                                Ask Us, now!', 'yarsa-fse' ); ?>
                                        </h3>
                                        <p>
                                                <?php esc_html_e( 'Don\'t hesitate to ask any questions you have regarding our products.', 'yarsa-fse' ); ?>
                                        </p><a href="<?php echo $support_url; ?>"
                                                class="yarsa-fse-admin-button primary large"
                        target="_blank">
                                                <?php esc_html_e( 'Get Support', 'yarsa-fse' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="yarsa-fse-card-header-button-group">
                <a href="<?php echo $pro_purchase_url; ?>" class="yarsa-fse-admin-button" rel="noreferrer"
                        target="_blank"><i class="fa fa-paint-brush"></i>
                        <?php printf( esc_html( 'Get Yarsa Pro', 'yarsa-fse' ), $theme->Name ); ?>
                </a>
                <a href="<?php echo $doc_url; ?>" class="yarsa-fse-admin-button premium-button"
                        target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
                        <?php esc_html_e( 'Documentations', 'yarsa-fse' ); ?>
                </a>
        </div>
</div>
