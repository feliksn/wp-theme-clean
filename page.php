<?php
/**
 * Page template (page.php)
 * @package WordPress
 * @subpackage wp-theme-clean
 */
get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php get_footer(); ?>