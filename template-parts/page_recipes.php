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

<?php
    if ( have_posts() ) {
    while ( have_posts() ) {
    the_post(); global $post;
?>

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
                                <?php
                                    $selection_array = get_field('our_selection');
                                    $first_post = get_post( $selection_array[0] );
                                    $terms = get_the_terms( $first_post->ID, 'recipe-categories' );
                                ?>
                                <a href="<?php the_permalink($first_post->ID); ?>">
                                    <div class="recipes-featured-item full-height">
                                        <picture>
                                            <source srcset="<?php echo get_the_post_thumbnail_url( $first_post->ID, 'full' ); ?>" media="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx)">
                                            <source srcset="<?php echo get_the_post_thumbnail_url( $first_post->ID, 'full' ); ?>">
                                            <img class="photo img-responsive" src="<?php echo get_the_post_thumbnail_url( $first_post->ID, 'full' ); ?>">
                                        </picture>
                                        <span>
                                            <?php $i=1; foreach($terms as $term): ?>
                                            <?php echo (($i > 1) ? ', ' . $term->name : '' . $term->name); ?>
                                            <?php $i++; endforeach; ?>
                                        </span>
                                        <h3><?php echo get_the_title($first_post->ID); ?></h3>
                                        <p><?php char_limit($first_post->post_content, 300); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- col-lg-6 left col. end -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="recipes-featured-wrap">
                                <?php $j=1; foreach($selection_array as $item): ?>
                                    <?php if( $j > 1 ): ?>
                                        <?php
                                            $this_post = get_post( $item );
                                            $terms = get_the_terms( $item, 'recipe-categories' );
                                        ?>
                                        <a href="<?php the_permalink($this_post->ID); ?>">
                                            <div class="recipes-featured-item">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo get_the_post_thumbnail_url( $this_post->ID, 'full' ); ?>" class="media-object">
                                                    </div>
                                                    <div class="media-body">
                                                        <span>
                                                            <?php if($terms != null): $i=1; foreach($terms as $term): ?>
                                                            <?php echo (($i > 1) ? ', ' . $term->name : '' . $term->name); ?>
                                                            <?php $i++; endforeach; endif; ?>
                                                        </span>
                                                        <h3><?php echo get_the_title($this_post->ID); ?></h3>
                                                        <p><?php char_limit($this_post->post_content, 12); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                <?php $j++; endforeach; ?>
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

<?php
    $_terms = get_terms( array('recipe-categories') );
    $term_counter = 1;
    foreach ($_terms as $term) :
        $term_slug = $term->slug;
        $_posts = new WP_Query( array(
            'post_type'         => 'recipes',
            'posts_per_page'    => 3, //important for a PHP memory limit warning
            'tax_query' => array(
                array(
                    'taxonomy' => 'recipe-categories',
                    'field'    => 'slug',
                    'terms'    => $term_slug,
                ),
            ),
        ));
?>
    <section>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right <?php if($term_counter==1): echo 'recipes-bottom-background-upper'; elseif($term_counter == 3): echo 'recipes-bottom-background-down'; endif; ?>">
                <div class="recipes-bottom-background-mask">
                    <div class="container">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="recipes-title">
                                <h2><?php echo $term->name; ?></h2>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <?php if( $_posts->have_posts() ) : ?>
                                <?php while ( $_posts->have_posts() ) : $_posts->the_post(); global $post; ?>
                                    <?php $this_terms = get_the_terms( $post->ID, 'recipe-categories' ); ?>
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
                            <?php endwhile;  endif; wp_reset_postdata(); ?>
                        </div>
                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
                                <div class="recipes-bottom-category-content">
                                    <a href="<?php echo get_term_link($term); ?>">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container end -->
                </div> <!-- background mask end -->
            </div> <!-- col-lg-12 main background end -->
        </div> <!-- row-fluid end -->
    </section>
<?php $term_counter++; endforeach; ?>



 <?php
        } // end while
    } // end if
?>

<?php get_footer(); ?>
