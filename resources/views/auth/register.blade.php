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
  <div class="container pt-lg-7">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card bg-secondary shadow border-0">
          <div class="card-header bg-white">
            <div class="text-left"><h4>{{ __('Register') }}</h4></div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              
              <div class="form-group @error('name') has-danger @enderror">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                  </div>
                  <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group @error('email') has-danger @enderror">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group focused @error('password') has-danger @enderror">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group focused">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input id="password" type="password" class="form-control" name="password_confirmation" required autocomplete="current-password" placeholder="Confirm Password">
                </div>
              </div>
              <div class="form-group focused @error('password') has-danger @enderror">
                <div class="custom-control custom-control-alternative custom-radio mb-3">
                  <input name="role_id" value="2" class="custom-control-input" id="customRadio1" type="radio" checked>
                  <label class="custom-control-label" for="customRadio1">Customer</label>
                </div>
                <div class="custom-control custom-control-alternative custom-radio mb-3">
                  <input name="role_id" value="3" class="custom-control-input" id="customRadio2" type="radio">
                  <label class="custom-control-label" for="customRadio2">Vendor</label>
                </div>
              </div>
              <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" id=" customCheckRegister" type="checkbox" required>
                <label class="custom-control-label" for=" customCheckRegister"><span>I agree with the <a href="#">Privacy Policy</a></span></label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">{{ __('Register') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
