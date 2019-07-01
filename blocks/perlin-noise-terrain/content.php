<?php

/**
 * Block Name: Perlin Noise Terrain Visualizer
 *
 * This is the template that displays a visualizer.
 */

?>

<section class="virtuoso-block perlin-noise-terrain">
    <p class="inner-text"><?php
        if ( get_field( 'visualizer_inner_text' ) ) {
	        echo get_field( 'visualizer_inner_text' );
        }
      ?></p>
    <div id="visualizer"></div>
</section>