<!-- header start -->
<header>
  <div class="header-top-wrapper-2 border-bottom-2">
    <div class="header-info-wrapper pl-200 pr-200">
      <div class="header-contact-info">
        <ul>
          <li><i class="pe-7s-call"></i> {{ setting('site.site_call') }}</li>
          <li><i class="pe-7s-mail"></i> <a href="mailto:{{ setting('site.site_email') }}">{{ setting('site.site_email') }}</a></li>
        </ul>
      </div>
      <div class="electronics-login-register">
        <ul>
          @if (auth()->user()->email_verified_at != null)
            <li><a href="{{ route('voyager.dashboard') }}" target="_blank"><i class="pe-7s-users"></i>My Account</a></li>
            <li><a href="#"><i class="pe-7s-like"></i>Wishlist</a></li>
          @endif
          <li><a href="javascript:void(0)" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="pe-7s-right-arrow"></i>Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="header-bottom pt-40 pb-30 clearfix">
    <div class="header-bottom-wrapper pr-200 pl-200">
      <div class="logo-3">
        <a href="{{ route('home') }}">
          <img src="{{ asset('argon') }}/img/brand/blue.png" height="45px" width="180px" alt="">
        </a>
      </div>
      <div class="categories-search-wrapper">
        <div class="all-categories">
          <div class="select-wrapper">
            <select class="select">
              <option value="">All Categories</option>
              <option value="">Smartphones </option>
              <option value="">Computers</option>
              <option value="">Laptops </option>
              <option value="">Camerea </option>
              <option value="">Watches</option>
              <option value="">Lights </option>
              <option value="">Air conditioner</option>
            </select>
          </div>
        </div>
        <div class="categories-wrapper">
          <form method="POST" action="#">
            @csrf
            
            <input placeholder="Enter Your key word" type="text">
            <button type="button"> Search </button>
          </form>
        </div>
      </div>
      <div class="trace-cart-wrapper">
        <div class="trace same-style">
          <div class="same-style-icon">
            <a href="#"><i class="pe-7s-plane"></i></a>
          </div>
          <div class="same-style-text">
            <a href="#">Product <br>trace</a>
          </div>
        </div>
        <div class="categories-cart same-style">
          <div class="same-style-icon">
            <a href="{{ route('carts.index') }}"><i class="pe-7s-cart"></i></a>
          </div>
          <div class="same-style-text">
            <a href="{{ route('carts.index') }}">My Cart <br>
              @auth
                {{ \Cart::session(auth()->id())->getContent()->count() }}
              @else
                0
              @endauth Item</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header end -->