<div class="mb-10">
	<div class="md:flex">
		<form action="" class="buscador mb-5 md:mb-0">
			<select name="search" id="search-agencias" class="">
				<option value=""></option>
			</select>
			<button class="rounded-tr rounded-br bg-blue-dark text-white p-2 inline-block border border-blue-dark ml-auto h-full" style="width:42px"><span class="icon-search"></span></button>
		</form>
		<?php if(is_front_page()){ ?>
			<a href="javascript:void(0);" onclick="loadGoogleMap();" class="ml-auto bg-blue-dark text-white text-bold px-5 py-2 flex items-center whitespace-nowrap justify-center rounded"><span class="vc-icon-map text-2xl"></span>Buscar agencias cerca</a>
		<?php } else { ?>
			<a href="<?php echo bloginfo('url'); ?>" class="ml-auto bg-blue-dark text-white text-bold px-5 py-2 flex items-center whitespace-nowrap justify-center rounded"><span class="vc-icon-map text-2xl"></span>Buscar agencias cerca</a>
		<?php } ?>
	</div>	
</div>	