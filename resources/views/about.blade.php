@extends('layouts.main')

@section('container')
<h1>TENTANG KAMI</h1>

<h1>OUR TEAM</h1>
<div class="py-5">
    <div class="container">
      <div class="row hidden-md-up">
        @foreach ($about as $team)
            <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <img src="{{ $team['image'] }}" alt="" height="350px" width="346px">
              <h5 class="card-title">Muhammad Khatam Ramadhan</h5>
              <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
              <a href="#" class="card-link">link</a>
              <a href="#" class="card-link">Second link</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-block">
                <img src="image/kartun1.png" alt="" height="350px" width="346px">
              <h5 class="card-title">Muhammad Alexander Dzulakrnain</h5>
              <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
              <a href="#" class="card-link">link</a>
              <a href="#" class="card-link">Second link</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-block">
                <img src="image/foto_bagas.jpeg" alt="" height="350px" width="346px">
              <h5 class="card-title">Bagas Arjun Valentino</h5>
              <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
              <a href="#" class="card-link">link</a>
              <a href="#" class="card-link">Second link</a>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>


@endsection
