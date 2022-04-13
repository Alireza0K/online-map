<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- All links here -->
    <link rel="icon" href="./assets/image/home.svg">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- leaf links -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body>
    <!-- header section -->
    <div class="header">
        <div class="body">
            <div class="search-box body-item">
                <input type="text" placeholder="Enter you're location...">
                <button class="btn">searching</button>
            </div>
            <div class="profile body-item">
                username
            </div>
        </div>
    </div>
    <!-- header section -->
   
    <!-- body section -->
    <div class="body">
        <div class="map-section" id="map-section" style="width: 100%; height: 600px;"></div>
    </div>
    <!-- body section -->

    <!-- java script section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
	var map = L.map('map-section').setView([35.703, 51.472], 10);

    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://github.com/Alireza0K">Alireza0K</a>' ,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
    </script>
    <!-- java script section -->
</body>
</html>