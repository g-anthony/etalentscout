<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="subpage-banner"></div><!--subpage-banner-->
<main class="wrapper">
	<div class="container">

		<?php while ( have_posts() ) : the_post();?>
    		<?php the_content(); ?>
        <?php endwhile; ?>
        
	</div><!--container-->
</main><!--wrapper-->

<?php get_footer(); ?>
