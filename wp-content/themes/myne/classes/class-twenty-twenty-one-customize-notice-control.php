<?php
/**
 * Customize API: myne_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since MYNE 1.0
 *
 * @see WP_Customize_Control
 */
class myne_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since MYNE 1.0
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since MYNE 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'myne' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/twenty-twenty-one/#dark-mode-support', 'myne' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'myne' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}
