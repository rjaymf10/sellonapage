@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Checkout</h2>
    <h3>Shipping Information</h3>
    <form action="{{ route('orders.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group{{ $errors->has('shipping_fullname') ? ' has-danger' : '' }}">
                    <label for="input-shipping_fullname">Full Name</label>
                    <input type="text" name="shipping_fullname" id="input-shipping_fullname" class="form-control{{ $errors->has('shipping_fullname') ? ' is-invalid' : '' }}" value="{{ old('shipping_fullname') }}" placeholder="">
                    @if ($errors->has('shipping_fullname'))
                        <small id="shipping_fullname-error" class="error text-danger" for="input-shipping_fullname"><b>{{ $errors->first('shipping_fullname') }}</b></small>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('shipping_address') ? ' has-danger' : '' }}">
                    <label for="input-shipping_address">Full Address</label>
                    <input type="text" name="shipping_address" id="input-shipping_address" class="form-control{{ $errors->has('shipping_address') ? ' is-invalid' : '' }}" value="{{ old('shipping_address') }}" placeholder="">
                    @if ($errors->has('shipping_address'))
                        <small id="shipping_address-error" class="error text-danger" for="input-shipping_address"><b>{{ $errors->first('shipping_address') }}</b></small>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('shipping_city') ? ' has-danger' : '' }}">
                    <label for="input-shipping_city">City/Municipality</label>
                    <input type="text" name="shipping_city" id="input-shipping_city" class="form-control{{ $errors->has('shipping_city') ? ' is-invalid' : '' }}" value="{{ old('shipping_city') }}" placeholder="">
                    @if ($errors->has('shipping_city'))
                        <small id="shipping_city-error" class="error text-danger" for="input-shipping_city"><b>{{ $errors->first('shipping_city') }}</b></small>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('shipping_state') ? ' has-danger' : '' }}">
                    <label for="input-shipping_state">State</label>
                    <input type="text" name="shipping_state" id="input-shipping_state" class="form-control{{ $errors->has('shipping_state') ? ' is-invalid' : '' }}" value="{{ old('shipping_state') }}" placeholder="">
                    @if ($errors->has('shipping_state'))
                        <small id="shipping_state-error" class="error text-danger" for="input-shipping_state"><b>{{ $errors->first('shipping_state') }}</b></small>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('shipping_zipcode') ? ' has-danger' : '' }}">
                    <label for="input-shipping_zipcode">Zip Code</label>
                    <input type="text" name="shipping_zipcode" id="input-shipping_zipcode" class="form-control{{ $errors->has('shipping_zipcode') ? ' is-invalid' : '' }}" value="{{ old('shipping_zipcode') }}" placeholder="">
                    @if ($errors->has('shipping_zipcode'))
                        <small id="shipping_zipcode-error" class="error text-danger" for="input-shipping_zipcode"><b>{{ $errors->first('shipping_zipcode') }}</b></small>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('shipping_phone') ? ' has-danger' : '' }}">
                    <label for="input-shipping_phone">Phone</label>
                    <input type="text" name="shipping_phone" id="input-shipping_phone" class="form-control{{ $errors->has('shipping_phone') ? ' is-invalid' : '' }}" value="{{ old('shipping_phone') }}" placeholder="">
                    @if ($errors->has('shipping_phone'))
                        <small id="shipping_phone-error" class="error text-danger" for="input-shipping_phone"><b>{{ $errors->first('shipping_phone') }}</b></small>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group{{ $errors->has('payment_method') ? ' has-danger' : '' }}">
                    <label for="input-payment_method">Payment Method</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="input-cash_on_delivery" value="cash_on_delivery" @if (old('payment_method') == 'cash_on_delivery')
                            checked
                        @endif>
                        <label class="form-check-label" for="input-cash_on_delivery">Cash on delivery</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="input-direct_bank_transfer" value="direct_bank_transfer" @if (old('payment_method') == 'direct_bank_transfer')
                        checked
                    @endif>
                        <label class="form-check-label" for="input-direct_bank_transfer">Direct bank transfer</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="input-paypal" value="paypal" @if (old('payment_method') == 'paypal')
                        checked
                    @endif>
                        <label class="form-check-label" for="input-paypal">Paypal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="input-stripe" value="stripe" @if (old('payment_method') == 'stripe')
                        checked
                    @endif>
                        <label class="form-check-label" for="input-stripe">Stripe</label>
                    </div>
                    @if ($errors->has('payment_method'))
                        <small id="payment_method-error" class="error text-danger" for="input-payment_method"><b>{{ $errors->first('payment_method') }}</b></small>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Place Order">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection