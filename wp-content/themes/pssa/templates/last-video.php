<?php 
$args = array(
	'post_type' => 'post',
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array( 'post-format-video' ),
		)
	),
	'posts_per_page' => 1
);
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="video-content">
				<figure>
					<div class="multimedia-format">
						<a title="Contiene video" href="<?php the_permalink(); ?>" class=""><i class="fa video"></i></a>
					</div>

					<?php if ( has_post_thumbnail() ){?>
						<?php the_post_thumbnail('home-video-thumb', array('class' => 'img-responsive')); ?>
					<?php } else { ?>
						<img src="http://lorempixel.com/400/230/sports/1/" class="img-responsive" />
					<?php } ?>
					<figcaption>
						<h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php get_template_part('templates/entry-meta'); ?>
					</figcaption>
				</figure>
			</div>
		<?php endwhile; ?>
		<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>