<?php 

add_shortcode( 'client_logo', 'client_logo_section_function' );
function client_logo_section_function( $atts ) {
     $result = shortcode_atts( array(
        'client_logo' => ''

    ), $atts ) ;
     extract($result);

ob_start();
  
?>
    
            <section class="client-wrap">
        	<div class="container">
        		<div class="owl-carousel clients">
        			<?php 
        			$values = vc_param_group_parse_atts($atts['client_logo']);
        			foreach($values as $c_logo): 
        				$img = wp_get_attachment_image_src( $c_logo['logo'], 'company_logo' );
        				?>

        			<a href="#"><img src="<?php echo esc_url($img[0]); ?>" alt=""></a>
        			<?php endforeach; ?>
        		</div>
        	</div>
        </section>


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'client_logo_section_el' );
function client_logo_section_el() {
    vc_map( array(
        "name" => esc_html( "Client Logo", "praxis" ),
        "base" => "client_logo",
        "category" => esc_html( "Praxis Helper", "praxis"),
        "params" => array(
            
            array(
                'type' => 'param_group',
                'param_name' => 'client_logo',
                'params' => array(

                    array(
                        'type' => 'attach_image',
                        'heading' =>  esc_html( 'Choose Clinte Logo', 'praxis' ),
                        'param_name' => 'logo',
                    )
                )
            )
        )
    ) 
);

}


 ?>