<?php 

add_shortcode( 'slider', 'slider_section_function' );
function slider_section_function( $atts ) {
	 $result = shortcode_atts( array(
        'slider_no' => ''

	), $atts ) ;
	 extract($result);

ob_start();
  
?>

<?php 
        $slider = new WP_Query(array(
            'post_type'=>'slider',
            'posts_per_page'=> $slider_no

        ));
?>

<section class="owl-carousel hero-slider">

    <?php

    while ($slider->have_posts()):$slider->the_post(); ?>
        <div class="single-slider">

            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="slider-text">
                    <h1><?php the_title();?></h1>
                    <h4><?php the_content();?></h4>
                    <div class="slider-btn-group">
                        <a href="#" class="t-btn">PURCHASE NOW</a>
                        <a href="#" class="t-btn t-btn-red">SELECT DEMO</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

</section>

    <?php
//}

 ?>


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'slider_section_el' );
function slider_section_el() {
	vc_map( array(
		"name" => esc_html( "Slider", "praxis" ),
		"base" => "slider",
		"category" => esc_html( "Praxis Helper", "praxis"),
		"params" => array(

			array(
				'type' => 'textfield',
				'heading' =>  esc_html( 'Show Slider Per Page', 'praxis' ),
				'param_name' => 'slider_no',
		      )
        )
	) 
);

}


 ?>