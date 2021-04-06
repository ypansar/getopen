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
    $mythemeoptions= get_option('mytheme_options'); 	?>
<article class="pt-5 pb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header alignwide pb-3 text-center">
        <div class="container"><?php get_template_part( 'template-parts/header/entry-header' ); ?></div>
    </header><!-- .entry-header -->
    <?php endif; ?>

    <div class="entry-content container">
        <div class="row">
            <div class="col-md-7">
                <div class="row g-5 py-5">
                    <div class="feature col-md-6">
                        <div class="feature-icon">
                            <svg id="collection" viewBox="0 0 16 16">
                                <path fill="#ccc"
                                    d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
                                </path>
                            </svg>
                        </div>
                        <h2>Address</h2>
                        <p><?php echo $mythemeoptions['address'];?></p>

                        <div>Phone : <a
                                href="tel:<?php echo $mythemeoptions['phone'];?>"><?php echo $mythemeoptions['phone'];?></a>
                        </div>

                    </div>
                    <div class="feature col-md-6">
                        <div class="feature-icon">
                            <svg id="people-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" fill="#ccc"></path>
                                <path fill-rule="evenodd" fill="#ccc"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
                                </path>
                            </svg>
                        </div>
                        <h2>Follow Us</h2>
                        <ul class="social-media">
                            <li><a class="facebook"
                                    href="<?php echo $mythemeoptions['facebook'];?>"><?php echo get_theme_get_icon_svg( 'social', 'facebook',32, '#4267B2' ); ?></a>
                            </li>
                            <li><a class="linkedin"
                                    href="<?php echo $mythemeoptions['linkedin'];?>"><?php echo get_theme_get_icon_svg( 'social', 'linkedin',32, '#2867B2' ); ?></a>
                            </li>
                            <li><a class="twitter"
                                    href="<?php echo $mythemeoptions['twitter'];?>"><?php echo get_theme_get_icon_svg( 'social', 'twitter',32, '#1DA1F2' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-5 contact-form">
                    <h3 class="pb-3">Getting Touch with us!</h3>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();