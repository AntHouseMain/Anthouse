<?php 
get_header(); 
?>
<section class="uk-breadcrumbs-section">
	<div class="uk-container">
		<?php if( function_exists('all_breadcrumbs') ) all_breadcrumbs(' > '); ?>
	</div>
</section>
<div class="uk-container single-1414">
	<div class="categories uk-margin-medium-top">
		<p>
			<?php 
			$field = get_field_object('checkbox_filter'); 
			$colors = get_field('checkbox_filter');

			foreach($colors as $key => $val) {
				$label = $colors[$key];
				echo $field['choices'][$label]; 
			}
			?>
			
		</p>
	</div>
	<div class="uk-post-title-single">
		<?php
		the_title('<h3>', '</h3>'); 	
		?>
	</div>
	<div uk-grid>
		<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-2@m">
			<?php echo get_the_post_thumbnail() ?>
		</div>
		<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-2@m uk-flex uk-flex-column uk-flex-wrap uk-flex-center">
			<div class="uk-technologies uk-margin-small-bottom">
				<h3>Technologies</h3>
				<p><?php the_field('projects_technologies'); ?></p>
			</div>
			<div class="uk-active-link">
				<h3>Active link</h3>
				<a href="<?php 
				the_field('projects_link');
				?>"  target="_blank">
				<?php 
				the_field('projects_link');
				?></a>
			</div>
		</div>
		<div class="uk-width-1-1@m uk-margin-large-bottom">
			<?php
			while ( have_posts() ) : the_post(); ?>

			<?php 
			the_content();

			endwhile; // End of the loop.
			?>

		</div>
	</div>
</div>
<?php
get_footer();
?>
