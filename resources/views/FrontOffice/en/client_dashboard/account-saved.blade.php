@extends('FrontOffice.layouts.account_app')

@section('content')
    
@include('FrontOffice.en.sections.account_header')


  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="bg-light">
    <!-- Breadcrumb -->
    <div class="navbar-dark bg-dark" style="background-image: url({{asset('FrontOffice/assets/svg/components/wave-pattern-light.svg')}});">
      <div class="container content-space-1 content-space-b-lg-3">
        <div class="row align-items-center">
          <div class="col">
            <div class="d-none d-lg-block">
              <h1 class="h2 text-white">Personal info</h1>
            </div>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light mb-0">
                <li class="breadcrumb-item">Account / </li>
                <li class="breadcrumb-item active" aria-current="page">Saved</li>
              </ol>
            </nav>
            <!-- End Breadcrumb -->
          </div>
          <!-- End Col -->

          <div class="col-auto">
          

            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Content Section -->
    <div class="container content-space-1 content-space-t-lg-0 content-space-b-lg-2 mt-lg-n10">
      <div class="row">
        <div class="col-lg-3">
          <!-- Navbar -->
          <div class="navbar-expand-lg navbar-light">
            <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
              <!-- Card -->
              <div class="card flex-grow-1 mb-5">
                <div class="card-body">
                  <!-- Avatar -->
                  <div class="d-none d-lg-block text-center mb-5">
                    <div class="avatar avatar-xxl avatar-circle mb-3">
                      <img class="avatar-img" src="{{asset('FrontOffice/assets/img/160x160/img9.jpg')}}" alt="Image Description">
                      <img class="avatar-status avatar-lg-status" src="{{asset('FrontOffice/assets/svg/illustrations/top-vendor.svg')}}" alt="Image Description" data-bs-toggle="tooltip" data-bs-placement="top" title="Verified user">
                    </div>

                    <h4 class="card-title mb-0">Natalie Curtis</h4>
                    <p class="card-text small">natalie@example.com</p>
                  </div>
                  <!-- End Avatar -->

                  <!-- Nav -->
                  <span class="text-cap">Account</span>

                  <!-- List -->
                  <ul class="nav nav-sm nav-tabs nav-vertical mb-4">
                    <li class="nav-item">
                      <a class="nav-link" href="account-overview.html">
                        <i class="bi-person-badge nav-icon"></i> Personal info
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="account-address.html">
                        <i class="bi-geo-alt nav-icon"></i> Address
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="account-security.html">
                        <i class="bi-shield-shaded nav-icon"></i> Security
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="account-preferences.html">
                        <i class="bi-card-list nav-icon"></i> Your Listings
                      </a>
                    </li>
                  </ul>
                  <!-- End List -->

                  <span class="text-cap">Shopping</span>

                  <!-- List -->
                  <ul class="nav nav-sm nav-tabs nav-vertical mb-4">
                    <li class="nav-item">
                      <a class="nav-link " href="account-orders.html">
                        <i class="bi-basket nav-icon"></i> Your orders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="account-wishlist.html">
                        <i class="bi-bookmark nav-icon"></i> Saved
                        <span class="badge bg-soft-dark text-dark rounded-pill nav-link-badge">2</span>
                      </a>
                    </li>
                  </ul>
                  <!-- End List -->

                  <span class="text-cap">Sittings</span>

                  <!-- List -->
                  <ul class="nav nav-sm nav-tabs nav-vertical">
                    <li class="nav-item">
                      <a class="nav-link " href="account-sittings.html">
                        <i class="bi-gear nav-icon"></i> sittings
                      </a>
                    </li>
                    
                  <!-- End List -->

                  
                  <!-- End Nav -->
                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Navbar -->
        </div>
        <!-- End Col -->

        <div class="col-lg-9">
          <!-- Card -->
          <div class="card">
            <div class="card-header d-sm-flex justify-content-sm-between align-items-sm-center border-bottom">
              <h5 class="card-header-title">Recently added</h5>
              <span>2 items</span>
            </div>

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <form>
                <!-- List Group -->
                <ul class="list-group list-group-flush list-group-no-gutters">
                  <!-- Item -->
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xl avatar-4x3" src="{{asset('FrontOffice/assets/img/380x360/img10.jpg')}}" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row">
                          <div class="col-sm-7 mb-3 mb-sm-0">
                            <h5><a class="text-dark" href="#">Ain-zara House Modern</a></h5>

                            <div class="d-block d-sm-none">
                              <h5 class="mb-1">250,000<sub>LYD</sub></h5>
                            </div>

                            <div class="d-grid gap-1">
                              <div class="text-body">
                                <span class="small">Lot size:</span>
                                <span class="fw-semibold small">500 m<sup>2</sup></span>
                              </div>

                              <div class="text-body">
                                <span class="small">built:</span>
                                <span class="fw-semibold small">2022</span>
                              </div>

                              <div class="text-body">
                                <span class="small">status:</span>
                                <span class="fw-semibold small">Sell</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-3">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-grid gap-2">
                                  <a class="link-sm link-secondary small" href="javascript:;">
                                    <i class="bi-trash me-1"></i> Remove
                                  </a>

                                  <a class="link-sm link-secondary small" href="javascript:;">
                                    <i class="bi-eye me-1"></i> View Post
                                  </a>
                                </div>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                          <!-- End Col -->

                          <div class="col-4 col-sm-2 d-none d-sm-inline-block text-right">
                            <span class="h5 d-block mb-1">1,999,000</span>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End Item -->

                  <!-- Item -->
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xl avatar-4x3" src="{{asset('FrontOffice/assets/img/380x360/img10.jpg')}}" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row">
                          <div class="col-sm-7 mb-3 mb-sm-0">
                            <h5><a class="text-dark" href="#">Ain-zara House Modern</a></h5>

                            <div class="d-block d-sm-none">
                              <h5 class="mb-1">250,000<sub>LYD</sub></h5>
                            </div>

                            <div class="d-grid gap-1">
                              <div class="text-body">
                                <span class="small">Lot size:</span>
                                <span class="fw-semibold small">500 m<sup>2</sup></span>
                              </div>

                              <div class="text-body">
                                <span class="small">built:</span>
                                <span class="fw-semibold small">2022</span>
                              </div>

                              <div class="text-body">
                                <span class="small">status:</span>
                                <span class="fw-semibold small">Sell</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-3">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-grid gap-2">
                                  <a class="link-sm link-secondary small" href="javascript:;">
                                    <i class="bi-trash me-1"></i> Remove
                                  </a>

                                  <a class="link-sm link-secondary small" href="javascript:;">
                                    <i class="bi-eye me-1"></i> View Post
                                  </a>
                                </div>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                          <!-- End Col -->

                          <div class="col-4 col-sm-2 d-none d-sm-inline-block text-right">
                            <span class="h5 d-block mb-1">1,999,000</span>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End Item -->
                </ul>
                <!-- End List Group -->
              </form>
              <!-- End Form -->
            </div>
            <!-- End Body -->

            <a class="card-footer card-link text-center border-top" href="#">View More Listings</a>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection