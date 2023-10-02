<?php
/**
 * utsav-event-planner: Customizer
 *
 * @subpackage utsav-event-planner
 * @since 1.0
 */

function utsav_event_planner_customize_register( $wp_customize ) {

	$wp_customize->add_setting('utsav_event_planner_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('utsav_event_planner_logo_padding',array(
		'label' => __('Logo Padding','utsav-event-planner'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('utsav_event_planner_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','utsav-event-planner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('utsav_event_planner_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','utsav-event-planner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('utsav_event_planner_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','utsav-event-planner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('utsav_event_planner_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','utsav-event-planner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('utsav_event_planner_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_checkbox'
	));
	$wp_customize->add_control('utsav_event_planner_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','utsav-event-planner'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('utsav_event_planner_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','utsav-event-planner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'utsav_event_planner_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('utsav_event_planner_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_checkbox'
	));
	$wp_customize->add_control('utsav_event_planner_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','utsav-event-planner'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('utsav_event_planner_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','utsav-event-planner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'utsav_event_planner_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_site_tagline_color', array(
		'label' => 'Tagline Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'utsav_event_planner_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'utsav-event-planner' ),
		'description' => __( 'Description of what this panel does.', 'utsav-event-planner' ),
	) );

	$wp_customize->add_section( 'utsav_event_planner_theme_options_section', array(
    	'title'      => __( 'General Settings', 'utsav-event-planner' ),
		'priority'   => 30,
		'panel' => 'utsav_event_planner_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('utsav_event_planner_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'utsav_event_planner_sanitize_choices'	        
	));

	$wp_customize->add_control('utsav_event_planner_theme_options',array(
		'type' => 'radio',
		'label' => __('Do you want this section','utsav-event-planner'),
		'section' => 'utsav_event_planner_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','utsav-event-planner'),
		   'Right Sidebar' => __('Right Sidebar','utsav-event-planner'),
		   'One Column' => __('One Column','utsav-event-planner'),
		   'Three Columns' => __('Three Columns','utsav-event-planner'),
		   'Four Columns' => __('Four Columns','utsav-event-planner'),
		   'Grid Layout' => __('Grid Layout','utsav-event-planner')
		),
	));

	// Top Bar
	$wp_customize->add_section( 'utsav_event_planner_top_bar', array(
    	'title'      => __( 'Top Bar', 'utsav-event-planner' ),
		'priority'   => null,
		'panel' => 'utsav_event_planner_panel_id'
	) );

	$wp_customize->add_setting('utsav_event_planner_book_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('utsav_event_planner_book_text',array(
		'label'	=> __('Add Button Text','utsav-event-planner'),
		'section'=> 'utsav_event_planner_top_bar',
		'setting'=> 'utsav_event_planner_book_text',
		'type'=> 'text'
	));

	$wp_customize->add_setting('utsav_event_planner_book_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('utsav_event_planner_book_url',array(
		'label'	=> __('Add Button URL','utsav-event-planner'),
		'section'=> 'utsav_event_planner_top_bar',
		'setting'=> 'utsav_event_planner_book_url',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'utsav_event_planner_topbarbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_topbarbtn_color', array(
		'label' => 'Button Color',
		'section' => 'utsav_event_planner_top_bar',
	)));

	$wp_customize->add_setting( 'utsav_event_planner_topbarbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_topbarbtnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'utsav_event_planner_top_bar',
	)));

	$wp_customize->add_setting( 'utsav_event_planner_topbarbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_topbarbg_color', array(
		'label' => 'Topbar Bg Color',
		'section' => 'utsav_event_planner_top_bar',
	)));

	//social icons
	$wp_customize->add_section( 'utsav_event_planner_social', array(
    	'title'      => __( 'Bottom Footer Social Icons', 'utsav-event-planner' ),
		'priority'   => null,
		'panel' => 'utsav_event_planner_panel_id'
	) );

	$wp_customize->add_setting('utsav_event_planner_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('utsav_event_planner_facebook_url',array(
		'label'	=> __('Add Facebook Link','utsav-event-planner'),
		'section'	=> 'utsav_event_planner_social',
		'setting'	=> 'utsav_event_planner_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('utsav_event_planner_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('utsav_event_planner_twitter_url',array(
		'label'	=> __('Add Twitter Link','utsav-event-planner'),
		'section'	=> 'utsav_event_planner_social',
		'setting'	=> 'utsav_event_planner_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('utsav_event_planner_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('utsav_event_planner_insta_url',array(
		'label'	=> __('Add Instagram Link','utsav-event-planner'),
		'section'	=> 'utsav_event_planner_social',
		'setting'	=> 'utsav_event_planner_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('utsav_event_planner_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('utsav_event_planner_linkedin_url',array(
		'label'	=> __('Add Linkedin Link','utsav-event-planner'),
		'section'	=> 'utsav_event_planner_social',
		'setting'	=> 'utsav_event_planner_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('utsav_event_planner_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('utsav_event_planner_pinterest_url',array(
		'label'	=> __('Add Pintrest link','utsav-event-planner'),
		'section'	=> 'utsav_event_planner_social',
		'setting'	=> 'utsav_event_planner_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting( 'utsav_event_planner_social_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_social_color', array(
		'label' => 'Icons Color',
		'section' => 'utsav_event_planner_social',
	)));

	//home page slider
	$wp_customize->add_section( 'utsav_event_planner_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'utsav-event-planner' ),
		'priority'   => null,
		'panel' => 'utsav_event_planner_panel_id'
	) );

	$wp_customize->add_setting('utsav_event_planner_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'utsav_event_planner_sanitize_checkbox'
	));
	$wp_customize->add_control('utsav_event_planner_slider_hide_show',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide slider','utsav-event-planner'),
   	'description' => __('Image Size ( 1500px x 450px )','utsav-event-planner'),
   	'section' => 'utsav_event_planner_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'utsav_event_planner_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'utsav_event_planner_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'utsav_event_planner_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'utsav-event-planner' ),
			'section'  => 'utsav_event_planner_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('utsav_event_planner_slider_excerpt_length',array(
		'default' => '2',
		'sanitize_callback'	=> 'tattoo_expert_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Slider Excerpt Length','utsav-event-planner'),
		'section' => 'utsav_event_planner_slider_section',
	));

	$wp_customize->add_setting( 'utsav_event_planner_slider_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_slider_color', array(
		'label' => 'Text Color',
		'section' => 'utsav_event_planner_slider_section',
	)));

	$wp_customize->add_setting( 'utsav_event_planner_sliderbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_sliderbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'utsav_event_planner_slider_section',
	)));

	$wp_customize->add_setting( 'utsav_event_planner_sliderbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_sliderbtnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'utsav_event_planner_slider_section',
	)));

	// We Arrange 
	$wp_customize->add_section('utsav_event_planner_arrange_section',array(
		'title'	=> __('We Arrange','utsav-event-planner'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','utsav-event-planner'),
		'panel' => 'utsav_event_planner_panel_id',
	));
	
	$wp_customize->add_setting('utsav_event_planner_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('utsav_event_planner_section_title',array(
		'label'	=> __('Section Title','utsav-event-planner'),
		'section'	=> 'utsav_event_planner_arrange_section',
		'setting'	=> 'utsav_event_planner_section_title',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('utsav_event_planner_arrange_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'utsav_event_planner_sanitize_choices',
	));
	$wp_customize->add_control('utsav_event_planner_arrange_cat',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','utsav-event-planner'),
		'section' => 'utsav_event_planner_arrange_section',
	));

	$wp_customize->add_setting('utsav_event_planner_arrange_excerpt_length',array(
		'default' => '20',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_arrange_excerpt_length',array(
		'type' => 'number',
		'label' => __('Content Excerpt Length','utsav-event-planner'),
		'section' => 'utsav_event_planner_arrange_section',
	));

	$wp_customize->add_setting('utsav_event_planner_arrange_section_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
	));
	$wp_customize->add_control('utsav_event_planner_arrange_section_padding',array(
		'type' => 'number',
		'label' => __('Section Top Bottom Padding','utsav-event-planner'),
		'section' => 'utsav_event_planner_arrange_section',
	));

	$wp_customize->add_setting( 'utsav_event_planner_arrangetitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_arrangetitle_color', array(
		'label' => 'Title Color',
		'section' => 'utsav_event_planner_arrange_section',
	)));

	$wp_customize->add_setting( 'utsav_event_planner_arrangebxt_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_arrangebxt_color', array(
		'label' => 'Box Title Color',
		'section' => 'utsav_event_planner_arrange_section',
	)));

	$wp_customize->add_setting( 'utsav_event_planner_arrangebxbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_arrangebxbg_color', array(
		'label' => 'Box Bg Color',
		'section' => 'utsav_event_planner_arrange_section',
	)));

	$wp_customize->add_setting( 'utsav_event_planner_arrangebxbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_arrangebxbtnbg_color', array(
		'label' => 'Box Button Bg Color',
		'section' => 'utsav_event_planner_arrange_section',
	)));

	//Footer
 	$wp_customize->add_section( 'utsav_event_planner_footer', array(
    	'title'      => __( 'Footer Setting', 'utsav-event-planner' ),
		'priority'   => null,
		'panel' => 'utsav_event_planner_panel_id'
	) );

	$wp_customize->add_setting('utsav_event_planner_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'utsav_event_planner_sanitize_checkbox'
	));
	$wp_customize->add_control('utsav_event_planner_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','utsav-event-planner'),
   	'section' => 'utsav_event_planner_footer'
	));

 	$wp_customize->add_setting('utsav_event_planner_footer_link',array(
		'default'	=> 'https://www.luzuk.com/themes/free-event-planner-wordpress-theme/',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('utsav_event_planner_footer_link',array(
		'label'	=> __('Copyright Link','utsav-event-planner'),
		'section'	=> 'utsav_event_planner_footer',
		'setting'	=> 'utsav_event_planner_footer_link',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('utsav_event_planner_footer_copy',array(
		'default'	=> 'Event Planner WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('utsav_event_planner_footer_copy',array(
		'label'	=> __('Copyright Text','utsav-event-planner'),
		'section'	=> 'utsav_event_planner_footer',
		'setting'	=> 'utsav_event_planner_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('utsav_event_planner_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'utsav_event_planner_sanitize_float'
 	));
 	$wp_customize->add_control('utsav_event_planner_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','utsav-event-planner'),
		'section' => 'utsav_event_planner_footer',
	));

	$wp_customize->add_setting( 'utsav_event_planner_copyright_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_copyright_color', array(
		'label' => 'Text Color',
		'section' => 'utsav_event_planner_footer',
	)));

	$wp_customize->add_setting( 'utsav_event_planner_copyrightbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'utsav_event_planner_copyrightbg_color', array(
		'label' => 'Background Color',
		'section' => 'utsav_event_planner_footer',
	)));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'utsav_event_planner_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'utsav_event_planner_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'utsav_event_planner_customize_register' );

function utsav_event_planner_customize_partial_blogname() {
	bloginfo( 'name' );
}

function utsav_event_planner_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function utsav_event_planner_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function utsav_event_planner_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Utsav_Event_Planner_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Utsav_Event_Planner_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Utsav_Event_Planner_Customize_Section_Pro(
				$manager,
				'utsav_event_planner_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Event Planner Pro ', 'utsav-event-planner' ),
					'pro_text' => esc_html__( 'Go Pro','utsav-event-planner' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/product/event-planner-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'utsav-event-planner-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'utsav-event-planner-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Utsav_Event_Planner_Customize::get_instance();