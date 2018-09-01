@extends('index')
@section('title', 'O nama')
@include('layouts.bootstrap')

<style>


h3 {
	text-align:center;
	padding: 3rem;
}
h1 {
    text-align: center;
	position: apsolut;
	left: 20%;
	right: 20%;
}
p {
	text-indent: 2em;
}

#v2 {
    background-color: LightGoldenRodYellow;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
	position: relative;
	
}
</style>

<div class="container text-center">
	<img src="{{URL::to('/Photos/logo_plavibez.png')}}" alt="Smiley face"> 
</div>
<div id="v2">
	<div  class="container text-center">
		<h1> Frizerski salon D&V </h1><br></br><br></br>
	</div>

	<div class="row">
		<p> Frizerski salon D&V posluje od 2011.godine na dvije lokacije. Od samog početka poslujemo sa kvalitetim proizvodima i stručno ljubaznim osobljem. Nalazimo se u sklopu trgovačkog centra Kaufland na lokacijama u Sesvetama i Jankomiru. Parkiong je osiguran. Cijene su prilagođene svima. Ugodnu i opuštenu atmosferu te stručna savjetovanja naći će te u našim salonima. </p>
	</div>
</div>
<br></br>
<!-- FOOTER -->
     <footer class="container">
        <p>&copy; 2018 Ljiljana Herner &middot; </p>
      </footer>