<footer class="content-info">
  <div class="container">
  	<div class="footer-branding">
  		<section class="no-widget branding-contact">
  			<div class="textwidget">
  				<h1 class="branding-logo">
					<a class="logo_footer" href="<?= esc_url(home_url('/')); ?>">
						<span><?php bloginfo('name'); ?></span>
					</a>
				</h1>
	  			<ul>
	  				<li><a href="tel:5112058030"><i class="fa fa-phone"></i> (511) 205-8030</a></li>
	  				<li><a href="mailto:info@sierrayselvaalta.gob.pe"><i class="fa fa-envelope-o"></i> info@sierrayselvaalta.gob.pe</a></li>
	  			</ul>
	  			<nav>
			      <?php
			      if (has_nav_menu('social_navigation')) :
			        wp_nav_menu(['theme_location' => 'social_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => '']);
			      endif;
			      ?>
			    </nav>
			</div>
		</section>
    	<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="footer-copy">
    	<div class="copyright">
    	     <nav>
		       <ul class="nav navbar-nav navbar-left">
		         <li>
		           <p><small>2016 &copy; <?php echo bloginfo('name'); ?></small></p>
		         </li>
		       </ul>
		        <?php
		        if (has_nav_menu('super_navigation')) :
		          wp_nav_menu(['theme_location' => 'super_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
		        endif;
		        ?>
		     </nav>
    	</div>
    </div>
  </div>
</footer>
<footer class="content-last">
  <div class="container">
  	<div class="footer-last">  
    	Aqui va el poll
    </div>
  </div>
</footer>
