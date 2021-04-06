<?php
/**
 * Customize API: get_theme_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Get Theme 1.0
 *
 * @see WP_Customize_Control
 */
class get_theme_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Get Theme 1.0
	 *
	 * @var string
	 */
	public $type = 'get-theme-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since Get Theme 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'gettheme' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/get-theme/#dark-mode-support', 'gettheme' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'gettheme' ); ?>
			</a></p>
		</div>
		<?php
	}
}
