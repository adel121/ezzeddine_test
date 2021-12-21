<?php 


function site_post_types() {

//first arg: name of custom post type
//second arg: array of descriptive options


 register_post_type('service', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt','thumbnail'),
    'rewrite' => array('slug' => 'services'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add New Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}



function linked_in_post_types() {

//first arg: name of custom post type
//second arg: array of descriptive options


 register_post_type('linkedin', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt','thumbnail'),
    'rewrite' => array('slug' => 'linkedin'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Linkedin',
      'add_new_item' => 'Add New Linked In Badge',
      'edit_item' => 'Edit Linked In Badge',
      'all_items' => 'All Badges',
      'singular_name' => 'Linkedin_Badge'
    ),
    'menu_icon' => 'dashicons-linkedin'
  ));
}

add_action('init','site_post_types');

add_action('init','linked_in_post_types');

?>