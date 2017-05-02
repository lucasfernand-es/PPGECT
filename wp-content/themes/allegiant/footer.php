			<?php do_action('cpotheme_after_main'); ?>
			
			<?php get_sidebar('footer'); ?>

			<?php do_action('cpotheme_before_footer'); ?>

            <section id="subfooter" class="subfooter secondary-color-bg dark">
                <div class="container">
                    <div class="row">

                        <div class="column col3 ">
                            <div class="subfooter-column">
                                <div id="text-2" class="widget widget_text">

                                    <div class="textwidget">
                                        <p>
                                            <span class="ctsc-leading">
                                                Allegiant is a business WordPress theme geared towards online businesses and agencies.
                                            </span>
                                        </p>
                                        <p>This theme is focused towards providing a complete showcase of your portfolio, sporting a full-page design that will surely wow your visitors.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column col3 ">
                            <div class="subfooter-column">
                                <div class="widget">
                                    <div class="widget-title heading">Flickr Images</div>
                                    <div class="widget-content">
                                            Content
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column col3 ">
                            <div class="subfooter-column">
                                <div id="recent-posts-3" class="widget widget_recent_entries">		<div class="widget-title heading">Recent Posts</div>		<ul>
                                        <li>
                                            <a href="http://demos.cpothemes.com/allegiant/post-with-gallery-format/">Donec Vehicula Cursus Ante</a>
                                            <span class="post-date">February 25, 2013</span>
                                        </li>
                                        <li>
                                            <a href="http://demos.cpothemes.com/allegiant/post-featured-image/">Post with Image Preview</a>
                                            <span class="post-date">February 18, 2013</span>
                                        </li>
                                        <li>
                                            <a href="http://demos.cpothemes.com/allegiant/post-comments/">Post with User Comments</a>
                                            <span class="post-date">February 8, 2013</span>
                                        </li>
                                    </ul>
                                </div>		</div></div></div><div class="clear"></div>	</div>
            </section>
            <footer id="footer" class="footer secondary-color-bg dark">
                <div class="container">
                    <div id="footermenu" class="footermenu">
                        <div class="menu-footer-container">
                            <ul id="menu-footer" class="menu-footer">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-normal"><a href=""><span class="menu-link"><span class="menu-title">Blog</span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="research_group"><span class="menu-link"><span class="menu-title"><?php the_field('display_grupos_pesq', 'option'); ?></span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="production"><span class="menu-link"><span class="menu-title"><?php the_field('display_producoes', 'option'); ?></span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href=""><span class="menu-link"><span class="menu-title"><?php the_field('display_contato', 'option'); ?></span></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-content"><?php the_field('copyright', 'option'); ?></div>
                </div>
            </footer>
            <div class="clear"></div>
			
			<div class="clear"></div>
		</div><!-- wrapper -->
		<?php do_action('cpotheme_after_wrapper'); ?>
	</div><!-- outer -->
	<?php wp_footer(); ?>
</body>
</html>
