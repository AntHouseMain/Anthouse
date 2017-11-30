<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thememy
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<div class="uk-cereer-row">
		<div class="uk-job-items" uk-grid>
			<div class="uk-width-1-1 uk-width-4-10@s uk-width-4-10@m">
				<?php
				if ( is_single() ) :
					the_title( '<h4>', '</h4>' );
				else :
					the_title( '<h4><a class="uk-text-black" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				endif;
				?>
			</div>
			<div class="uk-width-1-1 uk-width-3-10@s uk-width-4-10@m">
				<ul>
					<?php 
					$field = get_field_object('checkbox_filter_job'); 
					$job_label = get_field('checkbox_filter_job');

					foreach($job_label as $key => $val) : ?>
					<li> <?php echo $field['choices'][$job_label[$key]]; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="uk-width-1-1 uk-width-1-4@s uk-width-2-10@m uk-flex uk-flex-right uk-flex-left@s">
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" >Answer job >>
			</a>
		</div>
	</div>
</div>
</article> 