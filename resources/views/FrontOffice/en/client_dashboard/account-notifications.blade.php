@extends('FrontOffice.layouts.account_app')

@section('content')
    
@include('FrontOffice.en.sections.account_header')


  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="bg-light">
    <!-- Breadcrumb -->
    <div class="navbar-dark bg-dark" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
      <div class="container content-space-1 content-space-b-lg-3">
        <div class="row align-items-center">
          <div class="col">
            <div class="d-none d-lg-block">
              <h1 class="h2 text-white">Personal info</h1>
            </div>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light mb-0">
                <li class="breadcrumb-item">Account</li>
                <li class="breadcrumb-item active" aria-current="page">Personal Info</li>
              </ol>
            </nav>
            <!-- End Breadcrumb -->
          </div>
          <!-- End Col -->

          <div class="col-auto">
            <div class="d-none d-lg-block">
              <a class="btn btn-soft-light btn-sm" href="#">Log out</a>
            </div>

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
                      <img class="avatar-img" src="../../assets/img/160x160/img9.jpg" alt="Image Description">
                      <img class="avatar-status avatar-lg-status" src="../../assets/svg/illustrations/top-vendor.svg" alt="Image Description" data-bs-toggle="tooltip" data-bs-placement="top" title="Verified user">
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
                      <a class="nav-link " href="account-wishlist.html">
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
          <div class="d-grid gap-3 gap-lg-5">
            <!-- Card -->
            <div class="card card-sm">
              <!-- Header -->
              <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                <h5 class="card-header-title">My network</h5>

                <a id="toggleAll1" class="js-toggle-state btn btn-white btn-sm btn-toggle" href="javascript:;" data-hs-toggle-state-options='{
                     "targetSelector": "#accountNotificationSwitch1, #accountNotificationSwitch2, #accountNotificationSwitch3, #accountNotificationSwitch4"
                   }'>
                  <span class="btn-toggle-default">Toggle all</span>
                  <span class="btn-toggle-toggled">Untoggle all</span>
                </a>
              </div>
              <!-- End Header -->

              <!-- Alert -->
              <div class="alert alert-soft-danger text-center card-alert" role="alert">
                We need permission from your browser to show notifications. <a class="alert-link" href="#">Request permission</a>
              </div>
              <!-- End Alert -->

              <div class="card-body">
                <small class="card-subtitle">Send me:</small>

                <!-- List Group -->
                <div class="list-group list-group-flush list-group-no-gutters">
                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch1">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch1">
                      <span class="d-block">New for you</span>
                      <span class="d-block small text-muted">A weekly email featuring shots from designers you follow</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch2">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch2" checked>
                      <span class="d-block">Account activity <span class="badge bg-success ms-1">New</span></span>
                      <span class="d-block small text-muted">Get important notifications about you or activity you've missed</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch3">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch3" checked>
                      <span class="d-block">Meetups near you <span class="badge bg-success ms-1">New</span></span>
                      <span class="d-block small text-muted">Get an email when a Dribbble Meetup is posted close to my location</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch4">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch4">
                      <span class="d-block">Opportunities</span>
                      <span class="d-block small text-muted">Get a daily email when new design jobs are posted in your area</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->
                </div>
                <!-- End List Group -->
              </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card card-sm">
              <!-- Header -->
              <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                <h5 class="card-header-title">Front emails</h5>

                <a id="toggleAll3" class="js-toggle-state btn btn-white btn-sm btn-toggle" href="javascript:;" data-hs-toggle-state-options='{
                     "targetSelector": "#accountNotificationSwitch5, #accountNotificationSwitch6, #accountNotificationSwitch7, #accountNotificationSwitch8"
                   }'>
                  <span class="btn-toggle-default">Toggle all</span>
                  <span class="btn-toggle-toggled">Untoggle all</span>
                </a>
              </div>
              <!-- End Header -->

              <div class="card-body">
                <small class="card-subtitle">Subscribe me to:</small>

                <!-- List Group -->
                <div class="list-group list-group-flush list-group-no-gutters">
                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch5">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch5" checked>
                      <span class="d-block">Company news</span>
                      <span class="d-block small text-muted">Get Front news, announcements, and product updates</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch6">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch6">
                      <span class="d-block">Replay <span class="badge bg-success ms-1">New</span></span>
                      <span class="d-block small text-muted">A weekly email featuring popular shots</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch7">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch7">
                      <span class="d-block">Courtside <span class="badge bg-success ms-1">New</span></span>
                      <span class="d-block small text-muted">A weekly email featuring the latest stories from our blog</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch8">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch8">
                      <span class="d-block">Weekly jobs</span>
                      <span class="d-block small text-muted">Weekly digest of design jobs</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->
                </div>
                <!-- End List Group -->
              </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card card-sm">
              <!-- Header -->
              <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                <h5 class="card-header-title">Usage</h5>

                <a id="toggleAll4" class="js-toggle-state btn btn-white btn-sm btn-toggle" href="javascript:;" data-hs-toggle-state-options='{
                     "targetSelector": "#accountNotificationSwitch9, #accountNotificationSwitch10, #accountNotificationSwitch11"
                   }'>
                  <span class="btn-toggle-default">Toggle all</span>
                  <span class="btn-toggle-toggled">Untoggle all</span>
                </a>
              </div>
              <!-- End Header -->

              <div class="card-body">
                <small class="card-subtitle">Allow others to:</small>

                <!-- List Group -->
                <div class="list-group list-group-flush list-group-no-gutters">
                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch9">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch9">
                      <span class="d-block">Encrypt data</span>
                      <span class="d-block small text-muted">Encrypt all data associated with account</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch10">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch10" checked>
                      <span class="d-block">Location services</span>
                      <span class="d-block small text-muted">Allow third-party apps to use current location</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="list-group-item">
                    <!-- Form Switch -->
                    <label class="form-check form-switch" for="accountNotificationSwitch11">
                      <input class="form-check-input mt-0" type="checkbox" id="accountNotificationSwitch11">
                      <span class="d-block">Allow private notes</span>
                      <span class="d-block small text-muted">Members can send you private notes</span>
                    </label>
                    <!-- End Form Switch -->
                  </div>
                  <!-- End Item -->
                </div>
                <!-- End List Group -->
              </div>
            </div>
            <!-- End Card -->

            <!-- Toggle Button -->
            <div class="d-sm-flex justify-content-between align-items-center">
              <div class="mb-3 mb-sm-0">
                <small class="card-subtitle">Turn all notifications on or off:</small>
              </div>

              <a class="js-toggle-state btn btn-primary btn-sm btn-toggle" href="javascript:;" data-hs-toggle-state-options='{
                   "targetSelector": "#accountNotificationSwitch1, #accountNotificationSwitch2, #accountNotificationSwitch3, #accountNotificationSwitch4, #accountNotificationSwitch5, #accountNotificationSwitch6, #accountNotificationSwitch7, #accountNotificationSwitch8, #accountNotificationSwitch9, #accountNotificationSwitch10, #accountNotificationSwitch11",
                   "slaveSelector": "#toggleAll1, #toggleAll2, #toggleAll3, #toggleAll4"
                 }'>
                <span class="btn-toggle-default">
                  <i class="bi-toggle-off me-1"></i> Turn OFF
                </span>
                <span class="btn-toggle-toggled">
                  <i class="bi-toggle-on me-1"></i> Turn ON
                </span>
              </a>
            </div>
            <!-- End Toggle Button -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection