<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light">
  <!-- Topbar -->
  <div class="container navbar-topbar">
    <nav class="js-mega-menu navbar-nav-wrap">
      <!-- Toggler -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown"
        aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="d-flex justify-content-between align-items-center">
          <span class="navbar-toggler-text">Profile</span>

          <span class="navbar-toggler-default">
            <i class="bi-chevron-down ms-2"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-chevron-up ms-2"></i>
          </span>
        </span>
      </button>
      <!-- End Toggler -->

      <div id="topbarNavDropdown" class="navbar-nav-wrap-collapse collapse navbar-collapse navbar-topbar-collapse">
        <div class="navbar-toggler-wrapper">
          <div class="navbar-topbar-toggler d-flex justify-content-between align-items-center">
            <span class="navbar-toggler-text small">Profile</span>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown"
              aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <i class="bi-x"></i>
            </button>
            <!-- End Toggler -->
          </div>
        </div>

        <ul class="navbar-nav">
          <li class="nav-item me-auto">
            <a class="nav-link" href="/soon">Download App <i class="bi-apple"></i>
              <i class="bi-google-play"></i></a>
          </li>

          <!-- Demos -->
          <li class="hs-has-mega-menu nav-item">
            @if (Auth::user())
            <a id="" class="hs-mega-menu-invoker nav-link active" href="/profile/personal">Profile</a>

            @else

            <a id="" class="hs-mega-menu-invoker nav-link active" href="" data-bs-toggle="modal"
              data-bs-target="#signupModal">Register</a>
            @endif

            <!-- Mega Menu -->
            <div class="hs-mega-menu hs-position-right" aria-labelledby="docsMegaMenu" style="min-width: 20rem"></div>
            <!-- End Mega Menu -->
          </li>
          <!-- End Demos -->

          <!-- Docs -->
          <li class="hs-has-mega-menu nav-item">
            @if (Auth::user())
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="hs-mega-menu-invoker nav-link" href="route('logout')" onclick="event.preventDefault();
          this.closest('form').submit();">Log out</a>
            </form>
            @else

            <a class="hs-mega-menu-invoker nav-link" href="" data-bs-toggle="modal" data-bs-target="#signinModal">Log
              in</a>
            @endif
            <!-- Mega Menu -->
            <div class="hs-mega-menu hs-position-right" aria-labelledby="docsMegaMenu" style="min-width: 20rem"></div>
            <!-- End Mega Menu -->
          </li>
          <!-- End Docs -->

          <!-- lang -->
          <li class="hs-has-mega-menu nav-item" data-hs-mega-menu-item-options='{
              "desktop": {
                  "maxWidth": "20rem"
               }
               }'>
            <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button">lang</a>

            <!-- Mega Menu -->
            <div class="hs-mega-menu hs-position-right dropdown-menu" aria-labelledby="docsMegaMenu"
              style="min-width: 10rem">
              <!-- Link -->
              <a class="navbar-dropdown-menu-media-link" href="/">
                <div class="d-flex" dir="rtl">
                  <div class="flex-shrink-0">
                    <span class=" ">
                      <svg width="40" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40"
                        preserveAspectRatio="xMidYMid meet" version="1.0">
                        <defs>
                          <clipPath id="id1">
                            <path d="M 2.203125 9 L 26.878906 9 L 26.878906 19 L 2.203125 19 Z M 2.203125 9 "
                              clip-rule="nonzero" />
                          </clipPath>
                          <clipPath id="id2">
                            <path
                              d="M 2.203125 5.277344 L 26.878906 5.277344 L 26.878906 10 L 2.203125 10 Z M 2.203125 5.277344 "
                              clip-rule="nonzero" />
                          </clipPath>
                          <clipPath id="id3">
                            <path
                              d="M 2.203125 18 L 26.878906 18 L 26.878906 22.699219 L 2.203125 22.699219 Z M 2.203125 18 "
                              clip-rule="nonzero" />
                          </clipPath>
                        </defs>
                        <g clip-path="url(#id1)">
                          <path fill="rgb(7.839966%, 7.839966%, 7.839966%)"
                            d="M 2.210938 18.007812 L 26.871094 18.007812 L 26.871094 9.96875 L 2.210938 9.96875 Z M 16.765625 12.449219 L 17.472656 13.398438 L 18.617188 13.035156 L 17.910156 13.988281 L 18.617188 14.9375 L 17.472656 14.574219 L 16.765625 15.527344 L 16.765625 14.351562 L 15.621094 13.988281 L 16.765625 13.625 Z M 14.539062 11.808594 C 15.15625 11.808594 15.71875 12.058594 16.121094 12.453125 C 15.800781 12.230469 15.414062 12.09375 14.992188 12.09375 C 13.921875 12.09375 13.054688 12.941406 13.054688 13.988281 C 13.054688 15.03125 13.921875 15.878906 14.992188 15.878906 C 15.414062 15.878906 15.800781 15.746094 16.121094 15.519531 C 15.71875 15.917969 15.15625 16.164062 14.539062 16.164062 C 13.3125 16.164062 12.3125 15.191406 12.3125 13.988281 C 12.3125 12.785156 13.3125 11.808594 14.539062 11.808594 Z M 14.539062 11.808594 "
                            fill-opacity="1" fill-rule="nonzero" />
                        </g>
                        <g clip-path="url(#id2)">
                          <path fill="rgb(90.589905%, 0%, 7.449341%)"
                            d="M 24.128906 5.277344 L 4.949219 5.277344 C 3.4375 5.277344 2.210938 6.476562 2.210938 7.957031 L 2.210938 9.96875 L 26.871094 9.96875 L 26.871094 7.957031 C 26.871094 6.476562 25.640625 5.277344 24.128906 5.277344 Z M 24.128906 5.277344 "
                            fill-opacity="1" fill-rule="nonzero" />
                        </g>
                        <g clip-path="url(#id3)">
                          <path fill="rgb(13.729858%, 61.959839%, 27.449036%)"
                            d="M 24.128906 22.699219 L 4.949219 22.699219 C 3.4375 22.699219 2.210938 21.496094 2.210938 20.015625 L 2.210938 18.007812 L 26.871094 18.007812 L 26.871094 20.015625 C 26.871094 21.496094 25.640625 22.699219 24.128906 22.699219 Z M 24.128906 22.699219 "
                            fill-opacity="1" fill-rule="nonzero" />
                        </g>
                        <path fill="rgb(100%, 100%, 100%)"
                          d="M 14.539062 16.164062 C 15.15625 16.164062 15.71875 15.917969 16.121094 15.519531 C 15.800781 15.746094 15.414062 15.878906 14.992188 15.878906 C 13.921875 15.878906 13.054688 15.03125 13.054688 13.988281 C 13.054688 12.941406 13.921875 12.09375 14.992188 12.09375 C 15.414062 12.09375 15.800781 12.230469 16.121094 12.453125 C 15.71875 12.058594 15.15625 11.808594 14.539062 11.808594 C 13.3125 11.808594 12.3125 12.785156 12.3125 13.988281 C 12.3125 15.191406 13.3125 16.164062 14.539062 16.164062 Z M 14.539062 16.164062 "
                          fill-opacity="1" fill-rule="nonzero" />
                        <path fill="rgb(100%, 100%, 100%)"
                          d="M 16.765625 14.351562 L 16.765625 15.527344 L 17.472656 14.574219 L 18.617188 14.9375 L 17.910156 13.988281 L 18.617188 13.035156 L 17.472656 13.398438 L 16.765625 12.449219 L 16.765625 13.625 L 15.621094 13.988281 Z M 16.765625 14.351562 "
                          fill-opacity="1" fill-rule="nonzero" />
                      </svg>
                    </span>
                  </div>

                  <div class="flex-grow-1 text-end me-3 mt-2">
                    <span class="navbar-dropdown-menu-media-title">العربية</span>
                  </div>
                </div>
              </a>
              <!-- End Link -->
              <!-- Link -->
              <a class="navbar-dropdown-menu-media-link" href="snippets/index.html">
                <div class="d-flex">
                  <div class="">
                    <span class="svg-icon svg-icon-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-um" viewBox="0 0 640 480">
                        <defs>
                          <clipPath id="a">
                            <path fill-opacity=".7" d="M0 0h682.7v512H0z"/>
                          </clipPath>
                        </defs>
                        <g fill-rule="evenodd" clip-path="url(#a)" transform="scale(.9375)">
                          <g stroke-width="1pt">
                            <path fill="#bd3d44" d="M0 0h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8V197H0zm0 78.8h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8v39.4H0zm0 78.8h972.8V512H0z"/>
                            <path fill="#fff" d="M0 39.4h972.8v39.4H0zm0 78.8h972.8v39.3H0zm0 78.7h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8v39.4H0z"/>
                          </g>
                          <path fill="#192f5d" d="M0 0h389.1v275.7H0z"/>
                          <path fill="#fff" d="M32.4 11.8 36 22.7h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0 3.6 10.9H177l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0 3.5 10.9H242l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 39.4l3.5 10.9h11.5L70.6 57 74 67.9l-9-6.7-9.3 6.7L59 57l-9-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7L124 57l-9.3-6.7h11.5zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0 3.5 10.9h11.5L330 57l3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 66.9 36 78h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7H29zm64.9 0 3.5 11h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zm64.8 0 3.6 11H177l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7h11.5zm64.9 0 3.5 11H242l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.4zm64.8 0 3.6 11h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.2-6.7h11.4zm64.9 0 3.5 11h11.5l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.5zM64.9 94.5l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 122.1 36 133h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0 3.6 10.9H177l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0 3.5 10.9H242l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 149.7l3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.5zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7H191zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7H256zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zM32.4 177.2l3.6 11h11.4l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0 3.5 11h11.5l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0 3.6 11H177l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0 3.5 11H242l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0 3.6 11h11.4l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0 3.5 11h11.5l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 204.8l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 232.4l3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.3-6.7H29zm64.9 0 3.5 10.9h11.5L103 250l3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.4zm64.8 0 3.6 10.9H177l-9 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.3-6.7h11.5zm64.9 0 3.5 10.9H242l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.2-6.7h11.4zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.5z"/>
                        </g>
                      </svg>
                    </span>
                  </div>

                  <div class="flex-grow-1 ms-3 mt-2">
                    <span class="navbar-dropdown-menu-media-title">English</span>
                  </div>
                </div>
              </a>
              <!-- End Link -->
            </div>
            <!-- End Mega Menu -->
          </li>
          <!-- End lang -->
        </ul>
      </div>
    </nav>
  </div>
  <!-- End Topbar -->

  <div class="container mt-3">
    <nav class="js-mega-menu navbar-nav-wrap">
      <!-- Default Logo -->
      <a class="navbar-brand" href="/" aria-label="Front">
        <img class="navbar-brand-logo" src="{{ asset('FrontOffice/assets/svg/logos/logo.svg') }}" alt="Logo" />
      </a>
      <!-- End Default Logo -->

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-default">
          <i class="bi-list"></i>
        </span>
        <span class="navbar-toggler-toggled">
          <i class="bi-x"></i>
        </span>
      </button>
      <!-- End Toggler -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>

          <!-- Dropdown -->
          <li class="hs-has-sub-menu nav-item">
            <a id="listingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">Sale</a>
            <div class="hs-sub-menu dropdown-menu" aria-labelledby="listingsDropdown" style="min-width: 14rem">
              <a class="dropdown-item" href="/list">House</a>
              <a class="dropdown-item" href="/list">Flat</a>
              <a class="dropdown-item" href="/list">Land / Farm</a>
              <a class="dropdown-item" href="/list">Summer House</a>
            </div>
          </li>
          <!-- End Dropdown -->
          <!-- Dropdown -->
          <li class="hs-has-sub-menu nav-item">
            <a id="listingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">Rent</a>
            <div class="hs-sub-menu dropdown-menu" aria-labelledby="listingsDropdown" style="min-width: 14rem">
              <a class="dropdown-item" href="/list">House</a>
              <a class="dropdown-item" href="/list">Flat</a>
              <a class="dropdown-item" href="/list">Land / Farm</a>
              <a class="dropdown-item" href="/list">Summer House</a>
            </div>
          </li>
          <!-- End Dropdown -->

          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="btn btn-primary btn-transition" href="/sale-rent">Start selling</a>
          </li>
        </ul>
      </div>
      <!-- End Collapse -->
    </nav>
  </div>
</header>