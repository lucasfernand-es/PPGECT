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

<div id="main" class="main">

    <div class="container ">

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


    </div>
</div>
<?php //endwhile; ?>

<?php get_footer(); ?>