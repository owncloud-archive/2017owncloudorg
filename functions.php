<?php

/**
 * Enqueue scripts and styles.
 */
function owncloud_scripts() {
    // Theme stylesheet.
    wp_enqueue_style( 'owncloud-style', get_stylesheet_uri() );

    wp_enqueue_style( 'owncloud-main', get_theme_file_uri( '/assets/css/main.min.css' ), array( 'owncloud-style' ), '1.0' );
    wp_enqueue_style( 'owncloud-style2', get_theme_file_uri( '/assets/css/styles.css' ), array( 'owncloud-style' ), '1.0' );
    wp_enqueue_style( 'owncloud-fa', get_theme_file_uri( '/assets/css/font-awesome.min.css' ), array( 'owncloud-style' ), '1.0' );
    if (is_front_page() ) {
        wp_enqueue_style('owncloud-home', get_theme_file_uri('/assets/css/home.css'), array('owncloud-style'), '1.0');
    }
    wp_enqueue_script( 'owncloud-js', get_theme_file_uri( '/assets/js/scripts.min.js' ), array( 'jquery' ) );


}
add_action( 'wp_enqueue_scripts', 'owncloud_scripts' );

function owncloud_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
     * If you're building a theme based on Twenty Seventeen, use a find and replace
     * to change 'twentyseventeen' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'owncloud' );

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

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'top'    => __( 'Top Menu', 'owncloud' ),
        'about' => __( 'About Links Menu', 'owncloud' ),
        'resources' => __( 'Resources Links Menu', 'owncloud' ),
        'interact' => __( 'Interact Links Menu', 'owncloud' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ) );

}
add_action( 'after_setup_theme', 'owncloud_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function owncloud_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'owncloud' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'owncloud' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'owncloud_widgets_init' );
