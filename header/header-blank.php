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
			<span>asdasd adasd as das d asdasdasdsad asdas das</span>
		</div>
		</div>
		<div class="full-width header-wrap">
		<div class="sitewrapper">
			<div class="site-branding">
					<?php
					the_custom_logo();
					?>
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
					<!-- <a href="#" class="primary-button"> Reservar hora</a> -->
					<a aria-label="mobile menu" class="nav-toggle"> <span></span> <span></span> <span></span> </a>
				</div>
				<nav id="site-navigation" class="main-navigation">

					
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

	
