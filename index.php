<?php
/*
Plugin Name: Virtuoso Blocks
Description: 	Custom blocks to accompany the Virtuoso theme.
Version: 		1.0.0
Author: 		Grayson & Sumner Erhard
Author URI: 	https://graysonerhard.com
License: 		GPLv2 or later
License URI:	http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: virtuoso-blocks
*/

define( 'VIRTUOSO_BLOCKS_DIR_PATH', plugin_dir_path( __file__ ) );
define( 'VIRTUOSO_BLOCKS_DIR_URL', plugin_dir_url( __file__ ) );


add_action( 'wp_enqueue_scripts', 'virtuoso_blocks_enqueue_assets' );
function virtuoso_blocks_enqueue_assets() {
	wp_enqueue_style( 'virtuoso-blocks-styles', VIRTUOSO_BLOCKS_DIR_URL . 'dist/styles/virtuoso-blocks.css');
}

// Add custom block category
add_filter( 'block_categories', function( $categories, $post ) {
  return array_merge(
      $categories,
      array(
          array(
              'slug'    => 'virtuoso-blocks',
              'title'   => __( 'Virtuoso Blocks', 'virtuoso-blocks' ),
              'icon'    => NULL
          ),
      )
  );
}, 20, 2 );

// REGISTER ALL BLOCKS RECURSIVELY
$directory = new RecursiveDirectoryIterator( VIRTUOSO_BLOCKS_DIR_PATH . 'blocks/');
$recIterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($recIterator, '/\/register.php$/i');
// INCLUDE ALL 'REGISTER' FILES THAT WILL REGISTER THE BLOCKS
foreach($regex as $item) {
  include $item->getPathname();
}

// INCLUDE ALL SHORTCODE FILES TO ENABLE SHORTCODE ABILITY
$regex = new RegexIterator($recIterator, '/\/shortcode.php$/i');
foreach($regex as $item) {
  include $item->getPathname();
}

add_filter( 'widget_text', 'do_shortcode' ); // allow custom html widget to display shortcodes


function stylized_acf_gutenberg_block_content_registration( $block ) {

  $slug = str_replace('acf/', '', $block['name']);

  if( file_exists( VIRTUOSO_BLOCKS_DIR_PATH . "/blocks/{$slug}/content.php") ) {
    include( VIRTUOSO_BLOCKS_DIR_PATH . "/blocks/{$slug}/content.php" );
  }
}

function stylized_acf_gutenberg_block_cta_content_registration($block) {

  $slug = str_replace('acf/', '', $block['name']);

  if( file_exists( VIRTUOSO_BLOCKS_DIR_PATH . "/blocks/CTAs/{$slug}/content.php") ) {
    include( VIRTUOSO_BLOCKS_DIR_PATH . "/blocks/CTAs/{$slug}/content.php" );
  }
}
