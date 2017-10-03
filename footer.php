<?php if(is_product()): ?>

    <div class="clear"></div>

    <section>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right single-product-footer-background">
                <div class="single-product-footer-background-mask">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="testimonials-title">
                                <h3>Testimonials</h3>
                            </div>
                            <div class="testimonials-slider-wrap" id="testimonials-slider">
                                <div class="testimonials-carousel owl-carousel owl-theme">
                                        <?php single_product_testimonials_slider(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clear"></div>

<?php endif; ?>

<footer>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right lifestyle-section-background">
            <div class="lifestyle-section-background-inner">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="lifestyle-section-content">
                                <h2>Our Lifestyle</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <?php
                        wp_reset_postdata();
                            $args = array(
                                'posts_per_page'   => 3,
                                'orderby'          => 'date',
                                'order'            => 'DESC',
                                'post_type'        => 'post',
                                'post_status'      => 'publish',
                                'suppress_filters' => true
                            );
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()): $query->the_post(); global $post;
                                    $this_terms = get_categories();
                        ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="lifestyle-category-wrap lifestyle-category-match-height">
                                        <picture>
                                            <source srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                            <source srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>">
                                            <img class="photo img-responsive" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>">
                                        </picture>
                                        <div class="lifestyle-category-content">
                                            <label>
                                                <?php if($this_terms != null): $i=1; foreach($this_terms as $this_term): ?>
                                                <?php echo (($i > 1) ? ', ' . $this_term->name : '' . $this_term->name); ?>
                                                <?php $i++; endforeach; endif; ?>
                                            </label>
                                            <h2><?php echo get_the_title(); ?></h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="lifestyle-section-content">
                                <a href="<?php echo get_post_type_archive_link( 'post' ); ?>">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="lifestyle-section-footer">
                                <div class="footer-logo">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/logo.png" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                                        <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                                    </picture>
                                </div>
                                <div class="footer-navbar">
                                    <?php
                                    wp_nav_menu( array(
                                        'menu' => 'footer'
                                    ) );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right background-black">
            <div class="footer-social-icons">
                <ul>
                    <li>Follow Us</li>
                    <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>
</html>