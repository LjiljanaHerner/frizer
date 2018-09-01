@extends('index')
@section('title', 'Lokacije')
@include('layouts.bootstrap')


<style>
#v1 {
    background-color: LightGoldenRodYellow;
    padding-top: 100px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 60px;
	position: relative;
}
#mapd {
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 100px;
	position: relative;
	width:1000px; 
	height:400px;
}

</style>


<div id="v1">
	<div class="row">
		<div class="col-sm-6">
			<h2>Lokacija Jankomir</h2>
			<p>Adresa: Ul. Antuna Šoljana 43, 10000, Zagreb</p>
			<p>Br.tel.: 092 198 9997</p>
		</div>


		<div class="col-sm-6">
			<h2>Lokacija Sesvete</h2>
			<p>Adresa: Bistrička 6,10360 Sesvete</p>
			<p>Br.tel.: 091 314 8778</p>
		</div>
	</div>
	
	
<div id="mapd" style="height:60%;width:100%;">
<script>
function moMap() {
	var location1 ={lat: 45.8035507,lng: 15.8773151};
	var location2 ={lat: 45.8350144,lng: 16.1073053};;
	var mapd= new google.maps.Map(document.getElementById("mapd"),{
		center: {lat: 45.813121,lng: 15.977301},
		zoom:10,
		mapTypeId:google.maps.MapTypeId.HYBRID
	 });
	 var marker1 = new google.maps.Marker({
		 position: location1,
		 map: mapd,
		 animation: google.maps.Animation.BOUNCE,
	 });
	 var marker2 = new google.maps.Marker({
		 position: location2,
		 map: mapd,
		 animation: google.maps.Animation.BOUNCE,
	 });

}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNi7ZXK8w0pYrLp6GNhyPTOsRbgiYwlok&callback=moMap"></script>
</div>
</div>

<!-- FOOTER -->
   <footer class="container">
        <p>&copy; 2018 Ljiljana Herner &middot; </p>
      </footer>
