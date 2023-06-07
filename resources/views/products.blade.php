@extends('layouts.main')

@section('container')
    <h2 class="mb-5">{{ $title }}</h2>
    @if($products->count())
        @if($products->count() > 3)        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x400?{{ $products[0]->category->name }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block" style="max-height:50%; background-color: rgba(0, 0, 0, 0.7)">
                        <h5>{{ $products[0]->title }} <small><a href="/categories/{{ $products[0]->category->slug }}"></a> {{ $products[0]->category->name }}</small></h5>
                        <p><b>Rated: {{ $products[0]->rating->score }}/5</b> - {!! $products[0]->excerpt !!}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x400?{{ $products[1]->category->name }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7)">
                        <h5>{{ $products[1]->title }} <small><a href="/categories/{{ $products[1]->category->slug }}"></a> {{ $products[1]->category->name }}</small></h5>
                        <p><b>Rated: {{ $products[1]->rating->score }}/5</b> - {!! $products[1]->excerpt !!}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x400?{{ $products[2]->category->name }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7)">
                        <h5>{{ $products[2]->title }} <small><a href="/categories/{{ $products[2]->category->slug }}"></a> {{ $products[2]->category->name }}</small></h5>
                        <p><b>Rated: {{ $products[2]->rating->score }}/5</b> - {!! $products[2]->excerpt !!}</p>
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
        @elseif ($products->count())
            <div class="mt-5">
                <div class="row">
                    @foreach ($products as $product)     
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <img src="https://source.unsplash.com/500x500?{{ $product->category->name }}" class="card-img-top" alt="{{ $product->category->name }}">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="/products/{{ $product->slug }}" class="text-decoration-none text-dark text-bold">{{ $product->title }}</a></h4>
                                    <p><a href="/products?category={{ $product->category->slug }}">{{ $product->category->name }}</a></p>
                                    <p class="card-text">ratings: {{ $product->rating->score }}/5</p>
                                    <p>{{ $product->price }}</p>
                                    <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        
        <div class="mt-5">
            <div class="row">
                @foreach ($products->skip(3) as $product)     
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="https://source.unsplash.com/500x500?{{ $product->category->name }}" class="card-img-top" alt="{{ $product->category->name }}">
                            <div class="card-body">
                                <h4 class="card-title"><a href="/products/{{ $product->slug }}" class="text-decoration-none text-dark text-bold">{{ $product->title }}</a></h4>
                                <p><a href="/products?category={{ $product->category->slug }}">{{ $product->category->name }}</a></p>
                                <p class="card-text">ratings: {{ $product->rating->score }}/5</p>
                                <p>{{ $product->price }}</p>
                                <a href="#" class="btn btn-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    
    @else
        <h1 class="text-center">No Product Available.</h1>
    @endif
    
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
@endsection