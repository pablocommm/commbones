<?php

/**
 * The template for displaying all post.
 * @package Garitma
 * @author Garitma
 * @link http://garitma.com
 */
get_header(); ?>

<div>

    <div>
        <?php if (have_posts()) :
        ?>

        <?php while (have_posts()) : the_post();
        ?>



        <?php endwhile; ?>

        <?php else : ?>



        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>


<?php get_footer(); ?>