<?php
function true_load_posts_news(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post();

	get_template_part( 'template-parts/content',  'news' );

	endwhile;
	endif;
	wp_reset_postdata();
	wp_die();
}
add_action('wp_ajax_loadmore_news', 'true_load_posts_news');
add_action('wp_ajax_nopriv_loadmore_news', 'true_load_posts_news');