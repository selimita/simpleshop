<?php

// include_once("inc/customizer/kirki-installer.php");
// include_once("inc/customizer/customizer-main.php");
// Require Kirki File
require get_template_directory() . '/kirki/customize-kirki.php';

function simpleshop_setup() {
    // Load TextDomain OR Languages
    load_theme_textdomain( 'simpleshop', get_template_directory() . '/languages' );

    // Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Title Tag
    add_theme_support( 'title-tag' );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register Nav Menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'simpleshop' ),
    ) );

    // html5 Support
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'caption',
    ) );

    // Custom Background
    add_theme_support( 'custom-background', apply_filters( 'simpleshop_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

    // Selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // WooCommerce SUPPORT
    //add_theme_support( 'woocommerce' );

}
add_action( 'after_setup_theme', 'simpleshop_setup' );

// Add Editor Style
function simpleshop_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'simpleshop_add_editor_styles' );

// $GLOBALS Content Width
function simpleshop_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'simpleshop_content_width', 1170 );
}
add_action( 'after_setup_theme', 'simpleshop_content_width', 0 );

// Register Sidebar
function simpleshop_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'simpleshop' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'simpleshop' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'simpleshop_widgets_init' );

// Theme Assets Enqueue
function simpleshop_assets() {
    // Fonts Google
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900' );
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/vendor/bootstrap/css/bootstrap.min.css' ) );
    // Fontawesome CSS
    wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/vendor/font-awesome/css/font-awesome.min.css' ) );
    // Bicon CSS
    wp_enqueue_style( 'bicon-css', get_theme_file_uri( '/assets/vendor/bicon/css/bicon.css' ) );
    // Theme WooCommerce CSS
    wp_enqueue_style( 'simpleshop-woocommerce-css', get_theme_file_uri( '/assets/css/woocommerce.css' ), null, time() );
    // Theme WooCommerce Layouts CSS
    wp_enqueue_style( 'simpleshop-woocommerce-layouts-css', get_theme_file_uri( '/assets/css/woocommerce-layouts.css' ), null, time() );
    // Theme CSS
    wp_enqueue_style( 'simpleshop-theme-css', get_theme_file_uri( '/assets/css/main.css' ), null, time() );
    // ROOT Style CSS
    wp_enqueue_style( 'simpleshop-css', get_stylesheet_uri() );

    // Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/vendor/bootstrap/js/bootstrap.min.js' ), ['jquery'], 'default', true );
    // Poper JS
    wp_enqueue_script( 'popper-js', get_theme_file_uri( '/assets/vendor/popper.min.js' ), ['jquery'], 'default', true );
    // Theme JS
    wp_enqueue_script( 'simpleshop-js', get_theme_file_uri( '/assets/js/scripts.js' ), ['jquery'], time(), true );

// Comment Reply for BLOG > Singular
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'simpleshop_assets' );

// WooCommerce SubCategory Count HTML
function simpleshop_subcategory_count( $markup ) {
    if ( get_theme_mod( 'switch_setting_category_count' ) != 'on' ) {
        return '';
    }
    return $markup;
}
add_filter( 'woocommerce_subcategory_count_html', 'simpleshop_subcategory_count' );

// Markup Change WooCommerce Products
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// ADD > Add to Cart
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );

// Change add_to_cart Text
function text_to_icon( $text ) {
    return '<i class="fa fa-shopping-basket"></i>';
}
add_filter( 'woocommerce_product_add_to_cart_text', 'text_to_icon' );

// HTML Markup ADD Using HOOK & FUNCTION
function add_html_before_shop_loop_item() {
    echo '<div class="product-wrap">';
}
add_action( 'woocommerce_before_shop_loop_item', 'add_html_before_shop_loop_item' );

function add_html_before_shop_loop_item_title() {
    echo '</div><div class="woocommerce-product-title-wrap">';
}
add_action( 'woocommerce_before_shop_loop_item_title', 'add_html_before_shop_loop_item_title' );

// Change Title Heart Icon
function add_heart_icon() {
    echo '<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a></div>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'add_heart_icon' );

// remove resultCount & catalog
// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
// function div_in() {
//     echo "</div>";
// }
// add_action( 'woocommerce_before_shop_loop', 'div_in' );
/* add_action( 'woocommerce_before_shop_loop', function () {
?>
<div class="section-title">
<h2 class="title d-block text-left-sm"><?php the_title();?></h2>
<?php
}, 19 );

add_action( 'woocommerce_before_shop_loop', function () {
?>
</div>
<?php
}, 31 ); */

//remove_action( 'woocommerce_before_main_content', array( $GLOBALS['woocommerce']->structured_data, 'generate_website_data' ), 30 );