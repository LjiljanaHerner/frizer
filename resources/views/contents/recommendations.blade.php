@extends('index')
@section('title', 'Preporuke')
@include('layouts.bootstrap')



<style>
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
		<h1> Frizerski salon D&V </h1><br></br>
		<h2>Za njegu kose u ponudi imamo BOTOX, OLAPLEX, </h2><h2>Semi boje bez amonijaka, tremani za brzi rast kose, tretmani za volumen kao i preparate za njegu kose na bazi arganovih ulja.</h2>
	</div>
	<div class="row">
		<img src="{{URL::to('/Photos/olaplex1.jpg')}}" alt="Smiley face" class="rounded-circle" width="304" height="236"> 
		<img src="{{URL::to('/Photos/olaplex2.jpg')}}" alt="Smiley face" class="rounded-circle align="right" width="304" height="236"> <br></br>
    </div>
	<div class="row">
		<h4> Oplex:</h4><p>je jedinstven aktivan sastojak koji je nastao suradnjom timova znanstvenika. Termičkim, mehaničkim i kemijskim tretmanima kidaju se disulfidne sumporne veze u kosi. Primjenom ovoga preparata te veze se obnavljaju. Ne sadrži silikon te time ne opterećuje vašu kosu. Učikovit je u podizanju zdravlja vaše kose. Koristi se u kombinaciji sa bojama ili blajhom i utječe na trajnost boje  vaše kose. Može se koristiti kao samostalni tretman.</p>
		<h4> Semi color:</h4><p> su boje bez amoijaka.Izuzetno je dobar u isticanju priroden boje kose kada je vaša kosa počela sijediti.Sijede valsi će iznijansirati a pri tome neće promijneiti dubinu vaše boje. Semi boje koriste se TON na TON što znači da ne mogu posvijetliti vašu kosu ego joj dati još više sjaja i njege. Izuztno su učinkovite u procesu nijansiranja žutih,crvenih ili zelenih pigmenata koji su se nataložili na kosi. Vrijeme djelovanja 20 min a kosa izgleda kao iz snova.</p>
		<h4>Nećemo vam više pričati nego vas srdačno pozivamo da nam ukažete vaše povjerenje a i mi vam jamčimo kvalitetu i ugodnu atmosferu.</h4>
	</div>
</div>
<br></br>
<!-- FOOTER -->
     <footer class="container">
        <p>&copy; 2018 Ljiljana Herner &middot; </p>
      </footer>