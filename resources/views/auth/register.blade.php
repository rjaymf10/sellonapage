@extends('layouts.app')

@section('content')
<div class="section section-hero section-shaped">
  <div class="shape shape-style-3 shape-default">
    <span class="span-150"></span>
    <span class="span-50"></span>
    <span class="span-50"></span>
    <span class="span-75"></span>
    <span class="span-100"></span>
    <span class="span-75"></span>
    <span class="span-50"></span>
    <span class="span-100"></span>
    <span class="span-50"></span>
    <span class="span-100"></span>
  </div>
  <div class="page-header">
    <div class="container shape-container d-flex align-items-center py-lg">
      <div class="col px-0">
        <div class="breadcrumb-area">
          <div class="container">
            <div class="breadcrumb-content text-center">
              <h2>register</h2>
              <ul>
                <li><a href="{{ route('home') }}">home</a></li>
                <li> register </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="register-area ptb-100 bg-secondary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
        <div class="card shadow login">
          <div class="login-form-container">
            <div class="login-form">
              <form method="POST" action="{{ route('register') }}" autocomplete="off">
                @csrf

                <div class="form-group @error('name') has-danger @enderror">
                  <div class="input-group">
                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group @error('email') has-danger @enderror">
                  <div class="input-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group @error('password') has-danger @enderror">
                  <div class="input-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input id="password" type="password" class="form-control" name="password_confirmation" required autocomplete="current-password" placeholder="Confirm Password">
                  </div>
                </div>
                <div id="vendor_form">
                  <div class="form-group @error('shop_name') has-danger @enderror">
                    <div class="input-group">
                      <input id="shop_name" type="text" class="form-control @error('shop_name') is-invalid @enderror" name="shop_name" value="{{ old('shop_name') }}" required autocomplete="shop_name" autofocus placeholder="Shop Name">
                      @error('shop_name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group @error('shop_url') has-danger @enderror">
                    <div class="input-group">
                      <input id="shop_url" type="text" class="form-control @error('shop_url') is-invalid @enderror" name="shop_url" value="{{ old('shop_url') }}" required autocomplete="shop_url" placeholder="Shop URL">
                      @error('shop_url')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group @error('role_id') has-danger @enderror">
                  <div class="custom-control custom-radio mb-3">
                    <input name="role_id" value="2" class="custom-control-input role" id="customer" type="radio" @if (old('role_id') == 2 OR old('role_id') == null)
                      checked
                    @endif>
                    <label class="custom-control-label" for="customer">Customer</label>
                  </div>
                  <div class="custom-control custom-radio mb-3">
                    <input name="role_id" value="3" class="custom-control-input role" id="vendor" type="radio" @if (old('role_id') == 3)
                    checked
                  @endif>
                    <label class="custom-control-label" for="vendor">Vendor</label>
                  </div>
                </div>
                <br>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id=" customCheckRegister" type="checkbox" required>
                  <label class="custom-control-label" for=" customCheckRegister"><span>I agree with the <a href="#">Privacy Policy</a></span></label>
                </div>
                <div class="button-box">
                  <button type="submit" class="default-btn floatright">Register</button>
                </div>
              </form>
            </div>
            <div class="row mt-3">
              <div class="col-6"></div>
              <div class="col-6 text-right">
                <a href="{{ route('login') }}">{{ __('Already have an account?') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  $(document).ready(function () {
    if ($('input[type="radio"][name="role_id"]:checked').val() == 3)
      $('#vendor_form').show();
    else 
      $('#vendor_form').hide();

    $('input[type="radio"][name="role_id"]').on( "change", function () {
      var inputValue = $(this).attr("value");
      if (inputValue == 3)
        $('#vendor_form').show("slow");
      else 
        $('#vendor_form').hide("slow");
    });
  });
</script>
@endpush