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
				echo '<h1 class="titleE"> GRILLE DE COURS </h1>'; 
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
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
							</div>
							</section>
							<?php
						endif;
						?>
						<section class="sessionBloc">
							<h1>Session: <?php echo $propriete['session'];?></h1>
							<svg class="fleche_cours" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;" ><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M143.27734,51.52161c-1.51229,0.03575 -2.94918,0.66766 -3.99765,1.75807l-53.27969,53.27969l-53.27969,-53.27969c-1.07942,-1.10959 -2.56163,-1.73559 -4.10963,-1.73568c-2.33303,0.00061 -4.43306,1.41473 -5.31096,3.57628c-0.8779,2.16155 -0.3586,4.6395 1.31331,6.26669l57.33333,57.33333c2.23904,2.23811 5.86825,2.23811 8.10729,0l57.33333,-57.33333c1.70419,-1.63875 2.22781,-4.1555 1.31865,-6.33798c-0.90916,-2.18248 -3.06468,-3.58317 -5.42829,-3.52739z"></path></g></g></svg>
							<div class="coursBloc">
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
			</div>
	</main><!-- #main -->

<?php

get_footer();

function convertirTitreCours(&$propriete){
	$propriete['titre'] = get_the_title(); 
	$propriete['titrePartiel'] = substr($propriete['titre'],8,-6);
	$propriete['sigle'] = substr($propriete['titre'], 0, 7);
	$propriete['session'] = substr($propriete['titre'], 4,1);
	$propriete['typeCours'] = get_field('type_de_cours');
}