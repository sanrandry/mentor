<?php

/**
 * The Page
 *
 * @subpackage Best
 * @since      Best 1.0
 */
get_header(); ?>

<?php get_template_part('template-parts/hero') ?>


<main id="main">
    <?php get_template_part('template-parts/about-section') ?>
</main>

<?php //get_sidebar();
get_footer();
