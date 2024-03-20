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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'carrefour-viajes-agencias' ); ?></a>

<header
  class="flex static flex-wrap justify-between items-center py-2 px-4 m-0 text-sm leading-3 align-baseline border-t-0 border-b border-solid xl:px-12 xl:pt-8 xl:pb-1 lg:relative lg:w-full lg:px-5 lg:pt-8 lg:pb-1 border-x-0 border-neutral-200 text-stone-500"
>
  <div class="p-0 m-0 align-baseline border-0 lg:-order-1">
    <div class="p-0 m-0 align-baseline border-0 lg:inline-block">
      <a
        href="https://www.viajes.carrefour.es/"
        class="p-0 m-0 align-baseline bg-transparent border-0 cursor-pointer text-sky-500"
        ><img
          class="p-0 m-0 w-full align-baseline border-0"
          src="https://www.viajes.carrefour.es/statics/assets/images/base/crf_viajes_logo_h_colour_rgb-01.png"
          alt="Logo desktop"
      /></a>
    </div>
  </div>

  <div
    class="op-4 m-0 w-full h-2 align-baseline bg-white border-0 lg:relative lg:top-0 lg:left-0 lg:-order-1 lg:h-auto lg:w-3/4 lg:bg-transparent lg:p-0"
  >
    <div
      class=" p-0 m-0 text-xs text-white uppercase align-baseline border-0 md:block"
    >
      <ul
        class="p-0 m-0 uppercase align-baseline border-0 lg:flex lg:items-center lg:justify-end"
      >
        <li
          class="px-0 pt-0 pb-2 mx-0 mt-0 mb-2 text-left uppercase align-baseline border-t-0 border-b border-solid lg:mb-0 lg:border-b-0 lg:pb-0 border-x-0 border-zinc-100"
        >
          <a
            href="tel:919100057"
            class="p-0 m-0 uppercase align-baseline bg-transparent border-0 cursor-pointer lg:uppercase lg:text-sky-800 hover,lg:text-sky-500 content-none hover:text-sky-800 hover:opacity-80"
            ><em
              class="inline-block p-0 my-0 mr-1 ml-0 not-italic leading-none normal-case align-baseline border-0 text-sky-800"
            >
            </em
            >919 100 057</a
          >
        </li>
        <li
          class="px-0 pt-0 pb-2 mx-0 mt-0 mb-2 text-left uppercase align-baseline border-t-0 border-b border-solid lg:mb-0 lg:border-b-0 lg:pb-0 border-x-0 border-zinc-100"
        >
          <a
            href="https://www.viajes.carrefour.es/agencias-viajes/"
            class="p-0 m-0 uppercase align-baseline bg-transparent border-0 cursor-pointer lg:uppercase lg:text-sky-800 hover,lg:text-sky-500 content-none hover:text-sky-800 hover:opacity-80"
            ><em
              class="inline-block p-0 my-0 mr-1 ml-0 not-italic leading-none normal-case align-baseline border-0 text-sky-800"
            >
            </em
            >Agencias</a
          >
        </li>
      </ul>
    </div>
    <nav class="block p-0 m-0 align-baseline border-0" role="navigation">
      nav here
    </nav>
    
  </div>
  <h1
    class="px-0 pt-1 pb-0 m-0 w-full font-bold text-center align-baseline border-0 lg:pl-3 lg:text-left lg:text-xs text-blue-dark"
  >
    Ofertas en viajes, hoteles, vuelos, cruceros
  </h1>
</header>

