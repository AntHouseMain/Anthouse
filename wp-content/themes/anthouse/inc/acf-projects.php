<?php
function register_fields_for_projects() {
	if ( function_exists( 'acf_add_local_field_group' ) ):
		\acf_add_local_field_group( [
			'key'      => 'projects',
			'title'    => __( 'CONTENT', 'anthouse-theme' ),
			'fields'   => [
			[
			'key'   => 'projects_tab',
			'label' => __( 'PROJECT OPTIONS', 'anthouse-theme' ),
			'name'  => 'projects_tab',
			'type'  => 'tab',
			],
			// [
			// 'key'   => 'projects_image',
			// 'label' => __ ( 'Image', 'anthouse-theme' ),
			// 'name'  => 'image',
			// 'type'  => 'image',
			// ],
			[
			'key'   => 'projects_technologies',
			'label' => __ ( 'Technologies', 'anthouse-theme' ),
			'name'  => 'projects_technologies',
			'type'  => 'text',
			],

			[
			'key'   => 'select_filter_tab',
			'label' => __( 'SELECT FILTER', 'anthouse-theme' ),
			'name'  => 'select_filter_tab',
			'type'  => 'tab',
			],
			[
			'key'     => 'checkbox_filter',
			'label'   => 'Filter',
			'name'    => 'checkbox_filter',
			'type'    => 'checkbox',
			'choices' => [
			// 'all'			=> 'All',
			'ideas'	    => 'Ideas',
			'projects'	    => 'Projects',
			'web_design'    => 'Web Design',
			'illustrations' => 'Illustrations',
			],
			],
			],
			'location' => [
			[
			[
			'param'    => 'post_type',
			'operator' => '==',
			'value'    => 'projects' ,
			],
			],
			],
			] );
	endif;
}

\add_action( 'acf/init', 'register_fields_for_projects' );
?>