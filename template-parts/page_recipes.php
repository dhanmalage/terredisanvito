<?php
/**
 * Template Name: Recipes Page
 *
 * @package WordPress
 * @subpackage sanvito
 * @since Sanvito 2.0
 */
?>
<?php get_header(); ?>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right recipes-background">
            <div class="recipes-background-mask">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="recipes-title">
                                <h2>Our Selection</h2>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="recipes-featured-wrap">
                                <a href="javascript:void(0)">
                                    <div class="recipes-featured-item full-height">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/recipes1.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/recipes1.jpg">
                                            <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/recipes1.jpg">
                                        </picture>
                                        <span>Chefs choice</span>
                                        <h3>Name of Recipe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- col-lg-6 left col. end -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="recipes-featured-wrap">
                                <?php for($i=1; $i<4; $i++){ ?>
                                    <a href="javascript:void(0)">
                                        <div class="recipes-featured-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/recipes2.jpg" class="media-object">
                                                </div>
                                                <div class="media-body">
                                                    <span>Chefs choice</span>
                                                    <h3>Name of Recipe</h3>
                                                    <p>Lorem ipsum...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        </div> <!-- col-lg-6 right col. end -->
                    </div> <!-- row-fluid end -->
                    <div class="row-fluid"> <!-- search row start -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="recipes-search">
                                <?php
                                    get_search_form();
                                ?>
                            </div>
                        </div>
                    </div> <!-- search row end -->
                </div>
            </div> <!-- background mask end -->
        </div> <!-- col-lg-12 main background end -->
    </div> <!-- row-fluid end -->
</section>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right recipes-bottom-background-upper">
            <div class="recipes-bottom-background-mask">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="recipes-title">
                            <h2>Salads</h2>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <?php for($i=1; $i<4; $i++){ ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <a href="javascript:void(0);">
                                    <div class="recipes-bottom-category-wrap recipes-bottom-category-match-height">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/res1.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/res1.jpg">
                                            <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/res1.jpg">
                                        </picture>
                                        <div class="recipes-bottom-category-content">
                                            <span>Category</span>
                                            <h2>This is the lovely (& Potentially long) article name</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="recipes-bottom-category-content">
                                <a href="javascript:void(0);">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- container end -->
            </div> <!-- background mask end -->
        </div> <!-- col-lg-12 main background end -->
    </div> <!-- row-fluid end -->
</section>


<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white no-padding-left no-padding-right">
            <div class="recipes-bottom-background-mask">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="recipes-title">
                            <h2>Pasta</h2>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <?php for($i=1; $i<4; $i++){ ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <a href="javascript:void(0);">
                                    <div class="recipes-bottom-category-wrap recipes-bottom-category-match-height">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/res2.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/res2.jpg">
                                            <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/res2.jpg">
                                        </picture>
                                        <div class="recipes-bottom-category-content">
                                            <span>Category</span>
                                            <h2>This is the lovely (& Potentially long) article name</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="recipes-bottom-category-content">
                                <a href="javascript:void(0);">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- container end -->
            </div> <!-- background mask end -->
        </div> <!-- col-lg-12 main background end -->
    </div> <!-- row-fluid end -->
</section>

<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 recipes-bottom-background-down no-padding-left no-padding-right">
            <div class="recipes-bottom-background-mask">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="recipes-title">
                            <h2>Other</h2>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <?php for($i=1; $i<4; $i++){ ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <a href="javascript:void(0);">
                                    <div class="recipes-bottom-category-wrap recipes-bottom-category-match-height">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/res3.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/res3.jpg">
                                            <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/res3.jpg">
                                        </picture>
                                        <div class="recipes-bottom-category-content">
                                            <span>Category</span>
                                            <h2>This is the lovely (& Potentially long) article name</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="recipes-bottom-category-content">
                                <a href="javascript:void(0);">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- container end -->
            </div> <!-- background mask end -->
        </div> <!-- col-lg-12 main background end -->
    </div> <!-- row-fluid end -->
</section>

<?php get_footer(); ?>
