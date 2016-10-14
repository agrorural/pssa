<?php use Roots\Sage\Titles; ?>

<?php 
	//global $post; 
	//$upload_dir = wp_upload_dir();
	//$default_masshead_uri = $upload_dir['baseurl'].'/2013/11/masshead-sierra-sur.jpg';
?>

<?php if ( !is_404() && has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); ?>
  	<div class="masshead" style="background: url('<?php echo $image[0]; ?>')  no-repeat top left; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
<?php } else if (is_page('Contacto')) { ?>
	<div class="masshead page">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15605.896965231093!2d-77.0425728!3d-12.0796521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f311078be8946fa!2sAGRO+RURAL!5e0!3m2!1ses-419!2spe!4v1443559449840" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php }else{?>
  	<div class="masshead no-image-bg">
<?php } ?>
	<div class="masshead-container">
		<?php if ( is_post_type_archive('tribe_events') || is_singular('tribe_events') ) { ?>
      		<?php get_template_part('templates/page', 'header-events'); ?>
      	<?php } elseif( is_singular('post') ) { ?>
      		<?php get_template_part('templates/page', 'header-singular-post'); ?>
      	<?php } else { ?>
			<?php get_template_part('templates/page', 'header'); ?>
		<?php } ?>
	</div>
  </div>