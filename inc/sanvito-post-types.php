<?php
add_action( 'init', 'sanvito_recipes_init' );
/**
 * Register a sanvito recipes post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function sanvito_recipes_init() {
    $labels = array(
        'name'               => _x( 'Recipes', 'post type general name', 'sanvito-recipes' ),
        'singular_name'      => _x( 'Recipe', 'post type singular name', 'sanvito-recipes' ),
        'menu_name'          => _x( 'Recipes', 'admin menu', 'sanvito-recipes' ),
        'name_admin_bar'     => _x( 'Recipe', 'add new on admin bar', 'sanvito-recipes' ),
        'add_new'            => _x( 'Add New', 'recipes', 'sanvito-recipes' ),
        'add_new_item'       => __( 'Add New Recipe', 'sanvito-recipes' ),
        'new_item'           => __( 'New Recipe', 'sanvito-recipes' ),
        'edit_item'          => __( 'Edit Recipe', 'sanvito-recipes' ),
        'view_item'          => __( 'View Recipe', 'sanvito-recipes' ),
        'all_items'          => __( 'All Recipes', 'sanvito-recipes' ),
        'search_items'       => __( 'Search Recipes', 'sanvito-recipes' ),
        'parent_item_colon'  => __( 'Parent Recipes:', 'sanvito-recipes' ),
        'not_found'          => __( 'No books found.', 'sanvito-recipes' ),
        'not_found_in_trash' => __( 'No books found in Trash.', 'sanvito-recipes' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'sanvito-recipes' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        /*'rewrite'            => array( 'slug' => 'recipes' ),*/
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' )
    );

    register_post_type( 'recipes', $args );
}

/**
 *
 * Register Recipes taxonomy
 */
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_recipes_taxonomies', 0 );

// create taxonomies, recipe-categories for the post type "book"
function create_recipes_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Recipe Categories', 'taxonomy general name', 'sanvito-recipes' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'sanvito-recipes' ),
        'search_items'      => __( 'Search Categories', 'sanvito-recipes' ),
        'all_items'         => __( 'All Categories', 'sanvito-recipes' ),
        'parent_item'       => __( 'Parent Category', 'sanvito-recipes' ),
        'parent_item_colon' => __( 'Parent Category:', 'sanvito-recipes' ),
        'edit_item'         => __( 'Edit Category', 'sanvito-recipes' ),
        'update_item'       => __( 'Update Category', 'sanvito-recipes' ),
        'add_new_item'      => __( 'Add New Category', 'sanvito-recipes' ),
        'new_item_name'     => __( 'New Category Name', 'sanvito-recipes' ),
        'menu_name'         => __( 'Categories', 'sanvito-recipes' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        /*'rewrite'           => array( 'slug' => 'recipe-categories' ),*/
    );

    register_taxonomy( 'recipe-categories', array( 'recipes' ), $args );
}

add_action( 'init', 'sanvito_faq_init' );
/**
 * Register a sanvito faq post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function sanvito_faq_init() {
    $labels = array(
        'name'               => _x( 'FAQs', 'post type general name', 'sanvito-faq' ),
        'singular_name'      => _x( 'FAQ', 'post type singular name', 'sanvito-faq' ),
        'menu_name'          => _x( 'FAQs', 'admin menu', 'sanvito-faq' ),
        'name_admin_bar'     => _x( 'FAQ', 'add new on admin bar', 'sanvito-faq' ),
        'add_new'            => _x( 'Add New', 'faq', 'sanvito-faq' ),
        'add_new_item'       => __( 'Add New FAQ', 'sanvito-faq' ),
        'new_item'           => __( 'New FAQ', 'sanvito-faq' ),
        'edit_item'          => __( 'Edit FAQ', 'sanvito-faq' ),
        'view_item'          => __( 'View FAQ', 'sanvito-faq' ),
        'all_items'          => __( 'All FAQs', 'sanvito-faq' ),
        'search_items'       => __( 'Search FAQs', 'sanvito-faq' ),
        'parent_item_colon'  => __( 'Parent FAQs:', 'sanvito-faq' ),
        'not_found'          => __( 'No books found.', 'sanvito-faq' ),
        'not_found_in_trash' => __( 'No books found in Trash.', 'sanvito-faq' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'sanvito-faq' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        /*'rewrite'            => array( 'slug' => 'book' ),*/
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author' )
    );

    register_post_type( 'faq', $args );
}

/**
 *
 * Testimonials Post-type start
 */
add_action( 'init', 'sanvito_testimonials_init' );
/**
 * Register a sanvito faq post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function sanvito_testimonials_init() {
    $labels = array(
        'name'               => _x( 'Testimonials', 'post type general name', 'sanvito-testimonials' ),
        'singular_name'      => _x( 'Testimonial', 'post type singular name', 'sanvito-testimonials' ),
        'menu_name'          => _x( 'Testimonials', 'admin menu', 'sanvito-testimonials' ),
        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'sanvito-testimonials' ),
        'add_new'            => _x( 'Add New', 'testimonials', 'sanvito-testimonials' ),
        'add_new_item'       => __( 'Add New Testimonial', 'sanvito-testimonials' ),
        'new_item'           => __( 'New Testimonial', 'sanvito-testimonials' ),
        'edit_item'          => __( 'Edit Testimonial', 'sanvito-testimonials' ),
        'view_item'          => __( 'View Testimonial', 'sanvito-testimonials' ),
        'all_items'          => __( 'All Testimonials', 'sanvito-testimonials' ),
        'search_items'       => __( 'Search Testimonials', 'sanvito-testimonials' ),
        'parent_item_colon'  => __( 'Parent Testimonials:', 'sanvito-testimonials' ),
        'not_found'          => __( 'No books found.', 'sanvito-testimonials' ),
        'not_found_in_trash' => __( 'No books found in Trash.', 'sanvito-testimonials' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'sanvito-testimonial' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        /*'rewrite'            => array( 'slug' => 'testimonials' ),*/
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author' )
    );

    register_post_type( 'testimonials', $args );
}