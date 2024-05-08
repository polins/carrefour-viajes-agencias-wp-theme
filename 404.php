<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package carrefour-viajes-agencias
 */

get_header();
?>

	<main id="primary" class="site-main site-container">

		<section class="error-404 not-found">
			<h1 class="font-medium text-center text-xl mb-2">Parece que no encontramos la página que estás buscando...</h1>
			<img src="/wp-content/uploads/2024/05/error-background.jpg" alt="Página 404" class="mx-auto mb-5">
			<div class="mb-10 text-center flex flex-col">
				<div class="mb-2">
					<a href="javascript:void(0);" onclick="history.back()">Volver a la página anterior</a>
				</div>
				<div class="mb-2">
					<a href="https://www.viajes.carrefour.es/">Ir a la página de inicio de Viajes Carrefour</a>
				</div>
				<div>
					<a href="<?php bloginfo('url'); ?>">Volver a todas las agencias</a>
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
