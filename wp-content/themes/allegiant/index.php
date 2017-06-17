<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<?php if(cpotheme_show_posts()): ?>


    <div class="slider-slides main feature-images">
        <div class="slide slide-center light" style="background-image: url(&quot;<?php echo get_field('homeBanner', 'option')['url']; ?>&quot;);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <h2 class="slide-title"></h2>
                        <div class="slide-content" style="visibility: hidden;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="main" class="main">

        <div class="container">
            <div class="section-heading">
                <div class="">
                    <?php the_field('displayContentTitle', 'option'); ?>
                </div>
            </div>
            <div class="container">

                <?php the_field('homeContent', 'option'); ?>

            </div>
        </div>

        <section id="content" class="content">

        </section>

        <?php //get_sidebar(); ?>
        <div class="clear"></div>
    </div>

    <div id="research-group" class="section team">
        <div class="container rg-heading">
            <div class="section-heading">
                <div class="section-title team-title">
                    <?php the_field('displayResearchGroup', 'option');?>
                </div>
            </div>


            <?php
            $posts = get_posts(array(
                'posts_per_page'  => -1,
                'post_type'      => 'research_group',
                'order' => 'ASC'
            ));
            // 'orderby' => 'abreviacao',
            if( $posts ): ?>
                <?php
                    $groupRow = (int) get_field('researchGroupTotalByRow', 'option');
                    cpotheme_grid($posts, 'element', 'research-group-item', $groupRow, array('class' => 'column-fit')); ?>
                <?php wp_reset_postdata(); ?>
                <?php
            else:
                ?>

                <div class="row">
                    <div class="column column-fit col1 no-result">
                        <h2 class="">
                            <?php the_field('displayNoResearchGroup', 'option'); ?>
                        </h2>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>


<?php endif; ?>

<?php
/* <div id="main" class="main">


    <div class="row">

        <div class="column column-fit col2">

            <div class="container">

                <div class="section-heading features-heading">
                    <div class="section-title features-title heading">
                        <?php the_field('display_ultimas_producoes', 'option'); ?>

                    </div>
                </div>

                <?php

                $posts = get_posts(array(
                    'posts_per_page'	=> 3,
                    'post_type'			=> 'production',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));

                if( $posts ): ?>
                <?php

                foreach( $posts as $post ):
                setup_postdata( $post );
                ?>

                    <div class="row">

                        <div class="column column-fit col1 ult-producoes">

                             <div class="service">

                                <div class="row">
                                    <h3 class="production-title">
                                        <a href="<?php the_permalink(); ?>" class=""> <?php the_field('titulo'); ?> </a>
                                    </h3>
                                </div>

                                <div class="service-body">
                                    <div class="service-content">
                                        <p class="producao-resumo-short">
                                            <?php the_field('resumo', false, false); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>
                <div class="row">

                    <div class="column column-fit col1 ult-producoes all-productions">
                        <a class="post-readmore button all-button" href="production"><?php the_field('display_ver_todos', 'option'); ?></a>
                    </div>
                </div>


                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <div class="row">

                        <div class="column column-fit col1 no-result ult-producoes">
                            <h2 class="">
                                <?php the_field('display_no_producoes', 'option'); ?>
                            </h2>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row">

                </div>

            </div>

        </div>
        <div class="column column-fit col2">
            <div class="section-heading features-heading">
                <div class="section-title features-title heading">
                    Últimos Eventos?
                </div>
            </div>
        </div>
    </div>

</div>
 */
?>


<?php get_footer(); ?>
