<?php

// Add Virtuoso bio block Shortcode
function virtuoso_bio_shortcode( $atts )
{

  // Attributes
  $atts = shortcode_atts(
      array(
          'postid' => false,
      ),
      $atts
  );


  $output = '';


  if ($atts['postid']) {
    $postID = (int) $atts['postid'];
    $content_post = get_post($postID);
    $content = $content_post->post_content;
    $blocks = parse_blocks($content);

    foreach($blocks as $block) {
      $output .= render_block($block);
    }
  } else {
    $output = "Can't display widget because 'postid' was not set in the shortcode attributes.";
  }

  return $output;

}
add_shortcode( 'virtuoso_bio_shortcode', 'virtuoso_bio_shortcode' );