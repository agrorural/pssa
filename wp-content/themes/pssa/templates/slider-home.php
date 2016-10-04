<?php 
// the args
$args = array(
	'post_type' => 'post',
	'category_name' => 'destacado',
	'post_status' => 'publish',
	'posts_per_page' => 16
);
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<div class="owl-carousel slider--home">
	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="item">
			<div class="slider-media">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('main-slider-thumb'); ?>
					<?php }else { ?>
						<?php echo  '<img src="'.default_thumb().'" width="700" height="400" />'; ?>
					<?php } ?>
				</a>
				
				<?php $format = get_post_format(); $format_link = get_post_format_link($format);//var_dump($format); ?>
				<?php if ($format) {?>
					<div class="slider-format">
						<a class="btn btn-default" href="<?php echo $format_link; ?>" title=""><i class="fa <?php echo $format; ?>"></i></a>
					</div>
				<?php } ?>
				<div class="slider-nav">
					<button class="btn btn-default nav-prev"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-default nav-next"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			<div class="slider-caption">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
				<?php get_template_part('templates/entry-meta'); ?>

				<div class="slide-caption__text">
					<?php the_excerpt(); ?>
				</div>
				<div class="slider-link">
					<div class="btn-group" role="group" aria-label="...">
					  <a href="<?php the_permalink(); ?>" class="btn btn-default">Seguir leyendo</a>
					  <div class="btn-group dropup" role="group">
					    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					      <i class="fa fa-share-alt"></i>
					      <span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu dropdown-menu-right">
							<li class="dropdown-header">Compartir en:</li>
							<li class="divider"></li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">Facebook</a></li>
							<li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>">Twitter</a></li>
							<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Google +</a></li>
							<li class="divider visible-xs"></li>
							<li class="visible-xs"><a href="whatsapp://send?text=<?php the_permalink();?>" data-action="share/whatsapp/share">WhatsApp</a></li>
					    </ul>
					  </div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->
	</div>
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>