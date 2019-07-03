<?php


function navbar_color($have_slide = true) {
    echo $have_slide ? "#FFF" : "#000";
    die();
}

function ifx_markets_resources() {
    $current_lib = "/wp-content/themes/first-mean/lib";
    
    // wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Merriweather|Roboto+Condensed|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap');
    // wp_enqueue_style('fontawesome-all', "$current_lib/css/all.min.css");
    // wp_enqueue_style('slick', "$current_lib/slick/slick.css");
    // wp_enqueue_style('slick-theme', "$current_lib/slick/slick-theme.css");
    // wp_enqueue_style('animate', "$current_lib/css/animate.min.css");
    // wp_enqueue_style('ext-style', "$current_lib/css/style.css");
    wp_enqueue_style('style', get_stylesheet_uri(), null, microtime());

    // wp_enqueue_script('jquery-slim', "$current_lib/js/jquery-3.3.1.slim.min.js", [], true, false);
    // wp_enqueue_script('popper', "$current_lib/js/popper.min.js", [], true, true);
    // wp_enqueue_script('bootstrap', "$current_lib/js/bootstrap.min.js", [], true, true);
    // wp_enqueue_script('fontawesome-js-all', "$current_lib/js/all.min.js", [], true, true);
    // wp_enqueue_script('jquery-1.11.1', "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", [], true, true);
    // wp_enqueue_script('bootstrap-3', "$current_lib/js/bootstrap-3.min.js", [], true, true);
    // wp_enqueue_script('bootstrap-dropdownhover', "$current_lib/js/bootstrap-dropdownhover.min.js", [], true, true);
    // wp_enqueue_script('jquery-1.11.0', "//code.jquery.com/jquery-1.11.0.min.js", [], true, true);
    // wp_enqueue_script('jquery-migrate', "//code.jquery.com/jquery-migrate-1.2.1.min.js", [], true, true);
    // wp_enqueue_script('slick-js', "$current_lib/slick/slick.min.js", [], true, true);
    // wp_enqueue_script('jquery-marquee', "$current_lib/js/jquery.marquee.min.js", [], true, true);
    // wp_enqueue_script('jquery-pause', "$current_lib/js/jquery.pause.min.js", [], true, true);
    // wp_enqueue_script('main-script', "$current_lib/js/script.js", [], true, true);
}

add_action('wp_enqueue_scripts', 'ifx_markets_resources');

function ifx_markets_features() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'small-thumbnail', 180, 120, true );

    $defaults = array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    );

    add_theme_support( 'custom-logo', $defaults );
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function register_primary_menu() {
    register_nav_menus( 
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' ),
        )   
    );
}

function ifx_markets_init() {
    add_theme_support( 'menus' );
    register_primary_menu();
    
    ifx_markets_post_product_type();
    ifx_markets_post_service_type();
    ifx_markets_post_news_updates_type();
    ifx_markets_post_recruitment_type();
    ifx_markets_post_event_type();
    ifx_markets_post_annoucement_type();
    ifx_markets_post_slider_type();
    
}

function ifx_markets_post_service_type() {
    register_post_type( 'service', 
        array(
            'rewrite' => array('slug' => 'services'),
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service',
                'add_new_item'  => 'Add New Service',
                'edit_item' => 'Edit Service',
            ),
            'menu_icon' => 'dashicons-feedback',
            'public'    => true,
            'has_archive'   => true,
            'supports'  => array(
                'title', 'thumbnail', 'editor', 'excerpt'
            ),
            'show_in_rest' => true
        )
    );
}

function ifx_markets_post_slider_type() {
    register_post_type( 'slider', 
        array(
            'rewrite' => array('slug' => '/'),
            'labels' => array(
                'name' => 'Sliders',
                'singular_name' => 'slider',
                'add_new_item'  => 'Add New Slider',
                'edit_item' => 'Edit Slider',
            ),
            'menu_icon' => 'dashicons-format-gallery',
            'public'    => true,
            'has_archive'   => true,
            'supports'  => array(
                'title', 'thumbnail', 'editor', 'excerpt'
            ),
            'show_in_rest' => true // enable new visual editor of wordpress
        )
    );
}

function ifx_markets_post_news_updates_type() {
    register_post_type( 'news', 
        array(
            'rewrite' => array('slug' => 'news'),
            'labels' => array(
                'name' => 'News & Updates',
                'singular_name' => 'News & Update',
                'add_new_item'  => 'Add New News',
                'edit_item' => 'Edit News',
            ),
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'public'    => true,
            'has_archive'   => true,
            'supports'  => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'category',
            ),
            'show_in_rest' => true // enable new visual editor of wordpress
        )
    );
}

function ifx_markets_post_product_type(){
    register_post_type('products',
        array(
            'rewrite' => array ('slug' => 'products'),
            'labels' => array(
                'name' => 'Products',
                'singular_name' => 'Product',
                'add_new_item' => 'Add New Products',
                'edit_item' => 'Edit Products',
            ),

            'menu_icon' => 'dashicons-cart',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title','thumbnail','editor','excerpt','category',
            ),
            'show_in_rest' => true
        )
    );
}

function ifx_markets_post_recruitment_type(){
    
    register_post_type('recruitments',
        array(
            'rewrite' => array('slug'=>'recruitments'),
            'labels'=> array(
                'name' => 'Recruitments',
                'singular_name' => 'Recruitment',
                'add_new_item' => 'Add New Recruiments',
                'edit_item' => 'Edit Recruitment'
            ),

            'menu_icon' => 'dashicons-groups',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title','editor','excerpt','category','custom-fields'
            ),
            
        )
    );
}

function ifx_markets_post_event_type(){

    register_post_type('events',
        array(
            'rewrite' => array('slug' => 'events'),
            'labels' => array(
                'name' => 'Events',
                'singular_name' => 'Event',
                'add_new_item' => 'Add New Events',
                'edit_item' => 'Edit Event'   
            ),

            'menu_icon' => 'dashicons-star-filled',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title','editor','excerpt','category','thumbnail'
            ),
            'show_in_rest' => true
        )
    );
}

function ifx_markets_post_annoucement_type(){
    register_post_type('announcements',
        array('rewrite' => array('slug' => 'announcements'),
            'labels' => array(
                'name' => 'Announcements',
                'singular_name' => 'Announcement',
                'add_new_item' => 'Add New Announcements',
                'edit_item' => 'Edit Anncouncements'
            ),

            'menu_icon' => 'dashicons-megaphone',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title','editor','excerpt','category'
            ),
            'show_in_rest' => true
        )
    );
}

add_action( 'init', 'ifx_markets_init' );
add_action( 'after_setup_theme', 'ifx_markets_features' );



                


