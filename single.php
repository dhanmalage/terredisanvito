<?php get_header(); ?>
<section>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right recipes-background">
            <div class="recipes-background-mask">
                <div class="container">
                    <div class="single-product-divider"></div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <?php
                            if ( have_posts() ) {
                                while ( have_posts() ) {
                                    the_post();
                                    ?>
                                    <div class="sanvito-single-post">
                                        <div class="single-content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <?php
                                } // end while
                            } // end if
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>