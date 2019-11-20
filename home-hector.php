<?php
/* Template Name: Home-hector 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WisdomLabs
 */

get_header();
?>
<main class="page-1">

	<div id="seccion1" class="modulo-img-slider">
		<video class="video-home" loop="loop" autoplay="" playsinline="" muted="" preload="none" src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/hector-carvacho.mp4" style="margin: 0px; width: 1351px; height: 759.938px;" width="1920" height="1080">
				<source type='video/mp4;' src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/hector-carvacho.mp4">
				
			</video>
		<div class="container texto-video">
			<h1 style="text-align: center;">HECTOR CARVACHO G.<small>Social Psychology | Political Psychology</small></h1>
			
		</div>
	</div>

<div class="modulo-afp">
		
		<div class="sitewrapper">
			<img src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/harvard-university.png">
			<img src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/bielefeld-university.png">
			<img src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/universidad-catolica.png">
		</div>
		<div class="sitewrapper">
			
			<img src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/philipps-university.png">
			<img src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/ciir-logo.png">
			<img src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/aps-logo.png">
			<img src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/conicyt-logo.png">
		</div>
		
	</div>
	<div id="seccion2" class="seccion">
		<div class="sitewrapper">
			<div class="grid2">
				<div>
					<img src="<?php echo bloginfo('template_url');?>/images/hector_carvacho/hector-carvacho.jpg">
				</div>
				<div>
					<h2>Hector Carvacho G.</h2>
					<span class="divisor"></span>
					 
					
					<p>Hector Carvacho studied psychology at the Pontificia Universidad Católica de Chile. Then moved to Germany, where he completed his PhD in 2013 at Bielefeld University. In 2014 he became a Postdoctoral fellow at the Department of Psychology, Harvard University<p>
					<p> Since June 2014 he is a part of Sidanius's Lab. He's also associated to the Interdisciplinary Center for Intercultural and Indigenous Studies (ICIIS) in Chile. <p>
					<ul>
						<li><strong>Psychologist</strong>, Pontifical Catholic University of Chile.</li>
						<li><strong>Doctor of psychology</strong>, Bielefeld University, Germany.</li>
						<li><strong>Postdoctorate</strong>, Department of Psychology, Harvard University, USA.</li>
					</ul>
					<br>
					<input class="btn btn-primary btn-profile" type="button" value="Curriculum Vitae">
				</div>
				
			</div>
		</div>
	</div>

	

	<div id="seccion3" class="bloque-contacto seccion">
		<div class="sitewrapper">
			<h1 class="titulo-seccion titulo-home"><span class="titulo-light">Use the form below to contact</span> Hector Carvacho</h1>
			<div class="grid2">
				<div>
					<h2>Contact Info</h2>
					<span class="divisor"></span>
					<div class="contacto-contenedor dato-margen-bottom">
						<div class="dato-margen margin-mobile">
							<h4>Phone</h4>
							<div>
								<i class="fas fa-phone"></i>
								<span>+56 9 123456789</span>
							</div>
						</div>
						<div>
							<h4>Email</h4>
							<div>
								<i class="fas fa-envelope"></i>
								<span>hscarvac@uc.cl</span>
							</div>
						</div>
					</div>
					<div class="dato-margen-bottom">
						<h4>Location</h4>
						<i class="fas fa-map-marker-alt"></i>
						<span>Calle direccion #1234 - Ciudad</span>
					</div>
					<div>
						<h4>Social Network</h4>
						<div class="">
							
							<div class="dato-margen">
								<a href="https://scholar.google.com/citations?user=mcScWqUAAAAJ&hl=en">
																<span>Google Scholar</span></a>
							</div>
							<div class="dato-margen">
								
