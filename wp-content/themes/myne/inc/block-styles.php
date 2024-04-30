<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since MYNE 1.0
	 *
	 * @return void
	 */
	function myne_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'myne-columns-overlap',
				'label' => esc_html__( 'Overlap', 'myne' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'myne-border',
				'label' => esc_html__( 'Borders', 'myne' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'myne-border',
				'label' => esc_html__( 'Borders', 'myne' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'myne-border',
				'label' => esc_html__( 'Borders', 'myne' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'myne-image-frame',
				'label' => esc_html__( 'Frame', 'myne' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'myne-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'myne' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'myne-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'myne' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'myne-border',
				'label' => esc_html__( 'Borders', 'myne' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'myne-separator-thick',
				'label' => esc_html__( 'Thick', 'myne' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'myne-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'myne' ),
			)
		);
	}
	add_action( 'init', 'myne_register_block_styles' );
}
