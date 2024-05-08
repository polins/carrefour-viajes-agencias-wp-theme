<div class="mt-10 mb-14">

	<div class="flex promociones-block">
		<div class="wrapper">

			<?php

				$temp = $wp_query; 
				$wp_query = null; 
				$wp_query = new WP_Query(); 
				$wp_query->query('showposts=999&post_type=promocion');
				while ($wp_query->have_posts()) : $wp_query->the_post(); 

				if(get_field("fecha") > date('d/m/Y')){

			?>

			<div class="mb-5">
				<a target="_blank" href="<?php the_field("enlace") ?>" class="block"><?php the_post_thumbnail('full'); ?></a>
			</div>

			<?php 	

				}

				endwhile;
				$wp_query = null; 
			 	$wp_query = $temp;

			?>	

		</div>
	</div>
	
</div>