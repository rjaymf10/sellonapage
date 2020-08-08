<!-- header start -->
<header>
  <div class="header-top-furniture wrapper-padding-2 res-header-sm">
    <div class="container-fluid">
      <div class="header-bottom-wrapper">
        <div class="logo-2 furniture-logo ptb-30">
          <a href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" height="45px" width="180px" alt="">
          </a>
        </div>
        <div class="menu-style-2 furniture-menu menu-hover">
          <nav>
            <ul>
              <li>
                <a href="{{ route('home') }}">home</a>
              </li>
              <li>
                <a href="{{ route('home') }}">about us</a>
              </li>
              <li>
                <a href="{{ route('home') }}">contact us</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="menu-style-2 furniture-menu menu-hover">
          <nav>
            <ul>
              <li>
                <a href="{{ route('login') }}">login</a>
              </li>
              <li>
                <a href="{{ route('register') }}">register</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
          <div class="mobile-menu">
            <nav id="mobile-menu-active">
              <ul class="menu-overflow">
                <li>
                  <a href="{{ route('home') }}">home</a>
                </li>
                <li>
                  <a href="{{ route('home') }}">about us</a>
                </li>
                <li>
                  <a href="{{ route('home') }}">contact us</a>
                </li>
                <li>
                  <a href="{{ route('login') }}">login</a>
                </li>
                <li>
                  <a href="{{ route('register') }}">register</a>
                </li>
              </ul>
            </nav>							
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header end -->