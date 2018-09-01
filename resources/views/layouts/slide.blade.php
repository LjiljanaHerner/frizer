 <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  class="first-slide" src="{{URL::to('/Photos/slidshow/salon1.jpg')}}"  alt="First slide" >   
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="{{URL::to('/Photos/slidshow/salon2.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="{{URL::to('/Photos/slidshow/salon3.jpg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Prethodni</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Sljedeći</span>
        </a>
      </div>
