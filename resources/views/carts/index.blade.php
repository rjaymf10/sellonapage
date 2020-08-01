@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your cart</h2>
    <div class="table-responsive">
        <table class="table table-striped table-inverse">
            <thead class="thead-inverse">
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
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
@endsection