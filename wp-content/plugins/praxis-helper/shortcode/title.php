<?php 

add_shortcode( 'small_title', 'praxis_small_title_function' );
function praxis_small_title_function( $atts ) {
	 $result = shortcode_atts( array(
		'title' 		=> '',
		'desc' 			=> ''
	), $atts ) ;
	 extract($result);

ob_start();
?>

		
		<h3 class="about-section-title"><?php echo esc_html($title); ?></h3>
		<div class="company-info">
			<p><?php echo esc_html($desc); ?></p>
		</div>


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'praxis_small_title_el' );
function praxis_small_title_el() {
	vc_map( array(
		"name"		=> esc_html( "Small Title", "praxis" ),
		"base"		=> "small_title",
		"category" 	=> esc_html( "Praxis Helper", "praxis"),
		"params" 	=> array(
			array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html( "Small Title", "praxis" ),
				"param_name" 	=> "title",
				"description" 	=> esc_html( "Enter Section Title", "praxis" )
			),

			array(
				"type" 			=> "textarea_html",
				"heading" 		=> esc_html( "Description", "praxis" ),
				"param_name" 	=> "desc",
				"description" 	=> esc_html( "Enter Description", "praxis" )
			),
		)
	) 
);

}


 ?>