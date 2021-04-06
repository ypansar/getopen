<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage get_theme
 * @since Get Theme 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'get_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Get Theme 1.0
	 *
	 * @return void
	 */
	function get_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Get Theme, use a find and replace
		 * to change 'gettheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gettheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'gettheme' ),
				'footer'  => __( 'Secondary menu', 'gettheme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );


		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'gettheme' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'gettheme' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'gettheme' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'gettheme' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'gettheme' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'gettheme' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'gettheme' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'gettheme' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'gettheme' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'gettheme' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'gettheme' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'gettheme' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'gettheme' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'gettheme' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'gettheme' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'gettheme' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'gettheme' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'gettheme' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'gettheme' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'gettheme' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'gettheme' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'gettheme' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'gettheme' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'gettheme' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'gettheme' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'gettheme' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'gettheme' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'gettheme' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'gettheme' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'gettheme' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'gettheme' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'gettheme' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );
	}
}
add_action( 'after_setup_theme', 'get_theme_setup' );

/**
 * Register widget area.
 *
 * @since Get Theme 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function get_theme_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'gettheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'gettheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'get_theme_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Get Theme 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function get_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'get_theme_content_width', 750 );
}
add_action( 'after_setup_theme', 'get_theme_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Get Theme 1.0
 *
 * @return void
 */
function get_theme_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'get-theme-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'get-theme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'get-theme-app-style', get_template_directory_uri() . '/assets/css/app.css', array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'get-theme-custom-style', get_template_directory_uri() . '/assets/css/styles.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	// RTL styles.
	wp_style_add_data( 'get-theme-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'get-theme-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'get-theme-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'get-theme-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'get-theme-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'get-theme-ie11-polyfills-asset',
			)
		)
	);

	wp_register_script(
		'get-theme-bootstrap-script',
		get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js',
		array('jquery'),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 'get-theme-bootstrap-script' );

	// Responsive embeds script.
	wp_enqueue_script(
		'get-theme-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'get-theme-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'get_theme_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since Get Theme 1.0
 *
 * @return void
 */
function gettheme_block_editor_script() {

	wp_enqueue_script( 'gettheme-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'gettheme_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function get_theme_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	}

	// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
<script>
/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window
    .addEventListener("hashchange", (function() {
        var t, e = location.hash.substring(1);
        /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i
            .test(t.tagName) || (t.tabIndex = -1), t.focus())
    }), !1);
</script>
<?php
}
add_action( 'wp_print_footer_scripts', 'get_theme_skip_link_focus_fix' );

/** Enqueue non-latin language styles
 *
 * @since Get Theme 1.0
 *
 * @return void
 */
function get_theme_non_latin_languages() {
	$custom_css = get_theme_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'get-theme-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'get_theme_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-get-theme-svg-icons.php';

require get_template_directory() . '/inc/template-tags.php';

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Customizer additions.
require get_template_directory() . '/classes/class-get-theme-customize.php';
new get_theme_Customize();


/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Get Theme 1.0
 *
 * @return void
 */
function gettheme_customize_preview_init() {
	wp_enqueue_script(
		'gettheme-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'gettheme-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'gettheme-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'gettheme_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Get Theme 1.0
 *
 * @return void
 */
function gettheme_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'gettheme-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'gettheme_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Get Theme 1.0
 *
 * @return void
 */
function gettheme_the_html_classes() {
	$classes = apply_filters( 'gettheme_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Get Theme 1.0
 *
 * @return void
 */
function gettheme_add_ie_class() {
	?>
<script>
if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
    document.body.classList.add('is-IE');
}
</script>
<?php
}
add_action( 'wp_footer', 'gettheme_add_ie_class' );


/* Add custom classes to list item "li" */

function _namespace_menu_item_class( $classes, $item ) {   
    $classes[] = "nav-item"; // you can add multiple classes here
    return $classes;
} 

add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );


/* Add custom class to link in menu */

function _namespace_modify_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu', '_namespace_modify_menuclass');

define( 'WPCF7_AUTOP', false );


function mytheme_customizer( $wp_customize ) {
    class Custom_Text_Control extends WP_Customize_Control {
        public $type = 'customtext';
        public $extra = ''; // we add this for the extra description
        public function render_content() {
        ?>
<label>
    <span><?php echo esc_html( $this->extra ); ?></span>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <input type="text" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
</label>
<?php
        }
    }
    $wp_customize->add_section('customtext_section', array(
            'title'=>__('Address And Social Media','mytheme'),
        )
    );     
    $wp_customize->add_setting('mytheme_options[address]', array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
	
    $wp_customize->add_control('addresstext_control', array(
        'label' => 'Address',
        'section' => 'customtext_section',
        'settings' => 'mytheme_options[address]',
         ) 
    );

	$wp_customize->add_setting('mytheme_options[phone]', array(
		'default' => '',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	)
	);

	$wp_customize->add_control('phonetext_control', array(
		'label' => 'phone',
		'section' => 'customtext_section',
		'settings' => 'mytheme_options[phone]',
		)  
	);


	$wp_customize->add_setting('mytheme_options[facebook]', array(
		'default' => '',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	)
	);

	$wp_customize->add_control('facebooktext_control', array(
		'label' => 'Facebook',
		'section' => 'customtext_section',
		'settings' => 'mytheme_options[facebook]',
		) 
	);

	$wp_customize->add_setting('mytheme_options[linkedin]', array(
		'default' => '',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	)
	);

	$wp_customize->add_control('linkedintext_control', array(
		'label' => 'Linkedin',
		'section' => 'customtext_section',
		'settings' => 'mytheme_options[linkedin]',
		) 
	);

	$wp_customize->add_setting('mytheme_options[twitter]', array(
		'default' => '',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	)
	);

	$wp_customize->add_control('twittertext_control', array(
		'label' => 'Twitter',
		'section' => 'customtext_section',
		'settings' => 'mytheme_options[twitter]',
		) 
	);

	

	
}

add_action( 'customize_register', 'mytheme_customizer' ,10,1);