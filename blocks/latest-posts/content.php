<?php

/**
 * Block Name: Featured Posts
 *
 * This is the template that displays the testimonial block.
 */

?>
<div class="latest_posts">
  <h2><?php echo get_field('header');?></h2>
  <?php new \Virtuoso\Lib\Components\Latest_Posts(); ?>
</div>