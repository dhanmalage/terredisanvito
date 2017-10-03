<?php

function sanvito_setup() {

	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// This theme supports a variety of post formats.
	add_theme_support('post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	
	// Register Navigation
	register_nav_menus(array('primary' => 'Primary Navigation', 'footer' => 'Footer Navigation'));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sanvito_setup');

function sanvito_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
	wp_enqueue_style('woocommerce', get_template_directory_uri().'/css/woocommerce.css');
	wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());

	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '', true);
	wp_enqueue_script('matchHeight', get_template_directory_uri().'/js/jquery.matchHeight-min.js', array(), '', true);
	wp_enqueue_script('function', get_template_directory_uri().'/js/functions.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'sanvito_scripts');

// Register Custom Navigation Walker
require_once('inc/wp-bootstrap-navwalker.php');

// Add WooCommerce custom functions
require_once('inc/woocommerce-functions.php');

// Register custom post types
require_once('inc/sanvito-post-types.php');

// Header Navigation
function header_navigation(){
	global $woocommerce;
	echo '<nav class="navbar' . (is_woocommerce() || is_page_template( 'template-parts/page_sanvito-shop.php' ) || is_tax() || is_home() || is_cart() || is_checkout() ? ' navbar-shop' : ' navbar-default') . '" role="navigation">';
		echo '<div class="navbar-header">';
			echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
				echo '<span class="sr-only">Toggle navigation</span>';
				echo '<span class="icon-bar"></span>';
				echo '<span class="icon-bar"></span>';
				echo '<span class="icon-bar"></span>';
			echo '</button>';
			echo '<a class="navbar-brand" href="' . home_url() . '"><img src="' . get_template_directory_uri() . '/images/'.(is_woocommerce() || is_page_template('template-parts/page_sanvito-shop.php') || is_tax() || is_home() || is_cart() || is_checkout() ? 'logo-colored.png' : 'logo.png').'"></a>';
		echo '</div>';
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
	echo '</nav>';
}

// limit number of characters to displayed
function char_limit($x, $length)
{
	if(strlen($x)<=$length)
	{
		echo $x;
	}
	else
	{
		$y=substr($x,0,$length) . '...';
		echo $y;
	}
}

// single recipe page social share
function single_recipe_social_share(){
	// check if the repeater field has rows of data
	echo '<div class="single-recipe-social-icons">';
		echo '<ul>';
			echo '<li>';
				echo '<a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
			echo '</li>';
			echo '<li>';
				echo '<a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
			echo '</li>';
			echo '<li>';
				echo '<a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
			echo '</li>';
		echo '</ul>';
	echo '</div>';
}