<a href="https://scholar.harvard.edu/carvacho">
								
								<span>Harvard University Profile</span>
								</a>
							</div>
							<div>
								
								<a href="http://www.psicologia.uc.cl/persona/hector-carvacho-garcia/">
																
																<span>Universidad Catolica Profile</span></a>
							</div>
							<div>
								<a href="http://www.ciir.cl/ciir.cl/en/persona/hector-carvacho/">
															
															<span>CIIR Profile</span></a>
							</div>

						</div>
					
						
					</div>

					
				</div>
				<div class="formulario">
					<form action="">

					<div class="formulario-margen"><span>Nombre:</span>
										<input type="text" name="firstname" value=""></div>
					<div class="formulario-margen formulario-mitad">
						<div><span>Correo:</span><input type="text" name="lastname" value="">
						</div>
						<div ><span>Telefono:</span><input type="text" name="lastname" value="">
						</div>
					</div>

					
					<div class="formulario-margen"><span>Mensaje:</span>
										<input type="textarea" name="lastname" value=""></div>
					<input class="btn btn-primary" type="submit" value="Submit">
			</form>
				</div>
			</div>
		</div>
	</div>

<!-------- Latest Publications ---------->
<div class="seccion seccion-articulos">
	<div class="sitewrapper">
		<div class="titulo-articulos">
			<h2>Latest Publications</h2>
			<a class="leer-todos" href="#"><strong class="font-secondary">See all</strong></a>
		</div>
	</div>
	<div class="sitewrapper grid4">
		<?php
		$args = array (
			'category_name' => 'Featured',
			'post_type' => 'post',
			'posts_per_page' => 4, 
		);
		$category_block_query = new WP_Query( $args );
		if ( $category_block_query->have_posts() ) : 
			while ( $category_block_query->have_posts() ) : $category_block_query->the_post(); 
				?> <article class="bloque-articulo">
					<figure class="featured-image index-image">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('wisdomlabs-post-featured');?></a>
					</figure>
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</header>
						<div class="entry-content">
							<?php echo get_excerpt(80); ?>
						</div>


					</div></article>
					<?php
				endwhile; wp_reset_postdata();
			else: 
			endif; 
			?>
	</div>
</div>

<!-------- Latest Articles ---------->
<div class="seccion seccion-articulos latest-articles">
	<div class="sitewrapper">
		<div class="titulo-articulos">
			<h2>Latest Articles</h2>
			<a class="leer-todos" href="#"><strong class="font-secondary">See all</strong></a>
		</div>
	</div>
	<div class="sitewrapper grid4">
		<?php
		$args = array (
			'category_name' => 'Featured',
			'post_type' => 'post',
			'posts_per_page' => 4, 
		);
		$category_block_query = new WP_Query( $args );
		if ( $category_block_query->have_posts() ) : 
			while ( $category_block_query->have_posts() ) : $category_block_query->the_post(); 
				?> <article class="bloque-articulo">
					<figure class="featured-image index-image">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('wisdomlabs-post-featured');?></a>
					</figure>
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</header>
						<div class="entry-content">
							<?php echo get_excerpt(80); ?>
						</div>


					</div></article>
					<?php
				endwhile; wp_reset_postdata();
			else: 
			endif; 
			?>
	</div>
</div>


<!-------- Featured Research ---------->
<div class="seccion seccion-articulos">
	<div class="sitewrapper">
		<div class="titulo-articulos">
			<h2>Featured Research</h2>
			<a class="leer-todos" href="#"><strong class="font-secondary">See all</strong></a>
		</div>
	</div>
	<div class="sitewrapper grid4">
		<?php
		$args = array (
			'category_name' => 'Featured',
			'post_type' => 'post',
			'posts_per_page' => 4, 
		);
		$category_block_query = new WP_Query( $args );
		if ( $category_block_query->have_posts() ) : 
			while ( $category_block_query->have_posts() ) : $category_block_query->the_post(); 
				?> <article class="bloque-articulo">
					<figure class="featured-image index-image">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('wisdomlabs-post-featured');?></a>
					</figure>
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</header>
						<div class="entry-content">
							<?php echo get_excerpt(80); ?>
						</div>


					</div></article>
					<?php
				endwhile; wp_reset_postdata();
			else: 
			endif; 
			?>
	</div>
</div>
	
	


	
<?php

get_footer();
