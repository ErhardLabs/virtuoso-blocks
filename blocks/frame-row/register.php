<?php

add_action('acf/init', 'frame_row_block_init');
function frame_row_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'frame-row',
        'title'				=> __('Row Frame'),
        'description'		=> __('Add a stylistic frame to the top or bottom of your rows'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'star-filled',
        'keywords'			=> array( 'svg', 'row', 'frame'),
    ));
  }
}