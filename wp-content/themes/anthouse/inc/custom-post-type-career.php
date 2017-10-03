<?php 
// OUR-TEAM
function create_Career() {
  register_post_type('Career', array(
    'labels' => array(
      'name'            => __( 'Career' ),
      'singular_name'   => __( 'Career' ),
      'add_new'         => __( 'Add New' ),
      'add_new_item'    => __( 'Add Career item' ),
      'edit'            => __( 'Edit Career' ),
      'edit_item'       => __( 'Edit Career item' ),
      'new_item'        => __( 'Single Career' ),
      'all_items'       => __( 'All Posts' ),
      'view'            => __( 'View Career' ),
      'view_item'       => __( 'View single Career' ),
      'search_items'    => __( 'Search Career' ),
      'not_found'       => __( 'Career not found' ),
      ),
    'public' => true, 
    'menu_position' => 6,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array(''),
    'has_archive' => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'capability_type' => 'post',
    'menu_icon'   => 'dashicons-hammer',
    'rewrite' => array('slug' => 'career'),
    ));
}
add_action( 'init', 'Create_career' );
?>