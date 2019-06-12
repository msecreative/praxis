<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package praxis
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="col-md-3 col-sm-4 sidebar">
                        <section class="widget widget_search">
                            <h2 class="widget-title">SEARCH</h2>
                            <form role="search" method="get" class="search-form">
                                <input type="text" class="search-field" placeholder="Search …">
                                <input type="submit">
                            </form>
                        </section>
                        <section class="widget widget_recent_entries">
                            <h2 class="widget-title">LATEST POSTS</h2>
                            <ul>
                                <li>
                                    <a href="#" class="recent-post-thumb"><img src="img/blog/r-01.jpg" alt=""></a>
                                    <div class="recent-post-details">
                                        <h3><a href="">Post title here</a></h3>
                                        <span>Aug 29, 2017</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="recent-post-thumb"><img src="img/blog/r-02.jpg" alt=""></a>
                                    <div class="recent-post-details">
                                        <h3><a href="">Post title here</a></h3>
                                        <span>Aug 29, 2017</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="recent-post-thumb"><img src="img/blog/r-03.jpg" alt=""></a>
                                    <div class="recent-post-details">
                                        <h3><a href="">Post title here</a></h3>
                                        <span>Aug 29, 2017</span>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <section class="widget widget_categories">
                            <h2 class="widget-title">PROJECT CATEGORIES</h2>
                            <ul>
                                <li><a href="#">Books</a></li>
                                <li><a href="#">Woman Books</a></li>
                                <li><a href="#">Children Books</a></li>
                                <li><a href="#">Comic Books</a></li>
                            </ul>
                        </section>
                        <section class="widget widget_tag_cloud">
                          <h2 class="widget-title">TAGS</h2>
                            <div class="tagcloud">
                                <a href="#">ARTICLE</a>
                                <a href="#">BRANDING</a>
                                <a href="#">IDENTITY</a>
                                <a href="#">ILLUSTRATION</a>
                                <a href="#">CONSTRACTION</a>
                                <a href="#">INDUSTRY</a>
                                <a href="#">NEWS</a>
                                <a href="#">GRAPHIC</a>
                            </div>
                        </section>
                        <section class="widget widget_archive">
                            <h2 class="widget-title">ARCHIVE</h2>
                            <ul>
                                <li><a href="#">April 2017</a></li>
                                <li><a href="#">August 2017</a></li>
                                <li><a href="#">February 2017</a></li>
                                <li><a href="#">May 2017</a></li>
                            </ul>
                        </section>
                    </aside><!-- .col -->
