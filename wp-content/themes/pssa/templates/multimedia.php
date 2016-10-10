<div class="multimedia-container section-container">
	<div class="multimedia-video">
		<div class="section-title">
			<h3><a class="" href="<?php echo get_post_format_link('video'); ?>">Último Video <small><i class="fa fa-plus"></i></small></a></h3>
			<span class="line"></span>
		</div>
		<?php get_template_part('templates/last-video'); ?>
	</div>
	<div class="multimedia-photo">
		<div class="section-title">
			<h3><a class="" href="<?php echo get_post_format_link('gallery'); ?>">Última Galería de Fotos <small><i class="fa fa-plus"></i></small></a></h3>
			<span class="line"></span>
		</div>
		<?php get_template_part('templates/last-photo'); ?>
	</div>
</div>