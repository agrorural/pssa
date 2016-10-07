<article <?php post_class(); ?>>
  <header>
	  <div class="post-info">
		<?php 
			$args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all'); 
			$terms = wp_get_post_terms( get_the_ID(), 'tipo', $args ); //var_dump($terms);
			$term_name = $terms[0]->name;
			$term_link = get_term_link(  $terms[0] );
			echo '<p><a href="'. $term_link . '">'. $term_name . '</a></p>';
		?>
	</div>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
	<table class="table table-striped table-condensed table-bordered table-responsive">
		<?php 
				$conv_bases = get_field('conv_bases');
				
				$dfs = 'j \d\e F \d\e Y';
				
				$ev_curricular = get_field('ev_curricular');
				$ev_curricular_fec = get_field('ev_curricular_fec');
				$ev_curricular_fec_uts = strtotime( $ev_curricular_fec );

				$ev_psicologica = get_field('ev_psicologica');
				$ev_psicologica_fec = get_field('ev_psicologica_fec');
				$ev_psicologica_fec_uts = strtotime( $ev_psicologica_fec );

				$en_personal = get_field('en_personal');
				$en_personal_fec = get_field('en_personal_fec');
				$en_personal_fec_uts = strtotime( $en_personal_fec );

				$re_final = get_field('re_final');
				$re_final_fec = get_field('re_final_fec');
				$re_final_fec_uts = strtotime( $re_final_fec );
			?>
		<thead>
			<tr>
				<th colspan="4">Bases</th>
			</tr>
			<tr>
				<td colspan="4">
					<?php if ( $conv_bases ) { echo '<a href="' . $conv_bases['url'] . '" target="_blank">Ver bases</a>'; }else{ echo 'No publicado';} ?>
				</td>
			</tr>
			<tr>
				<th>Evaluación Curricular</th>
				<th>Evaluación Psicológica</th>
				<th>Entrevista Personal</th>
				<th>Resultado Final</th>
			</tr>
		</thead>
		<tbody>
			<td>
				<?php if ( $ev_curricular ) { echo '<a href="' . $ev_curricular['url'] . '" target="_blank">Resultado</a>'; }else{ echo 'No publicado';} ?>
				<br />
				<?php if ( $ev_curricular_fec ) { echo '<small>' . date_i18n( $dfs, $ev_curricular_fec_uts ) .'</small>'; } ?>
			</td>
			<td>
				<?php if ( $ev_psicologica ) { echo '<a href="' . $ev_psicologica['url'] . '" target="_blank">Resultado</a>'; }else{ echo 'No publicado';} ?>
				<br />
				<?php if ( $ev_psicologica_fec ) { echo '<small>' . date_i18n( $dfs, $ev_psicologica_fec_uts ) .'</small>'; } ?>
			</td>
			<td>
				<?php if ( $en_personal ) { echo '<a href="' . $en_personal['url'] . '" target="_blank">Resultado</a>'; }else{ echo 'No publicado';} ?>
				<br />
				<?php if ( $en_personal_fec ) { echo '<small>' . date_i18n( $dfs, $en_personal_fec_uts ) .'</small>'; } ?>
			</td>
			<td>
				<?php if ( $re_final ) { echo '<a href="' . $re_final['url'] . '" target="_blank">Resultado</a>'; }else{ echo 'No publicado';} ?>
				<br />
				<?php if ( $re_final_fec ) { echo '<small>' . date_i18n( $dfs, $re_final_fec_uts ) .'</small>'; } ?>
			</td>
		</tbody>
	</table>
</article>
