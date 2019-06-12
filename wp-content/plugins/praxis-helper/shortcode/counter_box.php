<?php 

add_shortcode( 'counter_box', 'counter_box_section_function' );
function counter_box_section_function( $atts ) {
     $result = shortcode_atts( array(
        'counter_box' => ''

    ), $atts ) ;
     extract($result);

ob_start();
  
?>
          <section class="fun-factor-wrap section">
                <div class="overlay"></div>
                <div class="container">
                    <div class="fun-factor">
                        <?php $values = vc_param_group_parse_atts($atts['counter_box']);
                            foreach ($values as $item): ?>

                        <div class="single-factor">
                            <h3 class="counter"><?php echo esc_html($item['number']); ?></h3>
                            <h4><?php echo esc_html__($item['title']); ?></h4>
                        </div>
                            <?php endforeach; ?>
                        
                    </div><!-- .fun-factor -->
                </div>
            </section>


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'counter_box_section_el' );
function counter_box_section_el() {
    vc_map( array(
        "name" => esc_html( "Counter Box", "praxis" ),
        "base" => "counter_box",
        "category" => esc_html( "Praxis Helper", "praxis"),
        "params" => array(
            
            array(
                'type' => 'param_group',
                'param_name' => 'counter_box',
                'params' => array(

                    array(
                        'type' => 'textfield',
                        'heading' =>  esc_html( 'Enter Counter Box Title', 'praxis' ),
                        'param_name' => 'title',
                    ),

                    array(
                        'type' => 'textarea',
                        'heading' =>  esc_html( 'Enter Counter Number', 'praxis' ),
                        'param_name' => 'number',
                    )
                )
            )
        )
    ) 
);

}


 ?>