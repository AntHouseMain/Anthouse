<?php get_header(); ?>

<!-- <section class="uk-breadcrumbs-section">
	<div class="uk-container">
		<?php if( function_exists('all_breadcrumbs') ) all_breadcrumbs('  >  '); ?>
	</div>
</section> -->
<section class="uk-section  uk-padding-remove-bottom">
	<div class="uk-container">
		<div uk-grid>
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>company`s news</span>
				</h2>
				<b>Stay on top of all the action</b>
			</div>
		</div>
	</div>
</section>

<section class="uk-margin-medium-top">
	<div class="uk-container">

		<?php
		if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
			// the_archive_title( '<h2 class="page-title">', '</h2>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>
		<div uk-grid>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content',  'news' );

			endwhile;
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			<?php get_template_part( 'template-parts/button-load-more-news', '' ); ?>
		</div>
	</div>
</section>
<?php
get_footer();
?>
