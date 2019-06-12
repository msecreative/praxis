<?php 

add_shortcode( 'title_section', 'praxis_helper_function' );
function praxis_helper_function( $atts ) {
	 $result = shortcode_atts( array(
		'title' 		=> '',
		'desc' 			=> ''
	), $atts ) ;
	 extract($result);

ob_start();
?>

		<div class="section-header text-center">
			<h2><?php echo esc_html($title); ?></h2>
			<p><?php echo esc_html($desc); ?></p>
		</div>


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'praxis_title_section_el' );
function praxis_title_section_el() {
	vc_map( array(
		"name"		=> esc_html( "Title Section", "praxis" ),
		"base"		=> "title_section",
		"category" 	=> esc_html( "Praxis Helper", "praxis"),
		"params" 	=> array(
			array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html( "Section Title", "praxis" ),
				"param_name" 	=> "title",
				"description" 	=> esc_html( "Enter Section Title", "praxis" )
			),
			array(
				"type" 			=> "textarea",
				"heading" 		=> esc_html( "Section Description", "praxis" ),
				"param_name" 	=> "desc",
				"description" 	=> esc_html( "Enter Section Description", "praxis" )
			),
		)
	) 
);

}


 ?>