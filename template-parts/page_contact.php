<?php
/**
 * Template Name: Contact Page
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right contact-us-background">
            <div class="contact-us-background-mask">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="contact-us-location">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
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
