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


function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Productos', 'Post Type General Name', 'gloway' ),
        'singular_name'       => _x( 'Producto', 'Post Type Singular Name', 'gloway' ),
        'menu_name'           => __( 'Productos', 'gloway' ),
        'parent_item_colon'   => __( 'Parent Producto', 'gloway' ),
        'all_items'           => __( 'Todos los Productos', 'gloway' ),
        'view_item'           => __( 'View Producto', 'gloway' ),
        'add_new_item'        => __( 'Add New Producto', 'gloway' ),
        'add_new'             => __( 'Add New', 'gloway' ),
        'edit_item'           => __( 'Edit Producto', 'gloway' ),
        'update_item'         => __( 'Update Producto', 'gloway' ),
        'search_items'        => __( 'Search Producto', 'gloway' ),
        'not_found'           => __( 'Not Found', 'gloway' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'gloway' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'productos', 'gloway' ),
        'description'         => __( 'producto news and reviews', 'gloway' ),
        'labels'              => $labels,
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 1,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
         
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'productos', $args );
 
}
 
function namespace_add_custom_types( $query ) {
  if( (is_category() || is_tag()) && $query->is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'productos'
        ));
    }
    return $query;
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );



function custom_post_types() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'noticias', 'Post Type General Name', 'gloway' ),
        'singular_name'       => _x( 'noticia', 'Post Type Singular Name', 'gloway' ),
        'menu_name'           => __( 'Noticias', 'gloway' ),
        'parent_item_colon'   => __( 'Parent noticia', 'gloway' ),
        'all_items'           => __( 'Todos los noticias', 'gloway' ),
        'view_item'           => __( 'View noticia', 'gloway' ),
        'add_new_item'        => __( 'Add New noticia', 'gloway' ),
        'add_new'             => __( 'Add New', 'gloway' ),
        'edit_item'           => __( 'Edit noticia', 'gloway' ),
        'update_item'         => __( 'Update noticia', 'gloway' ),
        'search_items'        => __( 'Search noticia', 'gloway' ),
        'not_found'           => __( 'Not Found', 'gloway' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'gloway' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'noticias', 'gloway' ),
        
        'labels'              => $labels,
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
         
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'noticias', $args );
 
}

 
add_action( 'init', 'custom_post_types', 0 );

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
 * BLOCKS.
 */

locate_template( 'template-parts/blocks/blocks-functions.php', TRUE, TRUE ); 


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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function new_subcategory_hierarchy() { 
    $category = get_queried_object();

    $parent_id = $category->category_parent;

    $templates = array();

    if ( $parent_id == 0 ) {
        // Use default values from get_category_template()
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";
        $templates[] = 'category.php';     
    } else {
        // Create replacement $templates array
        $parent = get_category( $parent_id );

        // Current first
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";

        // Parent second
        $templates[] = "category-{$parent->slug}.php";
        $templates[] = "category-{$parent->term_id}.php";
        $templates[] = 'category.php'; 
    }
    return locate_template( $templates );
}

add_filter( 'category_template', 'new_subcategory_hierarchy' );

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

// Limit except length to 125 characters.
// tn limited excerpt length by number of characters
function get_excerpt( $count ) {
$permalink = get_permalink($post->ID);
$excerpt = get_the_content();
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $count);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = '<p>'.$excerpt.'... <br><strong><a class="font-secondary" href="'.$permalink.'">Read More</a></strong></p>';
return $excerpt;
}