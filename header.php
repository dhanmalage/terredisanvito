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
	<?php if(is_woocommerce() || is_page_template( 'template-parts/page_sanvito-shop.php' )): ?>
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-shop" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-colored.png"></a>
					</div>
					<?php
					wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker())
					);
					?>
				</nav>
			</div>
		</div>
	</div>
	<?php else: ?>
		<div class="sanvito-header" style="<?php echo ((is_home() || is_front_page()) ? 'background-color: #000000;' : 'background-color: transparent; background-image: url('.get_template_directory_uri().'/images/our-farm-background.jpg);'); ?>">
			<div class="header-mask">
				<div class="container">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

							<nav class="navbar navbar-default" role="navigation">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
								</div>
								<?php
								wp_nav_menu( array(
										'menu'              => 'primary',
										'theme_location'    => 'primary',
										'depth'             => 2,
										'container'         => 'div',
										'container_class'   => 'collapse navbar-collapse',
										'container_id'      => 'bs-example-navbar-collapse-1',
										'menu_class'        => 'nav navbar-nav navbar-right',
										'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										'walker'            => new WP_Bootstrap_Navwalker())
								);
								?>
							</nav>
						</div>
					</div>

					<?php if(is_home() || is_front_page()): ?>
						<div class="row-fluid">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="home-slider-wrap" id="home-slider">
									<div class="home-carousel owl-carousel owl-theme">
										<?php $i=1; for($i; $i<4; $i++){ ?>
											<div class="item">
												<div class="row-fluid">
													<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="home-slide-title-wrap">
															<h2>Terre Di San Vito</h2>
															<h3>The World's Finest Olive Oil</h3>
														</div>
														<div class="home-slide-credit-wrap">
															<p>As sold by</p>
															<h4>Waitrose</h4>
															<a href="javascript:void 0;">find out more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="home-slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slider1.png)"></div>
													</div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="row-fluid">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background-transparent no-padding-left no-padding-right">
								<div class="header-title">
									<h1>Our Farm</h1>
								</div>
								<div class="header-tag-line">
									<h2>Our family history</h2>
								</div>
							</div>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	<?php endif; ?>
</header>

<div class="clear"></div>


