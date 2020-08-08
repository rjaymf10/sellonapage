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
              <h2>reset password</h2>
              <ul>
                <li><a href="{{ route('home') }}">home</a></li>
                <li> reset password </li>
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
              @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                  <span class="alert-inner--text">{{ session('status') }}</span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              <form method="POST" action="{{ route('password.email') }}">
                @csrf

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
                <div class="button-box">
                  <button type="submit" class="default-btn floatright">Send Password Reset Link</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
