<?php
function register_fields_front_page() {
	if ( function_exists( 'acf_add_local_field_group' ) ):
		\acf_add_local_field_group( [
			'key'      => 'projects-slider',
			'title'    => __( 'Content', 'anthouse-theme' ),
			'fields'   => [
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
							'key'   => 'latest_projects_description',
							'label' => __ ( 'Description', 'anthouse-theme' ),
							'name'  => 'description',
							'type'  => 'wysiwyg',
						],
					],
				],
				[
					'key'   => 'want_tab',
					'label' => __( 'LEARN MORE', 'anthouse-theme' ),
					'name'  => 'want_tab',
					'type'  => 'tab',
				],
				[
					'key'   => 'learn_name',
					'label' => __ ( '', 'anthouse-theme' ),
					'name'  => 'title',
					'type'  => 'text',
				],
				[
					'key'   => 'learn_name_small',
					'label' => __ ( '', 'anthouse-theme' ),
					'name'  => 'learn_name_small',
					'type'  => 'text',
				],
				[
					'key'   => 'learn_description',
					'label' => __ ( 'Description', 'anthouse-theme' ),
					'name'  => 'description',
					'type'  => 'wysiwyg',
				],
				[
					'key'   => 'btn_link_next',
					'label' => __ ( '', 'anthouse-theme' ),
					'name'  => 'btn_link_next',
					'type'  => 'link',
				],
				[
					'key'   => 'footer_tab',
					'label' => __( 'FOOTER INFO', 'anthouse-theme' ),
					'name'  => 'footer_tab',
					'type'  => 'tab',
				],
				[
					'key'   => 'footer_title_1',
					'label' => __ ( 'First title', 'anthouse-theme' ),
					'name'  => 'footer_title_1',
					'type'  => 'text',
				],
				[
					'key'   => 'footer_title_2',
					'label' => __ ( 'Second title', 'anthouse-theme' ),
					'name'  => 'footer_title_2',
					'type'  => 'text',
				],
				[
					'key'   => 'footer_description',
					'label' => __ ( 'Description', 'anthouse-theme' ),
					'name'  => 'footer_description',
					'type'  => 'wysiwyg',
				],
				[
					'key'   => 'footer_copyright',
					'label' => __ ( '©', 'anthouse-theme' ),
					'name'  => 'footer_copyright',
					'type'  => 'text',
				],
				
				[
					'key'   => 'footer_social',
					'label' => __( 'Footer (networks and phones)', 'anthouse-theme' ),
					'name'  => 'footer_social',
					'type'  => 'tab',
				],
				[
					'key'        => 'footer_phone',
					'label'      => __ ( 'Phone number', 'anthouse-theme' ),
					'name'       => 'footer_phone',
					'type'       => 'repeater',
					'layout'     => 'block',
					'max'        => '0',
					'sub_fields' => [
						[
							'key'   => 'footer_phone_item',
							'label' => __ ( 'Number', 'anthouse-theme' ),
							'name'  => 'footer_phone_item',
							'type'  => 'text',
						],
						
					],
				],
				[
					'key'   => 'footer_mail',
					'label' => __ ( 'Mail', 'anthouse-theme' ),
					'name'  => 'footer_smail',
					'type'  => 'text',
				],
				[
					'key'   => 'footer_location',
					'label' => __ ( 'Location', 'anthouse-theme' ),
					'name'  => 'footer_location',
					'type'  => 'text',
				],
				[
					'key'   => 'url_footer_location',
					'label' => __ ( 'URL location', 'anthouse-theme' ),
					'name'  => 'url_footer_location',
					'type'  => 'url',
				],
				[
					'key'   => 'footer_facebook',
					'label' => __ ( 'Facebook', 'anthouse-theme' ),
					'name'  => 'footer_facebook',
					'type'  => 'url',
				],
				[
					'key'   => 'footer_skype',
					'label' => __ ( 'Skype', 'anthouse-theme' ),
					'name'  => 'footer_skype',
					'type'  => 'text',
				],
				[
					'key'   => 'footer_linkedin',
					'label' => __ ( 'Linkedin', 'anthouse-theme' ),
					'name'  => 'footer_linkedin',
					'type'  => 'url',
				],

				[
					'key'   => 'footer_google_plus',
					'label' => __ ( 'Google', 'anthouse-theme' ),
					'name'  => 'footer_google_plus',
					'type'  => 'url',
				],
				[
					'key'   => 'footer_upwork',
					'label' => __ ( 'Upwork', 'anthouse-theme' ),
					'name'  => 'footer_upwork',
					'type'  => 'url',
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