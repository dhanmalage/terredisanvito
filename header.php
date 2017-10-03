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
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<meta name="resource-type" content="document" />
	<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="author" content="Dhananjaya Maha Malage" />
	<meta name="contact" content="dhananjaya@whenalive.com" />
	<meta name="copyright" content="Copyright (c)2017 Dhananjaya Maha Malage. All Rights Reserved." />
	<meta name="theme-color" content="#ffffff">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header>
	<?php if(is_woocommerce() || is_page_template( 'template-parts/page_sanvito-shop.php' ) || is_tax() || is_home() || is_cart() || is_checkout()){ ?>
		<div class="container">
			<div class="row-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php header_navigation(); ?>
				</div>
			</div>
		</div>
	<?php }elseif(is_page_template( 'template-parts/page_contact.php' )){ ?>
		<div class="sanvito-header contact-us-header">
			<div class="contact-us-header-mask">
				<div class="container">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<?php header_navigation(); ?>
						</div>
					</div>
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-transparent no-padding-left no-padding-right ">
							<div class="header-title">
								<h1><?php echo get_the_title(); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }elseif(is_singular( 'recipes' )){ ?>
		<div class="sanvito-header header-page recipes-single-header" style="background-image: url('<?php echo get_field('header_image'); ?>')">
			<div class="recipes-single-header-mask">
				<div class="container">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<?php header_navigation(); ?>
						</div>
					</div>
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-transparent no-padding-left no-padding-right ">
							<div class="header-title">
								<h1><?php echo get_the_title(); ?></h1>
							</div>
							<div class="header-tag-line">
								<h2><?php echo get_field('tag_line'); ?></h2>
							</div>
							<div class="single-header-image">
								<?php
									global $post;
									if ( has_post_thumbnail() ) {
										$attachment_id  = get_post_thumbnail_id($post->ID);
										$image_url    = wp_get_attachment_image_src($attachment_id,'full', false);
										$image_alt = get_post_meta($attachment_id,'_wp_attachment_image_alt', true);
									}
								?>
								<img src="<?php echo $image_url[0]; ?>" class="img-responsive" alt="<?php echo $image_alt; ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } else{ ?>
		<div class="sanvito-header <?php echo (is_front_page() ? 'header-home' : 'header-page'); ?>" style="<?php echo (is_front_page() ? 'background-color: #000000;' : 'background-color: transparent; background-image: url('.get_field('header_image').');'); ?>">
			<div class="header-mask">
				<div class="container">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<?php header_navigation(); ?>
						</div>
					</div>
					<?php if(is_front_page()){ ?>
						<div class="row-fluid">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="home-slider-wrap" id="home-slider">
									<div class="home-carousel owl-carousel owl-theme">
										<?php
										// check if the repeater field has rows of data
										if( have_rows('home_slider') ):
											// loop through the rows of data
											while ( have_rows('home_slider') ) : the_row();
												?>
												<div class="item">
													<div class="row-fluid">
														<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															<div class="home-slide-title-wrap">
																<h2><?php echo get_sub_field('main_title'); ?></h2>
																<h3><?php echo get_sub_field('tagline'); ?></h3>
															</div>
															<div class="home-slide-credit-wrap">
																<p><?php echo get_sub_field('small_text'); ?></p>
																<h4><?php echo get_sub_field('shop_name'); ?></h4>
																<a href="<?php echo get_sub_field('product_link'); ?>">find out more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
															</div>
														</div>
														<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															<div class="home-slider-image" style="background-image: url(<?php echo get_sub_field('image'); ?>);"></div>
														</div>
													</div>
												</div>
										<?php endwhile; endif; ?>
									</div>
								</div>
							</div>
						</div>
					<?php } else{ ?>
						<div class="row-fluid">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-transparent no-padding-left no-padding-right">
								<div class="header-title">
									<h1><?php echo get_the_title(); ?></h1>
								</div>
								<div class="header-tag-line">
									<h2><?php echo get_field('tag_line'); ?></h2>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
</header>

<div class="clear"></div>
