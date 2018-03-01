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
									<?php echo get_sub_field('footer_phone_item',2); ?>
								</a>
							</li>
						<?php endwhile; ?>
						<li>
							<a href="mailto:<?php echo get_sub_field('footer_mail'); ?>">
								<?php echo get_field('footer_mail',2);

								 ?>
							</a>
						</li>
						<li>
							<a href="skype:<?php echo get_field('footer_skype',2); ?>">
								<?php echo get_field('footer_skype',2); ?>
							</a>
						</li>
						<li>
							<a href="https://goo.gl/maps/zKJSJGhfcc92">
								<?php echo get_field('footer_location',2); ?>
							</a>
						</li>
					</ul>
				<?php endif; ?>
			</div>
			<div class="uk-width-2-3@s uk-width-2-3@m">
				<h2><?php echo get_field('footer_title_2',2); ?></h2>
				<?php echo get_field('footer_description',2); ?>
			</div>
		</div>

		<div uk-grid>
			<div class="uk-social uk-width-1-1 uk-width-1-3@s uk-width-1-3@m uk-flex uk-flex-row uk-flex-wrap ">
				<a href="<?php echo get_field('footer_facebook',2); ?>"></a>
				<a href="<?php echo get_field('footer_linkedin',2); ?>"></a>
				<a href="<?php echo get_field('footer_google_plus',2); ?>"></a>
				<a href="<?php echo get_field('footer_upwork',2); ?>"></a>
			</div>
			<div class="uk-width-1-1 uk-width-2-3@s uk-width-2-3@m uk-flex uk-flex-right@s  uk-flex-left uk-flex-wrap uk-flex-middle">
				<h3><?php echo get_field('footer_copyright',2) ?></h3>
			</div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
