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

				<?php the_title(); ?>

				<?php endwhile; endif; ?>

			</div>

			<div id="map" style="height:700px" class="rounded border border-gray-light"></div>
		</div>

	</div>

	<!--

		- card: http://preview.themeforest.net/item/business-directory-listing-local/full_screen_preview/20682497?_ga=2.89873051.167356552.1689061525-686822895.1636013510 con campo especialidades
		- promociones
		- texto seo

	-->

<?php
get_footer();
