<?php

/**
 * Block Name: CTA - Background Image
 *
 * This is the template that displays the offset image cta block.
 */
?>

<?php $image = get_field('call_to_action_background_image'); ?>
<?php $text = get_field('call_to_action_text'); ?>
<?php $button = get_field('call_to_action_button'); ?>
<?php $link = $button['call_to_action_button_link']; ?>
<?php $buttonText = $button['call_to_action_button_text']; ?>
<?php $customClasses = (!empty($button['custom_classes'])) ? $button['custom_classes'] : ''; ?>

<div class="virtuoso-block cta_background_image" style="background-image:url(<?php echo esc_url($image); ?>">
  <section>
    <div class="section_info">
        <div class="section_info_wrap">
            <?php if($text): ?>
                <h3><?php echo $text?></h3>
            <?php endif; ?>
            <?php if($link !== '' && $buttonText !== ''):?>
                <a class="button" href="<?php echo $link?>"><?php echo $buttonText ?></a>
            <?php endif; ?>
        </div>
    </div>
  </section>
</div>