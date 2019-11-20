<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WisdomLabs
 */
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
 * Force sub-categories to use the parent category template.
 */
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