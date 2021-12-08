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
		
			<div id="contenuPage">
				<nav class="boutton">
					<a id="prev">&#10094;</a>
					<a id="next">&#10095;</a>
				</nav>

				
				<div class="conteneurP">
				<?php
				$nbPost = 0;
				$postMax = 12;
				while ( have_posts() ) :
					the_post();
					if($nbPost == 0){
						echo '<div class="caroussel">';
					}
					++$nbPost;
					get_template_part( 'template-parts/content', 'projets' );
					if($nbPost == $postMax){
						$nbPost = 0;
						echo '</div>';
					}
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
