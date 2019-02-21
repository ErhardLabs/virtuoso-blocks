<?php

/**
 * Block Name: Team Grid
 *
 * This is the template that displays the team grid.
 */

?>

<section class="virtuoso-block team-grid">
    <div class="wrap">
        <h2><?php echo get_field('team_title'); ?></h2>
        <div class="team-grid_wrap">
            <?php while( have_rows('team_members') ): the_row(); ?>
            <div class="team-member">
                <div class="team-member_wrap">
                    <?php if ( get_sub_field('profile_image') ): ?>
                    <div class="image-wrap">
                        <img src="<?php echo get_sub_field('profile_image'); ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( get_sub_field('name') ): ?>
                    <strong><?php echo get_sub_field('name'); ?></strong>
                    <?php endif; ?>

                    <?php if ( get_sub_field('bio') ): ?>
                    <p><?php echo get_sub_field('bio'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>