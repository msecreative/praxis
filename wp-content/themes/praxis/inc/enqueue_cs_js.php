<?php 
if ( ! function_exists('praxis_cs_js') ) { 
function praxis_cs_js(){
	wp_enqueue_style( 'praxis-style', get_stylesheet_uri() );

	wp_enqueue_style( 'praxis-fonts', praxis_fonts_url(), array(), null );

	wp_enqueue_style('plugin', get_template_directory_uri().'/assets/css/plugins.css', array(), '3.3.7', 'all' );
	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('custom', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', 'all' );


	wp_enqueue_script( 'modernizr', get_template_directory_uri().'/assets/js/vendor/modernizr-2.8.3.min.js', array('jquery'), '2.8.3', false );
	wp_enqueue_script( 'plugins', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.1', true );



	wp_enqueue_script( 'praxis-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'praxis-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}



}


add_action( 'wp_enqueue_scripts', 'praxis_cs_js' );
}






function praxis_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'praxis' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Roboto:300,400,500';
		$font_families[] = 'Source Sans Pro:300,400,600,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
 ?>