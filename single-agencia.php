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

		<!-- ejemplo: https://clinicas.vitaldent.com/madrid/clinica-dental-vitaldent-san-bernardo-170

			review: https://wordpress.org/plugins/wp-reviews-plugin-for-google/

		 -->



		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="container mx-auto">
				<h1 class="text-3xl font-semibold text-blue mb-5"><?php the_title(); ?></h1>
				<div class="columns-3 gap-10">
					<div>
						
						<?php the_field('direccion_completa') ?> - <a href="https://help.mangomap.com/hc/en-us/articles/900003900586-How-to-create-links-to-direction-routes" target="_blank">Como llegar</a><br />
						<?php the_field('telefono_fijo') ?><br />
						<?php the_field('telefono_movil') ?><br />
						<?php the_field('correo_electronico') ?><br />
						<?php the_field('pagina_web') ?><br /><br />
						
						Domingo: <?php the_field('domingo') ?><br />
						Lunes: <?php the_field('lunes') ?><br />
						Martes: <?php the_field('martes') ?><br />
						Miércoles: <?php the_field('miercoles') ?><br />
						Jueves: <?php the_field('jueves') ?><br />
						Viernes: <?php the_field('viernes') ?><br />
						Sábado: <?php the_field('sabado') ?><br />

					</div>
					<div>
						<!-- https://www.advancedcustomfields.com/resources/google-map/ -->
						<?php 
						$location = get_field('direccion');
						if( $location ): ?>
						    <div class="acf-map" data-zoom="16">
						        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
						    </div>
						<?php endif; ?>
					</div>
					<div>
						<?php the_post_thumbnail('full') ?>
						<!-- más de 1 foto ? -->
					</div>
				</div>
				<div class="flex mt-5">
					<?php the_content(); ?>

					<!-- bloque promociones -->
				</div>

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
