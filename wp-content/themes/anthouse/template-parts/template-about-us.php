<?php

/*
Template Name: About Us
*/

get_header(); ?>

<div class="uk-image-aboutus-top uk-position-relative">
	<div class="uk-container">
		<div class="info-title" >
			<h2 class="uk-text-uppercase" uk-scrollspy="cls: uk-animation-scale-up; repeat: true"><?php _e('LET’S GET ACQUAINTED','anthouse'); ?></h2>
			<hr uk-scrollspy="cls: uk-animation-fade; repeat: true">

			<!-- <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit','anthouse'); ?></p> -->

			<p></p>

		</div>
	</div>
</div>


<!--== C-News ==-->
<section class="uk-section c-news">
	<div class="uk-container">
		<div uk-grid>
			<div class=" uk-width-1-1 uk-width-1-2@s uk-width-1-2@m uk-position-relative uk-text-uppercase">
				<img src="<?php bloginfo('template_directory'); ?>/img/birds-20.jpg">
				<div class="c-news-items">
					<h2><?php _e('COMPANY’S <br>NEWS','anthouse'); ?></h2>
					<a href="<?php echo get_post_type_archive_link( 'news' );?>"><?php _e('look more','anthouse'); ?><i uk-icon="icon: arrow-right; ratio: 1.3"></i></a>
				</div>
			</div>
			<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-2@m">
				<?php if( have_rows('accordion_info') ): ?>
					<ul uk-accordion>
						<?php while( have_rows('accordion_info') ): the_row(); ?>
							<li >
								<h3 class="uk-accordion-title">
									<?php echo get_sub_field('accordion_title'); ?>
								</h3>
								<div class="uk-accordion-content">
									<?php echo get_sub_field('accordion_description'); ?>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!--== /C-News ==-->

