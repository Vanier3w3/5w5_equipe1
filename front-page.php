<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package time1
 */

get_header();
?>

<div class="glitch glitch--style-1">
	<div class="glitch__img" > <?php  ?> </div>
	<div class="glitch__img" ><?php get_background_image() ?></div>
	<div class="glitch__img" ><?php get_background_image() ?></div>
	<div class="glitch__img" ><?php get_background_image() ?></div>
	<div class="glitch__img" ><?php get_background_image() ?></div>
</div>




	</main><!-- #main -->

	



<?php
get_sidebar();
get_footer();



