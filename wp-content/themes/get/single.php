<?php

get_header();

?>
<div class="container pt-5 pb-5">
    <div class="pb-5 row">
        <div class="col-md-9">
            <?php
	/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'gettheme' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		?>
            <div class="pt-4 pb-5">
                <?php comments_template(); ?>
            </div>
            <?php
	}

	// Previous/next post navigation.
	$gettheme_next = is_rtl() ? get_theme_get_icon_svg( 'ui', 'arrow_left' ) : get_theme_get_icon_svg( 'ui', 'arrow_right' );
	$gettheme_prev = is_rtl() ? get_theme_get_icon_svg( 'ui', 'arrow_right' ) : get_theme_get_icon_svg( 'ui', 'arrow_left' );

	$gettheme_next_label     = esc_html__( 'Next post', 'gettheme' );
	$gettheme_previous_label = esc_html__( 'Previous post', 'gettheme' );

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' . $gettheme_next_label . $gettheme_next . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $gettheme_prev . $gettheme_previous_label . '</p><p class="post-title">%title</p>',
		)
	);
endwhile; // End of the loop. 
	?>
        </div>
        <div class="col-md-3">
            <?php   if(get_post_type()!="job_listing") {get_template_part( 'template-parts/footer/footer-widgets' ); } ?>
        </div>
    </div>
</div>
<?php

get_footer();