<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package anthouse
 */

?>
<article class="uk-width-1-1 uk-width-1-2@s uk-width-1-2@m" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-description">

		<?php if ( 'post' === get_post_type() ) : ?>
			<p class="post-time uk-text-bold uk-margin-medium-top">
				<?php the_time('j/m/Y'); ?>
			</p>
			<?php
			endif; ?>
			<div class="uk-post-title">
				<?php 
				if ( is_single() ) :
					the_title( '<h3>', '</h3>' );
				else :
					the_title( '<h3 class="uk-margin-remove-top"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;
				?>
			</div>
			<div class="entry-content">
				<?php
				(is_single() &&'post' === get_post_type() )
				?  the_content()  
				:the_truncated_post( 300 ) ;

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'thememy' ),
					'after'  => '</div>',
					) );
					?>
					<div class="uk-morelink uk-margin-small-bottom uk-text-uppercase uk-margin-small-top">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" >Read more <i uk-icon="icon: arrow-right; ratio: 1.5"> </i></a>
					</div>
					<div class="social-post uk-margin-small-top">
						<ul class="uk-flex uk-flex-row ">
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
						</ul>
					</div>
				</div>	
			</div>
			<hr>
		</article><!-- #post-<?php the_ID(); ?> -->