<script>

	function loadGoogleMap(){

		var locations = [

		<?php

			$temp = $wp_query; 
			$wp_query = null; 
			$wp_query = new WP_Query(); 
			$wp_query->query('showposts=999&post_type=agencia');
			 while ($wp_query->have_posts()) : $wp_query->the_post(); 

			 	$direccion = get_field('direccion');
				echo "['<div class=\"mb-2\"><a href=\"".get_the_permalink()."\">".get_the_title()."</a></div><div class=\"text-center\"><a href=\"".get_the_permalink()."\" class=\"border-2 border-blue-dark inline-block bg-blue-dark text-white font-medium py-1 px-2\">Ver agencia</a></div>', ".$direccion['lat'].",".$direccion['lng']."],";

		?>

		<?php 

			endwhile;
			$wp_query = null; 
	 		$wp_query = $temp;

		 ?>


		    ];


		    var map = new google.maps.Map(document.getElementById('map'), {
		      zoom: 6,
		      center: new google.maps.LatLng(40.41,-3.70),
		      mapTypeId: google.maps.MapTypeId.ROADMAP
		    });

		    var infowindow = new google.maps.InfoWindow();

		    var marker, i;

		    for (i = 0; i < locations.length; i++) {  
		      marker = new google.maps.Marker({
		        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		        map: map,
		        icon: "/wp-content/themes/carrefour-viajes-agencias/dist/img/map-marker.svg"
		      });

		      google.maps.event.addListener(marker, 'click', (function(marker, i) {
		        return function() {
		          infowindow.setContent(locations[i][0]);
		          infowindow.open(map, marker);
		        }
		      })(marker, i));

		       if(navigator.geolocation) {
			      navigator.geolocation.getCurrentPosition(function(position) {
			        user_location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			        map.setCenter(user_location);
			        map.setZoom(12)  
			      });
			   	}   

		}

	}

	loadGoogleMap();
</script>	