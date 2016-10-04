<?php
// the args
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'ignore_sticky_posts' => true,
	'posts_per_page' => 3
); 
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<div class="section-container">
	<div class="section-title">
		<h3>Noticias</h3>
		<span class="line"></span>
	</div>
	<div class="news-list">
	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="media">
			<div class="media-left">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('news-feed-thumb'); ?>
					<?php }else { ?>
						<?php echo  '<img src="'.default_thumb('', 'news-feed-thumb').'" width="84" height="84" />'; ?>
					<?php } ?>
				</a> 
			</div> 
			<div class="media-body">
					<h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php get_template_part('templates/entry-meta'); ?>
			</div>
		</div>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->
	</div>
</div>
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>