<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<?php if(cpotheme_show_posts()): ?>


    <div class="section slider">
        <div class="slider-slides feature-images">
            <?php if( have_rows('slides', 'options') ): ?>
                <ul>
                    <?php while( have_rows('slides', 'options') ): the_row();

                        // vars
                        $imagem_destaque = get_sub_field('imagem_destaque');
                        $titulo = get_sub_field('titulo');
                        $conteudo = get_sub_field('conteudo');
                        $link = get_sub_field('link');

                        ?>

                        <li>
                            <a href="<?php echo $link;?>" target="_blank">
                                <div class="slide slide-center light" style="background-image: url(&quot; <?php echo $imagem_destaque['url']; ?> &quot;); ">
                                    <div class="slide-container">
                                        <div class="container">
                                            <div class="slide-caption">
                                                <div class="slide-titlebox">
                                                    <h2 class="slide-title">
                                                        <?php echo $titulo;?>
                                                    </h2>
                                                </div>
                                                <div class="slide-content">
                                                    <?php echo $conteudo ;?>
                                                </div>
                                                <!--<a class="slide-link button button-medium" href="http://www.cpothemes.com/theme/allegiant">
                                                    Get This Theme
                                                </a> -->
                                            </div>
                                            <div class="slide-image">
                                            </div>
                                            <!--div class="slide-image">
                                                <img src="http://allegient-3a0d.kxcdn.com/wp-content/uploads/sites/32/2015/06/allegiant-tablet.png">
                                            </div-->
                                        </div>
                                    </div>
                                </div>


                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>


    <div id="main" class="main">


        <div class="container">
            <div class="section-heading features-heading">
                <div class="section-title features-title heading">
                    <?php the_field('display_sobre_nos', 'option'); ?>
                </div>
            </div>
            <div class="container">

                <?php the_field('sobre_nos', 'option'); ?>

            </div>
        </div>

        <section id="content" class="content">

        </section>

        <?php //get_sidebar(); ?>
        <div class="clear"></div>
    </div>

    <div id="team" class="section team">
        <div class="container">

            <div class="section-heading rg-heading">
                <div class="section-title team-title">
                    <?php the_field('display_grupos_pesq', 'option'); ?>
                </div>
            </div>

            <?php

            $posts = get_posts(array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'research_group',
                'orderby' => 'abreviacao',
                'order' => 'ASC'
            ));

            if( $posts ): ?>



                <?php

                    $i = 0; $open_div = false;
                    foreach( $posts as $post ):
                    setup_postdata( $post );
                    ?>

                <?php
                    if($i % 3 == 0) {
                        $open_div = true;
                        echo "<div class=\"row\">";
                    } ?>


                <div class="column column-fit col3">

                    <div class="portfolio-item dark  portfolio-item-has-excerpt">

                        <a class="portfolio-item-image" href="<?php the_permalink(); ?>">

                            <div class="portfolio-item-overlay primary-color-bg"></div>

                            <h3 class="portfolio-item-title">
                                <?php echo get_field("abreviacao"); ?>
                            </h3>

                            <div class="portfolio-item-description">
                                <p>  <?php echo get_field("breve_descricao")?> </p>
                            </div>

                            <img
                                 src="<?php
                                    if(get_field('imagem') == "")
                                        echo get_field('imagem_padrao_gp', 'option')['url'];
                                    else
                                        echo get_field('imagem')['url'];
                                 ?>"
                                 class="attachment-portfolio size-portfolio wp-post-image group-image"
                                 style="height: 250px;"
                                 alt=""
                                 title="">
                        </a>
                    </div>

                    <?php
                        if((($i + 1) % 3) == 0) {
                            $open_div = false;
                            echo "</div>";
                        }
                    ?>
                </div>

                <?php
                        $i++;
                        endforeach;
                        if($open_div)
                            echo "</div>";
                ?>

                <?php wp_reset_postdata(); ?>

            <?php
            else:
            ?>

            <div class="row">
                <div class="column column-fit col1 no-result">
                    <h2 class="">
                        <?php the_field('display_no_gp', 'option'); ?>
                    </h2>
                </div>
            </div>

            <?php endif; ?>
        </div>
    </div>


<?php endif; ?>

<div id="main" class="main">


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
                    Últimos ...
                </div>
            </div>
        </div>
    </div>

</div>



<?php get_footer(); ?>
