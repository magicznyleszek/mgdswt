<?php

/* CPT + ACF */
@include('cpt.php');
@include('acf.php');

/* plik js i css admina */
function custom_admin_css() {
    $url = get_option('siteurl');
    $url = get_bloginfo('stylesheet_directory') . '/admin.css';
    echo '<link rel="stylesheet" href="'.$url.'" type="text/css" media="all" />';
}
add_action('admin_head', 'custom_admin_css');
function custom_admin_js() {
    $url = get_option('siteurl');
    $url = get_bloginfo('stylesheet_directory') . '/js/wp-admin.js';
    echo '<script type="text/javascript" src="'. $url . '"></script>';
}
add_action('admin_footer', 'custom_admin_js');

/* menu */
function register_my_menus() {
    register_nav_menus(
        array( 'glowne-menu' => __( 'Główne menu' ) )
    );
}
add_action( 'init', 'register_my_menus' );

/* HTML5 forms */
function html5_forms() {
    add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
add_action( 'after_setup_theme', 'html5_forms' );

/* SEO na dole strony edycji */
add_filter( 'wpseo_metabox_prio', function() { return 'low'; } );

/* Rejestrowanie sidebaru */
// register_sidebar(array(
//   'name' => 'Wybór języków w nagłówku',
//   'id' => 'header_sidebar',
//   'before_widget' => '',
//   'after_widget' => ''
// ));

/* Dodanie obsługi języka */
// add_action('after_setup_theme', 'bp_theme_setup');
// function bp_theme_setup(){
//     load_theme_textdomain('bp', get_template_directory() . '/languages');
// }

/* Funkcja do pobierania sluga */
// function the_slug(){
//     $slug = basename(get_permalink());
//     do_action('before_slug', $slug);
//     $slug = apply_filters('slug_filter', $slug);
//     echo $slug;
//     do_action('after_slug', $slug);
// }


@include('timberContext.php');

?>