<!-- <section class="uk-section leadership">
	<div class="uk-container">
		<div uk-grid>
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span><?php _e('leadership','anthouse'); ?></span>
				</h2>
			</div>
		</div>
	</div>
	<div class="uk-container uk-margin-medium-top">
		<?php if( have_rows('leadership_team') ): ?>
			<ul class="uk-tab uk-leadership-tab" data-uk-tab>
				<?php while( have_rows('leadership_team') ): the_row(); ?>
					<li class="uk-active">
						<a href="#">
							<h4><?php echo get_sub_field('leadership_name'); ?></h4>
							<p><?php echo get_sub_field('leadership_rank'); ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php if( have_rows('leadership_team') ): ?>
			<ul class="uk-switcher uk-margin">
				<?php while( have_rows('leadership_team') ): the_row(); ?>
					<li>
						<div id="first-leadership" class="uk-margin-medium-top uk-card-description uk-animation-fade" uk-grid>
							<div class="uk-width-1-1 uk-width-1-4@s uk-width-1-4@m uk-flex uk-flex-center uk-flex-column uk-flex-middle">
								<?php $leadership_image = get_sub_field('leadership_image');

								if( !empty($leadership_image) ): ?>
								<img class="l-image" src="<?php echo $leadership_image['url']; ?>" alt="<?php echo $leadership_image['alt']; ?>"  />
							<?php endif; ?>
						</div>
						<div class="uk-width-1-1 uk-width-3-4@s uk-width-3-4@m">
							<div class="uk-flex uk-flex-column uk-flex-wrap" uk-grid>
								<div class="uk-width-1-1">
									<h2><?php echo get_sub_field('leadership_name'); ?></h2>
									<b><?php echo get_sub_field('leadership_rank'); ?></b>
									<?php echo get_sub_field('leadership_description'); ?>
								</div>
								<div uk-grid>
									<div class="uk-width-1-1 uk-width-1-1@s uk-width-2-3@m uk-leadership-contacts">
										<a  href="tel:<?php echo get_sub_field('leadership_phone'); ?>"><?php echo get_sub_field('leadership_phone'); ?></a>
										<a href="mailto:<?php echo get_sub_field('leadership_mail'); ?>"><?php echo get_sub_field('leadership_mail'); ?></a>
									</div>
									<div class="uk-width-1-1 uk-width-1-1@s uk-width-1-3@m  uk-leadership-social uk-flex uk-flex-row uk-flex-wrap uk-flex-right@m uk-flex-center">
										<a href="<?php echo get_sub_field('leadership_facebook'); ?>">
										</a>
										<a href="skype:<?php echo get_sub_field('leadership_skype'); ?>">
										</a>
										<a href="<?php echo get_sub_field('leadership_linkedin'); ?>">
										</a>
										<a href="<?php echo get_sub_field('leadership_google_plus'); ?>">
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div id="second-leadership" class="uk-margin-medium-top uk-card-description uk-animation-fade" uk-grid>
							<div class="uk-width-1-1 uk-width-1-4@s uk-width-1-4@m uk-text-center uk-text-left@s">
								<img class="l-image" src="<?php bloginfo('template_directory'); ?>/img/Layer 9.jpg">
							</div>
							<div class="uk-width-1-1 uk-width-3-4@s uk-width-3-4@m">
								<div class="uk-flex uk-flex-column uk-flex-wrap" uk-grid>
									<div class="uk-width-1-1">
										<h2>VLAD GORBATKO</h2>
										<b><span>ANTHOUSE CEO</span> & President</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur magnam, distinctio id ex voluptatum alias in sunt ipsam error. Odit ipsum nesciunt rem necessitatibus porro provident facilis quod sunt dolore.
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur magnam, distinctio id ex voluptatum alias in sunt ipsam error. Odit ipsum nesciunt rem necessitatibus porro provident facilis quod sunt dolore.</p>
										</div>
										<div uk-grid>
											<div class="uk-width-1-1 uk-width-1-1@s uk-width-2-3@m uk-leadership-contacts">
												<a  href="tel:+3 (8067)48 735 14">+38(067)-48-735-14</a>
												<a href="mailto: itant.house@gmail.com">itant.house@gmail.com</a>
											</div>
											<div class="uk-width-1-1 uk-width-1-1@s uk-width-1-3@m  uk-leadership-social uk-flex uk-flex-row uk-flex-wrap uk-flex-right@m">
												<a href=""></a>
												<a href=""></a>
												<a href=""></a>
												<a href=""></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div id="third-leadership" class="uk-margin-medium-top uk-card-description uk-animation-fade" uk-grid>
								<div class="uk-width-1-1 uk-width-1-4@s uk-width-1-4@m uk-text-center uk-text-left@s">
									<img class="l-image" src="<?php bloginfo('template_directory'); ?>/img/Layer 11.jpg">
								</div>
								<div class="uk-width-1-1 uk-width-3-4@s uk-width-3-4@m">
									<div class="uk-flex uk-flex-column uk-flex-wrap" uk-grid>
										<div class="uk-width-1-1">
											<h2>EVGENIY BUDUKOV</h2>
											<b><span>ANTHOUSE CEO</span> & President</b>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur magnam, distinctio id ex voluptatum alias in sunt ipsam error. Odit ipsum nesciunt rem necessitatibus porro provident facilis quod sunt dolore.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur magnam, distinctio id ex voluptatum alias in sunt ipsam error. Odit ipsum nesciunt rem necessitatibus porro provident facilis quod sunt dolore.</p>
											</div>
											<div uk-grid>
												<div class="uk-width-1-1 uk-width-1-1@s uk-width-2-3@m uk-leadership-contacts">
													<a  href="tel:+3 (8067)48 735 14">+38(067)-48-735-14</a>
													<a href="mailto: itant.house@gmail.com">itant.house@gmail.com</a>
												</div>
												<div class="uk-width-1-1 uk-width-1-1@s uk-width-1-3@m  uk-leadership-social uk-flex uk-flex-row uk-flex-wrap uk-flex-right@m">
													<a href=""></a>
													<a href=""></a>
													<a href=""></a>
													<a href=""></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>

</section> -->
<section class="uk-section our-team">
	<div class="uk-container">
		<div uk-grid>
			<div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">

				<section class="uk-section our-team">
					<div class="uk-container">
						<div uk-grid>
							<div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
								<h2 class="uk-heading-line uk-text-uppercase">
									<span>OUR TEAM</span>
								</h2>
								<b>Team of leading developers</b>
							</div>
						</div>
					</div>
					<div class="uk-container">
						<div class="uk-text-center " uk-grid>
							<?php if( have_rows('about_us_our_team') ): ?>
								<?php while( have_rows('about_us_our_team') ): the_row();
								$our_team_image = get_sub_field('our_team_image');
								$our_team_name = get_sub_field('our_team_name');
								?>
								<?php
								if( !empty($our_team_image) ): ?>
								<div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m our-team-item">
									<img class="" src="<?php echo $our_team_image['url']; ?>" alt="<?php echo $our_team_image['alt']; ?>" />
								<?php endif; ?>
								<h3><?php echo $our_team_name ?></h3>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="uk-container">
		<div class="uk-text-center " uk-grid>
			<?php if( have_rows('about_us_our_team') ): ?>
				<?php while( have_rows('about_us_our_team') ): the_row();
				$our_team_image = get_sub_field('our_team_image');
				$our_team_name = get_sub_field('our_team_name');
				?>
				<?php
				if( !empty($our_team_image) ): ?>
				<div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m our-team-item">
					<img class="" src="<?php echo $our_team_image['url']; ?>" alt="<?php echo $our_team_image['alt']; ?>" />
				<?php endif; ?>
				<h3><?php echo $our_team_name ?></h3>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
</section>

<?php get_footer(); ?>
		<?php get_footer(); ?>
