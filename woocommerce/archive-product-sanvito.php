<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php
$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$this_term_id = $queried_object->term_id;
?>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right sanvito-archive-header-background" style="background-image: url('<?php echo get_field('header_background_image', $queried_object); ?>');">
            <div class="sanvito-archive-header-background-mask">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="sanvito-archive-title">
                                <h1><?php echo $queried_object->name; ?></h1>
                                <h2><?php echo get_field('tag_line', $queried_object); ?></h2>
                            </div>
                            <div class="sanvito-archive-content">
                                <p><?php echo get_field('first_content', $queried_object); ?></p>
                            </div>
                            <div class="sanvito-archive-quote first">
                                <h4><?php echo get_field('quote', $queried_object); ?></h4>
                                <p><?php echo get_field('quote_author', $queried_object); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="sanvito-archive-side-image">
                                <picture>
                                    <source srcset="<?php echo get_field('header_side_image', $queried_object); ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                    <source srcset="<?php echo get_field('header_side_image', $queried_object); ?>">
                                    <img class="photo img-responsive" src="<?php echo get_field('header_side_image', $queried_object); ?>">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clear"></div>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right category-page-default-background">
            <div class="category-page-background-mask">
                <div class="container category-page-product-container">
                    <div class="row-fluid products">
                        <?php
                            if ( have_posts() ) {
                                $post_array = array();
                                while ( have_posts() ) : the_post(); global $post; $product; $woocommerce;
                                    $post_array[] = $post->ID;
                                    ?>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <a href="<?php the_permalink(); ?>" class="category-product-link">
                                                <div class="category-product-wrap category-product-match-height">
                                                    <?php $src =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                                    <img class="img-responsive" src="<?php echo $src[0]; ?>">
                                                    <label><?php echo $queried_object->name; ?></label>
                                                    <h2><?php echo get_the_title(); ?></h2>
                                                    <p><?php char_limit(get_the_content(), 60); ?></p>
                                                    <?php $product = wc_get_product( $post->ID ); ?>
                                                    <h4><?php echo $product->get_price_html(); ?></h4>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                endwhile;
                            } else {
                                echo __( 'No products found' );
                            }
                            wp_reset_postdata();
                            wp_reset_query();
                        ?>
                    </div><!--/.products-->
                    <div class="clear"></div>
                    <div class="spacer-60"></div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="sanvito-archive-content-middle">
                                <p><?php echo get_field('second_content', $queried_object); ?></p>
                            </div>
                            <div class="sanvito-archive-video">
                                <?php echo get_field('video_embedded_code', $queried_object); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="sanvito-archive-content-middle">
                                <div class="archive-review-slider-wrap" id="archive-review-slider">
                                    <div class="archive-review-carousel owl-carousel owl-theme">
                                        <?php
                                            $args = array (
                                                'post_type' => 'product',
                                                'post__in' => $post_array,
                                                'status' => "approve",
                                            );
                                            $comments = get_comments($args);
                                        foreach($comments as $comment):
                                        ?>
                                            <div class="item">
                                                <p><?php echo $comment->comment_content; ?> <span>- <?php echo $comment->comment_author; ?> -</span></p>
                                            </div>
                                        <?php
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                                <p><?php echo get_field('third_content', $queried_object); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clear"></div>

<section>
    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                <div class="faq-section-title">
                    <h3>FAQS</h3>
                </div>
                <div class="faq-list-wrap">
                    <ul>
                    <?php
                        $args = array(
                            'post_type'=> 'faq',
                            //'areas'    => 'painting',
                            'order'    => 'ASC'
                        );
                        $the_query = new WP_Query( $args );
                        if( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post(); global $post;
                                if (in_array($this_term_id, get_field('relevant_product_category'))):
                    ?>
                                    <li>
                                        <h2><?php echo get_the_title(); ?></h2>
                                        <p><?php echo get_the_content(); ?></p>
                                    </li>
                    <?php
                                endif;
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        wp_reset_query();
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white no-padding-left no-padding-right delight-section-background">
            <div class="delight-section-background-mask">
                <div class="container category-page-product-container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="recipes-title">
                                <h2>We Recommend</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid products">
                        <?php
                        $recommend_args = array(
                            'post_type'=> 'product',
                            'post__in' => get_field('we_recommend_products', $queried_object)
                        );
                        $recommend_query = new WP_Query( $recommend_args );
                        if ( $recommend_query->have_posts() ) {
                            while ( $recommend_query->have_posts() ) : $recommend_query->the_post(); global $post;;
                                $terms = get_the_terms($post->ID, 'product_cat');
                                $term = get_term_by( 'id', $terms[0]->term_id, 'product_cat');
                                ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <a href="<?php the_permalink(); ?>" class="category-product-link">
                                        <div class="category-product-wrap category-product-match-height">
                                            <?php $src =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                            <img class="img-responsive" src="<?php echo $src[0]; ?>">
                                            <label><?php echo $term->name; ?></label>
                                            <h2><?php echo get_the_title(); ?></h2>
                                            <p><?php char_limit(get_the_content(), 60); ?></p>
                                            <?php $recommend_product = wc_get_product( $post->ID ); ?>
                                            <h4><?php echo $recommend_product->get_price_html(); ?></h4>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            endwhile;
                        } else {
                            echo __( 'No products found' );
                        }
                        wp_reset_postdata();
                        wp_reset_query();
                        ?>
                    </div><!--/.products-->
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="delight-section-footer">
                                <hr>
                                <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="spacer-60"></div>
            </div>
        </div>
    </div>
</section>



<?php get_footer( 'shop' ); ?>
