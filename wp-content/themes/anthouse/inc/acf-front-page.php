<?php
function register_fields_front_page() {
	if ( function_exists( 'acf_add_local_field_group' ) ):
		\acf_add_local_field_group( [
			'key'      => 'projects-slider',
			'title'    => __( 'CONTENT', 'anthouse-theme' ),
			'fields'   => [
			[
			'key'   => 'first_tab',
			'label' => __( 'LATEST PROJECTS SLIDER', 'anthouse-theme' ),
			'name'  => 'latest_projects_tab',
			'type'  => 'tab',
			],
			[
			'key'        => 'latest_projects',
			'label'      => __ ( '', 'anthouse-theme' ),
			'name'       => 'latest_project',
			'type'       => 'repeater',
			'layout'     => 'block',
			'max'        => '0',
			'sub_fields' => [
			[
			'key'   => 'latest_projects_image',
			'label' => __ ( 'Image', 'anthouse-theme' ),
			'name'  => 'image',
			'type'  => 'image',
			],
			[
			'key'   => 'latest_projects_name',
			'label' => __ ( 'Name Project', 'anthouse-theme' ),
			'name'  => 'title',
			'type'  => 'text',
			],
			[
			'key'   => 'latest_projects_link',
			'label' => __ ( 'Link Project', 'anthouse-theme' ),
			'name'  => 'link',
			'type'  => 'text',
			],
			[
			'key'   => 'latest_projects_description',
			'label' => __ ( 'Description', 'anthouse-theme' ),
			'name'  => 'description',
			'type'  => 'wysiwyg',
			],
			],
			],
			[
			'key'   => 'second_tab',
			'label' => __( 'OUR FEATURES', 'anthouse-theme' ),
			'name'  => 'our_features_tab',
			'type'  => 'tab',
			],
			[
			'key'        => 'our_features',
			'label'      => __ ( '', 'anthouse-theme' ),
			'name'       => 'our_features',
			'type'       => 'repeater',
			'layout'     => 'block',
			'max'        => '0',
			'sub_fields' => [
			[
			'key'   => 'our_features_image',
			'label' => __ ( 'Image', 'anthouse-theme' ),
			'name'  => 'our_features_image',
			'type'  => 'image',
			],
			[
			'key'   => 'our_features_name',
			'label' => __ ( 'Name', 'anthouse-theme' ),
			'name'  => 'our_features_name',
			'type'  => 'text',
			],
			[
			'key'   => 'our_features_description',
			'label' => __ ( 'Description', 'anthouse-theme' ),
			'name'  => 'our_features_description',
			'type'  => 'wysiwyg',
			],
			],
			],
			],

			'location' => [
			[
			[
			'param'    => 'page_type',
			'operator' => '==',
			'value'    => 'front_page' ,
			],
			],
			],
			] );
	endif;
}

\add_action( 'acf/init', 'register_fields_front_page' );
?>
