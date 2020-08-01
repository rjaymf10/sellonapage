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
            <div class="text-left"><h4>{{ __('Login') }}</h4></div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              
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
              <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                <label class="custom-control-label" for=" customCheckLogin"><span>Remember me</span></label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">{{ __('Login') }}</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <a href="{{ route('password.request') }}" class="text-light"><small>{{ __('Forgot Your Password?') }}</small></a>
          </div>
          <div class="col-6 text-right">
            <a href="#" class="text-light"><small>{{ __('Create new account?') }}</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
