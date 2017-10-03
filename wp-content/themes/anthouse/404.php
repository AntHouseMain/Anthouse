<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package anthouse
 */

get_header(); ?>



<section class="uk-section uk-section-error-404">
	<div class="uk-container">
		<header class="page-header uk-width-1-1@s">
			<h2 class="page-title uk-text-uppercase uk-text-center"><?php esc_html_e( 'OOPS, THE PAGE YOU’RE LOOKING FOR CANNOT BE FOUND', 'anthouse' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content uk-text-center uk-eror-404 uk-width-1-1 uk-position-relative">
			<h4>404</h4>

			<p>eror</p>
		</div><!-- .page-content -->
		<div class="uk-width-1-1@s uk-text-center">
			<h3>Please make sure you entered the URL properly, hit the Back button or go to the <a href="<?php echo site_url()?>"">Homepage.</a></h3>
		</div>
	</div>
</section><!-- .error-404 -->



<?php
get_footer();
