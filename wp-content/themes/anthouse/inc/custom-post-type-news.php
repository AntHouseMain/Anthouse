<?php 
// OUR-TEAM
function create_News() {
  register_post_type('News', array(
    'labels' => array(
      'name'            => __( 'News' ),
      'singular_name'   => __( 'News' ),
      'add_new'         => __( 'Add New' ),
      'add_new_item'    => __( 'Add News item' ),
      'edit'            => __( 'Edit News' ),
      'edit_item'       => __( 'Edit News item' ),
      'new_item'        => __( 'Single News' ),
      'all_items'       => __( 'All Posts' ),
      'view'            => __( 'View News' ),
      'view_item'       => __( 'View single News' ),
      'search_items'    => __( 'Search News' ),
      'not_found'       => __( 'News not found' ),
      ),
    'public' => true, 
    'menu_position' => 6,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array( '' ),
    'has_archive' => true,
    'capability_type' => 'post',
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'menu_icon'   => 'dashicons-welcome-view-site',
    'rewrite' => array('slug' => 'news'),
    ));
}
add_action( 'init', 'create_news' );
?>