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
            <h2 class="text-white display-2">Your cart</h2>
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
<section class="section section-lg bg-secondary">
  <div class="container">
    <div class="table-responsive">
      <table class="table table-striped table-inverse">
        <thead class="thead-inverse">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @forelse ($items as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td>{{ \Cart::session(auth()->id())->get($item->id)->getPriceSum() }}</td>
              <td>
                <form action="{{ route('carts.update', $item->id) }}" method="post">
                  @csrf
                  @method('put')

                  <div class="form-group">
                    <input type="number" name="quantity" value="{{ $item->quantity }}" aria-describedby="update">
                    <input id="update" type="submit" class="btn btn-info btn-sm" value="{{ __('Update') }}">
                  </div>
                </form>
              </td>
              <td>
                <form action="{{ route('carts.destroy', $item->id) }}" method="post">
                  @csrf
                  @method('delete')
                  
                  <input type="submit" class="btn btn-danger btn-sm" onclick="confirm('{{ __("Are you sure you want to delete this product?") }}') ? this.parentElement.submit() : ''" value="{{ __('Delete') }}">
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5"><h4>No Product(s)<h4></td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-lg-12 right-align">
          <h4>Total Price: {{ $total }}</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 right-align">
          <a class="btn btn-primary btn-md" href="{{ route('carts.checkout') }}" role="button">Checkout</a>
      </div>
    </div>
  </div>
</section>
@endsection