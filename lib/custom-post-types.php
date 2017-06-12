<?php

// Strings used throughout ownCloud.org.
require get_template_directory().'/theme-setup.php';


//History
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//

function cpt_faq() {

  $labels = array(
    'name'               => _x( 'FAQ', 'post type general name' ),
    'singular_name'      => _x( 'FAQ', 'post type singular name' ),
    'add_new'            => _x( 'Add','history'),
    'add_new_item'       => __( 'Add new item' ),
    'edit_item'          => __( 'Edit item' ),
    'new_item'           => __( 'New item' ),
    'all_items'          => __( 'All items' ),
    'view_item'          => __( 'View items' ),
    'search_items'       => __( 'Search items' ),
    'not_found'          => __( 'No items found' ),
    'not_found_in_trash' => __( 'No items found in trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'FAQ'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'FAQ Management',
    'menu_icon'     => get_template_directory_uri().'/assets/images/icons/cpt-faq.svg',
    'public'        => true,
    'menu_position' => 30,
    'exclude_from_search' => true,
    'show_in_admin_bar'   => false,
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => false,
    'query_var'           => false,
    'supports'      => array( 'title','editor' ),
    'has_archive'   => false
  );
  register_post_type( 'faq', $args );

}

if($FAQ) {
 add_action( 'init', 'cpt_faq' );
}


//Provider
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//

function cpt_provider() {

  $labels = array(
    'name'               => _x( 'Providers', 'post type general name' ),
    'singular_name'      => _x( 'Provider', 'post type singular name' ),
    'add_new'            => _x( 'Add','provider'),
    'add_new_item'       => __( 'Add new provider' ),
    'edit_item'          => __( 'Edit provider' ),
    'new_item'           => __( 'New provider' ),
    'all_items'          => __( 'All providers' ),
    'view_item'          => __( 'View providers' ),
    'search_items'       => __( 'Search providers' ),
    'not_found'          => __( 'No providers found' ),
    'not_found_in_trash' => __( 'No providers found in trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Provider'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Provider Management',
    'menu_icon'     => get_template_directory_uri().'/assets/images/icons/cpt-provider.svg',
    'public'        => true,
    'menu_position' => 30,
    'exclude_from_search' => true,
    'show_in_admin_bar'   => false,
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => false,
    'query_var'           => false,
    'supports'      => array( 'title' ),
    'has_archive'   => false
  );
  register_post_type( 'provider', $args );

}

if($PROVIDER) {
 add_action( 'init', 'cpt_provider' );
}
