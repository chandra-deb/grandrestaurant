<?php



	
//* ---------------------------------Theme Supports--------------------------------------------
add_theme_support( 'post-thumbnails' ,array( 'post', 'page' ));

add_theme_support( 'custom-logo', );

add_theme_support( 'menus' );

add_theme_support( 'title-tag' );

add_theme_support( 'widgets' );


//* ---------------------------------Register  Widgets--------------------------------------------
register_sidebar(['name' =>'Sidebar', 'id' => 'sidebar']);

register_sidebar(['name' =>'Footer', 'id' => 'footer']);

//* ---------------------------------Image Sizes--------------------------------------------
add_image_size( 'tmb', 600, 400, false );

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




if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_604e323c84e3a',
	'title' => 'About',
	'fields' => array(
		array(
			'key' => 'field_604e324968b8c',
			'label' => 'Branches',
			'name' => 'branches',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_604e326668b8d',
					'label' => 'Branch Name',
					'name' => 'branch_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_604e327068b8e',
					'label' => 'Location',
					'name' => 'location',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_604e499847b0d',
					'label' => 'Map',
					'name' => 'map',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
		array(
			'key' => 'field_604e35ab4984c',
			'label' => 'Info with Image',
			'name' => 'info_with_image',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_604e35ca4984d',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_604e35fa4984e',
					'label' => 'Pre Title',
					'name' => 'pre_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_604e36054984f',
					'label' => 'Pre Paragraph',
					'name' => 'pre_paragraph',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_604e361a49850',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_604e410c86048',
					'label' => 'Main Content',
					'name' => 'main_content',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about-us.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_604a1e64e0b8b',
	'title' => 'Dishes',
	'fields' => array(
		array(
			'key' => 'field_604a1e831dd8b',
			'label' => 'Dish Types',
			'name' => 'dish_types',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_604a1ed91dd8c',
					'label' => 'Signature Dish',
					'name' => 'signature_dish',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_604a1f401dd8d',
					'label' => 'Main Course',
					'name' => 'main_course',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_604a1f581dd8e',
					'label' => 'Lunch Time',
					'name' => 'lunch_time',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_604a1f6d1dd8f',
					'label' => 'Lunch Sets',
					'name' => 'lunch_sets',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_604a1f841dd90',
					'label' => 'Featured Dish',
					'name' => 'featured_dish',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_604b83f901193',
					'label' => 'Starter Dish',
					'name' => 'starter_dish',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
			),
		),
		array(
			'key' => 'field_604a231a9b521',
			'label' => 'Dish Image',
			'name' => 'dish_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_604a1f841dd90',
						'operator' => '==',
						'value' => '1',
					),
				),
				array(
					array(
						'field' => 'field_604a1ed91dd8c',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_604a2b2116496',
			'label' => 'Price',
			'name' => 'price',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_604a2b5b16497',
			'label' => 'Starred',
			'name' => 'starred',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'dish',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_6048ce40b8e3d',
	'title' => 'Front Page',
	'fields' => array(
		array(
			'key' => 'field_6048ce501f3cb',
			'label' => 'Featured Quote',
			'name' => 'featured_quote',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_6048ce951f3cc',
					'label' => 'Quote',
					'name' => 'quote',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_6048cea01f3cd',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_6048ceaf1f3ce',
					'label' => 'Name',
					'name' => 'name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
		array(
			'key' => 'field_6048d2d136f19',
			'label' => 'Our Story',
			'name' => 'our_story',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_6048d34536f1b',
					'label' => 'Story',
					'name' => 'story',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_6048d2ef36f1a',
					'label' => 'Story Title',
					'name' => 'story_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_6048d36a36f1c',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6048d34536f1b',
								'operator' => '!=empty',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
		array(
			'key' => 'field_6049b3f80ab20',
			'label' => 'Our Restaurant',
			'name' => 'our_restaurant',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_6049b3f80ab21',
					'label' => 'Restaurant Story',
					'name' => 'restaurant_story',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_6049b3f80ab22',
					'label' => 'Story Title',
					'name' => 'story_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_6049b3f80ab23',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6049b3f80ab21',
								'operator' => '!=empty',
								'value' => '',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_6049cb4a80b0e',
					'label' => 'Linked Page',
					'name' => 'linked_page',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => '',
					'taxonomy' => '',
					'allow_null' => 0,
					'allow_archives' => 1,
					'multiple' => 0,
				),
				array(
					'key' => 'field_6049cb8280b0f',
					'label' => 'LInked Page Text',
					'name' => 'linked_page_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
		array(
			'key' => 'field_6048f6e19df2f',
			'label' => 'Parallel Images',
			'name' => 'parallel_images',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_6048f7399df30',
					'label' => 'Image-1',
					'name' => 'image-1',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6048fae12d2f8',
							'label' => 'Pre Caption',
							'name' => 'pre_caption',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_6048fb202d2f9',
							'label' => 'Main Caption',
							'name' => 'main_caption',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_6048fb3b2d2fa',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
				),
				array(
					'key' => 'field_60499aba19f45',
					'label' => 'Image-2',
					'name' => 'image-2',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_60499aba19f46',
							'label' => 'Pre Caption',
							'name' => 'pre_caption',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_60499aba19f47',
							'label' => 'Main Caption',
							'name' => 'main_caption',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_60499aba19f48',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
				),
			),
		),
		array(
			'key' => 'field_604b71afa4104',
			'label' => 'Starter Image',
			'name' => 'starter_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_604b71f5a4105',
			'label' => 'Lunch Sets Image',
			'name' => 'lunch_sets_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_604b4a1ff1714',
	'title' => 'Image Gallery',
	'fields' => array(
		array(
			'key' => 'field_604b4a2b53fee',
			'label' => 'Image',
			'name' => 'image',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'gallery-images',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_604a1ce615b0c',
	'title' => 'Menus',
	'fields' => array(
		array(
			'key' => 'field_604a1d1cdabd1',
			'label' => 'Parallel Image 1',
			'name' => 'parallel_image_1',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_604a278a880d3',
			'label' => 'Parallel Image 2',
			'name' => 'parallel_image_2',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/menus.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_604d02dcd650d',
	'title' => 'News',
	'fields' => array(
		array(
			'key' => 'field_604d02fcc7799',
			'label' => 'Sub Title',
			'name' => 'sub_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Posts Here',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_604d032bc779b',
			'label' => 'Main Title',
			'name' => 'main_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Posts Here',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'posts_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;




function cptui_register_my_cpts() {

	/**
	 * Post Type: Dishes.
	 */

	$labels = [
		"name" => __( "Dishes", "custom-post-type-ui" ),
		"singular_name" => __( "Dish", "custom-post-type-ui" ),
		"menu_name" => __( "Dishes", "custom-post-type-ui" ),
		"all_items" => __( "All Dishes", "custom-post-type-ui" ),
		"add_new" => __( "Add new", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Dish", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Dish", "custom-post-type-ui" ),
		"new_item" => __( "New Dish", "custom-post-type-ui" ),
		"view_item" => __( "View Dish", "custom-post-type-ui" ),
		"view_items" => __( "View Dishes", "custom-post-type-ui" ),
		"search_items" => __( "Search Dishes", "custom-post-type-ui" ),
		"not_found" => __( "No Dishes found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Dishes found in trash", "custom-post-type-ui" ),
		"parent" => __( "Parent Dish:", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for this Dish", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for this Dish", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for this Dish", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image for this Dish", "custom-post-type-ui" ),
		"archives" => __( "Dish archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into Dish", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this Dish", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter Dishes list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Dishes list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Dishes list", "custom-post-type-ui" ),
		"attributes" => __( "Dishes attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Dish", "custom-post-type-ui" ),
		"item_published" => __( "Dish published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Dish published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Dish reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Dish scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Dish updated.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Dish:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Dishes", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "dish", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-food",
		"supports" => [ "title" ],
	];

	register_post_type( "dish", $args );

	/**
	 * Post Type: Gallery Images.
	 */

	$labels = [
		"name" => __( "Gallery Images", "custom-post-type-ui" ),
		"singular_name" => __( "Gallery Images", "custom-post-type-ui" ),
		"menu_name" => __( "Gallery Images", "custom-post-type-ui" ),
		"all_items" => __( "All Gallery Images", "custom-post-type-ui" ),
		"add_new" => __( "Add new", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Gallery Images", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Gallery Images", "custom-post-type-ui" ),
		"new_item" => __( "New Gallery Images", "custom-post-type-ui" ),
		"view_item" => __( "View Gallery Images", "custom-post-type-ui" ),
		"view_items" => __( "View Gallery Images", "custom-post-type-ui" ),
		"search_items" => __( "Search Gallery Images", "custom-post-type-ui" ),
		"not_found" => __( "No Gallery Images found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Gallery Images found in trash", "custom-post-type-ui" ),
		"parent" => __( "Parent Gallery Images:", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for this Gallery Images", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for this Gallery Images", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for this Gallery Images", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image for this Gallery Images", "custom-post-type-ui" ),
		"archives" => __( "Gallery Images archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into Gallery Images", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this Gallery Images", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter Gallery Images list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Gallery Images list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Gallery Images list", "custom-post-type-ui" ),
		"attributes" => __( "Gallery Images attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Gallery Images", "custom-post-type-ui" ),
		"item_published" => __( "Gallery Images published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Gallery Images published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Gallery Images reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Gallery Images scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Gallery Images updated.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Gallery Images:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Gallery Images", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "gallery-images", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "thumbnail", "excerpt" ],
	];

	register_post_type( "gallery-images", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_dish() {

	/**
	 * Post Type: Dishes.
	 */

	$labels = [
		"name" => __( "Dishes", "custom-post-type-ui" ),
		"singular_name" => __( "Dish", "custom-post-type-ui" ),
		"menu_name" => __( "Dishes", "custom-post-type-ui" ),
		"all_items" => __( "All Dishes", "custom-post-type-ui" ),
		"add_new" => __( "Add new", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Dish", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Dish", "custom-post-type-ui" ),
		"new_item" => __( "New Dish", "custom-post-type-ui" ),
		"view_item" => __( "View Dish", "custom-post-type-ui" ),
		"view_items" => __( "View Dishes", "custom-post-type-ui" ),
		"search_items" => __( "Search Dishes", "custom-post-type-ui" ),
		"not_found" => __( "No Dishes found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Dishes found in trash", "custom-post-type-ui" ),
		"parent" => __( "Parent Dish:", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for this Dish", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for this Dish", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for this Dish", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image for this Dish", "custom-post-type-ui" ),
		"archives" => __( "Dish archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into Dish", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this Dish", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter Dishes list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Dishes list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Dishes list", "custom-post-type-ui" ),
		"attributes" => __( "Dishes attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Dish", "custom-post-type-ui" ),
		"item_published" => __( "Dish published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Dish published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Dish reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Dish scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Dish updated.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Dish:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Dishes", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "dish", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-food",
		"supports" => [ "title" ],
	];

	register_post_type( "dish", $args );
}

add_action( 'init', 'cptui_register_my_cpts_dish' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Ingredients.
	 */

	$labels = [
		"name" => __( "Ingredients", "custom-post-type-ui" ),
		"singular_name" => __( "Ingredient", "custom-post-type-ui" ),
		"menu_name" => __( "Ingredients", "custom-post-type-ui" ),
		"all_items" => __( "All Ingredients", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Ingredient", "custom-post-type-ui" ),
		"view_item" => __( "View Ingredient", "custom-post-type-ui" ),
		"update_item" => __( "Update Ingredient name", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Ingredient", "custom-post-type-ui" ),
		"new_item_name" => __( "New Ingredient name", "custom-post-type-ui" ),
		"parent_item" => __( "Parent Ingredient", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Ingredient:", "custom-post-type-ui" ),
		"search_items" => __( "Search Ingredients", "custom-post-type-ui" ),
		"popular_items" => __( "Popular Ingredients", "custom-post-type-ui" ),
		"separate_items_with_commas" => __( "Separate Ingredients with commas", "custom-post-type-ui" ),
		"add_or_remove_items" => __( "Add or remove Ingredients", "custom-post-type-ui" ),
		"choose_from_most_used" => __( "Choose from the most used Ingredients", "custom-post-type-ui" ),
		"not_found" => __( "No Ingredients found", "custom-post-type-ui" ),
		"no_terms" => __( "No Ingredients", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Ingredients list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Ingredients list", "custom-post-type-ui" ),
		"back_to_items" => __( "Back to Ingredients", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Ingredients", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'Ingredients', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "Ingredients",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "Ingredients", [ "dish" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

function cptui_register_my_taxes_Ingredients() {

	/**
	 * Taxonomy: Ingredients.
	 */

	$labels = [
		"name" => __( "Ingredients", "custom-post-type-ui" ),
		"singular_name" => __( "Ingredient", "custom-post-type-ui" ),
		"menu_name" => __( "Ingredients", "custom-post-type-ui" ),
		"all_items" => __( "All Ingredients", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Ingredient", "custom-post-type-ui" ),
		"view_item" => __( "View Ingredient", "custom-post-type-ui" ),
		"update_item" => __( "Update Ingredient name", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Ingredient", "custom-post-type-ui" ),
		"new_item_name" => __( "New Ingredient name", "custom-post-type-ui" ),
		"parent_item" => __( "Parent Ingredient", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Ingredient:", "custom-post-type-ui" ),
		"search_items" => __( "Search Ingredients", "custom-post-type-ui" ),
		"popular_items" => __( "Popular Ingredients", "custom-post-type-ui" ),
		"separate_items_with_commas" => __( "Separate Ingredients with commas", "custom-post-type-ui" ),
		"add_or_remove_items" => __( "Add or remove Ingredients", "custom-post-type-ui" ),
		"choose_from_most_used" => __( "Choose from the most used Ingredients", "custom-post-type-ui" ),
		"not_found" => __( "No Ingredients found", "custom-post-type-ui" ),
		"no_terms" => __( "No Ingredients", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Ingredients list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Ingredients list", "custom-post-type-ui" ),
		"back_to_items" => __( "Back to Ingredients", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Ingredients", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'Ingredients', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "Ingredients",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "Ingredients", [ "dish" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_Ingredients' );