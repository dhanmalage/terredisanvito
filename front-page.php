<?php get_header(); ?>
<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white no-padding-left no-padding-right welcome-section-background">
            <div class="delight-section-background-mask">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                            <div class="welcome-section-wrap">
                                <?php //$i = 1; ?>
                                <?php //if($i % 2 != 0): ?>
                                    <div class="welcome-section-item">
                                        <div class="welcome-section-content">
                                            <h4>Welcome</h4>
                                            <h3>To our farm</h3>
                                            <hr>
                                            <p>Terre di San Vito è un insieme di persone che condividono con entusiasmo
                                                lo stesso amore per la propria terra. Solo amandola e rispettandola abbiamo la
                                                possibilità di ottenerne i frutti migliori. “Pochi ma buonissimi”, rappresenta appieno
                                            </p>
                                            <a href="javascript:void(0);">the farm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="welcome-section-image">
                                            <picture>
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/welcome1.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/welcome1.jpg">
                                                <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/welcome1.jpg">
                                            </picture>
                                        </div>
                                    </div>
                                <?php //else: ?>
                                    <div class="welcome-section-item">
                                        <div class="welcome-section-image">
                                            <picture>
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/welcome2.jpg" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/welcome2.jpg">
                                                <img class="photo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/welcome2.jpg">
                                            </picture>
                                        </div>
                                        <div class="welcome-section-content">
                                            <h4>Descover</h4>
                                            <h3>our story</h3>
                                            <hr>
                                            <p>Terre di San Vito è un insieme di persone che condividono con entusiasmo
                                                lo stesso amore per la propria terra. Solo amandola e rispettandola abbiamo la
                                                possibilità di ottenerne i frutti migliori. "Pochi ma buonissimi", rappresenta appieno
                                            </p>
                                            <a href="javascript:void(0);">find out more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                <?php //endif; ?>
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
                            <h2>A taste of Life</h2>
                            <p>Yeast consumes the sugar in the grapes and converts it to ethanol and carbon dioxide. Different varieties of grapes and strains of yeasts produce different styles of wine.
                                These variations result from the complex interactions between the biochemical development of the grape, the reactions involved in fermentation, the terroir, and the production process.
                                Many countries enact legal appellations intended to define styles and qualities of wine.</p>
                            <a href="javascript:void(0);">find out more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
    </div>
</section>

<?php get_footer(); ?>
