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
      <div class="col-lg-8">
        <div class="card bg-secondary shadow border-0">
          <div class="card-header bg-white">
            <div class="text-left"><h4>{{ __('Verify Your Email Address') }}</h4></div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
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
</section>
@endsection
