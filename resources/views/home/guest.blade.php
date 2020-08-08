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
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 text-left">
            <h2 class="text-white display-2">Start selling with just <span class="text-white">few clicks</span></h2>
            <h5 class="display-5 font-weight-normal text-white">SellonApage helps you create a beautiful page with few clicks that promotes your product and accepts the order all on the same page.</h5>
            <div class="btn-wrapper mt-4">
              <a href="#" class="btn btn-neutral btn-icon mt-3 mb-sm-0">
                <span class="btn-inner--text">Free Trial</span>
                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section features-1">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <h3 class="display-3"><b class="text-primary">Online Shopping</b> has changed</h3>
        <p class="lead">Your customers are getting sick of going through different landing pages, automated emails, and a bloated ecommerce store just to buy your product. SamCart helps you create one simple page to turn your fans into buyers.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="info">
          <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
            <i class="ni ni-shop"></i>
          </div>
          <h6 class="info-title text-uppercase text-primary">Create your store</h6>
          <p class="description opacity-8">With responsive themes and a comprehensive content builder, you can create a one page store — without code — in minutes.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info">
          <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
            <i class="ni ni-world"></i>
          </div>
          <h6 class="info-title text-uppercase text-success">Sell Around the world</h6>
          <p class="description opacity-8">Deploy your incredible store on any channel you can think of - Facebook, Instagram, YouTube, Messenger, email, blogs, and more.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info">
          <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
            <i class="ni ni-single-copy-04"></i>
          </div>
          <h6 class="info-title text-uppercase text-warning">Boost Sale</h6>
          <p class="description opacity-8">Powerful features to help track your business, convert more visitors into customers, and increase the value of each purchase.</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section features-6 bg-secondary">
  <div class="container">
    <div class="row text-center">
        <h5 class="display-4">Join the thousands of product creators, thought leaders, course creators, and entrepreneurs who have used SellonApage to sell over $100 million of their products</h5>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="info info-horizontal info-hover-primary">
          <div class="description pl-4">
            <h5 class="title">Ready for change?</h5>
            <p>Try SellonApage today and get the advanced tools you need to start making serious money selling online.</p>
            <div class="btn-wrapper mt-4">
              <a href="#" class="btn btn-primary btn-round mt-3 mb-sm-0">
                TRY IT FOR FREE NOW
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-10 mx-md-auto">
        <img class="ml-lg-5" src="{{ asset('argon') }}/img/ill/ill.png" width="100%">
      </div>
    </div>
  </div>
</div>
@endsection
