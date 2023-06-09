@extends('layouts.main')


@section('container')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="1000">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="image/bunga1.png" alt="First slide" height="500px" width="250px">
                <div class="carousel-caption d-none d-md-block" style="max-height:50%; background-color: rgba(0, 0, 0, 0.7)">
                    <h5>Bucket<small><a href=""></a></small></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/bunga2.png" alt="First slide" height="500px" width="250px">
                <div class="carousel-caption d-none d-md-block" style="max-height:50%; background-color: rgba(0, 0, 0, 0.7)">
                    <h5>Trophy<small><a href=""></a></small></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/bunga3.png" alt="First slide" height="500px" width="250px">
                <div class="carousel-caption d-none d-md-block" style="max-height:50%; background-color: rgba(0, 0, 0, 0.7)">
                    <h5>Baloon<small><a href=""></a></small></h5>

                </div>
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


    <div class="row">
      <div class="col-sm" style="font-size: 30px">
        <h1>PANTHEGIFT</h1>
        <span style="">
            is a brand specializing in the sale of trophy buckets and balloon buckets. We are dedicated to providing high-quality products that cater to various occasions and celebrations. Our range of trophy buckets offers an elegant and stylish option for commemorating achievements and honoring accomplishments. Crafted with precision and attention to detail, these trophy buckets are designed to make a lasting impression.
        </span>
      </div>
      <div class="col-sm ta-center" >
            <img src="image/panthegift.jpeg" alt="" height="100%" width="100%" style=" opacity: 0.5;">
      </div>
    </div>
    <div class="row">
        <div class="col-sm ta-center" >
              <img src="image/panthegift.jpeg" alt="" height="100%" width="100%" style=" opacity: 0.5;">
        </div>
        <div class="col-sm" style="font-size: 30px">
          In addition to trophy buckets, PANTHEGIFT also offers a wide selection of balloon buckets. These creative and unique buckets are perfect for adding a touch of joy and festivity to any event or party. Whether you are celebrating a birthday, anniversary, or special occasion, our balloon buckets will enhance the atmosphere and create memorable experiences.
        </div>
    </div>

    <div class="row">
        <div class="col-sm" style="font-size: 30px">
          <h1>PANTHEGIFT</h1>
           is a brand specializing in the sale of trophy buckets and balloon buckets. We are dedicated to providing high-quality products that cater to various occasions and celebrations. Our range of trophy buckets offers an elegant and stylish option for commemorating achievements and honoring accomplishments. Crafted with precision and attention to detail, these trophy buckets are designed to make a lasting impression.
        </div>
        <div class="col-sm ta-center" >
              <img src="image/panthegift.jpeg" alt="" height="100%" width="100%" style=" opacity: 0.5;">
        </div>
    </div>



@endsection

