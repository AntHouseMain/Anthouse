<?php


function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post();

	get_template_part( 'template-parts/content',  'projects' ); 
	endwhile;
	endif;
	wp_reset_postdata();
	wp_die();
}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function get_post_by_filter(){

	$filter_type = $_GET['filter_type'];

	$args = array(
		'post_status'=> 'publish',
		'post_type' => 'projects',
		'meta_query' => array(
			array(
				'key'=> 'checkbox_filter',
				'value'=> $filter_type,
				'compare'=> 'LIKE'
				)
			)
		);

	$query = new WP_Query( $args );
	if( $query->have_posts() ):
		while($query->have_posts()): $query->the_post();
	get_template_part( 'template-parts/content',  'projects' ); 
	endwhile;
	endif;	
	wp_reset_postdata();
	wp_die();
}

add_action('wp_ajax_filter_projects', 'get_post_by_filter');
add_action('wp_ajax_nopriv_filter_projects', 'get_post_by_filter');
