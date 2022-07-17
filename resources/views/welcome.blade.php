
@extends('product.layout')



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="margin-right:900px;">Super Market</a>
    <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="{{ route('products.index')}}">
        <button style="width:280px;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Go To System</button>
      </form>
    </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/super3.jpg"  class="d-block w-100" width="100%" height="456px">
      </div>.
      <div class="carousel-item">
        <img src="/images/super2.jpg" class="d-block w-100"  width="100%" height="456px">
      </div>
      <div class="carousel-item">
        <img src="/images/super1.jpg" class="d-block w-100"  width="100%" height="456px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
