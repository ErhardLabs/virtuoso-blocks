<?php

/**
 * Block Name: Row Frame
 *
 * This is the template that displays the welcome block.
 */
$path = VIRTUOSO_BLOCKS_DIR_PATH . 'assets/images/frame-rows/';

?>

<div class="virtuoso-block frame-row">
	<?php if( get_field('frame_type') == 'curve-top' ):

		$svg = file_get_contents($path . 'curve-top.svg');
//		$svg_data = 'data:image/svg+xml;base64,' . base64_encode( $svg );
		echo $svg;
		?>
	<?php endif; ?>
    <?php if( get_field('frame_type') == 'curve-bottom' ):

        $svg = file_get_contents($path . 'curve-bottom.svg');
//        $svg_data = 'data:image/svg+xml;base64,' . base64_encode( $svg );
        echo $svg;
        ?>
    <?php endif; ?>

    <?php if( get_field('frame_type') == 'arrow-top' ):

        $svg = file_get_contents($path . 'arrow-top.svg');
//        $svg_data = 'data:image/svg+xml;base64,' . base64_encode( $svg );
        echo $svg;
        ?>
    <?php endif; ?>

    <?php if( get_field('frame_type') == 'arrow-bottom' ):

        $svg = file_get_contents($path . 'arrow-bottom.svg');
//        $svg_data = 'data:image/svg+xml;base64,' . base64_encode( $svg );
        echo $svg;
        ?>
    <?php endif; ?>
</div>
