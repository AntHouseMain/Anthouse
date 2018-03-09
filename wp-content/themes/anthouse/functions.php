<?php
/**
 * anthouse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package anthouse
 */


require_once get_template_directory() . '/inc/acf-front-page.php';
require_once get_template_directory() . '/inc/acf-our-team.php';
require_once get_template_directory() . '/inc/acf-projects.php';
require_once get_template_directory() . '/inc/acf-career.php';
require_once get_template_directory() . '/inc/breadcrumb.php';
require_once get_template_directory() . '/inc/pagination-projects.php';
require_once get_template_directory() . '/inc/pagination-news.php';
require_once get_template_directory() . '/inc/pagination-job.php';


if (!function_exists('anthouse_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function anthouse_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on anthouse, use a find and replace
         * to change 'anthouse' to the name of your theme in all the template files.
         */
        load_theme_textdomain('anthouse', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        add_image_size('teammate_image', 220, 220, true);


        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'anthouse'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('anthouse_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        require_once(get_template_directory() . '/inc/custom-post-type-news.php');
        require_once(get_template_directory() . '/inc/custom-post-type-projects.php');
        require_once(get_template_directory() . '/inc/custom-post-type-career.php');

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'anthouse_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anthouse_content_width()
{
    $GLOBALS['content_width'] = apply_filters('anthouse_content_width', 640);
}

add_action('after_setup_theme', 'anthouse_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anthouse_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'anthouse'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'anthouse'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'anthouse_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function anthouse_scripts()
{
    wp_enqueue_style('anthouse-style', get_stylesheet_uri());

    wp_enqueue_style('anthouse-Raleway-font-style', 'https://fonts.googleapis.com/css?family=Raleway:200,400,500,600,700,900');

    wp_enqueue_style('anthouse-Roboto-font-style', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic');

    // wp_register_style('uikit-css', get_template_directory_uri() . '/css/uikit.min.css');
    // wp_enqueue_style('uikit-css');
    wp_register_style('uikit-css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css');
    wp_enqueue_style('uikit-css');

    wp_register_style('width-ex-css', get_template_directory_uri() . '/css/width-ex.min.css');
    wp_enqueue_style('width-ex-css');

    wp_register_style('main-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('main-css');

    wp_register_style('slick-css', 'http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
    wp_enqueue_style('slick-css');
    // wp_enqueue_style( 'mb-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );


    wp_enqueue_script('html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js');
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');

    wp_enqueue_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
    wp_script_add_data('respond', 'conditional', 'lt IE 9');

    wp_enqueue_script('anthouse-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', null, true);

    wp_enqueue_script('anthouse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('anthouse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    // wp_register_script('uikit-js', get_template_directory_uri() . '/js/uikit.min.js', array ('jquery'), null, true);
    // wp_enqueue_script('uikit-js');
    wp_register_script('uikit-js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js', array('jquery'), null, true);
    wp_enqueue_script('uikit-js');
    // wp_register_script('uikit-icons', get_template_directory_uri() . '/js/uikit-icons.min.js', array ('jquery'), null, true);
    // wp_enqueue_script('uikit-icons');

    wp_register_script('uikit-icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js', array('jquery'), null, true);
    wp_enqueue_script('uikit-icons');

    wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('main-js');

    wp_register_script('slick-js', 'http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick-js');


    wp_localize_script('main-js', 'MAIN',
        array(
            'ajax' => admin_url('admin-ajax.php')
        )
    );

    // wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'anthouse_scripts');


function anthouse_loadmore()
{
    // if ( is_page ( array('news', 'projects', 19) ) ) {
    wp_register_script('true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery'), null, true);
    wp_enqueue_script('true_loadmore');
    // }
}

add_action('wp_enqueue_scripts', 'anthouse_loadmore');
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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
function the_truncated_post($symbol_amount)
{
    $filtered = strip_tags(preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))));
    echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}
