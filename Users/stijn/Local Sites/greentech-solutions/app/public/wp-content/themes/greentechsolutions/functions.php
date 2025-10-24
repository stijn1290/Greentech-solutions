<?php 
//In deze functie wordt het menu voor de header geregistreerd
function registreer_mijn_menu() {
    register_nav_menu('header-menu', __('Menu voor de header'));
    add_action('after_setup_theme', 'registreer_mijn_menu');
}

//In deze functie wordt een knop in de customizer toegevoegd om een logo te uploaden
function greentechSolutions_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'greentechSolutions_custom_logo_setup');
//In deze functie wordt ondersteuning voor uitgelichte afbeeldingen en een nieuwe afbeeldingsgrootte toegevoegd
add_theme_support('post-thumbnails');
add_image_size('extreme_small', 60, 60, true);
// In deze functie wordt FontAwesome ingeladen voor gebruik van iconen
function load_fontawesome() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css',
        array(),
        '6.6.0'
    );
}
add_action('wp_enqueue_scripts', 'load_fontawesome');
