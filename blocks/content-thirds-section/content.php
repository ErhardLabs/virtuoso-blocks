<?php

/**
 * Block Name: Content in Thirds Section
 *
 * This is the template that displays the content thirds section block.
 */
$sectionTitle = get_field('section_title');
$firstSection = get_field('content_thirds_section_1');
$secondSection = get_field('content_thirds_section_2');
$thirdSection = get_field('content_thirds_section_3');
?>

<div class="virtuoso-block content-thirds-section">
  <div class="wrap">
    <h2><?php echo $sectionTitle ?></h2>

    <div class="one-third first">
      <i class="<?php echo $firstSection['icon']?>"></i>
      <h6><?php echo $firstSection['header']?></h6>
      <span><?php echo $firstSection['blurb']?></span>
    </div>
    <div class="one-third">
      <i class="<?php echo $secondSection['icon']?>"></i>
      <h6><?php echo $secondSection['header']?></h6>
      <span><?php echo $secondSection['blurb']?></span>
    </div>
    <div class="one-third last">
      <i class="<?php echo $thirdSection['icon']?>"></i>
      <h6><?php echo $thirdSection['header']?></h6>
      <span><?php echo $thirdSection['blurb']?></span>
    </div>
  </div>

</div>