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
                <li class="breadcrumb-item active" aria-current="page">Address</li>
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
                      <a class="nav-link active" href="account-address.html">
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
          <!-- Card -->
          <div id="editAddressCard" class="card">
            <div class="card-header border-bottom">
              <h4 class="card-header-title">Address</h4>
            </div>

            <!-- Body -->
            <div class="card-body">
              <form>
                <!-- Form -->
                <div class="row mb-4">
                  <label for="locationLabel" class="col-sm-3 col-form-label form-label">Location</label>

                  <div class="col-sm-9">
                    <!-- Select -->
                    <div class="tom-select-custom mb-3">
                      <select class="js-select form-select" id="locationLabel" disabled>
                        <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{asset('FrontOffice/assets/vendor/flag-icon-css/flags/1x1/ly.svg')}}" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>Libya</option>
                      </select>
                    </div>
                    <!-- End Select -->

                    <div class="mb-3">
                      <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City" aria-label="City" >
                    </div>
                    <input type="text" class="form-control" name="area" id="stateLabel" placeholder="area" aria-label="area">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="addressLine1Label" class="col-sm-3 col-form-label form-label">Nearest landmark</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine1" id="addressLine1Label" placeholder="landmark" aria-label="landmark">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="js-add-field row mb-4" data-hs-add-field-options='{
                        "template": "#addAddressFieldTemplate",
                        "container": "#addAddressFieldContainer",
                        "defaultCreated": 0
                      }'>
                  <label for="addressLine2Label" class="col-sm-3 col-form-label form-label">Nearest landmark 2 <span class="form-label-secondary">(Optional)</span></label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine2" id="addressLine2Label" placeholder="landmark" aria-label="landmark">

                    <!-- Container For Input Field -->
                    <div id="addAddressFieldContainer"></div>

                    <a href="javascript:;" class="js-create-field form-link">
                      <i class="bi-plus-circle me-1"></i> Add address
                    </a>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Add Phone Input Field -->
                <div id="addAddressFieldTemplate" style="display: none; position: relative;">
                  <div class="input-group-add-field">
                    <input type="text" class="form-control" data-name="addressLine" placeholder="landmark" aria-label="landmark">
                  </div>

                  <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                    <i class="bi-x-lg"></i>
                  </a>
                </div>
                <!-- End Add Phone Input Field -->
              </form>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex justify-content-end gap-3">
                <a class="btn btn-white" href="javascript:;">Cancel</a>
                <a class="btn btn-primary" href="javascript:;">Save changes</a>
              </div>
            </div>
            <!-- End Footer -->
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