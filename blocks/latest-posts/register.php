<?php

add_action('acf/init', 'latest_posts_block_init');

function latest_posts_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'latest-posts',
        'title'				=> __('Latest Posts'),
        'description'		=> __('A latest posts block.'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'format-aside',
        'keywords'			=> array( 'latest posts', 'latest', 'posts'),
    ));
  }
}