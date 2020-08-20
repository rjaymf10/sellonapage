@foreach ($products as $product)
  <div class="col-lg-12 col-xl-6 col-sm-12 d-flex">
    <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
      <div class="product-img list-img-width">
        <a href="{{ $product->path() }}">
          <img src="{{ productImage($product->cover_image) }}" alt="" style="width:200px; height:255px;">
        </a>
        <div class="product-action-list-style">
          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
            <i class="pe-7s-look"></i>
          </a>
        </div>
      </div>
      <div class="product-content-list">
        <div class="product-list-info">
          <h4><a href="{{ $product->path() }}">{{ $product->name }}</a></h4>
          <span>${{ $product->price }}</span>
          <p>
            @php
              if (strlen($product->details) > 40) {
                $trimstring = substr($product->details, 0, 35). ' ...';
              } 
              else {
                $trimstring = $product->details;
              }
              echo $trimstring;
            @endphp
          </p>
        </div>
        <div class="product-list-cart-wishlist">
          <div class="product-list-cart">
            <a class="btn-hover list-btn-style" href="javascript:void(0)" onclick="$('#add_cart{{ $product->id }}_s2').submit();">add to cart</a>
          </div>
          <div class="product-list-wishlist">
            <a class="btn-hover list-btn-wishlist" href="#">
              <i class="pe-7s-like"></i>
            </a>
          </div>
          <form action="{{ route('carts.store') }}" method="post" id="add_cart{{ $product->id }}_s2" autocomplete="off">
            @csrf
            <input type="hidden" value="{{ $product->id }}" name="product_id" />
            <input type="hidden" value="1" name="quantity" />
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach