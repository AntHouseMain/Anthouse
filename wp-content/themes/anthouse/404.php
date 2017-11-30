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
			<h4><?php _e('404','anthouse'); ?></h4>

			<p><?php _e('eror','anthouse'); ?></p>
		</div><!-- .page-content -->
		<div class="uk-width-1-1@s uk-text-center">
			<h3><?php _e('Please make sure you entered the URL properly, hit the Back button or go to the ','anthouse'); ?><a href="<?php echo site_url()?>""><?php _e('Homepage.','anthouse'); ?></a></h3>
		</div>
	</div>
</section><!-- .error-404 -->



<?php
get_footer();
