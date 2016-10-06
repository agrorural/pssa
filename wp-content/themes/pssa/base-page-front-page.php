<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <div class="wrap container" role="document">
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <div class="content row">
      <section class="home__slider">
		    <?php get_template_part('templates/slider', 'home'); ?>
      </section>
      <section class="home__calling">
		    <?php get_template_part('templates/calling'); ?>
      </section>

        <main class="main">
          <section class="home__news widget">
            <?php get_template_part('templates/feed', 'news'); ?>
          </section>
          <section class="home__events widget">
            <?php get_template_part('templates/feed', 'events'); ?>
          </section>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php get_template_part('templates/sidebar', 'home'); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>

        <section class="home__multimedia">
        <?php get_template_part('templates/multimedia'); ?>
      </section>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
