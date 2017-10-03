<?php get_header(); ?>
<section>
	<div class="uk-image-front-page-top uk-position-relative">
		<div class="uk-container">
			<div class="info-title" >
				<h2 class="uk-text-uppercase" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">WELCOME TO ANTHOUSE</h2>
				<hr uk-scrollspy="cls: uk-animation-fade; repeat: true">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
			</div>
		</div>
	</div>
</section>
<!--== Our-Features ==-->	

<section class="uk-section our-features">
	<div class="uk-container">
		<div uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>OUR FEATURES</span>
				</h2>				
				<b>Great features for your needs</b>
			</div>
		</div>
		<div class="features-items uk-margin-large-top">
			<div class="uk-text-center uk-flex uk-flex-center" uk-grid> 
				
				<?php if( have_rows('our_features') ): ?>
					<?php while( have_rows('our_features') ): the_row(); 
					$our_features_image = get_sub_field('our_features_image');
					$our_features_name = get_sub_field('our_features_name');
					$our_features_description = get_sub_field('our_features_description');
					?>
					<?php
					if( !empty($our_features_image) ): ?>
					<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-4@m">
						<img src="<?php echo $our_features_image['url']; ?>" alt="<?php echo $our_features_image['alt']; ?>" />
					<?php endif; ?>
					<h3><?php echo $our_features_name; ?></h3>
					<?php
					$our_features_description_content = wp_trim_words(
						$our_features_description, 30);
						?>
						<p>
							<?php echo  $our_features_description_content;?>
						</p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</section>
<!--== /Our-Features ==-->	
<!--== Latest-Projects ==-->	
<section class="uk-section slider-projects">
	<div class="uk-container">
		<div uk-grid> 
			<div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>LATEST PROJECTS</span>
				</h2>				
				<b>Look what we had been working on!</b>
			</div>
		</div>
		<div uk-grid> 
			<div class="uk-width-1-1 uk-text-center ">
				<div class="uk-projects-slider">
					<?php if( have_rows('latest_projects') ): ?>
						<?php while( have_rows('latest_projects') ): the_row(); 
						$latest_projects_image = get_sub_field('latest_projects_image');
						$latest_projects_name = get_sub_field('latest_projects_name');
						$latest_projects_description = get_sub_field('latest_projects_description');
						?>
						<?php
						if( !empty($latest_projects_image) ): ?>
						<div class=" uk-inline-clip uk-transition-toggle">
							<img  src="<?php echo $latest_projects_image['url']; ?>" alt="<?php echo $latest_projects_image['alt']; ?>" />
						<?php endif; ?>
						<div class="uk-transition-fade uk-position-cover uk-overlay-primary  uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-padding-small">
							<h4 class="uk-text-uppercase"><?php echo $latest_projects_name; ?></h4>
							<?php
							$latest_projects_description_content = wp_trim_words(
								$latest_projects_description, 30);
								?>
								<p>
									<?php echo  $latest_projects_description_content;?>
								</p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<!--    slider-->
		</div>
	</div>
</div>
</section>
<!--== /Latest-Projects ==-->	
<!--== Just-Ask ==-->
<section class="just-ask ">
	<div class="uk-container">
		<div class="uk-position-relative" uk-grid> 
			<div class="uk-width-1-1@s uk-width-2-3@m uk-margin-auto uk-text-center just-ask-info">
				<div class="uk-container">
					<h2 class="uk-heading-line uk-text-uppercase">
						<span>WANT TO LEARN MORE?</span>
					</h2>				
					<b>Just ask us anything.</b>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur praesentium corporis facilis aspernatur quisquam nulla, molestias eius, excepturi repellendus laudantium veritatis! Error, architecto quod voluptas ab cum eos quo.</p>
					<div class="uk-width-1-1 link_CU">
						<a href="<?php echo get_page_link( 23 ); ?>">CONTACT US <i uk-icon="icon: arrow-right; ratio: 1.3"></i></a>
					</div>
					<!-- <div class="test"> 	</div> -->
				</div>			
			</div>
		</div>
	</div>
</section>
<!--== /Just-Ask ==-->
<?php get_footer(); ?>