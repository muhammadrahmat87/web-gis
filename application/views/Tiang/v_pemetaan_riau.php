<div id="map" style="height: 500px;">

 <!-- <a href="<?= base_url('home/tambah_riau') ?>" class="btn btn-info">Refresh Button</button>  -->


</div>


<script>var map = L.map('map').setView([-6.88077,107.579187], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var markers = L.markerClusterGroup();

<?php foreach ($tps as $key => $value) { ?>
   var lokasi = L.marker([<?=$value->latitude?>, <?=$value->longitude?>])
   .bindPopup("<img src='<?=base_url()?>leaflet/images/s.jpg' width='200px'><br>"+
              "<td>NPWPD 	  : <?=$value->npwpd?></td><br>"+
              "<td>Kode Tiang : <?=$value->ktiang?></td><br>"+
              "<td>Nama Usaha : <?=$value->nama_usaha?></td><br>"+
              "<td>Produk     : <?=$value->produk?></td><br>"+
              "<td>Lokasi     : <?=$value->lokasi?></td><br>"+
              "<td>Ukuran     : <?=$value->ukuran?></td><br>"+
              "<td>Masa Pajak : <?=$value->mpajaka?> s/d <?=$value->mpajakb?></td><br>"
              )
   

markers.addLayer(lokasi);  
map.addLayer(markers);
map.fitBounds(markers.getBounds());

 
<?php } ?>


</script>
<p>
 <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('home/tambah', '<button class="btn btn-success margin"><i class="fa fa-plus"></i> Tambah</button>');     
				
            ?>

</div>