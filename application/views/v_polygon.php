<div id="map" style="height: 500px;"></div>


<script>var map = L.map('map').setView([0.4585794,101.401522], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var polygon = L.polygon([
    [0.459745, 101.387833],
    [0.454553, 101.387958],
    [0.456981, 101.405541],
    [0.460261, 101.404749]
]).addTo(map);

</script>