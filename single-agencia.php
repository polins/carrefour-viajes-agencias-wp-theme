<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package carrefour-viajes-agencias
 */

get_header();
?>

	<main id="primary" class="site-main site-container">


		<?php
		while ( have_posts() ) :
			the_post(); 

			$location = get_field('direccion');

			?>

			<div class="container mx-auto">
				<h1 class="text-2xl font-semibold mb-2"><?php the_title(); ?></h1>
				<div class="mb-5 text-sm"><?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
				<div class="grid grid-cols-2 gap-10 mb-5">
					
					<div>
						<?php $photos_query = get_post_meta( $post->ID, 'gallery_data', true ); if($photos_query) { ?>

							<div class="cycle-slideshow"
						    data-cycle-fx=fadeout
						    data-cycle-timeout=8000
						    data-cycle-prev=#prev
						    data-cycle-next=#next
							data-cycle-auto-height=container>
								<?php the_post_thumbnail('full'); ?>
								
								<?php 
									foreach ($photos_query['image_url']  as $photo ) {
								?>
								 	<img class="gallery-img" src="<?php echo $photo; ?>" alt=""/>

								<?php 
									}
								?>

								<div id="prev" class="nav nav-prev">Anterior</div>
								<div id="next" class="nav nav-next">Siguiente</div>

							</div>


						<?php } else { the_post_thumbnail('full'); } ?>

						<div class="mt-5">
							<?php the_content(); ?>
						</div>

					</div>

					<div>
						
						<div class="text-lg border font-medium bg-gray-light border-gray-light px-4 py-1">Contacto</div>
						<div class="border border-gray-light p-4">

							<div class="mb-3">
								<div class="flex mb-1"><span class="icon-ubication relative top-1 mr-2"></span> <span><?php the_field('direccion_completa') ?></span></div>
								<div class="mt-1 ml-4"><a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=<?php echo esc_attr($location['lat']); ?>,<?php echo esc_attr($location['lng']); ?>" class="border-2 border-blue-dark bg-blue-dark text-white font-medium py-1 px-4 text-sm">Cómo llegar</a></div>
							</div>
							<?php if(get_field('telefono_fijo')) { ?>
								<div class="mb-3">
									<a href="tel:<?php the_field('telefono_fijo') ?>" class="flex items-center"><svg class="mr-2" version="1.1" fill="#333"  height="10px" width="10px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.27" style="enable-background:new 0 0 122.88 122.27" xml:space="preserve"><g><path d="M33.84,50.25c4.13,7.45,8.89,14.6,15.07,21.12c6.2,6.56,13.91,12.53,23.89,17.63c0.74,0.36,1.44,0.36,2.07,0.11 c0.95-0.36,1.92-1.15,2.87-2.1c0.74-0.74,1.66-1.92,2.62-3.21c3.84-5.05,8.59-11.32,15.3-8.18c0.15,0.07,0.26,0.15,0.41,0.21 l22.38,12.87c0.07,0.04,0.15,0.11,0.21,0.15c2.95,2.03,4.17,5.16,4.2,8.71c0,3.61-1.33,7.67-3.28,11.1 c-2.58,4.53-6.38,7.53-10.76,9.51c-4.17,1.92-8.81,2.95-13.27,3.61c-7,1.03-13.56,0.37-20.27-1.69 c-6.56-2.03-13.17-5.38-20.39-9.84l-0.53-0.34c-3.31-2.07-6.89-4.28-10.4-6.89C31.12,93.32,18.03,79.31,9.5,63.89 C2.35,50.95-1.55,36.98,0.58,23.67c1.18-7.3,4.31-13.94,9.77-18.32c4.76-3.84,11.17-5.94,19.47-5.2c0.95,0.07,1.8,0.62,2.25,1.44 l14.35,24.26c2.1,2.72,2.36,5.42,1.21,8.12c-0.95,2.21-2.87,4.25-5.49,6.15c-0.77,0.66-1.69,1.33-2.66,2.03 c-3.21,2.33-6.86,5.02-5.61,8.18L33.84,50.25L33.84,50.25L33.84,50.25z"/></g></svg> <?php the_field('telefono_fijo') ?></a>
								</div>
							<?php } ?>
							<?php if(get_field('telefono_movil')) { ?>
								<div class="mb-3 flex items-center">
									<a href="tel:<?php the_field('telefono_movil') ?>" class="flex items-center"><svg class="mr-2" version="1.1" fill="#333"  height="10px" width="10px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.27" style="enable-background:new 0 0 122.88 122.27" xml:space="preserve"><g><path d="M33.84,50.25c4.13,7.45,8.89,14.6,15.07,21.12c6.2,6.56,13.91,12.53,23.89,17.63c0.74,0.36,1.44,0.36,2.07,0.11 c0.95-0.36,1.92-1.15,2.87-2.1c0.74-0.74,1.66-1.92,2.62-3.21c3.84-5.05,8.59-11.32,15.3-8.18c0.15,0.07,0.26,0.15,0.41,0.21 l22.38,12.87c0.07,0.04,0.15,0.11,0.21,0.15c2.95,2.03,4.17,5.16,4.2,8.71c0,3.61-1.33,7.67-3.28,11.1 c-2.58,4.53-6.38,7.53-10.76,9.51c-4.17,1.92-8.81,2.95-13.27,3.61c-7,1.03-13.56,0.37-20.27-1.69 c-6.56-2.03-13.17-5.38-20.39-9.84l-0.53-0.34c-3.31-2.07-6.89-4.28-10.4-6.89C31.12,93.32,18.03,79.31,9.5,63.89 C2.35,50.95-1.55,36.98,0.58,23.67c1.18-7.3,4.31-13.94,9.77-18.32c4.76-3.84,11.17-5.94,19.47-5.2c0.95,0.07,1.8,0.62,2.25,1.44 l14.35,24.26c2.1,2.72,2.36,5.42,1.21,8.12c-0.95,2.21-2.87,4.25-5.49,6.15c-0.77,0.66-1.69,1.33-2.66,2.03 c-3.21,2.33-6.86,5.02-5.61,8.18L33.84,50.25L33.84,50.25L33.84,50.25z"/></g></svg> <?php the_field('telefono_movil') ?></a>
									 <?php if(get_field('habilitar_whatsapp')) { ?><a target="_blank" href="https://wa.me/<?php the_field('telefono_movil') ?>" title="contactar por Whatsapp" class="ml-3"><span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="25px" height="25px" fill="#333"><path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z"/></svg></span></a>
									<?php } ?>
								</div>
							<?php } ?>
							<?php if(get_field('correo_electronico')) { ?>
								<div class="mb-3">
									<a href="mailto:<?php the_field('correo_electronico') ?>" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" viewBox="0 0 256 256" xml:space="preserve" class="mr-2"><defs></defs><g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)"><path d="M 75.546 78.738 H 14.455 C 6.484 78.738 0 72.254 0 64.283 V 25.716 c 0 -7.97 6.485 -14.455 14.455 -14.455 h 61.091 c 7.97 0 14.454 6.485 14.454 14.455 v 38.567 C 90 72.254 83.516 78.738 75.546 78.738 z M 14.455 15.488 c -5.64 0 -10.228 4.588 -10.228 10.228 v 38.567 c 0 5.64 4.588 10.229 10.228 10.229 h 61.091 c 5.64 0 10.228 -4.589 10.228 -10.229 V 25.716 c 0 -5.64 -4.588 -10.228 -10.228 -10.228 H 14.455 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" /><path d="M 11.044 25.917 C 21.848 36.445 32.652 46.972 43.456 57.5 c 2.014 1.962 5.105 -1.122 3.088 -3.088 C 35.74 43.885 24.936 33.357 14.132 22.83 C 12.118 20.867 9.027 23.952 11.044 25.917 L 11.044 25.917 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" /><path d="M 46.544 57.5 c 10.804 -10.527 21.608 -21.055 32.412 -31.582 c 2.016 -1.965 -1.073 -5.051 -3.088 -3.088 C 65.064 33.357 54.26 43.885 43.456 54.412 C 41.44 56.377 44.529 59.463 46.544 57.5 L 46.544 57.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" /><path d="M 78.837 64.952 c -7.189 -6.818 -14.379 -13.635 -21.568 -20.453 c -2.039 -1.933 -5.132 1.149 -3.088 3.088 c 7.189 6.818 14.379 13.635 21.568 20.453 C 77.788 69.973 80.881 66.89 78.837 64.952 L 78.837 64.952 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" /><path d="M 14.446 68.039 c 7.189 -6.818 14.379 -13.635 21.568 -20.453 c 2.043 -1.938 -1.048 -5.022 -3.088 -3.088 c -7.189 6.818 -14.379 13.635 -21.568 20.453 C 9.315 66.889 12.406 69.974 14.446 68.039 L 14.446 68.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" /></g></svg> <?php the_field('correo_electronico') ?></a>
								</div>
							<?php } ?>
							<?php if(get_field('pagina_web')) { ?>
								<div class="mb-3">
									<a href="<?php the_field('pagina_web') ?>" class="flex items-center"><svg width="15px" height="15px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#333" fill="none" class="mr-2"><path d="M39.93,55.72A24.86,24.86,0,1,1,56.86,32.15a37.24,37.24,0,0,1-.73,6"/><path d="M37.86,51.1A47,47,0,0,1,32,56.7"/><path d="M32,7A34.14,34.14,0,0,1,43.57,30a34.07,34.07,0,0,1,.09,4.85"/><path d="M32,7A34.09,34.09,0,0,0,20.31,32.46c0,16.2,7.28,21,11.66,24.24"/><line x1="10.37" y1="19.9" x2="53.75" y2="19.9"/><line x1="32" y1="6.99" x2="32" y2="56.7"/><line x1="11.05" y1="45.48" x2="37.04" y2="45.48"/><line x1="7.14" y1="32.46" x2="56.86" y2="31.85"/><path d="M53.57,57,58,52.56l-8-8,4.55-2.91a.38.38,0,0,0-.12-.7L39.14,37.37a.39.39,0,0,0-.46.46L42,53.41a.39.39,0,0,0,.71.13L45.57,49Z"/></svg> <?php the_field('pagina_web') ?></a>
								</div>
							<?php } ?>

							<?php if(has_tag()) { ?>
								<div class="flex items-center mt-2 mb-1"><svg class="mr-2" fill="#333" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 473.486 473.486" xml:space="preserve"><polygon points="473.486,182.079 310.615,157.952 235.904,11.23 162.628,158.675 0,184.389 117.584,299.641 91.786,462.257 237.732,386.042 384.416,460.829 357.032,298.473 "/></svg> 

									<span class="tags">
										<?php 
											$tags = array();
											$posttags = get_the_tags(); 
										 	if ($posttags) {
										    foreach($posttags as $tag) {
										    	echo "<span>".$tag->name."</span>";
										    }
										  }
										?>

									</span>
								</div>
							<?php } ?>

						</div>
						<div class="text-lg border font-medium bg-gray-light border-gray-light px-4 py-1 mt-5">Horarios</div>
						<div class="border border-gray-light p-4">
							<div class="mb-2 pb-1 border-b border-gray-light <?php if(date('w') == 1 ) { ( str_contains(get_field('lunes'), 'Cerrado')) ?  print("red font-bold") : print("green font-bold");} ?>">Lunes: <?php the_field('lunes') ?></div>
							<div class="mb-2 pb-1 border-b border-gray-light <?php if(date('w') == 2 ) { ( str_contains(get_field('martes'), 'Cerrado')) ?  print("red font-bold") : print("green font-bold");} ?>">Martes: <?php the_field('martes') ?></div>
							<div class="mb-2 pb-1 border-b border-gray-light text-<?php if(date('w') == 3 ) { ( str_contains(get_field('miercoles'), 'Cerrado')) ?  print("red font-bold") : print("green font-bold");} ?>">Miércoles: <?php the_field('miercoles') ?></div>
							<div class="mb-2 pb-1 border-b border-gray-light <?php if(date('w') == 4 ) { ( str_contains(get_field('jueves'), 'Cerrado')) ?  print("red font-bold") : print("green font-bold");} ?>">Jueves: <?php the_field('jueves') ?></div>
							<div class="mb-2 pb-1 border-b border-gray-light <?php if(date('w') == 5 ) { ( str_contains(get_field('viernes'), 'Cerrado')) ?  print("red font-bold") : print("green font-bold");} ?>">Viernes: <?php the_field('viernes') ?></div>
							<div class="mb-2 pb-1 border-b border-gray-light <?php if(date('w') == 6 ) { ( str_contains(get_field('sabado'), 'Cerrado')) ?  print("red font-bold") : print("green font-bold");} ?>">Sábado: <?php the_field('sabado') ?></div>
							<div class="mb-2 pb-1 border-b border-gray-light <?php if(date('w') == 7 ) { ( str_contains(get_field('domingo'), 'Cerrado')) ?  print("red font-bold") : print("green font-bold");}?>">Domingo: <?php the_field('domingo') ?></div>
						</div>
						
					</div>

				</div>

				<?php 
				if( $location ): ?>
				    <div class="acf-map rounded border border-gray-light" data-zoom="16">
				        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
				    </div>
				<?php endif; ?>

				<?php if(get_field('bloque_promociones') == 1) { get_template_part( 'template-parts/content-promociones' ); 	} ?>


		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
