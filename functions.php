<?php
//* ---------------------------------Theme Supports--------------------------------------------
add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-logo', );

add_theme_support( 'menus' );

add_theme_support( 'title-tag' );

//* ---------------------------------Image Sizes--------------------------------------------
add_image_size( 'side-image', 600, 400, false );

//* ---------------------------------Register Menus--------------------------------------------
register_nav_menu( 'primary', 'Primary' );

//* ---------------------------------Load CSS--------------------------------------------

function load_styles() {
    wp_enqueue_style( 'settings', get_template_directory_uri() .
        '/css/settings.css' );
    wp_enqueue_style( 'reset', get_template_directory_uri() .
        '/css/reset.css' );
    wp_enqueue_style( 'wordpress', get_template_directory_uri() .
        '/css/wordpress.css' );
    wp_enqueue_style( 'animation', get_template_directory_uri() .
        '/css/animation.css' );
    wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() .
        '/css/magnific-popup.css' );
    wp_enqueue_style( 'ui-custom', get_template_directory_uri() .
        '/css/ui-custom.css' );
    wp_enqueue_style( 'mediaelementplayer-legacy',
        get_template_directory_uri() .
        '/css/mediaelementplayer-legacy.min.css' );
    wp_enqueue_style( 'flexslider', get_template_directory_uri() .
        '/css/flexslider.css' );
    wp_enqueue_style( 'tooltipster', get_template_directory_uri() .
        '/css/tooltipster.css' );
    wp_enqueue_style( 'odometer-theme-minimal', get_template_directory_uri() .
        '/css/odometer-theme-minimal.css' );
    wp_enqueue_style( 'hw-parallax', get_template_directory_uri() .
        '/css/hw-parallax.css' );
    wp_enqueue_style( 'screen', get_template_directory_uri() .
        '/css/screen.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() .
        '/css/font-awesome.min.css' );

    wp_enqueue_style( 'kirki', get_template_directory_uri() .
        '/css/kirki-styles.css' );
    wp_enqueue_style( 'grid', get_template_directory_uri() .
        '/css/grid.css' );
    wp_enqueue_style( 'datepicker', get_template_directory_uri() .
        '/css/datepicker.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() .
        '/css/style.css' );
    wp_enqueue_style( 'leftmenu', get_template_directory_uri() .
        '/css/leftmenu.css' );
}

add_action( 'wp_enqueue_scripts', 'load_styles' );

//* ---------------------------------Load Js--------------------------------------------
function load_js() {
    // wp_deregister_script( 'jquery' );
    // wp_register_script( 'jquery', get_template_directory_uri() .
    //     '/js/jquery.js', [], 1, 1, 1 );
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'jquery-migrate', get_template_directory_uri() .
        '/js/jquery-migrate.min.js', [], 1, 1, 1 );
    wp_enqueue_script( 'jquery-migrate' );

    wp_register_script( 'tools', get_template_directory_uri() .
        '/js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'
        , [
        ], 1, 1, 1 );
    wp_enqueue_script( 'tools' );
    wp_register_script( 'revolution', get_template_directory_uri() .

  '/js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js',
        [
        ],
        1
        , 1, 1 );
    wp_enqueue_script( 'revolution' );

    wp_register_script( 'slideanims', get_template_directory_uri() .

'/js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'slideanims' );

    wp_register_script( 'layeranimation', get_template_directory_uri() .

'/js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'layeranimation' );

    wp_register_script( 'kenburn', get_template_directory_uri() .

'/js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'kenburn' );

    wp_register_script( 'navigation', get_template_directory_uri() .

'/js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'navigation' );

    wp_register_script( 'parallalx', get_template_directory_uri() .

'/js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'parallalx' );

    wp_register_script( 'actions', get_template_directory_uri() .

'/js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'actions' );

    wp_register_script( 'video', get_template_directory_uri() .

'/js/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'video' );

    wp_register_script( 'blockUI', get_template_directory_uri() .

        '/js/plugins/jquery.blockUI.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'blockUI' );
    wp_register_script( 'cookie', get_template_directory_uri() .

        '/js/plugins/js.cookie.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'cookie' );

    wp_register_script( 'popup', get_template_directory_uri() .

        '/js/plugins/jquery.magnific-popup.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'popup' );

    wp_register_script( 'easing', get_template_directory_uri() .

        '/js/plugins/jquery.easing.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'easing' );

    wp_register_script( 'waypoints', get_template_directory_uri() .

        '/js/plugins/waypoints.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'waypoints' );

    wp_register_script( 'isotope', get_template_directory_uri() .

        '/js/plugins/jquery.isotope.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'isotope' );

    wp_register_script( 'masory', get_template_directory_uri() .

        '/js/plugins/jquery.masory.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'masory' );

    wp_register_script( 'tooltipster', get_template_directory_uri() .

        '/js/plugins/jquery.tooltipster.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'tooltipster' );

    wp_register_script( 'hw-parallax', get_template_directory_uri() .

        '/js/plugins/hw-parallax.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'hw-parallax' );

    wp_register_script( 'stellar', get_template_directory_uri() .

        '/js/plugins/jquery.stellar.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'stellar' );

    wp_register_script( 'resizeimage', get_template_directory_uri() .

        '/js/plugins/jquery.resizeimagetoparent.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'resizeimage' );

    wp_register_script( 'custom-plugins', get_template_directory_uri() .

        '/js/plugins/custom_plugins.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'custom-plugins' );

    wp_register_script( 'custom', get_template_directory_uri() .

        '/js/plugins/custom.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'custom' );

    wp_register_script( 'core', get_template_directory_uri() .

        '/js/plugins/core.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'core' );

    wp_register_script( 'datepicker', get_template_directory_uri() .

        '/js/plugins/datepicker.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'datepicker' );

    wp_register_script( 'custom-date', get_template_directory_uri() .

        '/js/plugins/custom-date.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'custom-date' );

    wp_register_script( 'timepicker', get_template_directory_uri() .

        '/js/plugins/jquery.timepicker.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'timepicker' );

    wp_register_script( 'custom-time', get_template_directory_uri() .

        '/js/plugins/custom-time.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'custom-time' );

    wp_register_script( 'flexslider', get_template_directory_uri() .

        '/js/plugins/jquery.flexslider-min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'flexslider' );

    wp_register_script( 'validate', get_template_directory_uri() .

        '/js/plugins/jquery.validate.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'validate' );

    wp_register_script( 'custom-custom_onepage', get_template_directory_uri() .

        '/js/plugins/custom_onepage.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'custom-custom_onepage' );

    wp_register_script( 'googleapi',

'https://maps.googleapis.com/maps/api/js?key=AIzaSyBCmVhK5ZjYRjzAe-e9ZKS1mA3NBPuViwQ'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'googleapi' );

    wp_register_script( 'simple-gmaps', get_template_directory_uri() .

        '/js/plugins/jquery.simplegmaps.min.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'simple-gmaps' );

    wp_register_script( 'script-map', get_template_directory_uri() .

        '/js/plugins/script-map.js'
        , [], 1, 1, 1 );
    wp_enqueue_script( 'script-map' );

}

add_action( 'wp_enqueue_scripts', 'load_js' );