<?php get_header(); ?>

<?php get_template_part('element', 'page-header-research-group'); ?>


<?php if(have_posts()) while(have_posts()): the_post(); ?>

<div id="main" class="main">

    <div class="container">

        <section class="content">

            <div class="row">
                <div class="section-heading features-heading">
                    <div class="section-title features-title heading">Sobre o Grupo</div>
                </div>
                <div class="row">
                    <div class="column  col1">
                        <?php echo get_field('descricao');?>
                        <!--<div class="feature">
                            <h3 class="feature-title">
                                Highly Versatile			</h3>
                            <div class="feature-content">
                                <p>Lorem ipsum dolor sit amet, consetetur<br>
                                    sadipscing elitr.</p>
                            </div>
                        </div-->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="section-heading features-heading">
                    <div class="section-title features-title heading">Membros</div>
                </div>
                <div class="row">
                    <div class="column  col1">

                        <?php

                        /*
                        *  Query posts for a relationship value.
                        *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
                        */

                        $members = get_posts(array(
                            'post_type' => 'member',
                            'meta_query' => array(
                                array(
                                    'key' => 'grupo', // name of custom field
                                    'value' => '"' . get_the_ID() . '"',
                                    'compare' => 'LIKE'
                                )
                            )
                        ));
                        ?>
                        <?php if( $members ): ?>
                            <?php
                            foreach( $members as $member ):
                                ?>

                                <div class="row column  col1">

                                    <?php
                                        $id=$member->ID;
                                        echo get_field('nome_completo', $id);
                                        ?>
                                </div>

                            <?php endforeach; ?>
                        <?php endif; ?>


                    </div>
                </div>
            </div>

            <div class="row">
                <div class="section-heading features-heading">
                    <div class="section-title features-title heading">Produções</div>
                </div>
                <div class="row">
                    <div class="column  col1">

                        <?php if( $members ): ?>
                            <?php

                            $productions_meta_query = array(
                                'post_type' => 'production',
                                'meta_query' => array(
                                    'relation' => 'OR'
                                )
                            );

                            foreach($members as $member) {
                                $id=$member->ID;

                                array_push($productions_meta_query['meta_query'], array(
                                    'key' => 'autor',
                                    'value' => '"' . $id . '"',
                                    'compare' => 'LIKE'
                                ));
                            }

                            $productions = get_posts($productions_meta_query);


                            ?>
                        <?php endif; ?>

                        <?php if( $productions ): ?>
                            <?php foreach( $productions as $production ): ?>

                                <div class="row column  col1">
                                    <a href="<?php echo get_permalink($production->ID)?>">
                                        <h2>
                                            <?php echo get_field('titulo', $production->ID);?>
                                        </h2>
                                    </a>

                                </div>

                                <div class="row column  col1">
                                    <div class="row">
                                        <div class="column col2">
                                            <h3>
                                                Autor(es):
                                            </h3>
                                            <ul>
                                                <?php foreach(get_field('autor', $production->ID) as $item ): ?>
                                                    <li>
                                                        <?php echo get_field('nome_completo', $item->ID); ?>
                                                    </li>

                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <div class="column col2">
                                            <h3>
                                                Orientador(es):
                                            </h3>
                                            <ul>
                                                <?php foreach(get_field('orientador', $production->ID) as $item ): ?>
                                                    <li>
                                                        <?php echo get_field('nome_completo', $item->ID); ?>
                                                    </li>

                                                <?php endforeach; ?>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php endif; ?>


                    </div>
                </div>
            </div>

            <?php do_action('cpotheme_after_content'); ?>
        </section>

        <div id="recent-posts-3" class="widget widget_recent_entries">
            <div class="widget-title heading">Índice</div>
            <ul>
                <li>
                    <a href="#">Apresentação</a>
                </li>
                <li>
                    <a href="#">Membros</a>
                </li>
                <li>
                    <a href="#">Produções</a>
                    <ul>
                        <li>
                            <a href="#">Artigo</a>
                        </li>
                        <li>
                            <a href="#">Disertações</a>
                        </li>
                        <li>
                            <a href="#">Produção Técnica</a>
                        </li>
                        <li>
                            <a href="#">Tese</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>