<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

<header class="page-header alignwide container mt-4">
    <?php the_archive_title( '<h2 class="page-title pt-2">', '</h2>' ); ?>
    <?php if ( $description ) : ?>
    <div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
    <?php endif; ?>
</header><!-- .page-header -->

<?php while ( have_posts() ) : ?>
<?php the_post(); ?>
<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
<?php endwhile; ?>

<?php get_theme_the_posts_navigation(); ?>

<?php else : ?>
<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>