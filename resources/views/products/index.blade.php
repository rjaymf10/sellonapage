@extends('layouts.app')

@section('content')
<section class="section section-shaped section-lg">
  <div class="shape shape-style-1 bg-gradient-default">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="page-header">
    <div class="container shape-container d-flex align-items-center py-lg-2">
      <div class="col px-0">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 text-left">
            <h2 class="text-white display-2">Products</h2>
          </div>
          <div class="col-lg-4">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="separator separator-bottom separator-skew zindex-100">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>
</section>
<section class="section bg-secondary">
  <div class="container pt-lg-2">
    <div class="row justify-content-left">
      @foreach ($products as $product)
        <div class="col-lg-4 pb-lg-3 d-flex">
          <div class="card shadow border-0">
            <img class="card-img-top" src="{{ asset('storage/pages/page1.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">{{ $product->name }}</h6>
              <p class="card-text">
                @php
                  if (strlen($product->description) > 30) {
                    $trimstring = substr($product->description, 0, 25). ' <a href="#">readmore...</a>';
                  } 
                  else {
                    $trimstring = $product->description;
                  }
                  echo $trimstring;
                @endphp
              </p>
            </div>
            <div class="card-footer text-center">
              <a class="btn btn-primary" role="button" href="{{ route('carts.store', $product->id) }}">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row d-flex justify-content-center pt-lg-4">
      <nav aria-label="...">
        {{ $products->links() }}
      </nav>
    </div>
  </div>
</section>
@endsection
