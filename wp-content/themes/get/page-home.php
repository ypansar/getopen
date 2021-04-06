<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	?>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">

        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" class="active"
            aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner"
        style="background-image:url(<?php echo get_the_post_thumbnail_url();?>); background-size:cover">

        <div class="carousel-item active">
            <div class="bd-placeholder-img"
                style="background-image:url(<?php echo get_the_post_thumbnail_url();?>); background-size:cover; height:100%; width:100%;">
            </div>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Id rather have a fake smile than a nasty stare.</h1>
                    <p>GET Group’s Identity Management solutions have been used by many governments around the world.
                    </p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row featurette pb-5 mb-5 pt-5">
        <div class="col-md-7">
            <h2 class="featurette-heading">The gateway of <br /> <span class="text-muted">True Works</span></h2>
            <p class="lead"><?php echo strip_tags(get_the_content());?></p>
        </div>
        <div class="col-md-5">
            <div class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                style="background-image:url(<?php echo wp_get_attachment_image_url( 78,'','','thumbnail' );?>); background-size:cover; width:500px; height:400px">
            </div>

        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 pb-5 mb-5">
        <?php 
        // the query
        $the_query = new WP_Query( array(
            'posts_per_page' => 3,
        )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col">
            <div class="card shadow-sm">
                <div class="bd-placeholder-img card-img-top"
                    style="background-image:url(<?php echo get_the_post_thumbnail_url();?>); background-size:cover; width:100%; height:225px;">
                </div>

                <div class="card-body">
                    <p class="card-text"><?php echo get_the_title(); ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary">Read</button>
                        </div>
                        <small class="text-muted"><?php echo get_the_date('d - m - Y')?></small>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php __('No News'); ?></p>
        <?php endif; ?>




    </div>
</div>
<?php 	
endwhile; // End of the loop.
get_footer();