
<div id="map" style="height: 500px;"></div>


<script>var map = L.map('map').setView([0.510440, 101.438309], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

//warna marker
var icon1 = L.icon({
    iconUrl: '<?=base_url('leaflet/images/marker.png')?>',

    iconSize:     [30, 50], // size of the icon
    iconAnchor:   [22, 55], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -40] // point from which the popup should open relative to the iconAnchor

});

var marker = L.marker([0.506030, 101.428092],{icon:icon1}).bindPopup("<b>Hello world!</b><br>I am a popup.").addTo(map);

</script>

