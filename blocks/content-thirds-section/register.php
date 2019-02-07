<?php

add_action('acf/init', 'content_thirds_section_block_init');

function content_thirds_section_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'content-thirds-section',
        'title'				=> __('Content Thirds Section'),
        'description'		=> __('A block displaying content in thirds horizontally.'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'format-aside',
        'keywords'			=> array( 'content thirds', 'thirds', 'section'),
    ));
  }
}