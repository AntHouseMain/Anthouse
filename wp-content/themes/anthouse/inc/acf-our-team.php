<?php
function register_fields_for_our_team() {
	if ( function_exists( 'acf_add_local_field_group' ) ):
		\acf_add_local_field_group( [
			'key'      => 'about_us',
			'title'    => __( 'OUR TEAM', 'anthouse-theme' ),
			'fields'   => [

			[
			'key'        => 'about_us_our_team',
			'label'      => __ ( 'Teammate', 'anthouse-theme' ),
			'name'       => 'our_team',
			'type'       => 'repeater',
			'layout'     => 'block',
			'max'        => '0',
			'sub_fields' => [
			[
			'key'   => 'our_team_image',
			'label' => __ ( 'Photo', 'anthouse-theme' ),
			'name'  => 'image',
			'type'  => 'image',
			],
			[
			'key'   => 'our_team_name',
			'label' => __ ( 'Name', 'anthouse-theme' ),
			'name'  => 'title',
			'type'  => 'text',
			],
			
			],
			],
			],
			'location' => [
			[
			[
			'param'    => 'page_template',
			'operator' => '==',
			'value'    => 'template-parts/template-about-us.php' ,
			],
			],
			],
			] );
	endif;
}

\add_action( 'acf/init', 'register_fields_for_our_team' );
?>