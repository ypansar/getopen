<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

get_header();
$j=0;
if ( have_posts() ) {

if(get_query_var('paged')>=1){
    ?>
<div class="container ">
    <div class="pb-5 row">
        <div class="col-md-9">
            <?php 
}

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
        if($j==0 && get_query_var('paged')<=1){
        ?>
            <header class="entry-header alignwide pb-3">
                <div class="container pt-3">
                    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark"
                        style="background-image:url(<?php echo the_post_thumbnail_url( 'post-thumbnail' );?>); background-size:cover">
                        <div class="col-md-6 p-4" style="background-color:rgba(0,0,0,.8)">
                            <h1 class="display-4 fst-italic"><?php echo get_the_title(); ?></h1>
                            <p class="lead my-3"><?php echo substr(strip_tags(get_the_content()),0,150); ?></p>
                            <p class="lead mb-0"><a href="<?php echo get_permalink();?>"
                                    class="text-white fw-bold">Continue reading...</a></p>
                        </div>
                    </div>
                </div>
            </header><!-- .entry-header -->
            <div class="container ">
                <div class="pb-5 row">
                    <div class="col-md-9">
                        <?php
        }else{
		    get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
        }
        $j++;
	}

	// Previous/next page navigation.
	get_theme_the_posts_navigation();?>

                        <?php


?>
                    </div>
                    <div class="col-md-3">
                        <?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
                    </div>
                </div>
            </div>
            <?php
} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}
get_footer();