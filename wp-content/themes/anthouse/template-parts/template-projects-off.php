<?php



get_header(); ?>


<div class="top-images-5 uk-position-relative">
	<div class="uk-container">
		<div class="info-title" >
			<h1 class="uk-text-uppercase" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">FIND YOUR DREAM WORK</h1>
			<hr uk-scrollspy="cls: uk-animation-fade; repeat: true">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			</p>
		</div>
	</div>
</div>


<section class="uk-margin-medium-top">
	<div class="uk-container">
		<?php
		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		$args = array(

			'post_type' => 'projects',
			'paged' => $paged
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post();
		get_template_part( 'template-parts/content', 'projects' );
		endwhile;
		?>
		<?php
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;

		wp_reset_query();
		?>

	</div>
</section>


<?php get_footer(); ?>