<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package carrefour-viajes-agencias
 */

get_header();

$qobj = get_queried_object();

?>

	<div class="container mx-auto">

		<div class="mx-auto mb-10 max-w-xl">
			<h1 class="text-center text-blue font-medium text-2xl mb-2">Agencias de viajes en <strong><?php echo $qobj->name; ?></strong></h1>
		</div>

		<div class="columns-2 mb-10">
			<div style="max-height: 700px;" class="overflow-y-scroll">

				<?php if ( have_posts() ) :

				while ( have_posts() ) :
				the_post(); ?>

				<div class="border border-gray-light mb-2 mr-2 p-4">
					<div class="text-blue text-xl font-medium mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					<?php if($tags > 1) { ?>
						<div class="px-2 tracking-wider inline-block bg-blue text-white text-xs -top-2 relative"><?php echo $tags[0]->name; ?></div>
					<?php } ?>
					<?php $tags = get_the_terms( get_the_ID(), 'post_tag' ); ?>
					<div></div>
					<div class="flex flex-row">
						<div>
							<div class="flex mb-2"><span class="icon-ubication relative top-1 mr-2"></span> <span><?php the_field('direccion_completa') ?></span></div>
							<div class="flex flex-row">
							<?php if(get_field('telefono_fijo')) { ?>
								<div class="flex items-center mb-2"><svg class="mr-2" version="1.1" fill="#333"  height="10px" width="10px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.27" style="enable-background:new 0 0 122.88 122.27" xml:space="preserve"><g><path d="M33.84,50.25c4.13,7.45,8.89,14.6,15.07,21.12c6.2,6.56,13.91,12.53,23.89,17.63c0.74,0.36,1.44,0.36,2.07,0.11 c0.95-0.36,1.92-1.15,2.87-2.1c0.74-0.74,1.66-1.92,2.62-3.21c3.84-5.05,8.59-11.32,15.3-8.18c0.15,0.07,0.26,0.15,0.41,0.21 l22.38,12.87c0.07,0.04,0.15,0.11,0.21,0.15c2.95,2.03,4.17,5.16,4.2,8.71c0,3.61-1.33,7.67-3.28,11.1 c-2.58,4.53-6.38,7.53-10.76,9.51c-4.17,1.92-8.81,2.95-13.27,3.61c-7,1.03-13.56,0.37-20.27-1.69 c-6.56-2.03-13.17-5.38-20.39-9.84l-0.53-0.34c-3.31-2.07-6.89-4.28-10.4-6.89C31.12,93.32,18.03,79.31,9.5,63.89 C2.35,50.95-1.55,36.98,0.58,23.67c1.18-7.3,4.31-13.94,9.77-18.32c4.76-3.84,11.17-5.94,19.47-5.2c0.95,0.07,1.8,0.62,2.25,1.44 l14.35,24.26c2.1,2.72,2.36,5.42,1.21,8.12c-0.95,2.21-2.87,4.25-5.49,6.15c-0.77,0.66-1.69,1.33-2.66,2.03 c-3.21,2.33-6.86,5.02-5.61,8.18L33.84,50.25L33.84,50.25L33.84,50.25z"/></g></svg><a href="tel:<?php the_field('telefono_fijo') ?>"><?php the_field('telefono_fijo') ?></a></div>
							<?php } ?>
							<?php if(get_field('telefono_movil')) { ?>
								<div class="flex ml-2 mb-2 items-center"><svg class="mr-2" version="1.1" fill="#333"  height="10px" width="10px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.27" style="enable-background:new 0 0 122.88 122.27" xml:space="preserve"><g><path d="M33.84,50.25c4.13,7.45,8.89,14.6,15.07,21.12c6.2,6.56,13.91,12.53,23.89,17.63c0.74,0.36,1.44,0.36,2.07,0.11 c0.95-0.36,1.92-1.15,2.87-2.1c0.74-0.74,1.66-1.92,2.62-3.21c3.84-5.05,8.59-11.32,15.3-8.18c0.15,0.07,0.26,0.15,0.41,0.21 l22.38,12.87c0.07,0.04,0.15,0.11,0.21,0.15c2.95,2.03,4.17,5.16,4.2,8.71c0,3.61-1.33,7.67-3.28,11.1 c-2.58,4.53-6.38,7.53-10.76,9.51c-4.17,1.92-8.81,2.95-13.27,3.61c-7,1.03-13.56,0.37-20.27-1.69 c-6.56-2.03-13.17-5.38-20.39-9.84l-0.53-0.34c-3.31-2.07-6.89-4.28-10.4-6.89C31.12,93.32,18.03,79.31,9.5,63.89 C2.35,50.95-1.55,36.98,0.58,23.67c1.18-7.3,4.31-13.94,9.77-18.32c4.76-3.84,11.17-5.94,19.47-5.2c0.95,0.07,1.8,0.62,2.25,1.44 l14.35,24.26c2.1,2.72,2.36,5.42,1.21,8.12c-0.95,2.21-2.87,4.25-5.49,6.15c-0.77,0.66-1.69,1.33-2.66,2.03 c-3.21,2.33-6.86,5.02-5.61,8.18L33.84,50.25L33.84,50.25L33.84,50.25z"/></g></svg><a href="tel:<?php the_field('telefono_movil') ?>"><?php the_field('telefono_movil') ?></a> <?php if(get_field('habilitar_whatsapp')) { ?><?php } ?><a target="_blank" href="https://wa.me/<?php the_field('telefono_movil') ?>" title="contactar por Whatsapp" class="ml-3"><span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="25px" height="25px" fill="#25d366"><path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z"/></svg></span></a></div>
							<?php } ?>
							</div>
							<div class="mt-2 flex"><a href="<?php the_permalink(); ?>" class="border-2 border-blue-dark bg-blue-dark text-white font-medium text-xs py-1 px-5">Más info</a><a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo esc_attr(get_field('direccion')['lat']); ?>,<?php echo esc_attr(get_field('direccion')['lng']); ?>" target="_blank" class="border-2 border-blue-dark hover:bg-blue-dark hover:text-white text-blue-dark font-medium text-xs py-1 px-5 ml-3">Cómo llegar</a></div>
					</div>
					<?php if(has_post_thumbnail()) { ?>
						<div class="max-w-52 h-full ml-auto">
							<a href="<?php the_permalink(); ?>" class="block h-full">
								<?php the_post_thumbnail('medium',  ['class' => 'object-cover h-full']); ?>
							</a>
						</div>
					<?php } ?>
					</div>
				</div>	

				<?php endwhile; endif; ?>

			</div>

			<div id="map" style="height:700px" class="rounded border border-gray-light"></div>
		</div>

		<div class="mt-10 mb-14">

			<div class="grid grid-cols-4 gap-5">
				
				<div class="text-blue text-xl font-semibold">Promociones</div>

				<div class="flex flex-col">
					<a href="#" class="block"><img src="https://www.viajes.carrefour.es/statics/media/_thumbs/banner/campanas/2024/abril/circuitos-descuento-viajes-organizados.jpg" alt="">
					<div class="bg-blue-dark p-3">
						<div class="text-white uppercase text-lg mb-2">12% descuento circuitos</div>
						<p class="text-white">Viajes organizado por todo el mundo. Europa, Áfirca, Asia, América.</p>
					</div></a>
				</div>

				<div class="flex flex-col">
					<a href="#" class="block"><img src="https://www.viajes.carrefour.es/statics/media/_thumbs/banner/campanas/2024/abril/pantalla-ccruceros-abril.jpg" alt="">
					<div class="bg-blue-dark p-3">
						<div class="text-white uppercase text-lg mb-2">12% descuento circuitos</div>
						<p class="text-white">Viajes organizado por todo el mundo. Europa, Áfirca, Asia, América.</p>
					</div></a>
				</div>

				<div class="flex flex-col">
					<a href="#" class="block"><img src="https://www.viajes.carrefour.es/statics/media/_thumbs/banner/campanas/2024/abril/pantalla-pte-mayo-24.jpg" alt="">
					<div class="bg-blue-dark p-3">
						<div class="text-white uppercase text-lg mb-2">12% descuento circuitos</div>
						<p class="text-white">Viajes organizado por todo el mundo. Europa, Áfirca, Asia, América.</p>
					</div></a>
				</div>

			</div>
			
		</div>

		<div class="mt-10 mb-14 max-w-5xl mx-auto">
			<?php echo term_description(); ?>
		</div>


	</div>

	<!--

		- card: http://preview.themeforest.net/item/business-directory-listing-local/full_screen_preview/20682497?_ga=2.89873051.167356552.1689061525-686822895.1636013510 con campo especialidades
		- promociones
		- texto seo

	-->

<?php
get_footer();
