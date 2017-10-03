<?php



get_header(); ?>
<section class="uk-breadcrumbs-section">
	<div class="uk-container">
		<?php if( function_exists('all_breadcrumbs') ) all_breadcrumbs('  >  '); ?>
	</div>
</section>
<section class="uk-section  uk-padding-remove-bottom">
	<div class="uk-container">
		<div uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>company`s news</span>
				</h2>				
				<b>tay on top of all the action</b>
			</div>
		</div>
	</div>
</section>
<div class="uk-text-center uk-padding">
	<p>фильтр по годам</p>
</div>
<!-- === Blog-News Section === -->
<section class="uk-section uk-news">
	<div class="uk-container">
		<div uk-grid>
			<?php
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$args = array(
				'posts_per_page' => 6,
				'post_type' => 'post',
				'paged' => $paged
				);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) :
				/* Start the Loop */
			while ( $loop->have_posts() ) : $loop->the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			endwhile;
			?>
			<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			wp_reset_query();
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>