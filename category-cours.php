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
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

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

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertirTitreCours(&$propriete){
	$propriete['titre'] = get_the_title(); 
	$propriete['titrePartiel'] = substr($propriete['titre'],8,-6);
	$propriete['session'] = substr($propriete['titre'], 4,1);
	$propriete['typeLabel'] = get_field('type_de_cours' , 'label');
}