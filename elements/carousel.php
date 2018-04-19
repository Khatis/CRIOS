<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php the_field('slide1', 101); ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5><?php the_field('slide1header', 101); ?></h5>
    <p>grr grr maul your face</p>
  </div>
</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php the_field('slide2', 101); ?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5><?php the_field('slide2header', 101); ?></h5>
    <p>nom your face</p>
  </div>
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php the_field('slide3', 101); ?>" alt="Third slide">
    <div class="carousel-caption d-none d-md-block">
  <h5><?php the_field('slide3header', 101); ?></h5>
  <p>Chill as f*ck</p>
</div>
</div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
