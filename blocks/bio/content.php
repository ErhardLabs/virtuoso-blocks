<?php

/**
 * Block Name: Bio
 *
 * This is the template that displays the testimonial block.
 */

$bioTitle = get_field('bio_title');
$image = get_field('image');
$socialMediaLinks = get_field('social_media_links');
$bioText = get_field('bio_text');

?>
<div class="virtuoso-block bio_container bio">
    <div class="bio_wrap">
	    <?php if ($bioTitle): ?>
        <h2><?php echo $bioTitle; ?></h2>
		<?php endif; ?>
        <?php if ($image): ?>
      <div class="image_wrap">
        <img src="<?php echo $image ?>"/>
      </div>
        <?php endif; ?>

	    <?php if ($socialMediaLinks): ?>
      <div class="social_media_wrap">
        <?php

        if ( $socialMediaLinks ) {

            foreach ( $socialMediaLinks as $media ) {
                ?><a class="social-button" href="<?php echo $media['link'] ?>"><?php echo $media['icon'] ?></a><?php
            }
        }
        ?>
      </div>
        <?php endif; ?>
      <div class="bio_text_wrap">
        <p><?php echo $bioText ?></p>
      </div>
    </div>
</div>