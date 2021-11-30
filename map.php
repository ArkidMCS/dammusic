<!doctype HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    
        <title>Map</title>
    </head>
<body>
    <div id="map" style="width: 600px; height: 400px;"></div>
    <?php
    $details = json_decode(file_get_contents("https://api.ipgeolocation.io/ipgeo?apiKey=a0bb8518b7f74931aedc73153c5f275a"));
    $ip = $details->ip;
    $lat = $details->latitude;
    $lon = $details->longitude;
    ?>
<script>
    
    
	var map = L.map('map').setView([<?php echo $lat.", ".$lon; ?>], 13);

	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(map);
    var marker = L.marker([<?php echo $lat.", ".$lon; ?>]).addTo(map);
    marker.bindPopup("<b><?php echo $ip; ?></b>").openPopup();

</script>
    
</body>
</html>