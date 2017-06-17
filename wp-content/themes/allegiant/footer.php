			<?php do_action('cpotheme_after_main'); ?>
			
			<?php //get_sidebar('footer'); ?>

			<?php do_action('cpotheme_before_footer'); ?>
            <div id="main" class="main">


                <div class="container">
                    <div id="subfooter" class="row">

                        <div class="section-heading-no-line">
                            <div class="section-title team-title">
                                <?php echo get_field('footerSponsorsTitle', 'option');?>
                            </div>
                        </div>

                    </div>
                    <div id="clients" class="section sponsors">
                        <div class="container">
                            <div class="row">
                                <?php
                                $sponsors = get_field('sponsors', 'option');
                                cpotheme_grid($sponsors, 'element', 'sponsor', 5, array('class' => 'column-fit'));
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--div class="row">
                    <div class="container">
                        <div id="footermenu" class="footermenu">
                            <div class="menu-footer-container">

                                <?php //do_action('cpotheme_footer'); ?>
                                <ul id="menu-footer" class="menu-footer">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_bloginfo('url'); ?>"><span class="menu-link"><span class="menu-title"><?php the_field('display_home', 'option'); ?></span></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_bloginfo('url'); ?>/#research-group"><span class="menu-link"><span class="menu-title"><?php the_field('display_grupos_pesq', 'option'); ?></span></span></a></li>
                                    <!--li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_page_link( get_page_by_title( 'Contato' )->ID ); ?>"><span class="menu-link"><span class="menu-title"><?php the_field('display_contato', 'option'); ?></span></span></a></li-->
                                <!--/ul>
                            </div>
                        </div>
                        <div class="footer-content footer-copyright">
                            <?php the_field('copyright', 'option'); ?>
                        </div>
                    </div>
                </div-->
                <footer id="footer" class="footer secondary-color-bg dark">
                    <div class="row">
                        <div class="container">
                            <div id="footermenu" class="footermenu">
                                <div class="menu-footer-container">
                                    <ul id="menu-footer" class="menu-footer">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_bloginfo('url'); ?>"><span class="menu-link"><span class="menu-title"><?php the_field('display_home', 'option'); ?></span></span></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_bloginfo('url'); ?>/#research-group"><span class="menu-link"><span class="menu-title"><?php the_field('display_grupos_pesq', 'option'); ?></span></span></a></li>
                                        <!--li class="menu-item menu-item-type-post_type menu-item-object-page menu-normal"><a href="<?php echo get_page_link( get_page_by_title( 'Contato' )->ID ); ?>"><span class="menu-link"><span class="menu-title"><?php the_field('display_contato', 'option'); ?></span></span></a></li-->
                                    </ul>
                                </div>
                            </div>

                            <div class="footer-content footer-copyright">

                                <?php the_field('copyright', 'option'); ?>

                            </div>
                        </div>
                    </div>

                </footer>


                <div class="clear"></div>
            </div>

			<div-- class="clear"></div-->
		</div><!-- wrapper -->
		<?php do_action('cpotheme_after_wrapper'); ?>
	</div><!-- outer -->
	<?php wp_footer(); ?>
</body>
</html>




