<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<?php if(cpotheme_show_posts()): ?>

<div id="main" class="main">
	<div class="container">

        <div class="section-heading testimonials-heading">
            <div class="section-title testimonials-title heading">
               Grupos de Pesquisa
            </div>
        </div>


        <div class="row">

            <?php

            $posts = get_posts(array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'research_group',
                'orderby' => 'title',
                'order' => 'ASC'
            ));

            if( $posts ): ?>

                <?php foreach( $posts as $post ):
                    setup_postdata( $post );
                ?>

                    <div class="column column-fit col3">
                        <div class="portfolio-item dark  portfolio-item-has-excerpt">

                            <a class="portfolio-item-image" href="http://demos.cpothemes.com/allegiant/portfolio-item/loughtay/">

                                <div class="portfolio-item-overlay primary-color-bg"></div>

                                <h3 class="portfolio-item-title">
                                    <?php the_title(); ?>
                                </h3>

                                <div class="portfolio-item-description">
                                    <p>This is a small description of the portfolio item, viewed from the main portfolio.</p>
                                </div>

                                <img width="600" height="400" src="http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ET13T3T5A9-600x400.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" title="">	</a>
                        </div>
                    </div>

                    <!--<a href="<?php //the_permalink(); ?>"><?php t//he_title(); ?></a>-->


                <?php endforeach; ?>



                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

        </div>


        <div class="row">
            <div class="column column-fit col3">
                <div class="portfolio-item dark  portfolio-item-has-excerpt">
                    <a class="portfolio-item-image" href="http://demos.cpothemes.com/allegiant/portfolio-item/loughtay/">
                        <div class="portfolio-item-overlay primary-color-bg"></div>
                        <h3 class="portfolio-item-title">
                            Portfolio Slideshow		</h3>
                        <div class="portfolio-item-description">
                            <p>This is a small description of the portfolio item, viewed from the main portfolio.</p>
                        </div>
                        <img width="600" height="400" src="http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ET13T3T5A9-600x400.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" title="">	</a>
                </div>
            </div>
            <div class="column column-fit col3">
                <div class="portfolio-item dark  portfolio-item-has-excerpt">
                    <a class="portfolio-item-image" href="http://demos.cpothemes.com/allegiant/portfolio-item/hdr-gallery/">
                        <div class="portfolio-item-overlay primary-color-bg"></div>
                        <h3 class="portfolio-item-title">
                            HDR Gallery		</h3>
                        <div class="portfolio-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac est nunc.</p>
                        </div>
                        <img width="600" height="400" src="http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ASFREP59AB-600x400.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" title="" srcset="http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ASFREP59AB-600x400.jpg 600w, http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ASFREP59AB-300x200.jpg 300w, http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ASFREP59AB-768x511.jpg 768w, http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ASFREP59AB-1024x681.jpg 1024w" sizes="(max-width: 600px) 100vw, 600px">	</a>
                </div>
            </div>
            <div class="column column-fit col3">
                <div class="portfolio-item dark  portfolio-item-has-excerpt">
                    <a class="portfolio-item-image" href="http://demos.cpothemes.com/allegiant/portfolio-item/old-ship/">
                        <div class="portfolio-item-overlay primary-color-bg"></div>
                        <h3 class="portfolio-item-title">
                            Beach		</h3>
                        <div class="portfolio-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac est nunc.</p>
                        </div>
                        <img width="600" height="400" src="http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_BCLRC8HNEO-600x400.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" title="">	</a>
                </div>
            </div>
        </div>

        <div id="content" class="content">
            Bling Bling BITCHES Here
        </div>

		<section id="content" class="content">

		</section>

		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>
<?php endif; ?>


<?php get_footer(); ?>