<?php
function register_fields_for_our_team()
{
    if (function_exists('acf_add_local_field_group')):
        \acf_add_local_field_group([
            'key' => 'about_us',
            'title' => __('Content', 'anthouse-theme'),
            'fields' => [
                [
                    'key' => 'accordion_tab',
                    'label' => __('Info', 'anthouse-theme'),
                    'name' => 'accordion_tab',
                    'type' => 'tab',
                ],
                [
                    'key' => 'accordion_info',
                    'label' => __('', 'anthouse-theme'),
                    'name' => 'accordion_info',
                    'type' => 'repeater',
                    'layout' => 'row',
                    'max' => '0',
                    'sub_fields' => [

                        [
                            'key' => 'accordion_title',
                            'label' => __('Title', 'anthouse-theme'),
                            'name' => 'accordion_title',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'accordion_description',
                            'label' => __('Description', 'anthouse-theme'),
                            'name' => 'accordion_description',
                            'type' => 'wysiwyg',
                        ],
                    ],
                ],
//				[
//					'key'   => 'Leadership_tab',
//					'label' => __( 'Leadership', 'anthouse-theme' ),
//					'name'  => 'leadership_tab',
//					'type'  => 'tab',
//				],
//				[
//					'key'        => 'leadership_team',
//					'label'      => __ ( '', 'anthouse-theme' ),
//					'name'       => 'leadership_team',
//					'type'       => 'repeater',
//					'layout'     => 'row',
//					'max'        => '0',
//					'sub_fields' => [
//						[
//							'key'   => 'leadership_image',
//							'label' => __ ( 'Photo', 'anthouse-theme' ),
//							'name'  => 'leadership_image',
//							'type'  => 'image',
//						],
//						[
//							'key'   => 'leadership_name',
//							'label' => __ ( 'Name', 'anthouse-theme' ),
//							'name'  => 'leadership_name',
//							'type'  => 'text',
//						],
//						[
//							'key'   => 'leadership_rank',
//							'label' => __ ( 'Rank', 'anthouse-theme' ),
//							'name'  => 'leadership_rank',
//							'type'  => 'text',
//						],
//						[
//							'key'   => 'leadership_description',
//							'label' => __ ( 'Description', 'anthouse-theme' ),
//							'name'  => 'leadership_description',
//							'type'  => 'wysiwyg',
//						],
//						[
//							'key'   => 'leadership_phone',
//							'label' => __ ( 'Phone', 'anthouse-theme' ),
//							'name'  => 'leadership_phone',
//							'type'  => 'text',
//						],
//						[
//							'key'   => 'leadership_mail',
//							'label' => __ ( 'Mail', 'anthouse-theme' ),
//							'name'  => 'leadership_mail',
//							'type'  => 'text',
//						],
//						[
//							'key'   => 'leadership_facebook',
//							'label' => __ ( 'Facebook', 'anthouse-theme' ),
//							'name'  => 'leadership_facebook',
//							'type'  => 'url',
//						],
//						[
//							'key'   => 'leadership_skype',
//							'label' => __ ( 'Skype', 'anthouse-theme' ),
//							'name'  => 'leadership_skype',
//							'type'  => 'text',
//						],
//						[
//							'key'   => 'leadership_linkedin',
//							'label' => __ ( 'Linkedin', 'anthouse-theme' ),
//							'name'  => 'leadership_linkedin',
//							'type'  => 'url',
//						],
//						[
//							'key'   => 'leadership_google_plus',
//							'label' => __ ( 'Google+', 'anthouse-theme' ),
//							'name'  => 'leadership_google_plus',
//							'type'  => 'url',
//						],
//					],
//				],
                [
                    'key' => 'our_team_tab',
                    'label' => __('Our team', 'anthouse-theme'),
                    'name' => 'our_team_tab',
                    'type' => 'tab',
                ],
                [
                    'key' => 'about_us_our_team',
                    'label' => __('Teammate', 'anthouse-theme'),
                    'name' => 'our_team',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'max' => '0',
                    'sub_fields' => [
                        [
                            'key' => 'our_team_image',
                            'label' => __('Photo', 'anthouse-theme'),
                            'name' => 'image',
                            'type' => 'image',
                        ],
                        [
                            'key' => 'our_team_name',
                            'label' => __('Name', 'anthouse-theme'),
                            'name' => 'title',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'our_team_position',
                            'label' => __('Position', 'anthouse-theme'),
                            'name' => 'our_team_position',
                            'type' => 'text',
                        ],
                    ],
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'template-parts/template-about-us.php',
                    ],
                ],
            ],
        ]);
    endif;
}

\add_action('acf/init', 'register_fields_for_our_team');
?>