<?php

/**
 * Block Name: Welcome
 *
 * This is the template that displays the testimonial block.
 */

$image = get_field('logo');
//$tagline = get_field('tagline');
$button = get_field('buttons');
?>

<div class="virtuoso-block front_page_top_container welcome">
    <div class="front_page_top_wrap">

  <div class="image_wrap">
    <img src="<?php echo $image?>"/>
  </div>

  <h1><?php bloginfo('title'); ?></h1>
  <h4><?php bloginfo('description');?></h4>
  <div class="button_container">

    <?php while( have_rows('buttons') ): the_row(); ?>

      <?php $link = get_sub_field('link'); ?>
      <?php $text = get_sub_field('text'); ?>
      <?php $icon = get_sub_field('icon'); ?>
      <div class='link_wrap'>
        <a class="button" href="<?php echo $link ?>"><?php echo $text; ?> <?php echo $icon; ?></a>
      </div>

    <?php endwhile; ?>

      </div>
    </div>
</div>
