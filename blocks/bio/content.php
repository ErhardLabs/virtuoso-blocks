<?php

/**
 * Block Name: Bio
 *
 * This is the template that displays the testimonial block.
 */

$image = get_field('image');
$socialMediaLinks = get_field('social_media_links');
$bioText = get_field('bio_text');

?>
<div class="virtuoso-block bio_container bio">
    <div class="bio_wrap">
      <div class="image_wrap">
        <img src="<?php echo $image ?>"/>
      </div>
      <div class="social_media_wrap">
        <?php

        if ( $socialMediaLinks ) {

            foreach ( $socialMediaLinks as $media ) {
                ?><a class="social-button" href="<?php echo $media['link'] ?>"><?php echo $media['icon'] ?></a><?php
            }
        }
        ?>
      </div>
      <div class="bio_text_wrap">
        <p><?php echo $bioText ?></p>
      </div>
    </div>
</div>
<?php