<?php get_header(); ?>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); global $post;
?>
<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white no-padding-left no-padding-right welcome-section-background">
            <div class="delight-section-background-mask">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="welcome-section-wrap">
                                <?php
                                    if( have_rows('welcome_section') ): $j = 1;
                                        while ( have_rows('welcome_section') ) : the_row();
                                ?>
                                <?php if($j % 2 != 0): ?>
                                    <div class="welcome-section-item">
                                        <div class="welcome-section-content">
                                            <h4><?php echo get_sub_field('title'); ?></h4>
                                            <h3><?php echo get_sub_field('tagline'); ?></h3>
                                            <hr>
                                            <p><?php echo get_sub_field('content'); ?></p>
                                            <a href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('url_name'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="welcome-section-image">
                                            <picture>
                                                <source srcset="<?php echo get_sub_field('image'); ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                <source srcset="<?php echo get_sub_field('image'); ?>">
                                                <img class="photo img-responsive" src="<?php echo get_sub_field('image'); ?>">
                                            </picture>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="welcome-section-item">
                                        <div class="welcome-section-image">
                                            <picture>
                                                <source srcset="<?php echo get_sub_field('image'); ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                <source srcset="<?php echo get_sub_field('image'); ?>">
                                                <img class="photo img-responsive" src="<?php echo get_sub_field('image'); ?>">
                                            </picture>
                                        </div>
                                        <div class="welcome-section-content">
                                            <h4><?php echo get_sub_field('title'); ?></h4>
                                            <h3><?php echo get_sub_field('tagline'); ?></h3>
                                            <hr>
                                            <p><?php echo get_sub_field('content'); ?></p>
                                            <a href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('url_name'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php $j++; endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white no-padding-left no-padding-right taste-section-background">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                        <div class="taste-section-content">
                            <?php
                                if( have_rows('taste_section') ):
                                    while ( have_rows('taste_section') ) : the_row();
                            ?>
                                        <h2><?php the_sub_field('title'); ?></h2>
                                        <p><?php the_sub_field('content'); ?></p>
                                        <a href="<?php the_sub_field('url'); ?>">find out more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            <?php
                                endwhile;
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white no-padding-left no-padding-right delight-section-background">
            <div class="delight-section-background-mask">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="delight-section-content">
                                <?php
                                if( have_rows('delight_section') ):
                                    while ( have_rows('delight_section') ) : the_row();
                                        ?>
                                        <h4><?php the_sub_field('title'); ?></h4>
                                        <h3><?php the_sub_field('tagline'); ?></h3>
                                        <p><?php the_sub_field('content'); ?></p>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <?php
                        if( have_rows('delight_section') ):
                            while ( have_rows('delight_section') ) : the_row();
                                $porducts_array = get_sub_field('products');
                                foreach($porducts_array as $porduct_id):
                                    $_product = wc_get_product( $porduct_id );
                                    //print_r($_product);
                                ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <a href="<?php the_permalink($porduct_id); ?>" class="category-product-link">
                                        <div class="category-product-wrap category-product-match-height">
                                            <?php $src =  wp_get_attachment_image_src( get_post_thumbnail_id( $porduct_id ), 'full' ); ?>
                                            <img class="img-responsive" src="<?php echo $src[0]; ?>">
                                            <?php
                                            $_categories = $_product->category_ids;
                                            foreach($_categories as $_category):
                                            $term = get_term_by( 'id', $_category, 'product_cat');
                                            ?>
                                            <label><?php echo $term->name; ?></label>
                                            <?php endforeach; ?>
                                            <h2><?php echo $_product->name; ?></h2>
                                            <p><?php char_limit($_product->description, 60); ?></p>
                                            <h4><?php echo $_product->get_price_html(); ?></h4>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                endforeach;
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="delight-section-footer">
                                <hr>
                                <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">visit the shop <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
} // end while
} // end if
?>
<?php get_footer(); ?>
