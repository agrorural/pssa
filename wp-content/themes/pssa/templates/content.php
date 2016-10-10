<article <?php post_class(); ?>>
	<div class="entry-container">
		<?php if ( has_post_thumbnail() ) { ?>
			<section class="entry-left">
				<a href="<?php echo get_permalink(); ?>">
					<?php the_post_thumbnail('news-thumb', array('class' => 'img-responsive')); ?>
				</a>
			</section>
			<section class="entry-body">
		<?php } else {?>
		<section class="entry-body no-image">
		<?php } ?>
			<header>
				<?php get_template_part('templates/entry-meta'); ?>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<footer></footer>
		</section>
	</div>
</article>
