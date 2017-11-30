<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package anthouse
 */

get_header(); ?>

<section class="uk-section uk-section-search">
	<div class="uk-container">
		<div uk-grid>
			

			<?php
			if ( have_posts() ) : ?>
			

			<div class="uk-width-1-2@m">
				<h2 class="page-title uk-margin-large uk-text-uppercase uk-text-center">
					<?php
					printf( esc_html__( 'Search Results for: %s', 'anthouse' ), '<span>' . get_search_query() . '</span>' );
					?></h2>
				</div>	
				<div class="uk-width-1-2@m uk-search-form">
					<?php get_search_form(); ?>		
				</div>	
				<div class="uk-width-1-1">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

				endwhile;
				?>
				<div class="uk-navigation-search uk-text-center uk-margin-medium-top">
					<?php 
					wp_pagenavi();
					?>
				</div>
				<?php 
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		</div>
	</div>

</section><!-- #primary -->

<?php
get_footer();
