@extends('index')
@section('title', 'Kontakt')
@include('layouts.bootstrap')

<style>
#v2 {
    background-color: LightGoldenRodYellow;
    padding-top: 50px;
    padding-right: 20px;
    padding-bottom: 50px;
    padding-left: 80px;
	position: relative;
	
}

</style>
<div id="v1" class="container text-center">
	<img src="{{URL::to('/Photos/logo2.png')}}">
</div>

<div id="v2" class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<h2>Lokacija Jankomir</h2>
			<p>Adresa: Ul. Antuna Šoljana 43, 10000, Zagreb</p>
			<p>Br.tel.: 092 198 9997</p><br></br>
		</div>


		<div class="col-sm-6">
			<h2>Lokacija Sesvete</h2>
			<p>Adresa: Bistrička 6,10360 Sesvete</p>
			<p>Br.tel.: 091 314 8778</p>
		</div>
	</div>
</div>	
<br></br>
<!-- FOOTER -->
     <footer class="container">
        <p>&copy; 2018 Ljiljana Herner &middot; </p>
      </footer>