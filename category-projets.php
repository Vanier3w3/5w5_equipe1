<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package time1
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
<<<<<<< HEAD
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			
			<div class="conteneurP">
			
			
			<?php
			
=======
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			$precedent = 0;
>>>>>>> main
			while ( have_posts() ) :
				the_post();
                get_template_part( 'template-parts/content', 'projets' );
				
<<<<<<< HEAD
			endwhile; ?>
			
			<?php
=======
			endwhile;
            
>>>>>>> main
			the_posts_navigation();
            
            else :
                
                get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

<<<<<<< HEAD
		
	</div>
=======
>>>>>>> main
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
