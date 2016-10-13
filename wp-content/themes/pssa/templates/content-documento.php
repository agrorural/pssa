<article <?php post_class(); ?>>
	<?php 
		$doc_link = get_field('doc_link'); //var_dump($doc_link);
	?>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
    <?php
    	if ( $doc_link ){ 
    		echo do_shortcode('[google-drive-embed url="'. $doc_link['url'] .'" title="' . $doc_link['title'] . '" icon="" width="100%" height="400" style="embed"]'); 
    	}
    ?>
  </div>
  <footer>
	  <ul>
	  	<?php 
	  		if ( $doc_link ){
	  			echo '<li><i class="fa fa-eye" aria-hidden="true"></i> <a href="' . $doc_link['url'] . '" target="_blank">Ver</a></li>';
	  			echo '<li><i class="fa fa-download" aria-hidden="true"></i> <a href="' . $doc_link['url'] . '" download>Descargar</a></li>';
	  		}else{
	  			echo '<li><p>Archivo no subido</p></li>';
	  		}
	  	?>
	  </ul>
  </footer>
</article>