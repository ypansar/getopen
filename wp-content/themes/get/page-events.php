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
    <header class="entry-header alignwide text-center">
        <div class="container"><?php get_template_part( 'template-parts/header/entry-header' ); ?></div>
    </header><!-- .entry-header -->
    <?php endif; ?>

    <div class="entry-content container">
        <div class="container py-5" id="custom-cards">
            <div class="row row-cols-3 align-items-stretch">
                <?php
$btpgid=get_queried_object_id();
$btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array( 'posts_per_page' => 5, 'category_name' => $btmetanm,
'paged' => $paged,'post_type' => 'event' );
    $postslist = new WP_Query( $args );

    if ( $postslist->have_posts() ) :
        while ( $postslist->have_posts() ) : $postslist->the_post(); 
        

            ?>

                <div class="col">
                    <a href="<?php echo get_permalink();?>"
                        style="background-image:url(<?php echo the_post_thumbnail_url( 'post-thumbnail' );?>); background-size:cover"
                        class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('unsplash-photo-1.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?php echo the_title();?></h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <?php echo get_theme_get_icon_svg( 'ui', 'arrow_right' ); ?>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small><?php echo get_the_date('d - m - Y')?></small>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>


                <?php

         endwhile;  

             next_posts_link( 'Older Entries', $postslist->max_num_pages );
             previous_posts_link( 'Next Entries &raquo;' ); 
        wp_reset_postdata();
    endif;
    ?>

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