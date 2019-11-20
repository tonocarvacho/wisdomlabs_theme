<?php
/**
 * WisdomLabs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WisdomLabs
 */

if ( ! function_exists( 'wisdomlabs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wisdomlabs_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WisdomLabs, use a find and replace
		 * to change 'wisdomlabs' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wisdomlabs', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'wisdomlabs-full-bleed', 2000, 1200, true );
		add_image_size( 'wisdomlabs-post-featured', 640, 480, true );
		add_image_size( 'wisdomlabs-index-image', 800, 450, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wisdomlabs' ),
		) );

		register_nav_menus( array(
			'menu-2' => esc_html__( 'Secondary', 'wisdomlabs' ),
		) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wisdomlabs_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 90,
			'width'       => 90,
			'flex-width'  => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wisdomlabs_setup' );


/**
 * Register custom fonts.
 */
function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

function wisdomlabs_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$Lato = _x( 'on', 'Lato font: on or off', 'wisdomlabs' );

	$font_families = array();

	if ( 'off' !== $Lato ) {
		$font_families[] = 'Lato:400,400i,700';
	}

	if ( in_array( 'on', array($Lato)) ) {

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function wisdomlabs_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'wisdomlabs-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'wisdomlabs_resource_hints', 10, 2 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wisdomlabs_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wisdomlabs_content_width', 640 );
}
add_action( 'after_setup_theme', 'wisdomlabs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wisdomlabs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wisdomlabs' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wisdomlabs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wisdomlabs_widgets_init' );

function beforecontent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'BeforeContent', 'wisdomlabs' ),
		'id'            => 'beforecontent',
		'description'   => esc_html__( 'Add widgets here.', 'wisdomlabs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'beforecontent_widgets_init' );

function aftercontent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'AfterContent', 'wisdomlabs' ),
		'id'            => 'aftercontent',
		'description'   => esc_html__( 'Add widgets here.', 'wisdomlabs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aftercontent_widgets_init' );

/**
 * SHORTCODES.
 */
function foobar_func() {
	return get_template_part( 'template-parts/content', 'prueba' );
}
add_shortcode( 'foobar', 'foobar_func' );


/**
 * WIDGETS.
 */
locate_template( 'template-parts/widgets/widget-category.php', TRUE, TRUE ); 



/**
 * Enqueue scripts and styles.
 */
function wisdomlabs_scripts() {
    //Enqueue Google Fonts ------------- 18.8.18
	wp_enqueue_style( 'wisdomlabs-fonts', wisdomlabs_fonts_url() );

	wp_enqueue_style( 'wisdomlabs-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wisdomlabs-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'wisdomlabs-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'wisdomlabs-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wisdomlabs_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom-posts
 */
require get_template_directory() . '/inc/custom-posts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * fxshare
 */
require get_template_directory() . '/inc/blocks-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


