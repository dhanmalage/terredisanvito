<?php
/*
Theme Name: Terre Di San Vito
Theme URI:
Author: Dhananjaya Maha Malage
Author URI: http://whenalive.com/
Description: Wordpress Theme developed for Terre Di San Vito.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: terredisanvito

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
?>

<?php get_header(); ?>

    <section>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-white recipes-taxonomy-wrap no-padding-left no-padding-right">
                <div class="container">
                    <div class="row-fluid">
                        <?php
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post(); global $post;
                                $this_terms = get_categories();
                                ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <a href="<?php the_permalink(); ?>" class="recipe-taxonomy-item">
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
                                                <h2><?php echo get_the_title(); ?></h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                //
                            } // end while
                        } // end if
                        ?>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="recipes-archive-pegination">
                                <div class="nav-previous"><?php next_posts_link( '<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Older posts' ); ?></div>
                                <div class="nav-next"><?php previous_posts_link( 'Newer posts <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>