<?php 

// add cookie check if user visited page in last 14days
$name = "Visited";
$value = "you have visited our website within last 14days";
// $time = time()+(60*60*24*14); tutaj pliki cookie ustawione na 14dni
// tutaj cookie ustawione na 3minuty dla celow testowych
$time = time()+(60*3);
$path = "/";
setcookie($name , $value , $time, $path);
// check if cookie isset
if(!isset($_COOKIE['Visited'])){
    echo "<h1>Cookie VISITED is set</h1>";
    // ustaw to cookie w else,kiedy to $cookie['visited'] !isset , jest nie ustaiwone
    //teraz testuje tutaj,nie musze resetowac cookies za kazdym razem
    echo "<div class='cookie_msg' id='cookie_msg_banner'>
            <h5>Używamy Ciasteczek 'Cookie'</h5>
            <p>Hej, fajnie,że nas odwiedzasz. <br>
            Dla celów optymalizacji strony,używamy plikow Cookie, korzystajac z tej strony decydujesz
            się na nasze pliki 'cookie'</p>
            <div id='cookie_ok' onclick='cookie_accepted()'>Akceptuje</div>
            </div>";
}else{
    echo "<h1>Fajnie,ze nas ponownie odzwiedzasz.</h1>";
}


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
        )
        );
}
add_action('init','register_my_menus');
// add post thumbnails
add_theme_support('post-thumbnails');
// set imagege sizes
function images_size(){
    add_image_size('page_image',1000 , 7500 );
    add_image_size('post_image', 300, 200 , true);
    add_image_size('archive_post_image', 300 , 300 , false);
    add_image_size('bigger_post_image', 400 , 300);
    add_image_size('single_post_image', 500,500);
}
add_action('after_setup_theme','images_size');

// widgets / sidebar
function create_sidebars(){
    register_sidebar(array(
        'name'  => __('Front_page_sidebar', 'theme_name'),
        'id'    => 'sidebar_1',
        'class' => 'front_page_sidebar_posts'
    ));
}
add_action('widgets_init','create_sidebars');


?>