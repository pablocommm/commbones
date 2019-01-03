<?php

/**
 * Template Name: Home
 *
 * @package COMMM
 * @subpackage CASA BLANCA SPORTS
 * @since CASA BLANCA SPORTS 1.0
 */

get_header(); ?>

<div id="Content">
	    <div class="row">






            <?php if (have_posts()) : ?>
            <?php while (have_posts()) // Post Loop
            : the_post(); ?>
            <?php endwhile; ?>
        <?php endif; ?>




    </div>
</div>



<?php get_footer(); ?>