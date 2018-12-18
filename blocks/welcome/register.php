<?php

add_action('acf/init', 'welcome_block_init');
function welcome_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'welcome',
        'title'				=> __('Welcome'),
        'description'		=> __('A custom welcome block.'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'admin-home',
        'keywords'			=> array( 'welcome'),
    ));
  }
}