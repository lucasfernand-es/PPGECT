<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<?php if(cpotheme_show_posts()): ?>

    <div id="team" class="section team">
        <div class="container">

            <div class="section-heading team-heading">
                <div class="section-title team-title heading">
                    <?php the_field('display_grupos_pesq', 'option'); ?>
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

                <div class="column column-fit col2">
                    <div class="portfolio-item dark  portfolio-item-has-excerpt">

                        <a class="portfolio-item-image" href="<?php the_permalink(); ?>">

                            <div class="portfolio-item-overlay primary-color-bg"></div>

                            <h3 class="portfolio-item-title">
                                <?php echo get_field("abreviacao"); ?>
                                <?php //the_title(); ?>
                            </h3>

                            <div class="portfolio-item-description">
                                <p>  <?php echo get_field("breve_descricao")?> </p>
                            </div>

                            <img width="600" height="400" src="http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ET13T3T5A9-600x400.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" title="">	</a>
                    </div>
                </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

            </div>

        </div>
    </div>

<div id="main" class="main">



	<div class="container">



        <div class="container">
            <div class="section-heading features-heading">
                <div class="section-title features-title heading">
                    Quem somos Nós
                </div>
            </div>
        </div>


        <div class="row">
            <div class="section-heading features-heading">
                <div class="section-title features-title heading">
                    <?php the_field('display_grupos_pesq', 'option'); ?>
                </div>
            </div>

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

                            <a class="portfolio-item-image" href="<?php the_permalink(); ?>">

                                <div class="portfolio-item-overlay primary-color-bg"></div>

                                <h3 class="portfolio-item-title">
                                    <?php echo get_field("abreviacao"); ?>
                                    <?php //the_title(); ?>
                                </h3>

                                <div class="portfolio-item-description">
                                    <p>  <?php echo get_field("breve_descricao")?> </p>
                                </div>

                                <img width="600" height="400" src="http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2012/04/StockSnap_ET13T3T5A9-600x400.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" title="">	</a>
                        </div>
                    </div>

                    <!--<a href="<?php //the_permalink(); ?>"><?php t//he_title(); ?></a>-->


                <?php endforeach; ?>



                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

        </div>


        <div id="content" class="content">
            Bling Bling
        </div>

		<section id="content" class="content">

		</section>

		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>
<?php endif; ?>


<?php get_footer(); ?>