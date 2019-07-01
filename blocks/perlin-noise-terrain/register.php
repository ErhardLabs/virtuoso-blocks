<?php

add_action('acf/init', 'perlin_noise_block_init');
function perlin_noise_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'perlin-noise-terrain',
        'title'				=> __('Perlin Noise Terrain Visualizer'),
        'description'		=> __('A custom bio block to show a perlin noise terrain visualizer'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'chart-line',
        'keywords'			=> array( 'perlin-noise', '3d', 'visualizer', 'p5'),
    ));
  }
}