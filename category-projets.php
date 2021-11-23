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
				echo '<h1 class="titleP"> Projets </h1>'; 
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
		
			<div class="conteneurP">
			
			<a class="prev" onclick="controleFleche(-1)">&#10094;</a>
  			<a class="next" onclick="controleFleche(1)">&#10095;</a>

			<div class="caroussel">
			
			<?php
			
			while ( have_posts() ) :
				the_post();
                get_template_part( 'template-parts/content', 'projets' );
				
			endwhile; ?>
			
			<?php
			the_posts_navigation();
            
            else :
                
                get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>	
	</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
