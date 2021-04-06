<?php if ( has_nav_menu( 'primary' ) ) : ?>
<nav id="site-navigation" class="navbar-expand-lg navbar-light bg-light mt-2"
    aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'navbar-nav',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
        </div>
    </div>
</nav><!-- #site-navigation -->
<?php endif; ?>