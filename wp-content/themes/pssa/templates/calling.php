<div class="calling-container">
	<div class="calling-element">
		<?php $post1_ID = 20; $post1 = get_post( $post1_ID ); $post1_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post1_ID ), 'full' ); $post1_permalink = get_permalink( $post1_ID ); //var_dump($post1); ?>
			<div class="circle">
				<a href="<?php echo $post1_permalink; ?>">
					<img src="<?php echo $post1_image_url[0]; ?>" width="100" height="100" />
				</a>
			</div>
			<div class="legend">
				<h4><a href="<?php echo $post1_permalink; ?>"><?php echo $post1->post_title; ?></a></h4>
				<?php echo '<p>' . $post1->post_excerpt . '</p>'; ?>
			</div>
	</div>
	<div class="calling-element">
		<?php $post2_ID = 237; $post2 = get_post( $post2_ID ); $post2_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post2_ID ), 'full' ); $post2_permalink = get_permalink( $post2_ID ); //var_dump($post2); ?>
			<div class="circle">
				<a href="<?php echo $post2_permalink; ?>">
					<img src="<?php echo $post2_image_url[0]; ?>" width="100" height="100" />
				</a>
			</div>
			<div class="legend">
				<h4><a href="<?php echo $post2_permalink; ?>"><?php echo $post2->post_title; ?></a></h4>
				<?php echo '<p>' . $post2->post_excerpt . '</p>'; ?>
			</div>
	</div>
	<div class="calling-element">
		<?php $post3_ID = 285; $post3 = get_post( $post3_ID ); $post3_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post3_ID ), 'full' ); $post3_permalink = get_permalink( $post3_ID ); //var_dump($post3); ?>
			<div class="circle">
				<a href="<?php echo $post3_permalink; ?>">
					<img src="<?php echo $post3_image_url[0]; ?>" width="100" height="100" />
				</a>
			</div>
			<div class="legend">
				<h4><a href="<?php echo $post3_permalink; ?>"><?php echo $post3->post_title; ?></a></h4>
				<?php echo '<p>' . $post3->post_excerpt . '</p>'; ?>
			</div>
	</div>
</div>
