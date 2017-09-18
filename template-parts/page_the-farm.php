<?php
/**
 * Template Name: The Farm Page
 *
 * @package WordPress
 * @subpackage sanvito
 * @since Sanvito 2.0
 */
?>
<?php get_header(); ?>

    <section>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white no-padding-left no-padding-right farm-story-background">
                <div class="farm-story-mask">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                                <div class="farm-story-wrap">
                                    <?php //$i = 1; ?>
                                    <?php //if($i % 2 != 0): ?>
                                        <div class="farm-story-item">
                                            <div class="farm-story-content">
                                                <h4>Our Story</h4>
                                                <h3>Of the land</h3>
                                                <hr>
                                                <p>Terre di San Vito è un insieme di persone che condividono con entusiasmo
                                                    lo stesso amore per la propria terra. Solo amandola e rispettandola abbiamo la
                                                    possibilità di ottenerne i frutti migliori. “Pochi ma buonissimi”, rappresenta appieno
                                                </p>
                                            </div>
                                            <div class="farm-story-image">
                                                <picture>
                                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/farm1.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/farm1.jpg">
                                                    <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/farm1.jpg">
                                                </picture>
                                            </div>
                                        </div>
                                    <?php //else: ?>
                                        <div class="farm-story-item">
                                            <div class="farm-story-image">

                                            </div>
                                            <div class="farm-story-content">
                                                <p>Terre di San Vito è un insieme di persone che condividono con entusiasmo
                                                    lo stesso amore per la propria terra. Solo amandola e rispettandola abbiamo la
                                                    possibilità di ottenerne i frutti migliori. "Pochi ma buonissimi", rappresenta appieno
                                                </p>
                                            </div>
                                        </div>
                                    <?php //endif; ?>
                                        <div class="farm-story-item">
                                            <div class="farm-story-content">
                                                <p>Terre di San Vito è un insieme di persone che condividono con entusiasmo
                                                    lo stesso amore per la propria terra. Solo amandola e rispettandola abbiamo la
                                                    possibilità di ottenerne i frutti migliori. “Pochi ma buonissimi”, rappresenta appieno
                                                </p>
                                            </div>
                                            <div class="farm-story-image">
                                                <picture>
                                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/farm2.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/farm2.jpg">
                                                    <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/farm2.jpg">
                                                </picture>
                                            </div>
                                        </div>
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white no-padding-left no-padding-right farm-middle-background">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right"></div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
                            <div class="farm-middle-content">
                                <p>Yeast consumes the sugar in the grapes and converts it to ethanol and carbon dioxide. Different varieties of grapes and strains of yeasts produce different styles of wine.
                                    These variations result from the complex interactions between the biochemical development of the grape, the reactions involved in fermentation, the terroir, and the production process.
                                    Many countries enact legal appellations intended to define styles and qualities of wine.</p>
                                <a href="javascript:void(0);">visit the shop <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="delight-section-content">
                                <h4>Delight</h4>
                                <h3>in our flavours</h3>
                                <p>Yeast consumes the sugar in the grapes and converts it to ethanol and carbon dioxide. Different varieties of grapes and strains of yeasts produce different styles of wine.
                                    These variations result from the complex interactions between the biochemical development of the grape, the reactions</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <?php $i = 1; for($i; $i<7; $i++){ ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <a href="javascript:void(0);" class="category-product-link">
                                    <div class="category-product-wrap category-product-match-height">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/product.jpg">
                                        <label>New</label>
                                        <h2>Product Name 01</h2>
                                        <p>These variations result from the complex interactions</p>
                                        <h4>&pound;29.99</h4>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="delight-section-footer">
                                <hr>
                                <a href="javascript:void(0);">visit the shop <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>