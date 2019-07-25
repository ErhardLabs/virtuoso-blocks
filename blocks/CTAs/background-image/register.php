<?php

add_action('acf/init', 'background_image_block_init');
function background_image_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'background-image',
        'title'				=> __('CTA - Background Image'),
        'description'		=> __('A custom call to action block.'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_cta_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'id',
        'keywords'			=> array( 'cta', 'call to action', 'background image'),
    ));
  }
}