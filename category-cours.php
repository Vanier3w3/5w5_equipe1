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

<<<<<<< HEAD
	<main id="primary" class="site-main">
=======
	<main id="primary" class="site-main">	
>>>>>>> main
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
<<<<<<< HEAD

			<?php
			/* Start the Loop */
			$precedent = 'XX';
	
			while ( have_posts() ) :
				the_post();
				convertirTitreCours($propriete);
				if($precedent != $propriete['session']):
					if($precedent != 'XX'):
				echo '<h1>session:'. $precedent . '</h1>';
				?>
					</section>
				<?php
					endif;
				?>
					<section class="session_bloc">
			<?php
				endif;
				get_template_part( 'template-parts/content', 'cours' );
				$precedent = $propriete['session'];
				
				
			endwhile;
			the_posts_navigation();
            
            else :
                
                get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

=======
			<div id="contenuPage">
				<?php
				/* Start the Loop */
				$precedent = 'XX';
		
				while ( have_posts() ) :
					the_post();
					convertirTitreCours($propriete);
					if($precedent != $propriete['session']):
						if($precedent != 'XX'):
						?>
							</section>
					<?php
						endif;
					?>
						<section class="sessionBloc">
							
				<?php
						echo '<h1>session: '. $propriete['session'] . '</h1>';
					endif;
					get_template_part( 'template-parts/content', 'cours' );
					$precedent = $propriete['session'];
					
				endwhile;
				the_posts_navigation();
				
				else :
					
					get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>
>>>>>>> main
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertirTitreCours(&$propriete){
	$propriete['titre'] = get_the_title(); 
	$propriete['titrePartiel'] = substr($propriete['titre'],8,-6);
<<<<<<< HEAD
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
=======
	$propriete['sigle'] = substr($propriete['titre'], 0, 7);
>>>>>>> main
	$propriete['session'] = substr($propriete['titre'], 4,1);
	$propriete['typeCours'] = get_field('type_de_cours');
}