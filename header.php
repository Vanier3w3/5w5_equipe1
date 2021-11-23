<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package time1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'time1' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
				?>
				<h1 class="site-title <?php echo(is_front_page())? 'accueilTitre': ''?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	<?php the_custom_logo(); bloginfo( 'name' ); ?></a></h1>
				<p class="sous-titre">TECHNIQUES D'INTÉGRATION MULTIMÉDIA</p>
				
				<?php
			
			$time1_description = get_bloginfo( 'description', 'display' );
			if ( $time1_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $time1_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		
		</div><!-- .site-branding -->

<nav id="site-navigation" class="main-navigation">


			<button class='"menu-toggle"'  onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
     		<svg class="essai1" width="30" height="30" viewBox="0 0 100 100">
      	 	<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
       		<path class="line line2" d="M 20,50 H 80" />
        	<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
      		</svg>
    		</button>
		
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			
		
		</nav><!-- #site-navigation -->


	<svg class="fleche" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;" ><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M143.27734,51.52161c-1.51229,0.03575 -2.94918,0.66766 -3.99765,1.75807l-53.27969,53.27969l-53.27969,-53.27969c-1.07942,-1.10959 -2.56163,-1.73559 -4.10963,-1.73568c-2.33303,0.00061 -4.43306,1.41473 -5.31096,3.57628c-0.8779,2.16155 -0.3586,4.6395 1.31331,6.26669l57.33333,57.33333c2.23904,2.23811 5.86825,2.23811 8.10729,0l57.33333,-57.33333c1.70419,-1.63875 2.22781,-4.1555 1.31865,-6.33798c-0.90916,-2.18248 -3.06468,-3.58317 -5.42829,-3.52739z"></path></g></g></svg>
	
		
	</header><!-- #masthead -->
	

	<script>
        let burger = document.getElementById('burger')
        let bar1 = document.querySelector('#burger div:nth-of-type(1)')
        let bar2 = document.querySelector('#burger div:nth-of-type(2)')
        let bar3 = document.querySelector('#burger div:nth-of-type(3)')
    </script>
