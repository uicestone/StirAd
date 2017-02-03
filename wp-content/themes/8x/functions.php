<?php

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/css/theme.css');
    wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js');
    wp_enqueue_script('jquery.min', get_stylesheet_directory_uri() . '/js/jquery.min.js', array(), false, true);
    wp_enqueue_script('bootstrap.min', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('jquery.isotope.min', get_stylesheet_directory_uri() . '/js/jquery.isotope.min.js', array(), false, true);
    wp_enqueue_script('jquery.scrollTo', get_stylesheet_directory_uri() . '/js/jquery.scrollTo.js', array(), false, true);
    wp_enqueue_script('jquery.nav', get_stylesheet_directory_uri() . '/js/jquery.nav.js', array(), false, true);
    wp_enqueue_script('jquery.sticky', get_stylesheet_directory_uri() . '/js/jquery.sticky.js', array(), false, true);
    wp_enqueue_script('owl.carousel.min', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array(), false, true);
    wp_enqueue_script('wow.min', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), false, true);
    wp_enqueue_script('mediaelement-and-player.min', get_stylesheet_directory_uri() . '/js/mediaelement-and-player.min.js', array(), false, true);
    wp_enqueue_script('countdown/jquery.plugin.min', get_stylesheet_directory_uri() . '/js/countdown/jquery.plugin.min.js', array(), false, true);
    wp_enqueue_script('countdown/jquery.countdown.min', get_stylesheet_directory_uri() . '/js/countdown/jquery.countdown.min.js', array(), false, true);
    wp_enqueue_script('jquery.fittext', get_stylesheet_directory_uri() . '/js/jquery.fittext.js', array(), false, true);
    wp_enqueue_script('jquery.validate.min', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array(), false, true);
    wp_enqueue_script('8x', get_stylesheet_directory_uri() . '/js/8x.js', array(), false, true);
});

add_action('after_setup_theme', function() {
	register_nav_menu('primary', '主导航');
});

add_filter('nav_menu_link_attributes', function($attrs, $item) {
	
	$attrs['class'] = $attrs['class'] ?: [];
	
	$attrs['class'][] = 'menu-link';
	
	if(in_array('current-menu-item', $item->classes) || in_array('current-page-ancestor', $item->classes)) {
		$attrs['class'][] = 'active';
	}
	
	$attrs['class'] = implode(' ', $attrs['class']);
	
	$attrs['role'] = 'button';
	
	return $attrs;
	
}, 10, 2);

class Kinder_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function start_lvl(&$output, $depth = 0, $args = array())
	{
		parent::start_lvl($output, $depth, $args);
		$output = str_replace('sub-menu', 'sub-menu dropdown', $output);
	}
}

add_action('wp', function() {
    $under_construction_page = get_posts(array('name'=>'under-construction', 'post_type'=>'page'));
    if($under_construction_page && !is_page('under-construction') && !is_admin() && !is_admin_bar_showing()) {
        header('Location: ' . get_permalink($under_construction_page[0]->ID)); exit;
    }
});
