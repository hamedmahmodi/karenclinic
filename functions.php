<?php
/**
 * karenclinic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package karenclinic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function karenclinic_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on karenclinic, use a find and replace
		* to change 'karenclinic' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'karenclinic', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'karenclinic' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'karenclinic_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'karenclinic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function karenclinic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'karenclinic_content_width', 640 );
}
add_action( 'after_setup_theme', 'karenclinic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function karenclinic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'karenclinic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'karenclinic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'karenclinic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function karenclinic_scripts() {
	wp_enqueue_style( 'karenclinic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'additional-style', get_template_directory_uri().'/additional.css', array(), _S_VERSION );
	wp_enqueue_style( 'layout-style', get_template_directory_uri().'/layout.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/swiper/swiper-bundle.min.css', array(), _S_VERSION );
	wp_style_add_data( 'karenclinic-style', 'rtl', 'replace' );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'karenclinic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'karenclinic-home', get_template_directory_uri() . '/js/home.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'karenclinic-swiper', get_template_directory_uri() . '/js/swiper.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'karenclinic_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function get_post_primary_category(){
	$currentID = get_the_ID();
	  $category = get_the_category();
  
	  // Get primary (Yoast) term if it is set
	  $category_display = '';
	  $category_slug = '';
  
	  if ( class_exists('WPSEO_Primary_Term') ) {
  
		// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
		$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
		$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
		$term = get_term( $wpseo_primary_term );
  
		if ( is_wp_error( $term ) ) {
  
		  // Default to first category (not Yoast) if an error is returned
		  $category_display = $category[0]->name;
		  $category_slug = $category[0]->slug;
  
		} else {
  
		  // Check if category has parent
		  $category_id = $term->term_id;
		  $category_term = get_category($category_id);
  
		  // if primary category is a child
		  if( $category_term->category_parent > 0 ) {
  
			// Get parent category object
			$parent = $category_term->parent;
			$parent_object = get_category($parent);
  
			// Set parent category variables
			$category_display = $parent_object->name;
			$category_slug = $parent_object->slug;
  
		  // if primary cateogry is a parent
		  } else {
  
			// Yoast Primary category
			$category_display = $term->name;
			$category_slug = $term->slug;
  
		  }
  
		}
	  } else {
  
		// Default, display the first category in WP's list of assigned categories
		$category_display = $category[0]->name;
		$category_slug = $category[0]->slug;
  
	  }
	  echo '<a href="'.get_home_url().'/category/'.$category_slug.'" class="archiveMainCategory">'.$category_display.'</a>';
  }
  function bbloomer_shop_product_short_description() {
	the_excerpt();
  }
  function my_excerpt_length($length){
	return 20;
  }
  add_filter('excerpt_length', 'my_excerpt_length');
  
  function new_excerpt_more( $more ) {
	return ' ... ';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

  function filter_wpseo_breadcrumb_separator($this_options_breadcrumbs_sep) {
    return '<svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 330 330" fill="#ddcd76" xml:space="preserve" transform="rotate(90)"><path d="M325.607 79.393c-5.857-5.857-15.355-5.858-21.213.001l-139.39 139.393L25.607 79.393c-5.857-5.857-15.355-5.858-21.213.001-5.858 5.858-5.858 15.355 0 21.213l150.004 150a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.859-5.857 5.859-15.355.001-21.213z"/></svg>';
};

// add the filter
add_filter('wpseo_breadcrumb_separator', 'filter_wpseo_breadcrumb_separator', 10, 1);



// function get_post_views($postID){
//     $count_key = 'post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if($count==''){
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//         return "0 ";
//     }
//     return $count.' ';
// }

// function set_post_views($postID) {
//     $count_key = 'post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if($count==''){
//         $count = 0;
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//     }else{
//         $count++;
//         update_post_meta($postID, $count_key, $count);
//     }
// }

function get_page_views($pageID) {
    $count_key = 'page_views_count';
    $count = get_post_meta($pageID, $count_key, true);
    
    if ($count == '') {
        delete_post_meta($pageID, $count_key);
        add_post_meta($pageID, $count_key, '0');
        return "0";
    }

    return $count . '';
}

function set_page_views($pageID) {
    $count_key = 'page_views_count';
    $count = get_post_meta($pageID, $count_key, true);
    
    if ($count == '') {
        $count = 0;
        delete_post_meta($pageID, $count_key);
        add_post_meta($pageID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($pageID, $count_key, $count);
    }
}

function track_page_views() {
    if (is_page()) {
        set_page_views(get_the_ID());
    }
}
add_action('template_redirect', 'track_page_views');


