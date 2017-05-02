<?php wp_reset_query(); ?>

<?php if(cpotheme_show_title()): ?>

<?php $header_image =  get_field('imagem')['url'] ?>
<?php if($header_image != '') $header_image = 'style="background-image:url('.esc_url($header_image).');"'; ?>
<?php do_action('cpotheme_before_title'); ?>
<section id="pagetitle" class="pagetitle dark" <?php echo $header_image; ?>>
	<div class="container">
		<?php do_action('cpotheme_title'); ?>
	</div>
</section>
<?php do_action('cpotheme_after_title'); ?>

<?php endif; ?>
