<?php
// redirect shop page
function custom_shop_page_redirect() {
    if( is_shop() ){
        wp_redirect( home_url( '/sanvito-shop/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'custom_shop_page_redirect' );



//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );


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


