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
              <h2>verify your email address</h2>
              <ul>
                <li><a href="{{ route('home') }}">home</a></li>
                <li> verify your email address </li>
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
              @if (session('resent'))
                <div class="alert alert-success" role="alert">
                  {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
              @endif

              {{ __('Before proceeding, please check your email for a verification link.') }}
              {{ __('If you did not receive the email') }},
              <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
