<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>

    <div class="entry-content container">
        <?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer default-max-width container pb-4">
        <?php get_theme_entry_meta_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-${ID} -->