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
                        <?php for($i=1; $i<4; $i++){ ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <a href="javascript:void(0);">
                                    <div class="lifestyle-category-wrap lifestyle-category-match-height">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/cat.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/cat.jpg">
                                            <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/cat.jpg">
                                        </picture>
                                        <div class="lifestyle-category-content">
                                            <label>Category</label>
                                            <h2>This is the lovely (& Potentially long) article name</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="lifestyle-section-content">
                                <a href="javascript:void(0);">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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