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
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                      <a class="nav-link active" href="account-orders.html">
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
          <div class="card">
            <!-- Body -->
            <div class="card-body">
              <!-- Nav Scroller -->
              <div class="js-nav-scroller hs-nav-scroller-horizontal">
                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                  <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-left"></i>
                  </a>
                </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                  <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-right"></i>
                  </a>
                </span>

                <!-- Nav -->
                <ul class="nav nav-segment nav-fill mb-7" id="featuresTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="#accountOrdersOne" id="accountOrdersOne-tab" data-bs-toggle="tab" data-bs-target="#accountOrdersOne" role="tab" aria-controls="accountOrdersOne" aria-selected="true">Buy</a>
                  </li>

                  <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#accountOrdersTwo" id="accountOrdersTwo-tab" data-bs-toggle="tab" data-bs-target="#accountOrdersTwo" role="tab" aria-controls="accountOrdersTwo" aria-selected="false">Rent</a>
                  </li>
                </ul>
                <!-- End Nav -->
              </div>
              <!-- End Nav Scroller -->

              <!-- Tab Content -->
              <div class="tab-content" id="accountOrdersTabContent">
                <div class="tab-pane fade show active" id="accountOrdersOne" role="tabpanel" aria-labelledby="accountOrdersOne-tab">
                  <!-- Select Group -->
                  <div class="d-sm-flex align-items-sm-center mb-5">
                    <div class="mb-2 mb-sm-0 me-3">
                      <span><strong class="text-dark">orders</strong> placed in</span>
                    </div>

                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select form-select form-select-sm">
                        <option value="All">All Orders Placed</option>
                        <option value="last 30 days">last 30 days</option>
                        <option value="past 6 months" >past 6 months</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                  <!-- End Select Group -->

                  <ul class="list-unstyled mb-5">
                    <!-- Card -->
                    <li class="card card-bordered shadow-none mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6 col-md mb-3 mb-md-0">
                            <small class="card-subtitle mb-0">Price</small>
                            <small class="text-dark fw-semibold">$999.00</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md mb-3 mb-md-0">
                            <small class="card-subtitle mb-0">Order is:</small>
                            <small class="text-dark fw-semibold">Visit property</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md">
                            <small class="card-subtitle mb-0">PropertyID</small>
                            <small class="text-dark fw-semibold">456853648</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md">
                            <small class="card-subtitle mb-0">Date Sceduled</small>
                            <small class="text-dark fw-semibold">30 April, 2020 - 9:00am</small>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->

                        <hr>

                        <div class="row">
                          <div class="col-md-8">
                            <h5>Ain-zara New Modern house</h5>

                            <div class="row gx-2">
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img10.jpg')}}" alt="Image Description">
                              </div>
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img9.jpg')}}" alt="Image Description">
                              </div>
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img10.jpg')}}" alt="Image Description">
                              </div>
                            </div>
                            <!-- End Row -->
                          </div>

                          <div class="col-md-4 pt-4">
                            <div class="d-grid gap-2">
                              <a class="btn btn-white btn-sm" href="#">
                                <i class="bi-basket small me-2"></i> View listing
                              </a>
                              <a class="btn btn-outline-danger btn-sm" href="#">Cancel Order</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End Card -->

                    <!-- Card -->
                    <li class="card card-bordered shadow-none mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6 col-md mb-3 mb-md-0">
                            <small class="card-subtitle mb-0">Price</small>
                            <small class="text-dark fw-semibold">$999.00</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md mb-3 mb-md-0">
                            <small class="card-subtitle mb-0">Order is:</small>
                            <small class="text-dark fw-semibold">Visit property</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md">
                            <small class="card-subtitle mb-0">PropertyID</small>
                            <small class="text-dark fw-semibold">456853648</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md">
                            <small class="card-subtitle mb-0">Date Sceduled</small>
                            <small class="text-dark fw-semibold">30 April, 2020 - 9:00am</small>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->

                        <hr>

                        <div class="row">
                          <div class="col-md-8">
                            <h5>Ain-zara New Modern house</h5>

                            <div class="row gx-2">
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img10.jpg')}}" alt="Image Description">
                              </div>
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img9.jpg')}}" alt="Image Description">
                              </div>
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img10.jpg')}}" alt="Image Description">
                              </div>
                            </div>
                            <!-- End Row -->
                          </div>

                          <div class="col-md-4 pt-4">
                            <div class="d-grid gap-2">
                              <a class="btn btn-white btn-sm" href="#">
                                <i class="bi-basket small me-2"></i> View listing
                              </a>
                              <a class="btn btn-outline-danger btn-sm" href="#">Cancel Order</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End End Card -->

                    <!-- Card -->
                    <li class="card card-bordered shadow-none mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6 col-md mb-3 mb-md-0">
                            <small class="card-subtitle mb-0">Price</small>
                            <small class="text-dark fw-semibold">$999.00</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md mb-3 mb-md-0">
                            <small class="card-subtitle mb-0">Order is:</small>
                            <small class="text-dark fw-semibold">Visit property</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md">
                            <small class="card-subtitle mb-0">PropertyID</small>
                            <small class="text-dark fw-semibold">456853648</small>
                          </div>
                          <!-- End Col -->

                          <div class="col-6 col-md">
                            <small class="card-subtitle mb-0">Date Sceduled</small>
                            <small class="text-dark fw-semibold">30 April, 2020 - 9:00am</small>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->

                        <hr>

                        <div class="row">
                          <div class="col-md-8">
                            <h5>Ain-zara New Modern house</h5>

                            <div class="row gx-2">
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img10.jpg')}}" alt="Image Description">
                              </div>
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img9.jpg')}}" alt="Image Description">
                              </div>
                              <div class="col">
                                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/380x360/img10.jpg')}}" alt="Image Description">
                              </div>
                            </div>
                            <!-- End Row -->
                          </div>

                          <div class="col-md-4 pt-4">
                            <div class="d-grid gap-2">
                              <a class="btn btn-white btn-sm" href="#">
                                <i class="bi-basket small me-2"></i> View listing
                              </a>
                              <a class="btn btn-outline-danger btn-sm" href="#">Cancel Order</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End End Card -->
                  </ul>

                  <!-- Pagination -->
                  <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">Prev</a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">Next</a>
                      </li>
                    </ul>
                  </nav>
                  <!-- End Pagination -->
                </div>

                <div class="tab-pane fade" id="accountOrdersTwo" role="tabpanel" aria-labelledby="accountOrdersTwo-tab">
                  <!-- Empty State -->
                  <div class="text-center content-space-1">
                    <img class="avatar avatar-xl mb-3" src="{{asset('FrontOffice/assets/svg/illustrations/empty-state-no-data.svg')}}" alt="Image Description">
                    <p class="card-text">No Orders to show</p>
                    <a class="btn btn-white btn-sm" href="#">View Listings</a>
                  </div>
                  <!-- End Empty State -->
                </div>
              </div>
              <!-- End Tab Content -->
            </div>
            <!-- End Body -->
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