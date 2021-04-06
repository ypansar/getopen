<?php
/**
 * Back compat functionality
 */

/**
 * Display upgrade notice on theme switch.
 */
function get_theme_switch_theme() {
	add_action( 'admin_notices', 'get_theme_upgrade_notice' );
}
add_action( 'after_switch_theme', 'get_theme_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 */
function get_theme_upgrade_notice() {
	echo '<div class="error"><p>';
	printf(
		/* translators: %s: WordPress Version. */
		esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'gettheme' ),
		esc_html( $GLOBALS['wp_version'] )
	);
	echo '</p></div>';
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 5.3.
 */
function get_theme_customize() {
	wp_die(
		sprintf(
			/* translators: %s: WordPress Version. */
			esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'gettheme' ),
			esc_html( $GLOBALS['wp_version'] )
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'get_theme_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.3.
 */
function get_theme_preview() {
	if ( isset( $_GET['preview'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification
		wp_die(
			sprintf(
				/* translators: %s: WordPress Version. */
				esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'gettheme' ),
				esc_html( $GLOBALS['wp_version'] )
			)
		);
	}
}
add_action( 'template_redirect', 'get_theme_preview' );
