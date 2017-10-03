<?php 
get_header(); 
?>
<section class="uk-breadcrumbs-section">
	<div class="uk-container">
		<?php if( function_exists('all_breadcrumbs') ) all_breadcrumbs(' > '); ?>
	</div>
</section>
<section class="uk-career-item uk-margin-xlarge-bottom">
	<div class="uk-container single-1414">
		<div uk-grid>
			<div class="uk-categories uk-margin-medium-top uk-width-1-1@m">
				<p><?php 
					$field = get_field_object('checkbox_filter_job'); 
					$colors = get_field('checkbox_filter_job');

					foreach($colors as $key => $val) {
						$label = $colors[$key];
						echo $field['choices'][$label]; 
					}
					?>
				</p>
			</div>
			<div class="uk-post-title-single uk-width-1-2@m">
				<?php
				the_title('<h3>', '</h3>'); 	
				?>
			</div>
			<div class="uk-width-1-1@m">
				<?php if( have_rows('career_info_job') ): ?>
					<?php while( have_rows('career_info_job') ): the_row(); 
					$job_title = get_sub_field('job_title');
					$job_description = get_sub_field('job_description');
					?>
					<h2><?php echo $job_title; ?></h2>
					<p>
						<?php echo  $job_description;?>
					</p>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="uk-width-1-1@m">
			<?php
			while ( have_posts() ) : the_post(); ?>

			<?php 
			the_content();

			endwhile; 
			?>

		</div>
	</div>
</div>
</section>
<?php
get_footer();
?>
