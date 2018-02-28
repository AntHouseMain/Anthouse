<?php

get_header(); ?>

<div class="uk-image-projects-top uk-position-relative">
	<div class="uk-container">
		<div class="info-title" >
			<h2 class="uk-text-uppercase" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">WHAT WE DO</h2>
			<hr uk-scrollspy="cls: uk-animation-fade; repeat: true">
			<p>

			</p>
		</div>
	</div>
</div>
<section class="uk-margin-large-top uk-project uk-position-relative">
	<div class="uk-container">
		<?php
		if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>
		<div uk-grid>
			<span class="uk-text-uppercase uk-width-1-1@s uk-width-1-7@m uk-widt-1-1 uk-flex uk-flex-center uk-flex-left@m uk-flex-wrap">filter by:</span>
			<ul id='projectFilterMenu'
			class="uk-project-tab uk-flex uk-flex-center uk-flex-row uk-flex-column@m uk-flex-left@s uk-flex-wrap uk-flex-middle uk-margin-large-bottom" data-uk-tab>
			<li class="uk-active">
				<a data-filter='all'>All</a>
			</li>
			<li>
				<a data-filter='ideas'>Ideas</a>
			</li>
			<li>
				<a data-filter='projects' >Projects</a>
			</li>
			<li>
				<a data-filter='web_design'>Web Design</a>
			</li>
			<li>
				<a data-filter='illustrations'>Illustrations</a>
			</li>
		</ul>
		<ul class="uk-switcher uk-margin ">
			<li class="uk-animation-fade">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content',  'projects' );

				endwhile;
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;

				?>
				<?php get_template_part( 'template-parts/button-load-more', '' ); ?>
			</li>
			<li class="uk-filter-project"></li>
			<li class="uk-filter-project"></li>
			<li class="uk-filter-project"></li>
			<li class="uk-filter-project"></li>
		</ul>

	</div>
</div>
<div id="ajaxSpinner">
	<div class="cssload-thecube">
		<div class="cssload-cube cssload-c1"></div>
		<div class="cssload-cube cssload-c2"></div>
		<div class="cssload-cube cssload-c4"></div>
		<div class="cssload-cube cssload-c3"></div>
	</div>
</div>
</section>

<?php get_footer();	?>
