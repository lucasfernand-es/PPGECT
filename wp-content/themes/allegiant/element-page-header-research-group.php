<?php wp_reset_query(); ?>

<?php if(cpotheme_show_title()): ?>

<?php $header_image =  get_field('imagem')['url'] ?>
<?php if($header_image != '') $header_image = 'style="background-image:url('.esc_url($header_image).');"'; ?>
<?php do_action('cpotheme_before_title'); ?>
<section id="pagetitle" class="pagetitle dark" <?php echo $header_image; ?>>
	<div class="container">
        <h1>
            <?php echo get_field('nome'); ?>
        </h1>
	</div>
    <div class="row">

        Professor responsável: <?php echo get_field('head_researcher'); ?>
    </div>
</section>


<?php endif; ?>
