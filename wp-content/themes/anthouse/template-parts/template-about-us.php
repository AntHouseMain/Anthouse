<?php

/*
Template Name: About Us
*/

get_header(); ?>

<div class="uk-image-aboutus-top uk-position-relative">
	<div class="uk-container">
		<div class="info-title" >
			<h2 class="uk-text-uppercase" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">LET’S GET ACQUAINTED </h2>
			<hr uk-scrollspy="cls: uk-animation-fade; repeat: true">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
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
					<h2>COMPANY’S <br>NEWS</h2>
					<a href="<?php echo get_page_link( 37 ); ?>">look more<i uk-icon="icon: arrow-right; ratio: 1.3"></i></a>
				</div>
			</div>
			<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-2@m">
				<ul uk-accordion>
					<li >
						<h3 class="uk-accordion-title">How we work</h3>
						<div class="uk-accordion-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</li>
					<li>
						<h3 class="uk-accordion-title">What we do</h3>
						<div class="uk-accordion-content">
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
						</div>
					</li>
					<li>
						<h3 class="uk-accordion-title">Our process</h3>
						<div class="uk-accordion-content">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--== /C-News ==-->	

<section class="uk-section leadership">
	<div class="uk-container">
		<div uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>leadership</span>
				</h2>				
				<b>The managment of our company</b>
			</div>
		</div>
	</div>
	<div class="uk-container uk-margin-medium-top">
		<ul class="uk-tab uk-leadership-tab" data-uk-tab>
			<li class="uk-active">
				<a href="#">
					<h4>SERGEY GULYAEV</h4>
					<p><span>ANTHOUSE CEO</span> & President</p>
				</a>
			</li>
			<li>
				<a href="#">
					<h4>VLAD GORBATKO</h4>
					<p><span>ANTHOUSE CEO</span> & President</p>
				</a>
			</li>
			<li>
				<a href="#">
					<h4>EVGENIY BUDUKOV</h4>
					<p>PROJECT MANAGER</p></a>
				</li>
			</ul>
			<ul class="uk-switcher uk-margin">
				<li>
					<div id="first-leadership" class="uk-margin-medium-top uk-card-description uk-animation-fade" uk-grid>
						<div class="uk-width-1-1 uk-width-1-4@s uk-width-1-4@m uk-text-center uk-text-left@s">
							<img class="l-image" src="<?php bloginfo('template_directory'); ?>/img/sg.jpg">
						</div>
						<div class="uk-width-1-1 uk-width-3-4@s uk-width-3-4@m">
							<div class="uk-flex uk-flex-column uk-flex-wrap" uk-grid>
								<div class="uk-width-1-1">
									<h2>SERGEY GULYAEV</h2>
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
				</section>

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
		</section>


		<?php get_footer(); ?>