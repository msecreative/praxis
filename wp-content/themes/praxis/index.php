<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package praxis
 */

get_header();
?>

        <!-- Start Other Hero -->
        <section class="other-hero">
            <div class="other-hero-overlay"></div>
            <div class="container">
                <div class="other-hero-text">
                    <h1>Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Other Hero -->

	        <!-- Start Home Blog Section -->
        <section class="home-blog section">
        	<div class="container">
        		<div class="section-header text-center">
        			<h2>LATEST NEWS</h2>
        			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
        		</div>
        		<div class="row">
        			<?php while(have_posts()):the_post(); ?>
        			<div class="col-lg-6">
        				<article class="post">
                            <header class="entry-header">
                                <a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
                            </header>
                            <div class="post-body">
                                <div class="post-details-wrap">
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(),3); ?></a></h2>
                                    <div class="byline">
                                        <span class="home-posted-on"><?php the_time('j M Y'); ?></span>
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


 

<div class="col-lg-12 text-center">                    
		<nav class="post-navigation">
		    <div class="nav-previous">
		        <a href="#" class="meta-nav"></i></a>
		    </div>
		    <div class="nav-all-post">
		        <a class="active-post" href="#">1</a>
		        <a href="#">2</a>
		        <a href="#">3</a>
		    </div>
		    <div class="nav-next">
		        <a href="#" class="meta-nav"></a>
		    </div>
		</nav>
</div>
        		</div>
        	</div>
        </section>

<?php

get_footer();
