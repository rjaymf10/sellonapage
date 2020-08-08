@foreach ($products as $product)
  <div class="col-lg-6 col-md-6 col-xl-3 d-flex">
    <div class="product-wrapper mb-30">
      <div class="product-img">
        <a href="#">
          <img src="{{ asset('storage/'.$product->cover_image) }}" alt="">
        </a>
        <div class="product-action">
          <a class="animate-left" title="Wishlist" href="#">
            <i class="pe-7s-like"></i>
          </a>
          <a class="animate-top" title="Add To Cart" href="{{ route('carts.store', $product->id) }}">
            <i class="pe-7s-cart"></i>
          </a>
          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
            <i class="pe-7s-look"></i>
          </a>
        </div>
      </div>
      <div class="product-content">
        <h4><a href="#">{{ $product->name }} </a></h4>
        <span>${{ $product->price }}</span>
      </div>
    </div>
  </div>
@endforeach