<?php 
// Add the css/js scripts
function awesome_script_enqueue(){
	// CSS
	// wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), null, 'all');
	wp_enqueue_style('bootswatch-darkly', 'https://bootswatch.com/4/darkly/bootstrap.min.css', array(), null, 'all');
	wp_enqueue_style('fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null, 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri(). '/css/awesome.css', array(), null, 'all');
	// JS
	// Remove default jquery bundled with WordPress except on Admin Page and register own version
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), null, true);
	}
	wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true);
	wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), null, true);
	wp_enqueue_script('customscript', get_template_directory_uri(). '/js/awesome.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

// Initializing the theme
function awesome_theme_setup(){
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('aside', 'image', 'video'));
	add_theme_support('menus');
	add_theme_support('html5', array('search-form'));
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

	//Exclude pages from WordPress Search
	if (!is_admin()) {
		function wpb_search_filter($query) {
			if ($query->is_search) {
				$query->set('post_type', 'post');
			}
			return $query;
		}
		add_filter('pre_get_posts','wpb_search_filter');
	}

	// Don't add the meta name generator which is WPVersion for security purposes
	add_filter('the_generator', function(){return '';});

	// Remove Query Strings from Static Resources
	function _remove_script_version( $src ){
		$parts = explode( '?ver', $src );
		return $parts[0];
	}
	add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
}
add_action('after_setup_theme', 'awesome_theme_setup');

// Custom widget
function awesome_widget_setup(){
	register_sidebar([
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s"',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
	]);
}
add_action('widgets_init','awesome_widget_setup');

// Bootstrap walker
require_once get_template_directory() . './inc/class-wp-bootstrap-navwalker.php';

// Pagination Helper
require_once get_template_directory() . './inc/pagination.php';