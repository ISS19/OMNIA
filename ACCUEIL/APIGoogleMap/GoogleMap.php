<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de carte OpenStreetMap</title>
    <link rel="stylesheet" href="leaflet.css">
    <script src="leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" integrity="sha512-NxO6q3XJcGp+ZENOVvZJ/V6hLk6J1V6+5+t5U5V7HJX9N2V7z+iMvjqZp7/y0hL4HL/C7dBg+0G65FGW8gCvZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js" integrity="sha512-kRvzbzRUaQcLlQLoybm6ThR+wFdrMyD6h5U6XltN6Lnb0pj3E3A86h/16ltNOG4E4liKZpew7mJ0nk+EYhSgOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
		body{
			overflow: hidden;
		}
        #map {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
      var mymap = L.map('map').setView([-20, 47], 6);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
		maxZoom: 18,
		}).addTo(mymap);

		var southWest = L.latLng(-25, 42);
		var northEast = L.latLng(-12, 51);
		var bounds = L.latLngBounds(southWest, northEast);

		mymap.setMaxBounds(bounds);
		mymap.on('drag', function() {
		mymap.panInsideBounds(bounds, { animate: false });
		});
      var regions = [
			{
				name: "Analamanga",
				latlng: [-18.8781, 47.5162]
			},

			{
				name: "Amoron'i Mania",
				latlng: [-20.3333, 47.3333]
			},

			{
				name: "Atsimo-Atsinanana",
				latlng: [-22.0000, 48.0000]
			},

			{
				name: "Haute Matsiatra",
				latlng: [-21.3333, 47.1667]
			},

    ];

    regions.forEach(function(region) {
      var marker = L.marker(region.latlng).addTo(mymap);
      marker.bindPopup("<b>" + region.name +"</b>" + "<br>" + "Un point de vente se trouve ici" + "").openPopup();
    });


	function onLocationFound(e) {
        var radius = e.accuracy / 2;
        L.marker(e.latlng).addTo(mymap)
          .bindPopup("Vous êtes ici").openPopup();
        L.circle(e.latlng, radius).addTo(mymap);
      }

      function onLocationError(e) {
        alert(e.message);
      }

      mymap.on('locationfound', onLocationFound);
      mymap.on('locationerror', onLocationError);

      mymap.locate({setView: true, maxZoom: 16});
    </script>
</body>
</html>