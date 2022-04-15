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
        <!-- form modal  -->
            <div class="modal" style="display: none;">
                <div class="content">
                    <div class="information">
                        <input type="radio" name="lat" value="lat" readonly checked>
                        <label for="lat">lat</label>
                        <input type="radio" name="lng" value="lng" readonly checked>
                        <label for="lng">lng</label>
                    </div>
                    <div class="place-name">
                        <input type="text" class="inpuut" name="name_place" placeholder="Name of this place">
                        <br>
                        <select type="select" name="type_place" form="type-form">
                            <option value="1">restorant</option>
                            <option value="2">towert</option>
                            <option value="3">office</option>
                            <option value="4">home</option>
                        </select>
                        <br>
                        <button id="send-information" class="btn" style="margin:10px 0px;">Place information</button>
                    </div>
                </div>
            </div>
        <!-- form modal  -->
        <div class="map-section" id="map-section" style="width: 100%; height: 600px;"></div>
    </div>
    <!-- body section -->

    <!-- java script section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/map-setting.js"></script>
    <!-- java script section -->
</body>
</html>