<div id="map" style="height: 500px;"></div>


<script>var map = L.map('map').setView([0.5351919,101.4291069], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);



<?php foreach ($riau as $key => $value) { ?>
    L.marker([<?=$value->lat?>, <?=$value->lng?>])
   .bindPopup("<h5><b>Kode Tiang:</b></h5><br><h5>Lokasi: </h5></br><br><h5>Ukuran :</h5></br><br><h5>Jenis Pajak :</h5></br>")
    .addTo(map);
 
<?php } ?>


</script>