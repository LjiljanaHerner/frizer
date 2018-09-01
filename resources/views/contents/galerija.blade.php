@extends('index')
@section('title', 'O nama')
@include('layouts.bootstrap')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<style>
* {
    box-sizing: border-box;
}
    
}

body {
    margin: 0;
	
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>

<body>

<!-- Header -->

<div class="header">
  <h1 class="w3-xxxlarge">Naše frizure</h1>
  <p class="w3-xxlarge">Svi modeli</p>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="{{URL::to('/Photos/galerija/friz1.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz2.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz3.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz4.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz5.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz6.jpg')}}"style="width:100%">
	<img src="{{URL::to('/Photos/galerija/friz7.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz8.jpg')}}"style="width:100%">
  </div>
  <div class="column">
    <img src="{{URL::to('/Photos/galerija/friz9.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz10.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz11.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz12.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz13.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz15.jpg')}}"style="width:100%">
	<img src="{{URL::to('/Photos/galerija/friz16.jpg')}}"style="width:100%">
  </div>  
  <div class="column">
	<img src="{{URL::to('/Photos/galerija/friz17.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz18.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz19.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz20.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz21.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz22.jpg')}}"style="width:100%">
	<img src="{{URL::to('/Photos/galerija/friz23.jpg')}}"style="width:100%">
    
  </div>
  <div class="column">
	<img src="{{URL::to('/Photos/galerija/friz24.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz25.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz26.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz27.jpg')}}"style="width:100%">
	<img src="{{URL::to('/Photos/galerija/friz28.jpg')}}"style="width:100%">
    <img src="{{URL::to('/Photos/galerija/friz29.jpg')}}"style="width:100%">
	<img src="{{URL::to('/Photos/galerija/friz30.jpg')}}"style="width:100%">
  </div>
</div>
 
 <br></br>
<!-- FOOTER -->
     <footer class="container">
        <p>&copy; 2018 Ljiljana Herner &middot; </p>
      </footer>