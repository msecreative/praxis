<?php 

add_shortcode( 'works', 'works_function' );
function works_function( $atts ) {
	 $result = shortcode_atts( array(
		'count' 		=> '',
		'has_even' 		=> '',
		'has_gutter' 	=> ''
	), $atts ) ;
	 extract($result);

ob_start();
?>
        <!-- Start Portfolio Section -->
        <section class="portfolio-wrap">
            <div class="container">
      
                <div class="portfolio-filter text-center">
                    <ul>
                    	 <li class="active"><a href="#" data-filter="*">All</a></li>
                    	
                    	 <?php
                    	 $category = get_terms( 'works_cateogry', array('hide_empty'=>true));
                    	 foreach($category as $w_cat) : 
                         
                      echo'<li><a href="#" data-filter=".'.$w_cat->slug.'">'.$w_cat->name.'</a></li>';
                      	endforeach;
                       ?>
                    </ul>
                </div><!-- .portfolio-filter-area -->

                <?php 
                	$even_class = ' ';
                	$even = $has_even;
                	if (true == $even) {
                		$even_class = 'portfolio-even';
                	}

                	$gutter_class = ' ';
                	$gutter = $has_gutter;
                	if (true == $gutter) {
                		$gutter_class = 'gutter-less';
                	}



                 ?>
                <div class="portfolio  <?php echo $even_class; ?> <?php echo $gutter_class; ?>">
                    <div class="grid-sizer"></div>
					<?php 
						$wq = new WP_Query(array(
                    			'post_type'			=>'work',
                    			'posts_per_page'	=>$count
                    		));
					while ($wq->have_posts()): $wq->the_post();
						$works_term = get_the_terms(get_the_ID(), 'works_cateogry');
						$works_cateogry_slug = array();
						foreach($works_term as $term):
						$works_cateogry_slug[] = $term->slug;
						endforeach;
						$works_cateogry_class = join( ' , ', $works_cateogry_slug);
					 ?>
                    <div class="portfolio-item <?php echo $works_cateogry_class; ?>">
                      <a href="<?php the_permalink(); ?>" class="inner-portfolio">
                        <?php the_post_thumbnail(); ?>
                        <div class="portfolio-hover text-center">
                         	<h3><?php echo $works_cateogry_class; ?></h3>
                         	<h4><?php the_title(); ?></h4>
                        </div><!-- .portfolio-hover -->
                      </a>
                    </div><!-- .portfolio-item -->
					<?php endwhile; ?>
              </div><!-- .portfolio -->
            </div><!-- .container -->
        </section>
        <!-- End Portfolio Section -->


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'praxis_works_el' );
function praxis_works_el() {
	vc_map( array(
		"name" => esc_html__( "Praxis Work", "praxis" ),
		"base" => "works",
		"category" => esc_html__( "Praxis Helper", "praxis"),
		"params" => array(
			
			array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__( "Works Count", "praxis" ),
				"param_name" 	=> "count",
			),
			array(
				"type" 			=> "checkbox",
				"heading" 		=> esc_html__( "Even View", "praxis" ),
				"param_name" 	=> "has_even"
			),
			array(
				"type" 			=> "checkbox",
				"heading" 		=> esc_html__( "Gutter Less", "praxis" ),
				"param_name" 	=> "has_gutter",
			)

		)
	) 
);

}


 ?>