        // default place and zoom
        const default_latlng = [35.703, 51.472];
        const default_zoom =   12;

        var map = L.map('map-section').setView(default_latlng , default_zoom);

        var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://github.com/Alireza0K">Alireza0K</a>' ,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        // Get  location from user and add marker or pin
        map.on("dblclick" , function(event){
            const lat = event.latlng.lat;
            const lng = event.latlng.lng;
            L.marker([lat,lng]).addTo(map)
            $("#modal-form").fadeIn(400);
            $("#lat").val(lat);
            $("#lng").val(lng);
            $("#lng-lable").html(lng);
            $("#lat-lable").html(lat);
        })

        // show user location
        var current_position , current_accuracy; 
        map.on("locationfound",function(e){
            if(current_position){
                map.removeLayer(current_position);
                map.removeLayer(current_accuracy);
            }

            var radius = e.accuracy / 2;
            current_position = L.marker(e.latlng).addTo(map);
            current_accuracy = L.circle(e.latlng , radius).addTo(map);
        })
        map.on("locationerror",function(e){
            Swal.fire({
                icon: 'Error',
                title: "you're location not found because: ",
                text: e.message,
                footer: '<a href="https://goo.gl/Y0ZkNV">Why do I have this issue?</a>'
              })
        })
        function locate(){
            map.locate({setView: true , maxZoom: default_zoom});
        }
        setTimeout(locate, 3000)
$("#x-icon").click(function(e){
    $("#modal-form").fadeOut();
})

$("#send-information").click(function(e){
    var lat = $("#lat").val();
    var lng = $("#lng").val();
    var place = $("#place-name").val(); 
    var place_type = $("#place-types").val();
    $.ajax({
        url : "process/ajaxhandler.php",
        method : "post",
        data : {
            action : "add-location",
            lat : lat,
            lng : lng,
            place_name : place,
            place_types : place_type
        },
        success :function(response){                            
            $("#message").html(response);
        }
    });
})