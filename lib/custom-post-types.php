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


//Security Advisories
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//

function cpt_advisories() {

  $labels = array(
    'name'               => _x( 'Security Advisories', 'post type general name' ),
    'singular_name'      => _x( 'Security Advisory', 'post type singular name' ),
    'add_new'            => _x( 'Add Security Advisory','advisories'),
    'add_new_item'       => __( 'Add new Security Advisory' ),
    'edit_item'          => __( 'Edit Security Advisories' ),
    'new_item'           => __( 'New security advisory' ),
    'all_items'          => __( 'All security advisories' ),
    'view_item'          => __( 'View security advisories' ),
    'search_items'       => __( 'Search security advisories' ),
    'not_found'          => __( 'No security advisories found' ),
    'not_found_in_trash' => __( 'No security advisories found in trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Security Advisories'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Security Advisories',
    'menu_icon'     => get_template_directory_uri().'/assets/images/icons/cpt-security-advisories.svg',
    'public'        => true,
    'menu_position' => 40,
    'exclude_from_search' => false,
    'show_in_admin_bar'   => false,
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => true,
    'query_var'           => false,
    'supports'      => array( 'title', 'editor', 'platform','author' ),
    'has_archive'   => true
  );
  register_post_type( 'advisories', $args );

}

// Custom Platform Category
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//

function advisory_platform() {

  $labels = array(
      'name'              => _x( 'Advisory Platforms', 'taxonomy general name' ),
      'singular_name'     => _x( 'Advisory Platform', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Advisory Platforms' ),
      'all_items'         => __( 'All Advisory Platforms' ),
      'parent_item'       => __( 'Parent Advisory Platform' ),
      'parent_item_colon' => __( 'Parent Advisory Platform:' ),
      'edit_item'         => __( 'Edit Advisory Platform' ),
      'update_item'       => __( 'Update Advisory Platform' ),
      'add_new_item'      => __( 'Add Advisory Platform'  ),
      'new_item_name'     => __( 'New Advisory Platform'  ),
      'menu_name'         => __( 'Advisory Platforms' ),
  );
  $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array(
        'slug' => 'advisory-platform',
        'with_front' => false ),
  );

  register_taxonomy( 'platform', array( 'advisories' ), $args );

}


// Custom Version Category
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//


function advisory_versions() {


  $labels = array(
      'name'              => _x( 'Advisory Versions', 'taxonomy general name' ),
      'singular_name'     => _x( 'Advisory Version', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Advisory Versions' ),
      'all_items'         => __( 'All Advisory Versions' ),
      'parent_item'       => __( 'Parent Advisory Version' ),
      'parent_item_colon' => __( 'Parent Advisory Version:' ),
      'edit_item'         => __( 'Edit Advisory Version' ),
      'update_item'       => __( 'Update Advisory Version' ),
      'add_new_item'      => __( 'Add Advisory Version'  ),
      'new_item_name'     => __( 'New Advisory Version'  ),
      'menu_name'         => __( 'Advisory Versions' ),
  );
  $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array(
        'slug' => 'advisory-version',
        'with_front' => false ),
  );

  register_taxonomy( 'version', array( 'advisories' ), $args );

}

// Init if CPT's activated in theme-setup.php

if($ADVISORIES) {
 add_action( 'init', 'cpt_advisories' );
 add_action( 'init', 'advisory_platform' );
 add_action( 'init', 'advisory_versions' );
}
