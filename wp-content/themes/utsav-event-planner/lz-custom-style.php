<?php 

	$utsav_event_planner_custom_style = '';

	// Logo Size
	$utsav_event_planner_logo_top_padding = get_theme_mod('utsav_event_planner_logo_top_padding');
	$utsav_event_planner_logo_bottom_padding = get_theme_mod('utsav_event_planner_logo_bottom_padding');
	$utsav_event_planner_logo_left_padding = get_theme_mod('utsav_event_planner_logo_left_padding');
	$utsav_event_planner_logo_right_padding = get_theme_mod('utsav_event_planner_logo_right_padding');

	if( $utsav_event_planner_logo_top_padding != '' || $utsav_event_planner_logo_bottom_padding != '' || $utsav_event_planner_logo_left_padding != '' || $utsav_event_planner_logo_right_padding != ''){
		$utsav_event_planner_custom_style .=' .logo {';
			$utsav_event_planner_custom_style .=' padding-top: '.esc_attr($utsav_event_planner_logo_top_padding).'px; padding-bottom: '.esc_attr($utsav_event_planner_logo_bottom_padding).'px; padding-left: '.esc_attr($utsav_event_planner_logo_left_padding).'px; padding-right: '.esc_attr($utsav_event_planner_logo_right_padding).'px;';
		$utsav_event_planner_custom_style .=' }';
	}

	// service section padding
	$utsav_event_planner_arrange_section_padding = get_theme_mod('utsav_event_planner_arrange_section_padding');

	if( $utsav_event_planner_arrange_section_padding != ''){
		$utsav_event_planner_custom_style .=' #our_service {';
			$utsav_event_planner_custom_style .=' padding-top: '.esc_attr($utsav_event_planner_arrange_section_padding).'px; padding-bottom: '.esc_attr($utsav_event_planner_arrange_section_padding).'px;';
		$utsav_event_planner_custom_style .=' }';
	}

	// Site Title Font Size
	$utsav_event_planner_site_title_font_size = get_theme_mod('utsav_event_planner_site_title_font_size');
	if( $utsav_event_planner_site_title_font_size != ''){
		$utsav_event_planner_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$utsav_event_planner_custom_style .=' font-size: '.esc_attr($utsav_event_planner_site_title_font_size).'px;';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_site_title_color = get_theme_mod('utsav_event_planner_site_title_color');

	if ( $utsav_event_planner_site_title_color != '') {
		$utsav_event_planner_custom_style .=' .logo .site-title a {';
			$utsav_event_planner_custom_style .=' color:'.esc_attr($utsav_event_planner_site_title_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_site_tagline_color = get_theme_mod('utsav_event_planner_site_tagline_color');

	if ( $utsav_event_planner_site_tagline_color != '') {
		$utsav_event_planner_custom_style .=' p.site-description {';
			$utsav_event_planner_custom_style .=' color:'.esc_attr($utsav_event_planner_site_tagline_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	// Site Tagline Font Size
	$utsav_event_planner_site_tagline_font_size = get_theme_mod('utsav_event_planner_site_tagline_font_size');
	if( $utsav_event_planner_site_tagline_font_size != ''){
		$utsav_event_planner_custom_style .=' .logo p.site-description {';
			$utsav_event_planner_custom_style .=' font-size: '.esc_attr($utsav_event_planner_site_tagline_font_size).'px;';
		$utsav_event_planner_custom_style .=' }';
	}

	// Copyright padding
	$utsav_event_planner_copyright_padding = get_theme_mod('utsav_event_planner_copyright_padding');

	if( $utsav_event_planner_copyright_padding != ''){
		$utsav_event_planner_custom_style .=' .site-info {';
			$utsav_event_planner_custom_style .=' padding-top: '.esc_attr($utsav_event_planner_copyright_padding).'px; padding-bottom: '.esc_attr($utsav_event_planner_copyright_padding).'px;';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_slider_hide_show = get_theme_mod('utsav_event_planner_slider_hide_show',false);
	if( $utsav_event_planner_slider_hide_show == true){
		$utsav_event_planner_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$utsav_event_planner_custom_style .=' display:none;';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_copyright_color = get_theme_mod('utsav_event_planner_copyright_color');

	if ( $utsav_event_planner_copyright_color != '') {
		$utsav_event_planner_custom_style .=' .site-info p, .site-info a {';
			$utsav_event_planner_custom_style .=' color:'.esc_attr($utsav_event_planner_copyright_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_copyrightbg_color = get_theme_mod('utsav_event_planner_copyrightbg_color');

	if ( $utsav_event_planner_copyrightbg_color != '') {
		$utsav_event_planner_custom_style .=' .copyright {';
			$utsav_event_planner_custom_style .=' background-color:'.esc_attr($utsav_event_planner_copyrightbg_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_social_color = get_theme_mod('utsav_event_planner_social_color');

	if ( $utsav_event_planner_social_color != '') {
		$utsav_event_planner_custom_style .=' .social-icons i {';
			$utsav_event_planner_custom_style .=' color:'.esc_attr($utsav_event_planner_social_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	//Topbar color
	$utsav_event_planner_topbarbg_color = get_theme_mod('utsav_event_planner_topbarbg_color');

	if ( $utsav_event_planner_topbarbg_color != '') {
		$utsav_event_planner_custom_style .=' .topheaderbg {';
			$utsav_event_planner_custom_style .=' background-color:'.esc_attr($utsav_event_planner_topbarbg_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_topbarbtn_color = get_theme_mod('utsav_event_planner_topbarbtn_color');
	$utsav_event_planner_topbarbtnbg_color = get_theme_mod('utsav_event_planner_topbarbtnbg_color');

	if ( $utsav_event_planner_topbarbtn_color != '') {
		$utsav_event_planner_custom_style .=' .quote-btn a {';
			$utsav_event_planner_custom_style .=' color: '.esc_attr($utsav_event_planner_topbarbtn_color).'; background-color: '.esc_attr($utsav_event_planner_topbarbtnbg_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	//Slider color
	$utsav_event_planner_slider_color = get_theme_mod('utsav_event_planner_slider_color');

	if ( $utsav_event_planner_slider_color != '') {
		$utsav_event_planner_custom_style .=' #slider .inner_carousel h1 {';
			$utsav_event_planner_custom_style .=' color:'.esc_attr($utsav_event_planner_slider_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_sliderbtn_color = get_theme_mod('utsav_event_planner_sliderbtn_color');
	$utsav_event_planner_sliderbtnbg_color = get_theme_mod('utsav_event_planner_sliderbtnbg_color');

	if ( $utsav_event_planner_sliderbtn_color != '') {
		$utsav_event_planner_custom_style .=' #slider .read-btn a {';
			$utsav_event_planner_custom_style .=' color: '.esc_attr($utsav_event_planner_sliderbtn_color).'; background-color: '.esc_attr($utsav_event_planner_sliderbtnbg_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	//Arrenge color
	$utsav_event_planner_arrangetitle_color = get_theme_mod('utsav_event_planner_arrangetitle_color');

	if ( $utsav_event_planner_arrangetitle_color != '') {
		$utsav_event_planner_custom_style .=' #our_service h2 {';
			$utsav_event_planner_custom_style .=' color:'.esc_attr($utsav_event_planner_arrangetitle_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_arrangebxt_color = get_theme_mod('utsav_event_planner_arrangebxt_color');

	if ( $utsav_event_planner_arrangebxt_color != '') {
		$utsav_event_planner_custom_style .=' .content-topic h3 {';
			$utsav_event_planner_custom_style .=' color:'.esc_attr($utsav_event_planner_arrangebxt_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_arrangebxbg_color = get_theme_mod('utsav_event_planner_arrangebxbg_color');

	if ( $utsav_event_planner_arrangebxbg_color != '') {
		$utsav_event_planner_custom_style .=' .content-topic {';
			$utsav_event_planner_custom_style .=' background-color:'.esc_attr($utsav_event_planner_arrangebxbg_color).';';
		$utsav_event_planner_custom_style .=' }';
	}

	$utsav_event_planner_arrangebxbtnbg_color = get_theme_mod('utsav_event_planner_arrangebxbtnbg_color');

	if ( $utsav_event_planner_arrangebxbtnbg_color != '') {
		$utsav_event_planner_custom_style .=' .cat-btn a {';
			$utsav_event_planner_custom_style .=' background-color:'.esc_attr($utsav_event_planner_arrangebxbtnbg_color).';';
		$utsav_event_planner_custom_style .=' }';
	}