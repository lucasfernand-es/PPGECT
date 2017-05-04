			<?php do_action('cpotheme_after_main'); ?>
			
			<?php get_sidebar('footer'); ?>

			<?php do_action('cpotheme_before_footer'); ?>

            <section id="subfooter" class="subfooter secondary-color-bg dark">
                <div class="container">
                    <div class="row">

                        <div class="column col3 ">
                            <div class="subfooter-column">
                                <div class="subfooter-column">
                                    <?php the_field('left_column', 'option'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="column col3 ">
                            <div class="subfooter-column">
                                <?php the_field('middle_column', 'option'); ?>
                            </div>
                        </div>

                        <div class="column col3 ">
                            <div class="subfooter-column">
                                <?php the_field('right_column', 'option'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>	</div>
            </section>
            <footer id="footer" class="footer secondary-color-bg dark">
                <div class="container">
                    <div id="footermenu" class="footermenu">
                        <div class="menu-footer-container">

                            <?php //do_action('cpotheme_footer'); ?>
                            <ul id="menu-footer" class="menu-footer">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_bloginfo('url'); ?>"><span class="menu-link"><span class="menu-title"><?php the_field('display_home', 'option'); ?></span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_bloginfo('url'); ?>/#research-group"><span class="menu-link"><span class="menu-title"><?php the_field('display_grupos_pesq', 'option'); ?></span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_page_link( get_page_by_title( 'contato' )->ID ); ?>"><span class="menu-link"><span class="menu-title"><?php the_field('display_contato', 'option'); ?></span></span></a></li>
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
