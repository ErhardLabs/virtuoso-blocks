<?php

/**
 * Block Name: CTA - Offset Image
 *
 * This is the template that displays the offset image cta block.
 */
?>

<div class="virtuoso-block offset_image">
  <?php $image = get_field('image'); ?>
  <?php $title = get_field('title'); ?>
  <?php $text = get_field('text'); ?>
  <?php $button = get_field('button'); ?>
  <?php $link = $button['link']; ?>
  <?php $buttonText = $button['text']; ?>
  <?php $icon = $button['icon']; ?>
  <section>
      <div class="section_image">
        <img src="<?php echo $image ?>"/>
      </div>
    <div class="section_info" style="background-image: url('<?php echo $image ?>')">
        <div class="section_info_wrap">
          <h2><?php echo $title ?></h2>
          <p><?php echo $text?></p>
          <a class="button" href="<?php echo $link?>"><?php echo $buttonText ?></a>
        </div>
    </div>
  </section>
</div>