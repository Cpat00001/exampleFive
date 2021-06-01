<?php 
// add dynamically styling and javascript scrips to page
function add_theme_scripts(){
    // styling css
    wp_enqueue_style('styling1.css', get_stylesheet_directory_uri() . './css/styling1.css',array(), '1.0','all');
    //add javascript file
    wp_enqueue_script('script_one.js', get_template_directory_uri() . './js/script_one.js',array(),1.0,true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// register menu
function register_my_menus(){
    register_nav_menus(
        array(
            'header-menu' => _('Header Menu'),
            'menu_class' => 'menu_class_xxx',

        )
        );
}
add_action('init','register_my_menus');


?>