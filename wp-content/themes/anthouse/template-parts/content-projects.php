<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thememy
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<div class="uk-container">
		<div class="uk-margin-medium-bottom" uk-grid>
			<div class="uk-width-1-1@s uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
				<?php echo get_the_post_thumbnail() ?>
			</div>
			<div class="uk-width-1-1@s uk-width-1-2@m uk-flex uk-flex-wrap uk-flex-column uk-flex-center uk-flex-wrap ">
				<div class="uk-filter-projects">
					<p>
						<?php
						$field = get_field_object('checkbox_filter');
						$colors = get_field('checkbox_filter');

						foreach($colors as $key => $val) {
							$label = $colors[$key];
							echo $field['choices'][$label];
						}
						?>
					</p>
				</div>
				<div class="uk-post-title">
					<?php
					if ( is_single() ) :
						the_title( '<h3>', '</h3>' );
					else :
						the_title( '<h3 class="uk-margin-remove-top"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
					endif;
					?>
				</div>
				<?php
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php anthouse_posted_on(); ?>
				</div>
				<?php
				endif; ?>
				<div class="entry-content">
					<?php
					(is_single() &&'post' === get_post_type() )
					?  the_content()
					:the_truncated_post( 300 ) ;

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'anthouse' ),
						'after'  => '</div>',
						) );
						?>
					</div><!-- .entry-content -->
					<div class="uk-morelink uk-margin-small-bottom uk-text-uppercase uk-margin-small-top">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" >Read more <i uk-icon="icon: arrow-right; ratio: 1.5"> </i></a>
					</div>
					<!-- <div class="social-post uk-margin-small-top">
						<ul class="uk-flex uk-flex-row ">
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
						</ul>
					</div> -->
				</div>
			</div>
			<hr class="uk-margin-small-bottom">
		</div>
	</article>
