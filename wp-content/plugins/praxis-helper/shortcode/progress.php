<?php 

add_shortcode( 'progress', 'progress_section_function' );
function progress_section_function( $atts ) {
     $result = shortcode_atts( array(
        'progress' => ''

    ), $atts ) ;
     extract($result);

ob_start();
  
?>
        <div class="progressbar-wrapper">
                <?php 
                    $values = vc_param_group_parse_atts($atts['progress']);
                    foreach($values as $pro):
                        ?>
            <div class="single-rogressbar">
                <h4 class="progress-bar-title"><?php echo esc_html__($pro['title']); ?></h4>
                <div class="progressbar">
                    <div class="inner-progress wow fadeInLeft" data-progress="<?php echo esc_html__($pro['level']); ?>%" data-wow-duration="2s" data-wow-delay="0.1s" style="width: <?php echo esc_html__($pro['level']); ?>%"></div>
                </div>
            </div><!-- .single-rogressbar -->
        <?php endforeach; ?>
    </div><!-- .t-progress-bar -->


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'progress_section_el' );
function progress_section_el() {
    vc_map( array(
        "name" => esc_html( "Progress", "praxis" ),
        "base" => "progress",
        "category" => esc_html( "Praxis Helper", "praxis"),
        "params" => array(
            
            array(
                'type' => 'param_group',
                'param_name' => 'progress',
                'params' => array(

                    array(
                        'type' => 'textfield',
                        'heading' =>  esc_html( 'Enter Progress Title', 'praxis' ),
                        'param_name' => 'title',
                    ),

                    array(
                        'type' => 'textfield',
                        'heading' =>  esc_html( 'Enter Progress Level', 'praxis' ),
                        'param_name' => 'level',
                    )
                )
            )
        )
    ) 
);

}


 ?>