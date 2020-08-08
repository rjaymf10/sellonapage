@foreach ($products as $product)
  <div class="col-lg-12 col-xl-6 d-flex">
    <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
      <div class="product-img list-img-width">
        <a href="#">
          <img src="{{ asset('storage/'.$product->cover_image) }}" alt="">
        </a>
        <div class="product-action-list-style">
          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
            <i class="pe-7s-look"></i>
          </a>
        </div>
      </div>
      <div class="product-content-list">
        <div class="product-list-info">
          <h4><a href="#">{{ $product->name }}</a></h4>
          <span>${{ $product->price }}</span>
          <p>
            @php
              if (strlen($product->description) > 30) {
                $trimstring = substr($product->description, 0, 25). ' ...';
              } 
              else {
                $trimstring = $product->description;
              }
              echo $trimstring;
            @endphp
          </p>
        </div>
        <div class="product-list-cart-wishlist">
          <div class="product-list-cart">
            <a class="btn-hover list-btn-style" href="{{ route('carts.store', $product->id) }}">add to cart</a>
          </div>
          <div class="product-list-wishlist">
            <a class="btn-hover list-btn-wishlist" href="#">
              <i class="pe-7s-like"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach