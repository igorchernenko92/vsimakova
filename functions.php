<?php
/**
 * vsimakova functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vsimakova
 */

// OFF NEW REDACTOR

add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_block_editor_for_page', '__return_false'); 

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
function vsimakova_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on vsimakova, use a find and replace
		* to change 'vsimakova' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'vsimakova', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'vsimakova' ),
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
			'vsimakova_custom_background_args',
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
add_action( 'after_setup_theme', 'vsimakova_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vsimakova_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vsimakova_content_width', 640 );
}
add_action( 'after_setup_theme', 'vsimakova_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vsimakova_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vsimakova' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vsimakova' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vsimakova_widgets_init' );

wp_enqueue_script('jquery');

/**
 * Enqueue scripts and styles.
 */
function vsimakova_scripts() {
	wp_enqueue_style( 'vsimakova-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vsimakova-style', 'rtl', 'replace' );
  
    wp_enqueue_style('min.css', get_template_directory_uri() . '/css/min.css?v='. rand(1000, 9999) );
//    wp_enqueue_style('min.css','https://fobiya.github.io/trash/new1/css/min.css?v='. rand(1000, 9999) );
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');
  

	wp_enqueue_script( 'vsimakova-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main.min.js', get_template_directory_uri() . '/js/main.min.js', array(), _S_VERSION, true );
  
  wp_enqueue_script('fansy-box', get_template_directory_uri() . '/js/jquery.fancybox.js',  array(), '1.0', true );
  

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vsimakova_scripts' );

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





function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');





/* plz no comment */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page( array(
		'page_title'    => __('Theme settings'),
		'menu_title'    => __('Theme settings'),
		'menu_slug'     => 'general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

}




// code LINKS
function code_config($atts)
{
	switch ($atts['var']) {
// Site URL
		case "url_site":
		   //add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			echo get_site_url();
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// address
		case "time_work":
		   //add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('time_work', 'options');
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// address
		case "address":
		   // add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
            
            $address_phone = get_field('code_address', 'options'); 
 
            if( $address_phone ): 
                  $address_phone_url = $address_phone['url'];
                  $address_phone_title = $address_phone['title'];
                  $address_phone_target = $address_phone['target'] ? $address_phone['target'] : '_self'; 

               return ' <a href="' .  esc_url( $address_phone_url ) . '"   target="' . esc_attr( $address_phone_target ) . '">' .   esc_html( $address_phone_title ) . '</a>';
            endif; 
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// email
		case "email":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('code_email', 'options');
			///remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
		case "email_link":
// email_link
			//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			$registration_page = get_field('registration_page', 'options');
			if (!empty($atts['title'])) {
				$email_tittle = __($atts['title'], 'code');
				return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . $email_tittle . '</a>';
			} else {
				return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . get_field('code_email', 'options') . '</a>';
			}
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;

// tel
		case "tel":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
            
            
            
			$code_phone = get_field('code_phone', 'options');
			$title_phone = get_field('title_phone', 'options');
			if (!empty($atts['title'])) {
				$phone_tittle = __($atts['title'], 'code');
				return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $phone_tittle . '</a>';
			} else {
				return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $title_phone . '</a>';
			}
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// Phone set
		case "phone_link":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);

            $set_phone = get_field('set_phone', 'options'); 

            if( $set_phone ): 
//                  $set_phone_url = $set_phone['url'];
//                  $set_phone_title = $set_phone['title'];
//                  $set_phone_target = $set_phone['target'] ? $set_phone_link['target'] : '_self'; 

               return ' <a href="tel:' .  preg_replace('![^0-9+]+!', '', $set_phone)  . '">' .    $set_phone  . '</a>';
            endif; 
           
			// remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
		case "next_phone_link":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);

            $set_phone = get_field('next_set_phone', 'options'); 
 
            if( $set_phone ): 
//                  $set_phone_url = $set_phone['url'];
//                  $set_phone_title = $set_phone['title'];
//                  $set_phone_target = $set_phone['target'] ? $set_phone_link['target'] : '_self'; 

              return ' <a href="tel:' .  preg_replace('![^0-9+]+!', '', $set_phone)  . '">' .    $set_phone  . '</a>';
            endif; 
           
			// remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;

	}
}
  add_shortcode('code', 'code_config');
// END code LINKS

// DO_SHORTCODE
add_filter('wpcf7_form_elements', 'do_shortcode');
add_filter('acf/format_value/type=wysiwyg', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value/type=email', 'do_shortcode');
add_filter('acf/format_value/type=url', 'do_shortcode');
add_filter('acf/format_value/type=number', 'do_shortcode');
add_filter('acf/format_value/type=image', 'do_shortcode');
//add_filter('acf/format_value/type=link', 'do_shortcode');
// END DO_SHORTCODE








/************************************************
***WMPL SHORTCODE[wpml_custom_lang] only flag****
*************************************************/
function wpml_shortcode_lang() {
 
$languages = icl_get_languages('skip_missing=0');
  
//  print_r($languages);

  if( 1 < count( $languages ) ) {
    $s = "";
    foreach( (array)$languages as $language ) {
      $s .= '<a href="' . $language['url'] . '"> '. $language['translated_name'] .' </a> ';
    }
  }

  return $s;
}
add_shortcode( 'wpml_custom_lang', 'wpml_shortcode_lang' );


add_image_size( 'home__1',  1004, 560, true );
add_image_size( 'facilitator__post', 1012, 722, true );
add_image_size( 'about', 1074, 1164, true );


add_image_size( 'how_to_change_1', 722, 558, true );
add_image_size( 'how_to_change_2', 1122, 544, true );

add_image_size( 'single__top', 2340, 732, true );
add_image_size( 'single__last', 754, 508, true );

add_image_size( 'blog__top', 1348, 732, true );
add_image_size( 'blog__img', 754, 508, true );

add_image_size( 'feedback__1', 1546, 824, true );
add_image_size( 'feedback__2', 754, 824, true );

add_image_size( 'pbl_school_top', 2340, 824, true );

add_image_size( 'how_to_hange_top', 722, 558, true );
add_image_size( 'how_to_hange_bottom', 1150, 558, true );

add_image_size( 'facilitator', 2340, 1140, true );

add_image_size( 'non_profit_top', 2340, 936, true );



add_image_size( 'images_1170_374', 1170, 374, true );
add_image_size( '1mages_974_370', 974, 370, true );

add_image_size( 'about_537_582', 537, 582, true );

add_image_size( 'home', 475, 293, true );







//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');
