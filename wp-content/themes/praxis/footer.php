<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package praxis
 */

?>
        <!-- Start Site Footer -->
        <footer class="site-footer black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget text-widget">
                            <h2 class="widget-title">ABOUT</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        </div><!-- .widget -->
                    </div><!-- .col -->
                    <div class="col-sm-3">
                        <div class="widget verti-menu-widget">
                            <h2 class="widget-title">RECENT POSTS</h2>
                            <ul>
                                <li><a href="#">AUDIO POST</a></li>
                                <li><a href="#">VIDEO POST</a></li>
                                <li><a href="#">GALLERY POST</a></li>
                                <li><a href="#">QUOTE POST</a></li>
                            </ul>
                        </div><!-- .widget -->
                    </div><!-- .col -->
                    <div class="col-sm-3">
                        <div class="widget contact-info-widget">
                            <h2 class="widget-title">CONTACT INFO</h2>
                            <ul>
                                <li><span>E-mail:</span> pressionate@gmail.com</li>
                                <li><span>Phone:</span> +123 456 7890</li>
                                <li><span>Location:</span> 12 Main Street Pt. main road, London</li>
                            </ul>
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </div>
                        </div><!-- .widget -->
                    </div><!-- .col -->
                    <div class="col-sm-3">
                        <div class="widget gallery-widget">
                            <h2 class="widget-title">LATEST WORKS</h2>
                            <div class="footer-gallery-list">
                                <a href="#"><img src="img/footer/01.jpg" alt=""></a>
                                <a href="#"><img src="img/footer/02.jpg" alt=""></a>
                                <a href="#"><img src="img/footer/03.jpg" alt=""></a>
                                <a href="#"><img src="img/footer/04.jpg" alt=""></a>
                                <a href="#"><img src="img/footer/05.jpg" alt=""></a>
                                <a href="#"><img src="img/footer/06.jpg" alt=""></a>
                                <a href="#"><img src="img/footer/01.jpg" alt=""></a>
                                <a href="#"><img src="img/footer/02.jpg" alt=""></a>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="copy-right">Copyright @ 2016 - All Right Reserved</div>
            </div>
        </footer>
        <!-- End Site Footer -->

       
        <?php wp_footer(); ?>
    </body>
</html>