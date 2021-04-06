<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	?>
<article class="pt-5 pb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header alignwide pb-3 text-center">
        <div class="container"><?php get_template_part( 'template-parts/header/entry-header' ); ?></div>
    </header><!-- .entry-header -->
    <?php endif; ?>

    <div class="entry-content container">
        <?php
    the_content();
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

<?php

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();