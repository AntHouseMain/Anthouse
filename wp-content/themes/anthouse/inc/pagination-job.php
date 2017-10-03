<?php 
function true_load_posts_job(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post(); 

	get_template_part( 'template-parts/content',  'career' );
	
	endwhile;
	endif;
	wp_reset_postdata();
	wp_die();
}
add_action('wp_ajax_loadmore_career', 'true_load_posts_job');
add_action('wp_ajax_nopriv_loadmore_career', 'true_load_posts_job');

add_filter( 'posts_where', 'title_like_posts_where', 10, 2 );
function title_like_posts_where( $where, &$wp_query ) {
	global $wpdb;
	if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
		$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $post_title_like ) ) . '%\'';
	}
	return $where;
}

function get_job_by_filter (){

	$filter_query = $_GET['filter_query'];
	$filters = $_GET['filters'];
	$meta_query = array('relation' => 'OR');
	foreach( $filters as $item ){
		$meta_query[] = array(
			'key'     => 'checkbox_filter_job',
			'value'   => $item,
			'compare' => 'LIKE',
			);
	}
	$args = array(
		'post_status'=> 'publish',
		'post_type' => 'career',
		'post_title_like' => $filter_query,
		'meta_query' => $meta_query
		);

	$query = new WP_Query( $args );
	if( $query->have_posts() ):
		while($query->have_posts()): $query->the_post();
	get_template_part( 'template-parts/content',  'career' ); 
	endwhile;
	endif;	
	wp_reset_postdata();
	wp_die();
}

add_action('wp_ajax_filter_job', 'get_job_by_filter');
add_action('wp_ajax_nopriv_filter_job', 'get_job_by_filter');