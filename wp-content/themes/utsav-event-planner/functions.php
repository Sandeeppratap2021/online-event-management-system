<?php
/**
 * utsav-event-planner functions and definitions
 *
 * 
 * @subpackage utsav-event-planner
 * @since 1.0
 */

function utsav_event_planner_setup() {
	
	load_theme_textdomain( 'utsav-event-planner', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
	));

	add_image_size( 'utsav-event-planner-featured-image', 2000, 1200, true );

	add_image_size( 'utsav-event-planner-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'utsav-event-planner' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', utsav_event_planner_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'utsav_event_planner_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'utsav_event_planner_setup' );

// Notice after Theme Activation
function utsav_event_planner_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
		echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'utsav-event-planner' ) .'</h3>';
		echo '<p>'. esc_html__( 'Thank you for choosing Utsav Event Planner theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'utsav-event-planner' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=utsav_event_planner_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'utsav-event-planner' ) .'</a></p>';
	echo '</div>';
}

function utsav_event_planner_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'utsav-event-planner' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'utsav-event-planner' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'utsav-event-planner' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'utsav-event-planner' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'utsav-event-planner' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'utsav-event-planner' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'utsav-event-planner' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'utsav-event-planner' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'utsav-event-planner' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'utsav-event-planner' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'utsav-event-planner' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'utsav-event-planner' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'utsav-event-planner' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'utsav-event-planner' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'utsav_event_planner_widgets_init' );

function utsav_event_planner_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Enqueue scripts and styles.
function utsav_event_planner_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'utsav-event-planner-fonts', utsav_event_planner_fonts_url(), array(), null );
	
	//Bootstarp 
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/assets/css/bootstrap.css' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'utsav-event-planner-basic-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'utsav-event-planner-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'utsav-event-planner-style' ), '1.0' );
		wp_style_add_data( 'utsav-event-planner-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'utsav-event-planner-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'utsav-event-planner-style' ), '1.0' );
	wp_style_add_data( 'utsav-event-planner-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );

	require get_parent_theme_file_path( '/lz-custom-style.php' );
	wp_add_inline_style( 'utsav-event-planner-basic-style',$utsav_event_planner_custom_style );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-js', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5-js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'utsav-event-planner-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/assets/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'utsav_event_planner_scripts' );

function utsav_event_planner_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'utsav_event_planner_front_page_template' );

function utsav_event_planner_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function utsav_event_planner_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

//footer Link
define('UTSAV_EVENT_PLANNER_LIVE_DEMO',__('https://www.luzukdemo.com/demo/utsav-event-planner/','utsav-event-planner'));
define('UTSAV_EVENT_PLANNER_PRO_DOCS',__('https://www.luzukdemo.com/docs/utsav-event-planner/','utsav-event-planner'));
define('UTSAV_EVENT_PLANNER_BUY_NOW',__('https://www.luzuk.com/product/event-planner-wordpress-theme/','utsav-event-planner'));
define('UTSAV_EVENT_PLANNER_SUPPORT',__('https://wordpress.org/support/theme/utsav-event-planner/','utsav-event-planner'));
define('UTSAV_EVENT_PLANNER_CREDIT',__('https://www.luzuk.com/themes/free-event-planner-wordpress-theme/','utsav-event-planner'));

if ( ! function_exists( 'utsav_event_planner_credit' ) ) {
	function utsav_event_planner_credit(){
		echo "<a href=".esc_url(UTSAV_EVENT_PLANNER_CREDIT)." target='_blank'>".esc_html__('Event Planner WordPress Theme','utsav-event-planner')."</a>";
	}
}

/* Excerpt Limit Begin */
function utsav_event_planner_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'utsav_event_planner_loop_columns');
	if (!function_exists('utsav_event_planner_loop_columns')) {
		function utsav_event_planner_loop_columns() {
	return 3; // 3 products per row
	}
}

function utsav_event_planner_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function utsav_event_planner_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* Breadcrumb Begin */
function utsav_event_planner_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			echo "&nbsp;>&nbsp;";
			the_category(', ');
			if (is_single()) {
				echo "&nbsp;>&nbsp;";
				echo " <span>";
					the_title();
				echo "</span>";
			}
		} elseif (is_page()) {
			echo "&nbsp;>&nbsp;";
			echo " <span>";
				the_title();
			echo "</span> ";
		}
	}
}

function utsav_event_planner_banner_image( $image_url ){
    global $post;

    if( is_singular() ){
        $header_image = get_header_image();
        $image_url = ! empty( $header_image ) ?  $header_image : esc_url(get_template_directory_uri()) . '/assets/images/headerbg.png';
    }
    return $image_url;
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );