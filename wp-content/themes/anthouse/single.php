<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package anthouse
 */

get_header(); ?>
<section class="uk-breadcrumbs-section">
	<div class="uk-container">
		<?php if( function_exists('all_breadcrumbs') ) all_breadcrumbs(' > '); ?>
	</div>
</section>
<div class="uk-container">
	<div uk-grid>
		<div class="uk-width-1-1">

			<?php
			while ( have_posts() ) : the_post(); ?>
			<p class="post-time uk-text-bold uk-margin-medium-top">
				<?php the_time('j/m/Y'); ?>
			</p>
			<div class="uk-post-title-single">
				<?php
				the_title('<h3>', '</h3>'); 	
				?>
			</div>
			<?php 
			the_content();
			endwhile; // End of the loop.
			?>

		</div>
	</div>
</div>

<?php
get_footer();
