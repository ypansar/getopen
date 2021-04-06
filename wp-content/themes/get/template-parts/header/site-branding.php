<?php
/**
 * Displays header site branding
 */

$blog_info    = get_bloginfo( 'name' );  
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>
<?php $mythemeoptions= get_option('mytheme_options'); ?>
<div <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-8 pt-1">
        <?php if ( has_custom_logo() && $show_title ) : ?>
        <div class="site-logo">
            <?php the_custom_logo(); ?>
        </div>
        <?php else : ?>
        <?php if ( $blog_info ) : ?>
        <?php if ( is_front_page() && ! is_paged() ) : ?>
        <h1 class="<?php echo esc_attr( $header_class ); ?>">
            <?php echo esc_html( $blog_info ); ?>
        </h1>
        <?php elseif ( is_front_page() || is_home() ) : ?>
        <h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php echo esc_html( $blog_info ); ?>
            </a></h1>
        <?php else : ?>
        <p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php echo esc_html( $blog_info ); ?>
            </a></p>
        <?php endif; ?>
        <?php endif; ?>
        <?php if ( $description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
        <p class="site-description">
            <?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
        </p>
        <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center lead">
        <a href="tel:<?php echo $mythemeoptions['phone'];?>" style="text-decoration:none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone"
                viewBox="0 0 16 16">
                <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg> <?php echo $mythemeoptions['phone'];?>
        </a>
    </div>
</div>