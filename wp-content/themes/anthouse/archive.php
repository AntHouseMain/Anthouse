<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package anthouse
 */

get_header(); ?>

<div class="uk-container">
	<?php
	if ( have_posts() ) : ?>

	<header class="page-header">
		<?php
		the_archive_title( '<h2 class="page-title">', '</h2>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->
	<div uk-grid>
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_format() );

		endwhile;
		?>

		<?php 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>
	<div class="uk-custom-navigation uk-text-center">
		<?php  wp_pagenavi() ?>
	</div>
</div>
<?php	get_footer(); ?>