<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package carrefour-viajes-agencias
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" type="image/x-icon" href="/wp-content/themes/carrefour-viajes-agencias/dist/img/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'carrefour-viajes-agencias' ); ?></a>

<header
  class="flex static flex-wrap justify-between items-center py-2 px-4 m-0 text-sm leading-3 align-baseline border-t-0 border-b border-solid xl:px-12 xl:pt-8 lg:relative lg:w-full lg:px-5 lg:pt-8 border-x-0 border-neutral-200 text-stone-500 mb-5 pb-5"
>
  <div class="logo-container p-0 m-0 align-baseline border-0 lg:-order-1">
    <div class="p-0 m-0 align-baseline border-0 lg:inline-block">
      <a
        href="https://www.viajes.carrefour.es/"
        class="p-0 m-0 align-baseline bg-transparent border-0 cursor-pointer text-sky-500"
        ><img
          class="p-0 m-0 w-full align-baseline border-0"
          src="https://www.viajes.carrefour.es/statics/assets/images/base/crf_viajes_logo_h_colour_rgb-01.png"
          alt="Logo desktop"
      /></a>
      <h1
        class="px-0 pt-1 pb-0 m-0 w-full font-bold text-center align-baseline border-0 lg:pl-3 lg:text-left text-xs text-blue-dark"
      >
        Ofertas en viajes, hoteles, vuelos, cruceros
      </h1>
    </div>
  </div>

  <div
    class="right-header"
  >
    <div class="preheader">
    <ul class="header-elements">
    <li><a href="tel:919100057"><em class="icon-phone"> </em>919 100 057</a></li>
    <li><a href="https://www.viajes.carrefour.es/agencias-viajes/"><em class="icon-ubication"> </em>Agencias</a></li>
    </ul>
    </div>
    <nav class="main-menu p-0 m-0 align-baseline border-0" role="navigation">
      <ul class="header-elements">
      <li><a href="https://www.viajes.carrefour.es/circuitos" title="Circuitos">Circuitos</a></li>
      <li><a href="https://www.viajes.carrefour.es/viajar/egipto" title="Egipto">Egipto 75%</a></li>
      <li><a href="https://www.viajes.carrefour.es/cruceros" title="Cruceros">Cruceros</a></li>
      <li><a href="https://www.viajes.carrefour.es/viajar/caribe" title="Viajes al Caribe">Caribe</a></li>
      <li><a href="https://www.viajes.carrefour.es/disney" title="Ofertas viajes Disneyland Paris">Disneyland Paris</a></li>
      <li><a href="https://www.viajes.carrefour.es/portaventura" title="Ofertas Portaventura">Portaventura</a></li>
      <li><a href="https://www.viajes.carrefour.es/hoteles" title="Hoteles baratos">Hoteles</a></li>
      <li><a href="https://www.viajes.carrefour.es/vuelo-hotel" title="Vuelo más hotel barato">Vuelo + hotel</a></li>
      <li><a href="https://www.viajes.carrefour.es/vuelos" title="Vuelos baratos">Vuelos</a></li>
      </ul>
    </nav>
    
  </div>
</header>

