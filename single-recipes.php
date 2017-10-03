<?php get_header(); ?>
<?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); global $post;
?>

<section>
    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                <div class="recipe-single-category-link">
                    <?php $terms = get_the_terms( $post->ID, 'recipe-categories' ); ?>
                    <p>Our Recipes:
                    <?php $i=1; foreach($terms as $term): ?>
                    <?php echo (($i > 1) ? ', ' : '');?><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
                    <?php $i++; endforeach; ?>
                    </p>
                </div> <!-- category link breadcrumb end -->
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding-left">
                        <div class="recipe-single-main-text">
                            <p><?php echo get_the_content(); ?></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <?php single_recipe_social_share(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right single-recipe-quote-background">
            <div class="container">
                <div class="single-recipe-quote">
                    <h4>"This is an awesome chef's quote for something... now lets get to cooking"</h4>
                    <p>Author name</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding-left">
                        <div class="recipe-content-section-wrap">
                            <?php
                            if( have_rows('recipe_content') ): $j = 1;
                                while ( have_rows('recipe_content') ) : the_row();
                            ?>
                                <?php if($j % 2 != 0): ?>
                                    <div class="recipe-content-item">
                                        <div class="recipe-content">
                                            <p><?php echo get_sub_field('content_text'); ?></p>
                                        </div>
                                        <div class="recipe-image">
                                            <picture>
                                                <source srcset="<?php echo get_sub_field('image'); ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                <source srcset="<?php echo get_sub_field('image'); ?>">
                                                <img class="photo img-responsive" src="<?php echo get_sub_field('image'); ?>">
                                            </picture>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="recipe-content-item">
                                        <div class="recipe-image">
                                            <picture>
                                                <source srcset="<?php echo get_sub_field('image'); ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                <source srcset="<?php echo get_sub_field('image'); ?>">
                                                <img class="photo img-responsive" src="<?php echo get_sub_field('image'); ?>">
                                            </picture>
                                        </div>
                                        <div class="recipe-content">
                                            <p><?php echo get_sub_field('content_text'); ?></p>
                                        </div>
                                    </div>
                            <?php endif; ?>
                            <?php $j++; endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-right">
                        <div class="recipe-single-sidebar">
                            <div class="recipe-social-follow">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google"></a></li>
                                    <li><a href="#" class="fa fa-youtube"></a></li>
                                </ul>
                            </div>
                            <div class="recipe-category-links">
                                <h3>Categories</h3>
                                <hr>
                                <?php
                                $taxonomy     = 'recipe-categories';
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
                                <ul>
                                    <?php
                                    foreach ($all_categories as $cat) {
                                        if($cat->category_parent == 0) {
                                            $category_id = $cat->term_id;
                                            ?>
                                            <li><?php echo '<a href="'. get_term_link($cat->slug, 'recipe-categories') .'">'. $cat->name .'</a>'; ?></li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="recipe-product-categories recipe-category-links">
                                <h3>Shop</h3>
                                <hr>
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
                                <?php
                                    $terms = get_the_terms( $post->ID, 'recipe-categories' );
                                ?>
                                <h2><?php echo $terms[0]->name; ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid products">
                        <?php
                            $_posts = new WP_Query( array(
                                'post_type'         => 'recipes',
                                'posts_per_page'    => 3, //important for a PHP memory limit warning
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'recipe-categories',
                                        'field'    => 'slug',
                                        'terms'    => $terms[0]->slug,
                                    ),
                                ),
                            ));
                            if( $_posts->have_posts() ) :
                                while ( $_posts->have_posts() ) : $_posts->the_post(); global $post;
                                    $this_terms = get_the_terms( $post->ID, 'recipe-categories' );
                            ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <a href="<?php the_permalink($post->ID); ?>">
                                    <div class="recipes-bottom-category-wrap recipes-bottom-category-match-height">
                                        <picture>
                                            <source srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                            <source srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>">
                                            <img class="photo img-responsive" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>">
                                        </picture>
                                        <div class="recipes-bottom-category-content">
                                                <span>
                                                    <?php if($this_terms != null): $i=1; foreach($this_terms as $this_term): ?>
                                                        <?php echo (($i > 1) ? ', ' . $this_term->name : '' . $this_term->name); ?>
                                                        <?php $i++; endforeach; endif; ?>
                                                </span>
                                            <h2><?php echo get_the_title($post->ID); ?></h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        wp_reset_query();
                        ?>
                    </div><!--/.products-->
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="recipes-bottom-category-content">
                                <a href="<?php echo get_term_link($terms[0]); ?>">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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


<?php
        } // end while
    } // end if
?>

<?php get_footer(); ?>