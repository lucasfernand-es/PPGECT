<?php get_header(); ?>
<?php wp_reset_query(); ?>

<?php if(cpotheme_show_title()): ?>

    <?php
    if(get_field('image') == "")
        $header_image = get_field('researchGroupDefaultImage', 'option')['url'];
    else
        $header_image =  get_field('image')['url'];
    ?>
    <?php if($header_image != '') $header_image = 'style="background-image:url('.esc_url($header_image).');"'; ?>
    <?php do_action('cpotheme_before_title'); ?>
    <section id="pagetitle" class="pagetitle dark" <?php echo $header_image; ?>>
        <div class="container">
            <h1>
                <?php echo get_field('name'); ?>
            </h1>
        </div>
        <div class="row">

            <?php the_field('displayHeadResearcher', 'option', false);?> : <?php echo get_field('headResearcher' ); ?>
        </div>
    </section>


<?php endif; ?>


<?php //if(have_posts()) while(have_posts()): the_post(); ?>
<?php

$productions = get_posts(array(
    'post_type' => 'production',
    'orderby'          => 'year',
    'order'            => 'ASC',
));

//echo (get_query_var('filter')) ? get_query_var('filter') : 'meh';

$productions_meta_query = array(
    'post_type' => 'production',
    'meta_query' => array(
        'relation' => 'AND'
    )
);

array_push($productions_meta_query['meta_query'], array(
    'key' => 'researchGroup',
    'value' => '"' . get_the_ID() . '"',
    'compare' => 'LIKE',
));

$productions = get_posts($productions_meta_query);

$allYears = array();

foreach ($productions as $production) {
    $allYears[] = get_field('year', $production->ID);
}

$years = array_unique($allYears);

if (array_key_exists('filter', $_GET)) {
    $year = (int)  $_GET['filter'];
    //echo $_GET['filter'];
    array_push($productions_meta_query['meta_query'], array(
        'key' => 'year',
        'value' => $year,
        'compare' => 'LIKE',
    ));

    $productions = get_posts($productions_meta_query);
}

$allTypes = array();
$productionsByType = array();

$typeID = 0;
foreach ($productions as $production) {
    $type = get_field('type', $production->ID);
    $allTypes[] = $type;

    if(!$productionsByType[$type]) {
        $productionsByType[$type] = array();
    }

    $productionsByType[$type][] = $production;
}
$types = array_unique($allTypes);

?>

<div id="main" class="main">

    <div class="container ">


        <!--div class="row">

            <div class="group-menu group-column">

                hi
            </div>
            <div class="group-content group-column">
                hi

            </div>
        </div-->

        <section class="content ">


            <div id="about" class="row">
                <div class="section-heading features-heading">
                    <div class="section-title features-title heading"><?php the_field('displayAboutResearchGroup', 'option');?></div>
                </div>
                <div class="row">
                    <div class="column  col1">
                        <?php the_field('description');?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="section-heading  research-group-title">
                    <div class="section-title features-title heading research-group-title">
                        <?php the_field('displayResearchGroupMembers', 'option', false);?>
                    </div>


                </div>
                <div class="row">
                    <div class="column  col1">
                        <p>
                            <a href="<?php the_field("lattesURL");?>">
                                <?php the_field('displayResearchGroupWhereMembers', 'option', false);?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if( $productionsByType ): ?>
                    <?php
                    $id =0;
                    foreach ($productionsByType as $type => $productions):
                        ?>
                        <div class="container">
                            <div class="section-heading features-heading">
                                <div class="section-title features-title heading"><?php echo $type?></div>
                            </div>

                            <?php if( $productions ): ?>
                                <?php foreach( $productions as $production ):?>

                                    <div id="type-<?php echo $id; $id++;?>" class="row column col1">
                                        <div class="row">
                                            <div class="column col1">
                                                <h2>
                                                    <?php
                                                    the_field('title', $production->ID, false);
                                                    ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row column  col1">

                                        <div class="row">
                                            <div class="column col1">
                                                <h3> Ano de Publicação:
                                                    <?php
                                                    the_field('year', $production->ID, false);
                                                    ?>
                                                </h3>
                                                <?php echo get_field('resumo', get_the_ID()); ?>
                                            </div>
                                        </div>


                                        <?php
                                        $attachment = get_field('attachment', $production->ID);
                                        $product = get_field('product', $production->ID);
                                        ?>

                                        <?php if($attachment):?>
                                            <div class="row">
                                                <a href="<?php echo $attachment['url'];?>" target="_blank">
                                                    <div class="column col1">
                                                        <h3><span class="glyphicon glyphicon-file" aria-hidden="true"></span>  PDF</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endif; ?>


                                        <?php if($product):?>
                                            <div class="row">
                                                <a href="<?php echo $product;?>" target="_blank">
                                                    <div class="column col1">
                                                        <h3><span class="glyphicon glyphicon-download" aria-hidden="true"></span>  Produto</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <div class="row">
                                            <div class="column col1">
                                                <h3>
                                                    Autor(es):
                                                </h3>
                                                <?php if( have_rows('authors', $production->ID) ): ?>
                                                    <ul class="">
                                                        <?php while( have_rows('authors', $production->ID) ): the_row();
                                                            $author = get_sub_field('author');
                                                            ?>

                                                            <li class="">
                                                                <?php echo $author; ?>
                                                            </li>

                                                        <?php endwhile; ?>

                                                    </ul>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column col1">
                                                <h3>Resumo: </h3>
                                                <p>
                                                    <?php echo get_field('abstract',$production->ID, false); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column col col1">
                                                <p>
                                                    <b> Palavras-chave: </b>
                                                    <?php if( have_rows('keywords', $production->ID) ): ?>
                                                        <?php while( have_rows('keywords', $production->ID) ): the_row();
                                                            $keyword = get_sub_field('keyword', false);
                                                            ?>

                                                            <?php echo $keyword; ?>;
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>


                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                    <?php endforeach;?>
                <?php endif;?>
            </div>

            <?php do_action('cpotheme_after_content'); ?>
        </section>

        <div class="widget widget_recent_entries">

            <div class="widget-title heading">Índice</div>
            <ul>
                <!--li>
                    <a href="#about">Apresentação</a>
                </li-->
                <li>
                    <span>Produções</span>
                    <?php if( $types ): ?>
                        <ul>
                            <?php
                            $id = 0;
                            foreach ($types as $type):
                                ?>
                                <a href="<?php the_permalink(); echo "#type-" . $id; $id++; ?>"><li><?php echo $type;?></li></a>
                            <?php endforeach;?>
                            <!--li>
                                <a href="#">Artigo</a>
                            </li>
                            <li>
                                <a href="#">Dissertações</a>
                            </li>
                            <li>
                                <a href="#">Produção Técnica</a>
                            </li>
                            <li>
                                <a href="#">Tese</a>
                            </li-->
                        </ul>
                    <?php endif;?>
                </li>

                <?php if( $years ): ?>
                    <li>
                        <span>Ano de Publicação</span>
                        <ul>
                            <a href="<?php the_permalink(); ?>"><li>Todos</li></a>
                            <?php
                            foreach ($years as $year):
                            ?>
                                <a href="<?php the_permalink(); echo "?filter=" . $year; ?>"><li><?php echo $year;?></li></a>
                            <?php endforeach;?>
                        </ul>
                    </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</div>
<?php //endwhile; ?>

<?php get_footer(); ?>