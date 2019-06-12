<?php 

add_shortcode( 'accordian', 'accordian_section_function' );
function accordian_section_function( $atts ) {
	 $result = shortcode_atts( array(
		'accordian' => ''

	), $atts ) ;
	 extract($result);

ob_start();
  
?>
			<div class="accordian-wrapper">
				<?php $values = vc_param_group_parse_atts($atts['accordian']);
							foreach ($values as $item): ?>
				<div class="single-accordian">
					<h3 class="accordian-head"><?php echo esc_html($item['title']); ?></h3>
					<div class="accordian-body">
						<?php echo esc_html($item['desc']); ?>
					</div>
				</div><!-- .single-accordian -->
				<?php endforeach; ?>

			</div>


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'accordian_section_el' );
function accordian_section_el() {
	vc_map( array(
		"name" => esc_html( "Accordian", "praxis" ),
		"base" => "accordian",
		"category" => esc_html( "Praxis Helper", "praxis"),
		"params" => array(
			
			array(
				'type' => 'param_group',
				'param_name' => 'accordian',
				'params' => array(

					array(
						'type' => 'textfield',
						'heading' =>  esc_html( 'Enter Accordian Title', 'praxis' ),
						'param_name' => 'title',
					),

					array(
						'type' => 'textarea',
						'heading' =>  esc_html( 'Enter Accordian Description', 'praxis' ),
						'param_name' => 'desc',
					)
				)
			)
		)
	) 
);

}


 ?>