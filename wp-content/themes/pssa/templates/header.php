<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>
<header class="navbar navbar-default navbar-static-top navbar-super" role="banner">
     <nav>
       <ul class="nav navbar-nav navbar-left">
         <li>
           <p><small><?php echo date_i18n('l, j \d\e F \d\e Y', time()); ?></small></p>
         </li>
       </ul>
        <?php
        if (has_nav_menu('super_navigation')) :
          wp_nav_menu(['theme_location' => 'super_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
        endif;
        ?>
     </nav>
</header>

<header class="banner navbar navbar-default navbar-static-top navbar-branding" role="banner">
  <div class="navbar-header">
    <h1 class="navbar-brand">
      <a class="logo" href="<?= esc_url(home_url('/')); ?>">
        <span><?php bloginfo('name'); ?></span>
      </a>
    </h1>
  </div>
  <nav>
      <?php
      if (has_nav_menu('social_navigation')) :
        wp_nav_menu(['theme_location' => 'social_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-right', 'items_wrap' => sr_nav_wrap()]);
      endif;
      ?>
    </nav>
</header>

<header class="banner navbar navbar-default navbar-static-top navbar-main" role="banner">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <p class="navbar-brand">
      <span>Menú</span>
    </p>
  </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
      <div class="navbar-form navbar-right">
        <?php get_search_form(); ?>
      </div>
    </nav>
</header>