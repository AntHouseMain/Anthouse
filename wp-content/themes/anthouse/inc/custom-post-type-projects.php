<?php 
// Projects
function create_projects() {
  register_post_type('Projects', array(
    'labels' => array(
      'name'            => __( 'Projects&Products' ),
      'singular_name'   => __( 'Projects&Products' ),
      'add_new'         => __( 'Add New' ),
      'add_new_item'    => __( 'Add Projects item' ),
      'edit'            => __( 'Edit Projects' ),
      'edit_item'       => __( 'Edit Projects item' ),
      'new_item'        => __( 'Single Projects' ),
      'all_items'       => __( 'All Posts' ),
      'view'            => __( 'View Projects' ),
      'view_item'       => __( 'View single Projects' ),
      'search_items'    => __( 'Search Projects' ),
      'not_found'       => __( 'News not found' ),
      ),
    'public' => true, 
    'menu_position' => 5,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array( '' ),
    'has_archive' => true,
    'capability_type' => 'post',
    'menu_icon'   => 'dashicons-portfolio',
    'rewrite' => array('slug' => 'projects'),
    ));
}
add_action( 'init', 'create_projects' );
?>