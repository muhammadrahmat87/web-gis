<body>
<div id="map" style="height: 500px;"></div>
<a class="btn btn-info">Refresh Button</a>
</body>


<script>var map = L.map('map').setView([-6.88077,107.579187], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var markers = L.markerClusterGroup();

<?php foreach ($tps as $key => $value) { ?>
   var lokasi = L.marker([<?=$value->latitude?>, <?=$value->longitude?>])
   .bindPopup("<img src='<?=base_url()?>leaflet/images/s.jpg' width='200px'><br>"+
              "<td>Kode TPS : <?=$value->kode_tps?></td><br>"+
              "<td>Nama TPS : <?=$value->nama_tps?></td><br>"
              )
   

markers.addLayer(lokasi);
map.addLayer(markers);
map.fitBounds(markers.getBounds());

 
<?php } ?>


</script>