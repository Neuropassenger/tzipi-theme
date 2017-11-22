<?php
add_action( 'wp_enqueue_scripts', 'tzipi_scripts' );
function tzipi_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() .'/css/main.css' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() .'/css/normalize.css' );
	wp_enqueue_style( 'reset', get_template_directory_uri() .'/css/reset.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/libs/fontawesome/font-awesome.min.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() .'/css/fonts.css' );
	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() .'/libs/owlcarousel/owl.carousel.min.css' );
	wp_enqueue_style( 'lity', get_template_directory_uri() .'/libs/lity/lity.min.css' );
	if( is_front_page() ) {
		wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css' );
	}
	wp_enqueue_style( 'tzipi-style', get_template_directory_uri() . '/style.css' );
	wp_style_add_data( 'tzipi-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() .'/libs/jquery/jquery-3.2.1.min.js' );
	wp_enqueue_script( 'owlcarousel', get_template_directory_uri() .'/libs/owlcarousel/owl.carousel.js' );
	wp_enqueue_script( 'small-scripts', get_template_directory_uri() .'/js/common.js' );
	wp_enqueue_script( 'lity', get_template_directory_uri() .'/libs/lity/lity.min.js' );
}

add_action( 'after_setup_theme', 'tzipi_setup' );
function tzipi_setup() {
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	load_theme_textdomain( 'tzipi', get_template_directory() . '/lang' );

	register_nav_menu( 'links-topmenu', 'Top Menu' );
	register_nav_menu( 'links-mobilemenu', 'Mobile Menu' );
	register_nav_menu( 'links-footermenu', 'Footer Menu' );
	register_nav_menu( 'links-midmenu', 'Mid Menu' );
}

add_filter( 'excerpt_more', function( $more ) {
	return '';
});

add_action( 'customize_register', 'tzipi_customizer' );
function tzipi_customizer( $wp_customize ) {
	$wp_customize->add_section( 'social_links', array(
		'title'    => __( 'Social links', 'tzipi' ),
		'priority' => 30
	));

	$wp_customize->add_setting( 'youtube_link', array(
		'default' => 'https://'
	));

	$wp_customize->add_control( 'youtube_link', array(
		'label'      => __( 'Youtube link', 'tzipi' ),
		'section'    => 'social_links',
		'settings'   => 'youtube_link'
	));

	$wp_customize->add_setting( 'instagram_link', array(
		'default' => 'https://'
	));

	$wp_customize->add_control( 'instagram_link', array(
		'label'      => __( 'Instagram link', 'tzipi' ),
		'section'    => 'social_links',
		'settings'   => 'instagram_link'
	));

	$wp_customize->add_setting( 'facebook_link', array(
		'default' => 'https://'
	));

	$wp_customize->add_control( 'facebook_link', array(
		'label'      => __( 'Facebook link', 'tzipi' ),
		'section'    => 'social_links',
		'settings'   => 'facebook_link'
	));

	$wp_customize->add_setting( 'pinterest_link', array(
		'default' => 'https://'
	));

	$wp_customize->add_control( 'pinterest_link', array(
		'label'      => __( 'Pinterest link', 'tzipi' ),
		'section'    => 'social_links',
		'settings'   => 'pinterest_link'
	));

	$wp_customize->add_setting( 'twitter_link', array(
		'default' => 'https://'
	));

	$wp_customize->add_control( 'twitter_link', array(
		'label'      => __( 'Twitter link', 'tzipi' ),
		'section'    => 'social_links',
		'settings'   => 'twitter_link'
	));

	$wp_customize->add_setting( 'whatsapp_link', array(
		'default' => 'https://'
	));

	$wp_customize->add_control( 'whatsapp_link', array(
		'label'      => __( 'Watsapp link', 'tzipi' ),
		'section'    => 'social_links',
		'settings'   => 'whatsapp_link'
	));
}

add_action( 'widgets_init', 'tzipi_register_wp_sidebars' );
function tzipi_register_wp_sidebars() {
	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'youtube-channel', // уникальный id
			'name' => 'Youtube channel', // название сайдбара
			'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '',
			'before_title' => '<span style="display: none">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</span>'
		)
	);
}

add_filter( 'wp_calculate_image_sizes', 'tzipi_image_sizes_attr', 10 , 2 );
function tzipi_image_sizes_attr( $sizes, $size ) {
	$sizes = '(max-width: 740px) 740px';
	return $sizes;
}
