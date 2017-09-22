<?php
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