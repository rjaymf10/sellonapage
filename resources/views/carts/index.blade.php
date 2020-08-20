@extends('layouts.app')

@section('content')
<div class="cart-main-area pt-95 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="cart-heading">Cart</h1>
          <div class="table-content table-responsive">
            <table>
              <thead>
                <tr>
                  <th>remove</th>
                  <th>images</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                  <tr>
                    <td class="product-remove">
                      <form action="{{ route('carts.destroy', $item->id) }}" method="post" id="remove_product">
                        @csrf
                        @method('delete')
                        
                        <a href="javascript:void(0)" onclick="confirm('{{ __("Are you sure you want to delete this product?") }}') ? this.parentElement.submit() : ''"><i class="pe-7s-close"></i></a>
                      </form>
                    </td>
                    <td class="product-thumbnail">
                      <a href="{{ $item->associatedModel->path() }}" target="_blank"><img src="{{ productImage($item->associatedModel->cover_image) }}" alt="" height="101px" width="85px"></a>
                    </td>
                    <td class="product-name"><a href="{{ $item->associatedModel->path() }}" target="_blank">{{ $item->name }} </a></td>
                    <td class="product-price-cart"><span class="amount">${{ $item->price }}</span></td>
                    <td class="product-quantity">
                      <form action="{{ route('carts.update', $item->id) }}" method="post" autocomplete="off" id="update_cart">
                        @csrf
                        @method('put')

                        <div class="form-group">
                          <input type="number" name="quantity" value="{{ $item->quantity }}" />
                          <a role="button" class="btn button-small bg-default mt--1 pt--1 px-2" href="javascript:void(0)" onclick="$('#update_cart').submit();">save</a>
                        </div>
                      </form>
                    </td>
                    <td class="product-subtotal">${{ \Cart::session(auth()->id())->get($item->id)->getPriceSum() }}</td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6"><h4>No Product(s)<h4></td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-5 ml-auto">
              <div class="cart-page-total">
                <h2>Cart totals</h2>
                <ul>
                  <li>Subtotal<span>{{ $total }}</span></li>
                  <li>Total<span>{{ $total }}</span></li>
                </ul>
                <a href="{{ route('carts.checkout') }}">Proceed to checkout</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection