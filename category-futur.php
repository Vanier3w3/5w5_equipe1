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
			
				echo '<h1 class="titleE"> FUTUR </h1>';
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<!-- <div class="entry-content"> -->
			<?php
			/* Start the Loop */
			$precedent = 0;
			
			while ( have_posts() ) :
				the_post();
				get_the_title(); // non fonctionnel
                get_template_part( 'template-parts/content', 'futur' );
				
			endwhile;
            
			//the_posts_navigation();
            
            else :
                
                //get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<!-- </div> -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();