<?php

add_action('acf/init', 'team_grid_block_init');

function team_grid_block_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block(array(
        'name'				=> 'team-grid',
        'title'				=> __('Team Grid'),
        'description'		=> __('Displays your team members in a grid'),
        'render_callback'	=> 'stylized_acf_gutenberg_block_content_registration',
        'category'			=> 'virtuoso-blocks',
        'icon'				=> 'groups',
        'keywords'			=> array( 'team', 'grid'),
    ));
  }
}