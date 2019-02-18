<?php

/**
 * Block Name: CTA - Offset Image
 *
 * This is the template that displays the offset image cta block.
 */
?>

<?php $image = get_field('image'); ?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $button = get_field('button'); ?>
<?php $anchor_id = get_field('anchor_id'); ?>
<?php $link = $button['link']; ?>
<?php $buttonText = $button['text']; ?>
<?php $icon = $button['icon']; ?>
<?php $customClasses = $button['custom_classes']; ?>

<div id="<?php echo $anchor_id; ?>" class="virtuoso-block offset_image">
  <section>
      <div class="section_image">
        <img src="<?php echo $image ?>"/>
      </div>
    <div class="section_info" style="background-image: url('<?php echo $image ?>')">
        <div class="section_info_wrap">
            <?php if($title): ?>
                <h2><?php echo $title ?></h2>
            <?php endif; ?>
            <?php if($text): ?>
                <p><?php echo $text?></p>
            <?php endif; ?>
            <?php if($link !== '' && $buttonText !== ''):?>
                <a class="button <?php echo $customClasses ?>" href="<?php echo $link?>"><?php echo $buttonText ?></a>
            <?php endif; ?>
        </div>
    </div>
  </section>
</div>