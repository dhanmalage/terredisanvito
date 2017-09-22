<?php get_header(); ?>

<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<section>
				
					<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); 
							?>
								<h1><?php the_title(); ?></h1>
							<?php
								the_content();
								
							} // end while
						} // end if
					?>
				</section>
			</div>
		</div>
	</div>

<?php get_footer(); ?>