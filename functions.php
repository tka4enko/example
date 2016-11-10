<?php
add_action( 'after_setup_theme', 'image_size_crop' );
function image_size_crop() {
//    add size crop
    add_image_size( 'images_xl_photo', 1200,800,true ); // (cropped)
    add_image_size( 'images_sm_photo', 640,480,array( 'center', 'center' ) ); // (cropped)
    add_image_size( 'images_xs_photo', 300,300,array( 'center', 'center' ) ); // (cropped)
}
function style_init(){
    //    init custom style
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css' );
    //    init custom js and  plugins
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"',array(),false,true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js' );
}
add_action('wp_enqueue_scripts','style_init');

register_nav_menus( array(
    'header_menu'   => 'Menu header',
    'footer_menu_1' => 'Menu footer 1',
    'footer_menu_2' => 'Menu footer 2',
    'footer_menu_3' => 'Menu footer 3',
));
//if use bootstrap navbar uncomment this
//require_once('parts/navwalker_bootstrap.php');
//if use bootstrap navbar uncomment this


include_once( plugin_dir_path( __FILE__ ) . 'plugins/acf/acf.php' );
function widgets_init() {
    register_sidebar( array(
        'name'          => __( 'SiteName Comment', 'example' ),
        'id'            => 'sidebar_comment',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'example' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgets_init' );