<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_singular() ) : ?>
        <?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
        <?php else : ?>
        <?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php endif; ?>

        <?php get_theme_post_thumbnail(); ?>
    </header><!-- .entry-header -->

    <div class="entry-content container">
        <?php
		the_content(
			get_theme_continue_reading_text()
		);

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'gettheme' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'gettheme' ),
			)
		);

		?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->