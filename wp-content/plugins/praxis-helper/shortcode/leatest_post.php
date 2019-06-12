<?php 

add_shortcode( 'leatest_post', 'leatest_post_function' );
function leatest_post_function( $atts ) {
	 $result = shortcode_atts( array(
		'count' 		=> ''
		
	), $atts ) ;
	 extract($result);

ob_start();
?>
        <!-- Start Home Blog Section -->
        <section class="home-blog">
        	<div class="container">
        		<div class="row">
					<?php 
						$lp = new WP_Query(array(
                    			'post_type'			=>'post',
                    			'posts_per_page'	=>$count
                    		));
					while ($lp->have_posts()): $lp->the_post();
					 ?>

        			<div class="col-lg-6">
        				<article class="post">
                            <header class="entry-header">
                                <a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
                            </header>
                            <div class="post-body">
                                <div class="post-details-wrap">
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(),3); ?></a></h2>
                                    <div class="byline">
                                        <span class="home-posted-on"><?php the_time('j-M-Y'); ?></span>
                                    </div>
                                </div><!-- .post-details-wrap -->
                                <div class="entry-content">
                                    <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="h-readmore-btn">READ MORE</a>
                                </div>
                            </div><!-- .post-body -->
                        </article>
        			</div><!-- .col -->
					<?php endwhile; ?>

        		</div>
        	</div>
        </section>
        <!-- End Home Blog Section -->


<?php
return ob_get_clean();
}

add_action( 'vc_before_init', 'praxis_leatest_post_el' );
function praxis_leatest_post_el() {
	vc_map( array(
		"name" => esc_html__( "Leatest Post", "praxis" ),
		"base" => "leatest_post",
		"category" => esc_html__( "Praxis Helper", "praxis"),
		"params" => array(
			
			array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__( "Leatest Post Count", "praxis" ),
				"param_name" 	=> "count",
			),

		)
	) 
);

}


 ?>