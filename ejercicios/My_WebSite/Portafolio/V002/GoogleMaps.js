function myMap() {
        var mapOptions = {
        center: new google.maps.LatLng(-12.0734497, -77.0162899),
        zoom: 15,
        //mapTypeId: google.maps.MapTypeId.HYBRID 
        //cambia la presentacion a satelite
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}