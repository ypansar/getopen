<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header alignwide container pt-5 text-center pb-3">
        <?php get_template_part( 'template-parts/header/entry-header' ); ?>
        <?php get_theme_post_thumbnail(); ?>
    </header><!-- .entry-header -->
    <?php elseif ( has_post_thumbnail() ) : ?>
    <header class="entry-header alignwide">
        <?php get_theme_post_thumbnail(); ?>
    </header><!-- .entry-header -->
    <?php endif; ?>

    <div class="entry-content container pb-5">
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