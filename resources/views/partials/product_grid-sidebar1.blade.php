@foreach ($products as $product)
  <div class="col-lg-6 col-md-6 col-xl-4 d-flex">
    <div class="product-wrapper mb-30">
      <div class="product-img">
        <a href="{{ $product->path() }}">
          <img src="{{ productImage($product->cover_image) }}" alt="" style="width:280px; height:360px;">
        </a>
        <div class="product-action">
          <a class="animate-left" title="Wishlist" href="#">
            <i class="pe-7s-like"></i>
          </a>
          <a class="animate-top" title="Add To Cart" href="javascript:void(0)" onclick="$('#add_cart{{ $product->id }}_s1').submit();">
            <i class="pe-7s-cart"></i>
          </a>
          <a class="animate-right" title="Quick View" href="javascript:void(0)" onclick="quickview('{{ route('products.quickview', $product->id) }}');">
            <i class="pe-7s-look"></i>
          </a>
        </div>
        <form action="{{ route('carts.store') }}" method="post" id="add_cart{{ $product->id }}_s1" autocomplete="off">
          @csrf
          <input type="hidden" value="{{ $product->id }}" name="product_id" />
          <input type="hidden" value="1" name="quantity" />
        </form>
      </div>
      <div class="product-content">
        <h4><a href="{{ $product->path() }}">{{ $product->name }} </a></h4>
        <span>${{ $product->price }}</span>
      </div>
    </div>
  </div>
@endforeach