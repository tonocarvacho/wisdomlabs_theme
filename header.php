<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WisdomLabs
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wisdomlabs' ); ?></a>
	<div class="bloque-header"></div>
	<header id="masthead" class="site-header">
		<div id="header-bar">
			<div class="sitewrapper">
				<div>
					<a href="https://scholar.google.com/citations?user=mcScWqUAAAAJ&hl=en"><img class="iconwhite" src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/logosmallwhite1.png"></a>
					<a href="https://scholar.harvard.edu/carvacho"><img class="iconwhite" src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/logosmallwhite2.png"></a>
					<a href="#"><img class="iconwhite" src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/logosmallwhite3.png"></a>
				</div>
				<div class="header-bar-datos">

					<i class="fas fa-phone"></i><span>+56912345678</span>
				<i class="fas fa-envelope"></i> <span class="correo">hscarvac@uc.cl</span>
				
			</div>
			</div>
		</div>
		<div class="full-width header-wrap">
		<div class="sitewrapper">
			<div class="site-branding">
					<h1 class="nombre-sitio"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">HECTOR CARVACHO</a></h1>
					<div class="site-branding__text">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;
		
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
					</div><!-- .site-branding__text -->
				</div><!-- .site-branding -->
		<div class="nav-buttons">
			<i class="fas fa-search lupa"></i>
							<a aria-label="mobile menu" class="nav-toggle"> <span></span> <span></span> <span></span> </a></div>
				<nav id="site-navigation" class="main-navigation">

<!-- <ul class="menu-left">
        <li><a href="#cat">Category</a></li>
        <li><a href="#rec">Recommoended</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>-->
					
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'menu-left',
						'container' => 'ul'
					) );
					?>

				</nav><!-- #site-navigation -->
			</div><!-- .sitewrapper -->
		</div><!-- .full-width -->
	</header><!-- #masthead -->

<!-- before content widget y fx share -->	
<?php if( is_home() || is_front_page() ) : 

		if ( is_active_sidebar("beforecontent") ) : ?>
		<aside id="beforecontent" class="widget-area">
			<?php dynamic_sidebar( 'beforecontent' ); ?>
		</aside>
		<?php endif;/* ?>

		<div class="sitewrapper"><?php echo fx_share();?></div>
 <?php */endif; ?>

	
