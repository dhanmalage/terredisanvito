<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); global $post;
                            ?>
                            <div class="recipe-single-category-link">
                                <?php $terms = get_the_terms( $post->ID, 'recipe-categories' ); ?>
                                <p>Our Recipes:
                                <?php $i=1; foreach($terms as $term): ?>
                                <?php echo (($i > 1) ? ', ' : '');?><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
                                <?php $i++; endforeach; ?>
                                </p>
                            </div>

                            <h1><?php the_title(); ?></h1>



                            <?php
                            the_content();

                        } // end while
                    } // end if
                    ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>