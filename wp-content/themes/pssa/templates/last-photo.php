<?php 
	$args = array(
	'post_type' => 'post',
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array( 'post-format-gallery' ),
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
	<div class="photo-content">
		<div class="photo-img">
			<?php
				global $post;
				// Retrieve the first gallery in the post
			 	$gallery = get_post_gallery_images( $post );
				//echo '<pre>';
				//var_dump($gallery);
				//echo '</pre>';

				if($gallery){
					echo '<ul>';
					// Loop through each image in each gallery
					for ($i = 1; $i <= 4; $i++) {
					    echo '<li>';
					    echo '<a href=" '. get_the_permalink() .' ">';
					    echo '<img src="' . $gallery[$i] . '" class="img-responsive" width="131 height="131">';
					    echo '</a>';
					    echo '</li>';
					}
					echo '</ul>';
				}				
			?>
		</div>
		<div class="photo-body">
			<h3 class="">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h3>
			<?php get_template_part('templates/entry-meta'); ?>
		</div>	
	</div>
<?php endwhile; ?>
<!-- end of the loop -->
<!-- pagination here -->
<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>