<div class="form-grup">
<label for="">Latitude</label>
<input type="text" id="latitude" name="latitude" class="form-control">
</div>
<div class="form-grup">
<label for="">Longitude</label>
<input type="text" id="Longitude" name="longitude" class="form-control">
</div>

<div id="map" style="height: 500px;"></div>


<script>
var curlocation= [0,0];
if(curlocation[0]==0 && curlocation[1]==0){
  curlocation = [0.510440, 101.438309];

}

var map = L.map('map').setView([0.510440, 101.438309], 20);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

map.attributionControl.setPrefix(false);

var marker = new L.marker(curlocation,{
    draggable:'true'
});

marker.on('dragend',function(event){
    var position = marker.getLatLng();
    marker.setLatLng(position,{
        draggable:'true'
    }).bindPopup(position).update();
    $("#Latitude").val(position.lat);
    $("#Longitude").val(position.lng).keyup();
});

$("#Latitude,#Longitude").change(function()
{
    var position = [parseInt($(#Latitude).val()),parseInt($(#Longitude).val())];
    marker.setLatLng(position,{
        draggable:'true'
    }).bindPopup(position).update();
    map.panTo(position);
});
map.addLayer(marker);



</script>   