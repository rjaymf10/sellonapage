<!-- Navbar -->
<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
  <div class="container">
    <a class="navbar-brand mr-lg-5" href="{{ route('home') }}">
      <img src="{{ asset('argon') }}/img/brand/white.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar_global">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="{{ route('home') }}">
              <img src="{{ asset('argon') }}/img/brand/blue.png">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        {{-- <li class="nav-item">
          <a class="nav-link" href="#" target="_blank">
            <span class="nav-link-inner--text">Pricing</span>
          </a>
        </li> --}}
        @guest
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <a class="nav-link" href="{{ route('login') }}">
            <span class="nav-link-inner--text">Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('register') }}" class="btn btn-neutral btn-icon">
            <span class="nav-link-inner--text">Register</span>
          </a>
        </li>
        @endguest
        @auth
          <li class="nav-item">
            <a href="{{ route('voyager.dashboard') }}" class="btn btn-neutral btn-icon">
              <span class="nav-link-inner--text">Dashboard</span>
              <i class="ni ni-bold-right"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                      <span class="avatar avatar-sm rounded-circle">
                          <img alt="Image placeholder" src="{{ asset('storage') }}/users/default.png">
                      </span>
                  </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                  <div class=" dropdown-header noti-title">
                      <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                  </div>
                  {{-- <a href="{{ route('profile.edit') }}" class="dropdown-item">
                      <i class="ni ni-single-02"></i>
                      <span>{{ __('My profile') }}</span>
                  </a> --}}
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                      <i class="ni ni-user-run"></i>
                      <span>{{ __('Logout') }}</span>
                  </a>
              </div>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->