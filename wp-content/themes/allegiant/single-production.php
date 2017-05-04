<?php get_header(); ?>

<div id="main" class="main">
	<div class="container">
        <?php do_action('cpotheme_before_content'); ?>
        <?php if(have_posts()) while(have_posts()): the_post(); ?>

            <div class="row">
                <div class="column col col1">
                    <h2> <?php echo get_field('titulo', get_the_ID()); ?> </h2>
                </div>
            </div>


            <div class="row">
                <div class="column col col1">
                    <span>
                        Autor(es):
                        <?php foreach(get_field('autor', $production->ID) as $item ): ?>
                            <?php echo get_field('nome_completo', $item->ID, false) . ';'; ?>
                        <?php endforeach; ?>
                    </span>
                    <br/>
                    <span>
                        Orientador(es):
                        <?php foreach(get_field('orientador', $production->ID) as $item ): ?>
                            <?php echo get_field('nome_completo', $item->ID, false) . ';'; ?>
                        <?php endforeach; ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="column col col1">
                </div>
            </div>


            <div class="row">
                <div class="column col col1">
                    <h3>Resumo: </h3>
                    <?php echo get_field('resumo', get_the_ID()); ?>
                </div>
            </div>

            <div class="row">
                <div class="column col col1">
                    <b> Palavras-chave: </b>
                    <?php echo get_field('palavras-chave', get_the_ID(), false); ?>
                </div>
            </div>




            <div class="row">
                <div class="column col col1">
                    Clique <a href="<?php echo get_field('anexo', get_the_ID())['url']?>"> aqui </a> para ler este trabalho.
                </div>
            </div>

        <?php endwhile; ?>
        <?php do_action('cpotheme_after_content'); ?>
        <div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>