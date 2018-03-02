<?php

/*
Template Name: Contacts
*/

get_header(); ?>

<div class="uk-image-contacts-top uk-position-relative">
	<div class="uk-container">
		<div class="info-title" >
			<h2 class="uk-text-uppercase" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">CONTACT US </h2>
			<hr uk-scrollspy="cls: uk-animation-fade; repeat: true">
			<p>Ukraine, Kharkiv  |  itant.house@gmail.com  |   (063) 782 06 36  |  (096) 176 76 98
			</p>
		</div>
	</div>
</div>

<!--== Just-ask ==-->
<section class="uk-section">
	<div class="uk-container">
		<div uk-grid>
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>JUST ASK US ANYTHING</span>
				</h2>
				<b>The form below can help us help you better</b>
			</div>
		</div>
	</div>
</section>
<!--== /Just-ask ==-->
<!--== Form ==-->
<section class="uk-contact-form-section">
	<div class="uk-container">
		<div class="uk-form-contact uk-grid-small uk-padding-remove uk-margin-medium-bottom">
			<?php echo do_shortcode( ' [contact-form-7 id="29" title="conact_form"]' ); ?>
		</div>
	</div>
</section>

<!--== /Form ==-->
<?php get_footer(); ?>
