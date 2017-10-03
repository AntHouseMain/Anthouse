<?php 

get_header(); ?>

<div class="uk-image-cereer-top uk-position-relative">
	<div class="uk-container">
		<div class="info-title" >
			<h2 class="uk-text-uppercase" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">FIND YOUR DREAM WORK</h2>
			<hr uk-scrollspy="cls: uk-animation-fade; repeat: true">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			</p>
		</div>
	</div>
</div>

<section class="uk-section">
	<div class="uk-container">
		<div uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>VACANCIES</span>
				</h2>				
				<b>Make  your choice now</b>
			</div>
		</div>
	</div>
</section>
<section class="uk-career uk-position-relative">
	<div class="uk-container">
		<?php
		if ( have_posts() ) : ?>
		<header class="page-header">

			<?php
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>
		<div uk-grid>
			<div class="uk-width-1-1 uk-width-7-10@s uk-width-8-10@m">
				<div class="uk-career-search-box">
					<input type="text" class="uk-job-search-input"
					maxlength="50"
					placeholder="Keywords (optional):"
					value=""/>
				</div>
			</div>
			<div class="uk-width-1-1 uk-width-3-10@s uk-width-2-10@m uk-text-center uk-text-left@s">
				<button class="uk-job-search-button" type="Submit" name="Search" value="search">SEARCH<i uk-icon="icon: arrow-right; ratio: 1.3"></i></button>
			</div>
			<span class="uk-text-uppercase uk-width-1-1@s uk-width-1-7@m uk-width-1-1 uk-flex uk-flex-center uk-flex-left@m uk-flex-wrap">filter by:</span>

			<ul id='jobFilterMenu' 
			class="uk-width-8-10@m uk-career-tab uk-flex uk-flex-row uk-flex-wrap uk-flex-start">
			
			<li>
				<label>
					<input data-filter="Cloud_DevOps" class="uk-checkbox uk-job-checkbox" type="checkbox">Cloud & DevOps
				</label>
			</li>
			<li>		
				<label>
					<input data-filter="S_M_PR" class="uk-checkbox uk-job-checkbox" type="checkbox">Sales, Marketing & PR
				</label>
			</li>
			<li>
				<label>
					<input data-filter="Software_Architecture" class="uk-checkbox uk-job-checkbox" type="checkbox">Software Architecture
				</label>
			</li>
			<li>
				<label>
					<input data-filter="Software_Engineering" class="uk-checkbox uk-job-checkbox" type="checkbox">Software Engineering
				</label>
			</li>
			<li>
				<label>
					<input data-filter="Managment" class="uk-checkbox uk-job-checkbox" type="checkbox">Managment
				</label>
			</li>
			<li>
				<label>
					<input data-filter="UX_Design" class="uk-checkbox uk-job-checkbox" type="checkbox">UX & Design
				</label>
			</li>
			<li>
				<label>
					<input data-filter="Training_Coaching" class="uk-checkbox uk-job-checkbox" type="checkbox">Training & Coaching
				</label>
			</li>
			<li>
				<label>
					<input data-filter="Soft_Test_Engin" class="uk-checkbox uk-job-checkbox" type="checkbox">	Software Test Engineering
				</label>
			</li>
		</ul>
		<div class="uk-table-job  uk-flex uk-flex-column uk-margin-medium-top uk-width-1-1@m ">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content',  'career' );
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; 
		?>
		<?php get_template_part( 'template-parts/button-career', '' ); ?>
	</div>

</div>
</div>
</section>

<section class="uk-section">
	<div class="uk-container">
		<div uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>DON’T FIND A SUITABLE VACANCY?</span>
				</h2>				
				<b>Send us your resume, and we will contact you when there is something suitable</b>
			</div>
		</div>
	</div>
</section>
<section class="uk-section-form-career">
	<div class="uk-container">
		<div class="uk-form-career uk-grid-small uk-padding-remove uk-margin-medium-bottom">
			<?php echo do_shortcode( '[contact-form-7 id="270" title="career_form"]' ); ?>
		</div>
	</div>
</section>

<?php get_footer();	?>