<?php
// redirect shop page
function custom_shop_page_redirect() {
    if( is_shop() ){
        wp_redirect( home_url( '/sanvito-shop/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'custom_shop_page_redirect' );