<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anthouse
 */

?>
</main>

<footer>
	<div class="uk-container">
		<div uk-grid>
			<div class="uk-contact-us uk-width-1-3@s uk-width-1-3@m">
				<h2><?php echo get_field('footer_title_1',2) ?></h2>
				<?php if( have_rows('footer_phone',2) ): ?>
					<ul>
						<?php while( have_rows('footer_phone',2) ): the_row(); ?>
							<li>
								<a  href="tel:<?php echo get_sub_field('footer_phone_item'); ?>">
									<?php echo get_sub_field('footer_phone_item',$post->ID,2); ?>
								</a>
							</li>
						<?php endwhile; ?>
						<li>
							<a href="mailto:<?php echo get_sub_field('footer_mail'); ?>">
								<?php echo get_field('footer_mail',$post->ID); ?>
							</a>
						</li>
						<li>
							<a href="<?php echo get_sub_field('footer_skype'); ?>">
								<?php echo get_field('footer_skype',$post->ID); ?>
							</a>
						</li>
						<li>
							<a href="<?php echo get_field('url_footer_location'); ?>">
								<?php echo get_field('footer_location',$post->ID); ?>
							</a>
						</li>
					</ul>
				<?php endif; ?>
			</div>
			<div class="uk-width-2-3@s uk-width-2-3@m">
				<h2><?php echo get_field('footer_title_2',$post->ID) ?></h2>
				<?php echo get_field('footer_description',$post->ID); ?>
			</div>
		</div>

		<div uk-grid>
			<div class="uk-social uk-width-1-1 uk-width-1-3@s uk-width-1-3@m uk-flex uk-flex-row uk-flex-wrap ">
				<a href="<?php echo get_field('footer_facebook',$post->ID); ?>"></a>
				<!-- <a href="skype:<?php echo get_field('footer_skype',$post->ID); ?>"></a> -->
				<a href="<?php echo get_field('footer_linkedin',$post->ID); ?>"></a>
				<a href="<?php echo get_field('footer_google_plus',$post->ID); ?>"></a>
				<a href="<?php echo get_field('footer_upwork',$post->ID); ?>"></a>
			</div>
			<div class="uk-width-1-1 uk-width-2-3@s uk-width-2-3@m uk-flex uk-flex-right@s  uk-flex-left uk-flex-wrap uk-flex-middle">
				<h3><?php echo get_field('footer_copyright',$post->ID) ?></h3>
			</div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
