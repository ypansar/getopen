<?php
/**
 * Customizer settings for this theme.
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

if ( ! class_exists( 'get_theme_Customize' ) ) {
	/**
	 * Customizer Settings.
	 *
	 * @since Get Theme 1.0
	 */
	class get_theme_Customize {

		/**
		 * Constructor. Instantiate the object.
		 *
		 * @access public
		 *
		 * @since Get Theme 1.0
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'register' ) );
		}

		/**
		 * Register customizer options.
		 *
		 * @access public
		 *
		 * @since Get Theme 1.0
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 *
		 * @return void
		 */
		public function register( $wp_customize ) {

			// Change site-title & description to postMessage.
			$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage'; // @phpstan-ignore-line. Assume that this setting exists.
			$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage'; // @phpstan-ignore-line. Assume that this setting exists.


		}

		/**
		 * Sanitize boolean for checkbox.
		 *
		 * @access public
		 *
		 * @since Get Theme 1.0
		 *
		 * @param bool $checked Whether or not a box is checked.
		 *
		 * @return bool
		 */
		public static function sanitize_checkbox( $checked = null ) {
			return (bool) isset( $checked ) && true === $checked;
		}

		/**
		 * Render the site title for the selective refresh partial.
		 *
		 * @access public
		 *
		 * @since Get Theme 1.0
		 *
		 * @return void
		 */
		public function partial_blogname() {
			bloginfo( 'name' );
		}

		/**
		 * Render the site tagline for the selective refresh partial.
		 *
		 * @access public
		 *
		 * @since Get Theme 1.0
		 *
		 * @return void
		 */
		public function partial_blogdescription() {
			bloginfo( 'description' );
		}
	}
}