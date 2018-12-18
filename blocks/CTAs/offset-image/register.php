<?php

add_action('acf/init', 'offset_image_block_init');
function offset_image_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'offset-image',
        'title'				=> __('CTA - Offset Image'),
        'description'		=> __('A custom call to action block.'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_cta_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'id',
        'keywords'			=> array( 'cta', 'call to action', 'offset image'),
    ));
  }
}