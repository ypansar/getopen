			</main><!-- #main -->
			</div><!-- #primary -->
			</div><!-- #content -->


			<?php $mythemeoptions= get_option('mytheme_options'); ?>



			<footer id="colophon" class="get-footer site-footer pt-4 pb-4 " role="contentinfo">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-6">
			                <div class="site-info">
			                    <ul class="social-media">
			                        <li><a class="facebook"
			                                href="<?php echo $mythemeoptions['facebook'];?>"><?php echo get_theme_get_icon_svg( 'social', 'facebook',18, '#4267B2' ); ?></a>
			                        </li>
			                        <li><a class="linkedin"
			                                href="<?php echo $mythemeoptions['linkedin'];?>"><?php echo get_theme_get_icon_svg( 'social', 'linkedin',18, '#2867B2' ); ?></a>
			                        </li>
			                        <li><a class="twitter"
			                                href="<?php echo $mythemeoptions['twitter'];?>"><?php echo get_theme_get_icon_svg( 'social', 'twitter',18, '#1DA1F2' ); ?></a>
			                        </li>
			                    </ul>
			                    <div class="powered-by pt-3">
			                        <?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Powered by %s.', 'gettheme' ),
					'<a href="' . esc_url( __( 'https://www.getgroup.com', 'gettheme' ) ) . '">getgroup.com</a>'
				);
				?>
			                    </div><!-- .powered-by -->

			                </div><!-- .site-info -->
			            </div>
			            <div class="col-md-6">
			                <?php if ( has_nav_menu( 'footer' ) ) : ?>
			                <div class=" d-md-flex align-items-end flex-column">
			                    <nav aria-label="<?php esc_attr_e( 'Secondary menu', 'gettheme' ); ?>"
			                        class="navbar navbar-expand footer-navigation ml-auto">

			                        <?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'menu_class'      => 'navbar-nav',
							'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
							'fallback_cb'    => false,
						)
					);

					?>
			                    </nav><!-- .footer-navigation -->
			                </div>
			                <?php endif; ?>
			            </div>
			        </div>

			</footer><!-- #colophon -->
			</div>
			</div><!-- #page -->

			<?php wp_footer(); ?>

			</body>

			</html>