@extends('layouts.app')

@section('content')
<div class="product-details ptb-100 pb-90">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-7 col-12">
        <div class="product-details-img-content">
          <div class="product-details-tab mr-70">
            <div class="product-details-large tab-content">
              @php
                $i = 1;
              @endphp
              <div class="tab-pane active show fade" id="image_{{ $i }}" role="tabpanel">
                <div class="easyzoom easyzoom--overlay">
                  <a href="{{ productImage($product->cover_image) }}">
                    <img src="{{ productImage($product->cover_image) }}" alt="" style="width:600px; height:660px;">
                  </a>
                </div>
              </div>
              @php
                $i++;
              @endphp
              @if ($product->images)
                @foreach (json_decode($product->images) as $image)
                  <div class="tab-pane fade" id="image_{{ $i }}" role="tabpanel">
                    <div class="easyzoom easyzoom--overlay">
                      <a href="{{ asset('storage/'.$image) }}">
                        <img src="{{ asset('storage/'.$image) }}" alt="" style="width:600px; height:660px;">
                      </a>
                    </div>
                  </div>
                  @php
                    $i++;
                  @endphp
                @endforeach
              @endif
            </div>
            <div class="product-details-small nav mt-12" role=tablist>
              @php
                $t = 1;
              @endphp
              @if ($product->cover_image)
                <a class="active mr-12 mb-12" href="#image_{{ $t }}" data-toggle="tab" role="tab" aria-selected="true">
                  <img src="{{ asset('storage/'.$product->cover_image) }}" style="width:143px; height:135px;" alt="">
                </a>
              @endif
              @php
                $t++;
              @endphp
              @if ($product->images)
                @foreach (json_decode($product->images) as $image_thumbnail)
                  <a class="mr-12 mb-12" href="#image_{{ $t }}" data-toggle="tab" role="tab" aria-selected="true">
                    <img src="{{ asset('storage/'.$image_thumbnail) }}" style="width:143px; height:135px;" alt="">
                  </a>
                  @php
                    $t++;
                  @endphp
                @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-5 col-12">
        <div class="product-details-content">
          <h3>{{ $product->name}}</h3>
          <div class="rating-number">
            <div class="quick-view-rating">
              <i class="pe-7s-star red-star"></i>
              <i class="pe-7s-star red-star"></i>
              <i class="pe-7s-star"></i>
              <i class="pe-7s-star"></i>
              <i class="pe-7s-star"></i>
            </div>
            <div class="quick-view-number">
              <span>2 Ratting (S)</span>
            </div>
          </div>
          <div class="details-price">
            <span>${{ $product->price }}</span>
          </div>
          {!! $product->details !!}
          <div class="quickview-plus-minus">
            <form action="{{ route('carts.store') }}" method="post" id="add_cart" autocomplete="off">
              @csrf
              <input type="hidden" value="{{ $product->id }}" name="product_id" />

              <div class="cart-plus-minus">
                <input type="text" value="1" name="quantity" class="cart-plus-minus-box" />
              </div>
            </form>
              <div class="quickview-btn-cart">
                <a class="btn-hover-black" href="javascript:void(0)" onclick="$('#add_cart').submit();">add to cart</a>
              </div>
            <div class="quickview-btn-wishlist">
              <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
            </div>
          </div>
          <div class="product-details-cati-tag mt-35">
            <ul>
              <li class="categories-title">Categories :</li>
              @foreach ($product->categories as $product_category)
                <li><a href="#">{{ $product_category->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="product-share">
            <ul>
              <li class="categories-title">Share :</li>
              <li>
                <a href="#">
                  <i class="icofont icofont-social-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont icofont-social-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont icofont-social-pinterest"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont icofont-social-flikr"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="product-description-review-area pb-90">
  <div class="container">
      <div class="product-description-review text-center">
          <div class="description-review-title nav" role=tablist>
              <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                  Description
              </a>
              <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                  Reviews (0)
              </a>
          </div>
          <div class="description-review-text tab-content">
              <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
              </div>
              <div class="tab-pane fade" id="pro-review" role="tabpanel">
                  <a href="#">Be the first to write your review!</a>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- product area start -->
<div class="product-area pb-95">
  <div class="container">
      <div class="section-title-3 text-center mb-50">
          <h2>Related products</h2>
      </div>
      <div class="product-style">
          <div class="related-product-active owl-carousel">
              <div class="product-wrapper">
                  <div class="product-img">
                      <a href="#">
                          <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                      </a>
                      <span>hot</span>
                      <div class="product-action">
                          <a class="animate-left" title="Wishlist" href="#">
                              <i class="pe-7s-like"></i>
                          </a>
                          <a class="animate-top" title="Add To Cart" href="#">
                              <i class="pe-7s-cart"></i>
                          </a>
                          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                              <i class="pe-7s-look"></i>
                          </a>
                      </div>
                  </div>
                  <div class="product-content">
                      <h4><a href="#">Arifo Stylas Dress</a></h4>
                      <span>$115.00</span>
                  </div>
              </div>
              <div class="product-wrapper">
                  <div class="product-img">
                      <a href="#">
                          <img src="assets/img/product/fashion-colorful/2.jpg" alt="">
                      </a>
                      <div class="product-action">
                          <a class="animate-left" title="Wishlist" href="#">
                              <i class="pe-7s-like"></i>
                          </a>
                          <a class="animate-top" title="Add To Cart" href="#">
                              <i class="pe-7s-cart"></i>
                          </a>
                          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                              <i class="pe-7s-look"></i>
                          </a>
                      </div>
                  </div>
                  <div class="product-content">
                      <h4><a href="#">Arifo Stylas Dress</a></h4>
                      <span>$115.00</span>
                  </div>
              </div>
              <div class="product-wrapper">
                  <div class="product-img">
                      <a href="#">
                          <img src="assets/img/product/fashion-colorful/3.jpg" alt="">
                      </a>
                      <span>hot</span>
                      <div class="product-action">
                          <a class="animate-left" title="Wishlist" href="#">
                              <i class="pe-7s-like"></i>
                          </a>
                          <a class="animate-top" title="Add To Cart" href="#">
                              <i class="pe-7s-cart"></i>
                          </a>
                          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                              <i class="pe-7s-look"></i>
                          </a>
                      </div>
                  </div>
                  <div class="product-content">
                      <h4><a href="#">Arifo Stylas Dress</a></h4>
                      <span>$115.00</span>
                  </div>
              </div>
              <div class="product-wrapper">
                  <div class="product-img">
                      <a href="#">
                          <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
                      </a>
                      <div class="product-action">
                          <a class="animate-left" title="Wishlist" href="#">
                              <i class="pe-7s-like"></i>
                          </a>
                          <a class="animate-top" title="Add To Cart" href="#">
                              <i class="pe-7s-cart"></i>
                          </a>
                          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                              <i class="pe-7s-look"></i>
                          </a>
                      </div>
                  </div>
                  <div class="product-content">
                      <h4><a href="#">Arifo Stylas Dress</a></h4>
                      <span>$115.00</span>
                  </div>
              </div>
              <div class="product-wrapper">
                  <div class="product-img">
                      <a href="#">
                          <img src="assets/img/product/fashion-colorful/5.jpg" alt="">
                      </a>
                      <span>hot</span>
                      <div class="product-action">
                          <a class="animate-left" title="Wishlist" href="#">
                              <i class="pe-7s-like"></i>
                          </a>
                          <a class="animate-top" title="Add To Cart" href="#">
                              <i class="pe-7s-cart"></i>
                          </a>
                          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                              <i class="pe-7s-look"></i>
                          </a>
                      </div>
                  </div>
                  <div class="product-content">
                      <h4><a href="#">Arifo Stylas Dress</a></h4>
                      <span>$115.00</span>
                  </div>
              </div>
              <div class="product-wrapper">
                  <div class="product-img">
                      <a href="#">
                          <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                      </a>
                      <div class="product-action">
                          <a class="animate-left" title="Wishlist" href="#">
                              <i class="pe-7s-like"></i>
                          </a>
                          <a class="animate-top" title="Add To Cart" href="#">
                              <i class="pe-7s-cart"></i>
                          </a>
                          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                              <i class="pe-7s-look"></i>
                          </a>
                      </div>
                  </div>
                  <div class="product-content">
                      <h4><a href="#">Arifo Stylas Dress</a></h4>
                      <span>$115.00</span>
                  </div>
              </div>
              <div class="product-wrapper">
                  <div class="product-img">
                      <a href="#">
                          <img src="assets/img/product/fashion-colorful/2.jpg" alt="">
                      </a>
                      <span>hot</span>
                      <div class="product-action">
                          <a class="animate-left" title="Wishlist" href="#">
                              <i class="pe-7s-like"></i>
                          </a>
                          <a class="animate-top" title="Add To Cart" href="#">
                              <i class="pe-7s-cart"></i>
                          </a>
                          <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                              <i class="pe-7s-look"></i>
                          </a>
                      </div>
                  </div>
                  <div class="product-content">
                      <h4><a href="#">Arifo Stylas Dress</a></h4>
                      <span>$115.00</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
