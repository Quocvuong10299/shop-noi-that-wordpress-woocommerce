<?php
/**
 * maker functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maker
 */

//support theme woocommerce
function my_custom_wc_theme_support() {

    add_theme_support( 'woocommerce' );

    add_theme_support( 'wc-product-gallery-lightbox' );

    add_theme_support( 'wc-product-gallery-zoom' );

    add_theme_support( 'wc-product-gallery-slider' );

}
add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );
define('WOOCOMMERCE_USE_CSS', false);

add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'maker_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function maker_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on maker, use a find and replace
		 * to change 'maker' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'maker', get_template_directory() . '/languages' );

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

		//support formats post: video, image, link,...
        add_theme_support('post-formats', array(
            'video',
            'image',
            'link',
            'status',
            'quote',
            'gallery',
            'audio'
        ));
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'maker' ),
                //nhan vao 1id va 1 ten domain
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
				'maker_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'maker_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maker_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'maker_content_width', 640 );
}
add_action( 'after_setup_theme', 'maker_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maker_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'maker' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'maker' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s single-sidebar mb-40">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="sidebar-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'maker_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function maker_scripts() {
	wp_enqueue_style( 'maker-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'maker-style', 'rtl', 'replace' );

	wp_enqueue_script( 'maker-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'maker_scripts' );

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

//support svg
function svg_support($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'svg_support');

//add bootstrap
function theme_add_css_js() {
    wp_register_style('bootstrap-style', get_template_directory_uri() . '/vendor/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-style');
    wp_register_style('slick-css', get_template_directory_uri() . '/lib/slick/slick.css');
    wp_enqueue_style('slick-css');
    wp_register_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
    wp_enqueue_style('font-awesome-css');
    wp_register_style('stroke-7-css', 'https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css');
    wp_enqueue_style('stroke-7-css');
    wp_register_style('style_scss', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style_scss');
    wp_register_style('font_style', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:100,100i,300,300i,400,400i,500,500i,700&display=swap');
    wp_enqueue_style('font_style');


    wp_register_script('jquery-321',get_template_directory_uri() . '/lib/jquery-2.1.4.js',array(), false, true);
    wp_enqueue_script('jquery-321');
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('bootstrap-js');
    wp_register_script('slick-js', get_template_directory_uri() . '/lib/slick/slick.min.js', array(), false, true);
    wp_enqueue_script('slick-js');
    wp_register_script('jquery_ui-js', get_template_directory_uri() . '/lib/jquery-ui.min.js', array(), false, true);
    wp_enqueue_script('jquery_ui-js');
    wp_register_script('app-frontend', get_template_directory_uri() . '/js/app.js', array(), false, true);
    wp_enqueue_script('app-frontend');

}
add_action('wp_enqueue_scripts', 'theme_add_css_js');

//add slick plugin in home template
add_action( 'wp_enqueue_scripts', 'addSlick');
function addSlick()
{
    if ( is_page('home') )
    {
//        wp_register_style('slick-css', get_template_directory_uri() . '/css/slick.css');
//        wp_enqueue_style('slick-css');
//        wp_register_style('slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css');
//        wp_enqueue_style('slick-theme-css');

//        wp_register_script('slick-slider', get_template_directory_uri() . '/js/slick.min.js', array(), false, true);
//        wp_enqueue_script('slick-slider');
    }
}

/*add class in list menu */
function add_menu_list_item_class($classes, $item, $args) {
    if($args->list_item_class) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

/*Adding class to link menu item - a tag */
function add_menu_link_class( $atts, $item, $args ) {
    if($args->link_class) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

/*remove admin bar when not admin*/
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');

//css current menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'current-active';
    }
    return $classes;
}

function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a class="text-hover" href="'. get_permalink($post->ID) . '"> xem thêm </a>...';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );

remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
add_action('woocommerce_shop_loop_item_title', 'soChangeProductsTitle', 10 );
function soChangeProductsTitle() {
    echo '<h4 class="product__item--title text-center ' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h4>';
}

function show_percent_sale($unit_price, $promotion_price){
    $sale = ($promotion_price*100)/$unit_price;
    $percent = 100 - $sale;
    return $percent;
}