<?php if (is_page('Directorio')) { ?>
	<?php
		if (has_nav_menu('prog_navigation')) :
			echo '<section class="widget"><h3>El Programa</h3>';
				wp_nav_menu(['theme_location' => 'prog_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav sidebar-nav']);
			echo '</section>';
		endif;
	?>
<?php }else{ ?>
	<?php dynamic_sidebar('sidebar-primary'); ?>
<?php } ?>
