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
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding-left">
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
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right">
                        <div class="recipe-social-follow">
                            <ul>
                                <li><div class="fb-like" data-href="https://www.facebook.com/terredisanvitouk/" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div></li>
                            </ul>
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