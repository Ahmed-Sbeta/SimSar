<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-white">
    <!-- Topbar -->
    <div class="container navbar-topbar">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Toggler -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-between align-items-center">
            <span class="navbar-toggler-text">Topbar</span>

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
              <span class="navbar-toggler-text small">Topbar</span>

              <!-- Toggler -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-x"></i>
              </button>
              <!-- End Toggler -->
            </div>
          </div>

          <ul class="navbar-nav">
            <li class="nav-item me-auto">
              <a class="nav-link" href="https://htmlstream.com/preview/front-v4.3.1/landing-classic-corporate.html">Download App <i class="bi-apple"></i> <i class="bi-google-play"></i></a>
            </li>

            <!-- Demos -->
            <li class="hs-has-mega-menu nav-item">
              <a id="" class="hs-mega-menu-invoker nav-link active " aria-current="page" href="#">Register</a>
              <!-- Mega Menu -->
              <div class="hs-mega-menu  w-100 " style="min-width: 40rem;">
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Demos -->

            <!-- Docs -->
            <li class="hs-has-mega-menu nav-item" data-hs-mega-menu-item-options='{
                  "desktop": {
                    "maxWidth": "20rem"
                  }
                }'>
              <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link " href="#" role="button">Login</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right" aria-labelledby="docsMegaMenu" style="min-width: 20rem;">
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Docs -->
          </ul>
        </div>
      </nav>
    </div>
    <!-- End Topbar -->

    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="{{asset('FrontOffice/assets/svg/logos/logo.svg')}}" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link active" href="index.html">Home</a>
            </li>

            <!-- Dropdown -->
            <li class="hs-has-sub-menu nav-item">
              <a id="SelllistingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Buy</a>
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="SelllistingsDropdown" style="min-width: 14rem;">
                <a class="dropdown-item " href="property-list.html">House</a>
                <a class="dropdown-item " href="property-grid.html">Flat</a>
                <a class="dropdown-item " href="property-grid.html">Land / Farm</a>
                <a class="dropdown-item " href="property-grid.html">Summer House</a>
              </div>
            </li>
            <!-- End Dropdown -->

             <!-- Dropdown -->
             <li class="hs-has-sub-menu nav-item">
              <a id="RentlistingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rent</a>
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="RentlistingsDropdown" style="min-width: 14rem;">
                <a class="dropdown-item " href="property-list.html">House</a>
                <a class="dropdown-item " href="property-grid.html">Flat</a>
                <a class="dropdown-item " href="property-grid.html">Summer House</a>
                <a class="dropdown-item " href="property-grid.html">Beach House</a>
              </div>
            </li>
            <!-- End Dropdown -->

            <li class="nav-item">
              <a class="nav-link " href="property-overview.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="property-overview.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary btn-transition" href="page-services.html">Start selling</a>
            </li>
          </ul>
        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->