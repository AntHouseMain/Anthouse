<?php
function register_fields_for_career() {
	if ( function_exists( 'acf_add_local_field_group' ) ):
		\acf_add_local_field_group( [
			'key'      => 'career',
			'title'    => __( 'CONTENT', 'anthouse-theme' ),
			'fields'   => [
			[
			'key'   => 'career_info_job_tab',
			'label' => __( 'INFO jOB', 'anthouse-theme' ),
			'name'  => 'career_info_job_tab',
			'type'  => 'tab',
			],
			[
			'key'        => 'career_info_job',
			'label'      => __ ( '', 'anthouse-theme' ),
			'name'       => 'career_info_job',
			'type'       => 'repeater',
			'layout'     => 'block',
			'max'        => '0',
			'sub_fields' => [
			[
			'key'   => 'job_title',
			'label' => __ ( 'Title', 'anthouse-theme' ),
			'name'  => 'title',
			'type'  => 'text',
			],
			[
			'key'   => 'job_description',
			'label' => __ ( 'Description', 'anthouse-theme' ),
			'name'  => 'job_description',
			'type'  => 'wysiwyg',
			],
			],
			],
			[
			'key'   => 'job_filter_tab',
			'label' => __( 'SELECTFILTER', 'anthouse-theme' ),
			'name'  => 'job_filter_tab',
			'type'  => 'tab',
			],
			[
			'key'     => 'checkbox_filter_job',
			'label'   => 'Filter Job',
			'name'    => 'checkbox_filter_job',
			'type'    => 'checkbox',
			'choices' => [
			'Cloud_DevOps'	   			=> 'Cloud & DevOps',
			'S_M_PR'	    			=> 'Sales, Marketing & PR',
			'Software_Architecture'	    => 'Software Architecture',
			'Software_Engineering'	    => 'Software Engineering',
			'Managment'	    			=> 'Managment',
			'UX_Design'	    			=> 'UX & Design',
			'Training_Coaching'	  		=> 'Training & Coaching',
			'Soft_Test_Engin'	  		=> 'Software Test Engineering',
			],
			],
			],
			
			'location' => [
			[
			[
			'param'    => 'post_type',
			'operator' => '==',
			'value'    => 'career' ,
			],
			],
			],
			] );
	endif;
}

\add_action( 'acf/init', 'register_fields_for_career' );
?>