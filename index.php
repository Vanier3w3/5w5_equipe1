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
 <link rel="shortcut icon" href="https://tympanus.net/Tutorials/CSSGlitchEffect/favicon.ico">
		<link href="./Image Glitch Effect _ Demo 2 _ Codrops_files/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./Image Glitch Effect _ Demo 2 _ Codrops_files/demo2.css">
	<main id="primary" class="site-main">
	
	<div class="glitch glitch--style-1">
	<div class="glitch__img"></div>
	<div class="glitch__img"></div>
	<div class="glitch__img"></div>
	<div class="glitch__img"></div>
	<div class="glitch__img"></div>
</div>
<script src="./Image Glitch Effect _ Demo 2 _ Codrops_files/demo.js"></script>
<script src="./Image Glitch Effect _ Demo 2 _ Codrops_files/imagesloaded.pkgd.min.js"></script>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

	//	else :

		//	get_template_part( 'template-parts/content', 'none' );

		endif;
		?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();


