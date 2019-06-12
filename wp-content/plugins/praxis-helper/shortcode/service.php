<?php 

add_shortcode( 'service', 'praxis_service_function' );
function praxis_service_function( $atts ) {
	 $result = shortcode_atts( array(
		'title' 		=> '',
		'desc' 			=> '',
		'icon' 			=> ''
	), $atts ) ;
	 extract($result);

ob_start();
?>

		<div class="single-service">
			<i class="<?php echo esc_attr($icon); ?>"></i>
			<h3><?php echo esc_html__($title); ?></h3>
			<p><?php echo esc_html__($desc); ?></p>
		</div>



<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'praxis_service_section_el' );
function praxis_service_section_el() {
	vc_map( array(
		"name"		=> esc_html( "Service Section", "praxis" ),
		"base"		=> "service",
		"category" 	=> esc_html( "Praxis Helper", "praxis"),
		"params" 	=> array(
			array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html( "Service Title", "praxis" ),
				"param_name" 	=> "title",
				"description" 	=> esc_html( "Enter Service Title", "praxis" )
			),
			array(
				"type" 			=> "textarea",
				"heading" 		=> esc_html( "Service Description", "praxis" ),
				"param_name" 	=> "desc",
				"description" 	=> esc_html( "Enter Service Description", "praxis" )
			),

			array(
				"type" 			=> "iconpicker",
				"heading" 		=> esc_html( "Service Icon", "praxis" ),
				"param_name" 	=> "icon",
				"description" 	=> esc_html( "Enter Service Icon", "praxis" )
			)
		)
	) 
);

}


 ?>