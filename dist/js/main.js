(function ($) {

    // Core Javascript Initialization
    var App = function() {
        'use strict';
        
        var GoogleMaps = function(){

            function initMap( $el ) {

                // Find marker elements within map.
                var $markers = $el.find('.marker');

                // Create gerenic map.
                var mapArgs = {
                    zoom        : $el.data('zoom') || 16,
                    mapTypeId   : google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map( $el[0], mapArgs );

                // Add markers.
                map.markers = [];
                $markers.each(function(){
                    initMarker( $(this), map );
                });

                // Center map based on markers.
                centerMap( map );

                // Return map instance.
                return map;
            }

            function initMarker( $marker, map ) {

                // Get position from marker.
                var lat = $marker.data('lat');
                var lng = $marker.data('lng');
                var latLng = {
                    lat: parseFloat( lat ),
                    lng: parseFloat( lng )
                };

                // Create marker instance.
                var marker = new google.maps.Marker({
                    position : latLng,
                    map: map
                });

                // Append to reference for later use.
                map.markers.push( marker );

                // If marker contains HTML, add it to an infoWindow.
                if( $marker.html() ){

                    // Create info window.
                    var infowindow = new google.maps.InfoWindow({
                        content: $marker.html()
                    });

                    // Show info window when marker is clicked.
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open( map, marker );
                    });
                }
            }
            
            function centerMap( map ) {

                // Create map boundaries from all map markers.
                var bounds = new google.maps.LatLngBounds();
                map.markers.forEach(function( marker ){
                    bounds.extend({
                        lat: marker.position.lat(),
                        lng: marker.position.lng()
                    });
                });

                // Case: Single marker.
                if( map.markers.length == 1 ){
                    map.setCenter( bounds.getCenter() );

                // Case: Multiple markers.
                } else{
                    map.fitBounds( bounds );
                }
            }

            // Render maps on page load.
            $(document).ready(function(){
                $('.acf-map').each(function(){
                    var map = initMap( $(this) );
                });
            });

        }

        var Buscador = function(){

            function containsNumber(str) {
              // Check if the string contains any digit between 0 and 9
              return /\d/.test(str);
            }

            fetch('/wp-json/custom/v2/place/')
            .then((response) => response.json())
            .then((json) => {
                $('#search-agencias').select2({
                        placeholder: 'Escribe la localidad o el código postal',
                        minimumInputLength:2,
                        language: "es",
                        data: json.results
                    });
                $('#search-agencias').on('select2:select', function (e) {
                  var data = e.params.data;
                  var action = data.id;
                  $('form.buscador').attr('action', "/"+action);
                  $('form.buscador').removeClass('error');
              });

              $( "form.buscador" ).on( "submit", function( event ) {
                if($(this).attr('action') == ''){
                    $(this).addClass('error');
                    event.preventDefault();
                }
              });


            });

            
        }
        
        return {
            init: function() {
              GoogleMaps();
              Buscador();
            }
        }
    }();

    $(document).ready(function() {
        App.init();
    });


}(jQuery));