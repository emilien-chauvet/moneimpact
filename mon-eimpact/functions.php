<?php
// Types de publication et taxonomies
require_once get_template_directory() . '/inc/post-types.php';


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


// Ajouter les différents scripts/css
function moneimpact_register_assets() {

    // Déclarer jQuery
    wp_enqueue_script('jquery' );

    // Déclarer le JS
	  wp_enqueue_script(
        'moneimpact-script',
        get_template_directory_uri() . '/script.js',
        array( 'jquery' ),
        '1.0',
        true
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style(
        'moneimpact',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style(
        'moneimpact-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'moneimpact_register_assets' );


// Ajouter de la fonctionnalité des menus header/footer
register_nav_menus( array(
	'top_menu' => 'Menu haut de page',
	'bottom_menu' => 'Menu bas de page',
) );


// Ajouter personnalisation de l'espace login
function moneimpact_login() {
	wp_enqueue_style(
        'custom-login',
        get_template_directory_uri() . '/assets/css/custom-login.css',
        array( 'login' )
    );
}
add_action( 'login_enqueue_scripts', 'moneimpact_login' );