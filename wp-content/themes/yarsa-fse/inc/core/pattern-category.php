<?php
/**
 * Yarsa Fse: Block Patterns
 *
 * @since Yarsa Fse 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since Yarsa Fse 1.0
 *
 * @return void
 */
function yarsa_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'yarsa-fse' => array( 'label' => __( 'Yarsa Fse', 'yarsa-fse' ) )
	);

	$block_pattern_categories = apply_filters( 'yarsa_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'yarsa_fse_register_pattern_category', 9 );
