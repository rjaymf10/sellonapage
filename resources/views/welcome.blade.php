@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Products</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-6 col-lg-3 mb-2 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/product.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-text">{{ $product->price }}</h5>
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('carts.store', $product->id) }}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-lg-12">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
