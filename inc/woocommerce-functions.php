<?php
// redirect shop page
function custom_shop_page_redirect() {
    if( is_shop() ){
        wp_redirect( home_url( '/sanvito-shop/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'custom_shop_page_redirect' );


//add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 * @snippet       Remove Sidebar @ Single Product Page
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=19572
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 2.4.12
 */

// Remove Sidebar on all the Single Product Pages

add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );

function bbloomer_remove_sidebar_product_pages() {
    if (is_product()) {
        remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
    }
}

// remove additional information tab
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}
// rename description tab
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

    $tabs['description']['title'] = __( 'Information' );		// Rename the description tab
    //$tabs['reviews']['title'] = __( 'Ratings' );				// Rename the reviews tab
    //$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab

    return $tabs;

}
// adding a new tab
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {

    // Adds the new tab

    $tabs['history_tab'] = array(
        'title' 	=> __( 'History', 'woocommerce' ),
        'priority' 	=> 50,
        'callback' 	=> 'woo_new_product_tab_content'
    );

    return $tabs;

}
function woo_new_product_tab_content() {

    global $woocommerce, $product, $post;
    // The new tab content

    // echo '<h2>Rental process and payment options</h2>';
    echo '<div class="history-tab-content">' . get_field('history_tab_content', $post->ID) . '</div>';

}
// re-ordering tabs
add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
function woo_reorder_tabs( $tabs ) {

    $tabs['description']['priority'] = 5;			// Description first
    $tabs['history_tab']['priority'] = 10;	// History tab second
    $tabs['reviews']['priority'] = 15;			// Reviews third

    return $tabs;
}



// Single Product content slider
function single_product_content_slider(){
    global $post, $product;
    // check if the repeater field has rows of data
    if( have_rows('content_slider') ):
        echo '<div class="single-product-carousel-wrap">';
            echo '<div class="single-product-carousel owl-carousel owl-theme">';
                // loop through the rows of data
                while ( have_rows('content_slider') ) : the_row();
                    echo '<div class="item">';
                        // display a sub field value
                        echo '<p>' . get_sub_field('content_slide') . '</p>';
                    echo '</div>';
                endwhile;
            echo '</div>';
        echo '</div>';
    else :
        // no rows found
    endif;
}

// single product page social share
function single_product_social_share(){
    // check if the repeater field has rows of data
    echo '<hr>';
    echo '<div class="single-product-social-icons">';
        echo '<ul>';
            echo '<li>';
                echo 'Share';
            echo '</li>';
            echo '<li>';
                echo '<a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
            echo '</li>';
            echo '<li>';
                echo '<a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
            echo '</li>';
            echo '<li>';
                echo '<a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
            echo '</li>';
        echo '</ul>';
    echo '</div>';
}
add_filter('woocommerce_after_add_to_cart_form','single_product_social_share', 1);


// Single Product Testimonials slider
function single_product_testimonials_slider(){
    global $product;
    $testimonials_args = array(
        'post_type'=> 'testimonials',
        'order'    => 'ASC'
    );
    $testimonials_query = new WP_Query( $testimonials_args );
    if( $testimonials_query->have_posts() ) :
        while ( $testimonials_query->have_posts() ) :
            $testimonials_query->the_post(); global $post;
            if (in_array($product->id, get_field('testimonials_slider', $post->ID))):
                ?>
                    <div class="item">
                        <p><?php echo get_the_content(); ?><span><?php echo get_field('client_name'); ?></span></p>
                    </div>
                <?php
            endif;
        endwhile;
    endif;
    wp_reset_postdata();
    wp_reset_query();
}
