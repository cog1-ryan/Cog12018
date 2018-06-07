<?php /* Template Name: Contact Template */ get_header(); ?>
<title>Cog1 - Contact</title>
<div class="universe">
	<div class="group m-scene">
		<section class="main-hero">
			<h1 class="eyebrow waypoint">Contact</h1>
			<h2 class="h1 waypoint delay2">Let’s Get Acquainted</h2>
			<p class="h3 waypoint delay3">We’d love to learn about your business and upcoming projects.</p>
		</section>
		
		<section class="home-our-mission">
			<div class="fifty">
				<div class="panel one waypoint">
					<div class="line"></div>
					<ul class="waypoint">
						<li class="h3"><a href="tal:4154835046" target="_blank">415-483-5046</a></li>
						<li class="h3"><a href="mailto:info@cog1.com" target="_blank">info@cog1.com</a></li><br/><br/>
						<li class="h3"><a href="https://www.google.com/maps/place/COG1+Digital+Marketing/@37.7766256,-122.4084551,15z/data=!4m2!3m1!1s0x0:0x59e0fdd5ae98b8ad?sa=X&ved=0ahUKEwjykMGBmpfbAhVLwVQKHfdeBjgQ_BIIbDAK" target="_blank">81 Langton St. #10<br/>
						San Francisco, CA 94103</a></li>
					</ul>
				</div>
				<div class="panel two waypoint delay1 map">
					<div id="map"></div>
				    <script>
				      var map;
				      
				      function initMap() {
				        var cog1 = {lat: 37.7766256, lng: -122.4084551};
				        var map = new google.maps.Map(document.getElementById('map'), {
				          zoom: 15,
				          center: cog1,
				          styles:
				          [
							  {
							    "elementType": "geometry",
							    "stylers": [
							      {
							        "color": "#f5f5f5"
							      }
							    ]
							  },
							  {
							    "elementType": "labels.icon",
							    "stylers": [
							      {
							        "visibility": "off"
							      }
							    ]
							  },
							  {
							    "elementType": "labels.text.fill",
							    "stylers": [
							      {
							        "color": "#616161"
							      }
							    ]
							  },
							  {
							    "elementType": "labels.text.stroke",
							    "stylers": [
							      {
							        "color": "#f5f5f5"
							      }
							    ]
							  },
							  {
							    "featureType": "administrative.land_parcel",
							    "elementType": "labels.text.fill",
							    "stylers": [
							      {
							        "color": "#bdbdbd"
							      }
							    ]
							  },
							  {
							    "featureType": "poi",
							    "elementType": "geometry",
							    "stylers": [
							      {
							        "color": "#eeeeee"
							      }
							    ]
							  },
							  {
							    "featureType": "poi",
							    "elementType": "labels.text.fill",
							    "stylers": [
							      {
							        "color": "#757575"
							      }
							    ]
							  },
							  {
							    "featureType": "poi.park",
							    "elementType": "geometry",
							    "stylers": [
							      {
							        "color": "#e5e5e5"
							      }
							    ]
							  },
							  {
							    "featureType": "poi.park",
							    "elementType": "labels.text.fill",
							    "stylers": [
							      {
							        "color": "#9e9e9e"
							      }
							    ]
							  },
							  {
							    "featureType": "road",
							    "elementType": "geometry",
							    "stylers": [
							      {
							        "color": "#ffffff"
							      }
							    ]
							  },
							  {
							    "featureType": "road.arterial",
							    "elementType": "labels.text.fill",
							    "stylers": [
							      {
							        "color": "#757575"
							      }
							    ]
							  },
							  {
							    "featureType": "road.highway",
							    "elementType": "geometry",
							    "stylers": [
							      {
							        "color": "#dadada"
							      }
							    ]
							  },
							  {
							    "featureType": "road.highway",
							    "elementType": "labels.text.fill",
							    "stylers": [
							      {
							        "color": "#616161"
							      }
							    ]
							  },
							  {
							    "featureType": "road.local",
							    "elementType": "labels.text.fill",
							    "stylers": [
							      {
							        "color": "#9e9e9e"
							      }
							    ]
							  },
							  {
							    "featureType": "transit.line",
							    "elementType": "geometry",
							    "stylers": [
							      {
							        "color": "#e5e5e5"
							      }
							    ]
							  },
							  {
							    "featureType": "transit.station",
							    "elementType": "geometry",
							    "stylers": [
							      {
							        "color": "#eeeeee"
							      }
							    ]
							  },
							  {
							    "featureType": "water",
							    "elementType": "geometry",
							    "stylers": [
							      {
							        "color": "#c9c9c9"
							      }
							    ]
							  },
							  {
							    "featureType": "water",
							    "elementType": "labels.text.fill",
							    "stylers": [
							      {
							        "color": "#9e9e9e"
							      }
							    ]
							  }
							]
				          
				        });
				        var marker = new google.maps.Marker({
				          position: cog1,
				          map: map,
				          title: 'Cog1 Digital Marketing'
				        });
				        var infowindow = new google.maps.InfoWindow({ // Create a new InfoWindow
						    content:'Cog1<br/><br/>81 Langton St. #10<br/>San Francisco, CA 94103'
						});
						 
						google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker
						    infowindow.open(map,marker); // Open our InfoWindow
						});
				      }
				    </script>
				    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbDDD7dLtZvR3dAEccJumkgzn-p6wBo5I&style=element:geometry%7Ccolor:0xf5f5f5&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x616161&style=element:labels.text.stroke%7Ccolor:0xf5f5f5&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0xbdbdbd&style=feature:poi%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:poi.park%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:road%7Celement:geometry%7Ccolor:0xffffff&style=feature:road.arterial%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:road.highway%7Celement:geometry%7Ccolor:0xdadada&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:road.local%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:transit.line%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:transit.station%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:water%7Celement:geometry%7Ccolor:0xc9c9c9&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&callback=initMap" async defer></script>
				</div>
			</div>
		</section>
		
		<section class="contact-form form-top no-ajax">
			<div class="grid group waypoint">
				<h2 class="h2">Fill out the form to get started.</h2>
				<h3 class="h3">Let’s get a conversation going.</h3>
				<?php gravity_form( 6, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = true, $tabindex, $echo = true ); ?>
			</div>
		</section>
		
		<section class="pdf-download">
			<div class="grid">
				<h2 class="waypoint h2">Get your Free Digital Marketing Audit</h2>
				<div class="button waypoint on-pink"><a href="/free-digital-marketing-audit">Learn More</a></div>
			</div>
		</section>			
	</div>
	<?php get_footer(); ?>
