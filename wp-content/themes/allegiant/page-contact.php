<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>



<div id="main" class="main">
    <?php do_action('cpotheme_before_content'); ?>
    <?php if(have_posts()) while(have_posts()): the_post(); ?>






	<div class="container">

        <div class="row">
            <div class="column column-fit col1 contact-col info-contato">

                <?php echo get_field('info_contato');?>


            </div>
        </div>

        <div class="row">
            <div class="column column-fit col2">

                <div class="row contact-col">
                    <div class="column column-fit col1">
                        <h3> <?php echo get_field('submit_message');?></h3>
                    </div>
                </div>
                <div class="row contact-col-no-top">
                    <div class="column column-fit col1">
                        <?php
                        $shortcode = get_field('form_shortcode');
                        echo do_shortcode($shortcode, true);
                        ?>

                    </div>
                </div>
            </div>
            <div class="column column-fit col2">
                <?php $location = get_field('localizacao'); ?>

                <?php if( !empty($location) ): ?>
                    <div class="acf-map contact-col">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="clear"></div>

        <?php endwhile; ?>
        <?php do_action('cpotheme_after_content'); ?>

	</div>
</div>

<?php get_footer(); ?>