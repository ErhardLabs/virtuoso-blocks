<?php

add_action('acf/init', 'bio_block_init');
function bio_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'bio',
        'title'				=> __('Bio'),
        'description'		=> __('A custom bio block to show a photo, bio, and social media links.'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'businessman',
        'keywords'			=> array( 'bio', 'about', 'team member'),
    ));
  }
}