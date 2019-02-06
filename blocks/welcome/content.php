<?php

/**
 * Block Name: Welcome
 *
 * This is the template that displays the welcome block.
 */

$button = get_field('buttons');
?>

<div class="virtuoso-block front_page_top_container welcome">
    <div class="front_page_top_wrap">
        <div class="heading_wrap">
          <div class="image_wrap"><img alt="logo" src="<?php echo get_site_icon_url()?>"/></div>
          <h1><?php bloginfo('title'); ?></h1>
          <h4><?php bloginfo('description');?></h4>
        </div>
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
