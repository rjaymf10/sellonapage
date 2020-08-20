@extends('layouts.app')

@section('content')
<div class="shop-page-wrapper shop-page-padding ptb-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3">
        <div class="shop-sidebar mr-50">
          <div class="sidebar-widget mb-50">
            <h3 class="sidebar-title">Search Products</h3>
            <div class="sidebar-search">
              <form action="#">
                <input placeholder="Search Products..." type="text">
                <button><i class="ti-search"></i></button>
              </form>
            </div>
          </div>
          <div class="sidebar-widget mb-40">
            <h3 class="sidebar-title">Filter by Price</h3>
            <div class="price_filter">
              <div id="slider-range"></div>
              <div class="price_slider_amount">
                <div class="label-input">
                  <label>price : </label>
                  <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                </div>
                <button type="button">Filter</button> 
              </div>
            </div>
          </div>
          <div class="sidebar-widget mb-45">
            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-categories">
              <ul>
                <li><a href="#">Accessories <span>4</span></a></li>
                <li><a href="#">Book <span>9</span></a></li>
                <li><a href="#">Clothing <span>5</span> </a></li>
                <li><a href="#">Homelife <span>3</span></a></li>
                <li><a href="#">Kids & Baby <span>4</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="shop-product-wrapper res-xl res-xl-btn">
          <div class="shop-bar-area">
            <div class="shop-bar pb-60">
              <div class="shop-found-selector">
                <div class="shop-found">
                  <p><span>23</span> Product Found of <span>50</span></p>
                </div>
                <div class="shop-selector">
                  <label>Sort By : </label>
                  <select name="select">
                    <option value="">Default</option>
                    <option value="">A to Z</option>
                    <option value=""> Z to A</option>
                    <option value="">In stock</option>
                  </select>
                </div>
              </div>
              <div class="shop-filter-tab">
                <div class="shop-tab nav" role=tablist>
                  <a class="active" href="#grid-sidebar1" data-toggle="tab" role="tab" aria-selected="false">
                    <i class="ti-layout-grid4-alt"></i>
                  </a>
                  <a href="#grid-sidebar2" data-toggle="tab" role="tab" aria-selected="true">
                    <i class="ti-menu"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="shop-product-content tab-content">
              <div id="grid-sidebar1" class="tab-pane fade active show">
                <div class="row">
                  @include('partials.product_grid-sidebar1', ['products' => $products])
                </div>
              </div>
              <div id="grid-sidebar2" class="tab-pane fade">
                <div class="row">
                  @include('partials.product_grid-sidebar2', ['products' => $products])
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center mt-lg-4">
      <nav aria-label="...">
        {{ $products->links() }}
      </nav>
    </div>
  </div>
</div>

@include('partials.product_modal')

@endsection

@section('scripts')
  <script>
    function quickview(path){
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'GET',
        url: path,
        dataType: 'json',
        success: function(data) {
          console.log(data);
        },
        error: function(e) {
          console.log(e);
        }
      });
    }
  </script>
@endsection