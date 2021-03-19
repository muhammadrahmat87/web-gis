<div id="map" style="height: 500px;"></div>


<script>var map = L.map('map').setView([0.510440, 101.438309], 20);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.Routing.control({
    waypoints: [
        L.latLng(0.510440, 101.438309),
        L.latLng(0.506030, 101.428092)
    ],
    routeWhileDragging: true
}).addTo(map);

</script>