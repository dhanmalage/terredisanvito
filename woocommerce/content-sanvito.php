<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $post, $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <a href="<?php the_permalink(); ?>" class="category-product-link">
        <div class="category-product-wrap category-product-match-height">
            <?php $src =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <img class="img-responsive" src="<?php echo $src[0]; ?>">
            <label><?php echo $queried_object->name; ?></label>
            <h2>Product Name 01</h2>
            <p>These variations result from the complex interactions</p>
            <h4>&pound;29.99</h4>
        </div>
    </a>
</div>
