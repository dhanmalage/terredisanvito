<?php
/**
 * Template Name: Shop Page
 *
 * @package WordPress
 * @subpackage sanvito
 * @since Sanvito 2.0
 */
?>
<?php get_header(); ?>

<?php
    $taxonomy     = 'product_cat';
    $orderby      = 'name';
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 1;      // 1 for yes, 0 for no
    $title        = '';
    $empty        = 0;

    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li'     => $title,
        'hide_empty'   => $empty
    );
    $all_categories = get_categories( $args );
?>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-rose no-padding-left no-padding-right">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="sanvito-shop-category-menu">
                            <ul>
                                <?php
                                    foreach ($all_categories as $cat) {
                                        if($cat->category_parent == 0) {
                                            $category_id = $cat->term_id;
                                            ?>
                                                <li><?php echo '<a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>'; ?></li>
                                            <?php
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right delight-section-background">
            <div class="delight-section-background-mask">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="sanvito-shop-title">
                                <h1>Our Produce</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <?php
                        foreach ($all_categories as $cat) {
                            if($cat->category_parent == 0) {
                                $category_id = $cat->term_id;
                                $cat_thumb_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
                                $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
                                ?>
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                        <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="sanvito-shop-category-link">
                                            <div class="sanvito-shop-category-wrap category-product-match-height">
                                                <picture>
                                                    <source srcset="<?php echo $shop_catalog_img[0]; ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                    <source srcset="<?php echo $shop_catalog_img[0]; ?>">
                                                    <img class="photo img-responsive" src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo $cat->name; ?>">
                                                </picture>
                                                <h2><?php echo $cat->name; ?></h2>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="clear"></div>
                    <div class="sanvito-shop-bottom-spacer"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
