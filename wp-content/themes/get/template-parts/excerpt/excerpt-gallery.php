<?php
/**
 * Show the appropriate content for the Gallery post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

// Print the 1st gallery found.
if ( has_block( 'core/gallery', get_the_content() ) ) {

	get_theme_print_first_instance_of_block( 'core/gallery', get_the_content() );
}

the_excerpt();
