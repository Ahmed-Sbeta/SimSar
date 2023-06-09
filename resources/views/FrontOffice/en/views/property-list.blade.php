@extends('FrontOffice.layouts.app')
@section('title','property list')

@section('content')

@include('FrontOffice.en.sections.header')

  
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Filter Form -->
    <div class="container content-space-t-3 content-space-t-lg-4">
      <form>
        <div class="row gx-2">
          <div class="col-lg mb-2 mb-lg-0">
            <!-- Form -->
            <label for="searchPropertyFilterForm" class="visually-hidden form-label">Search property</label>
            <div class="input-group input-group-merge">
              <span class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </span>
              <input type="text" class="form-control form-control-sm" id="searchPropertyFilterForm" placeholder="Search property" aria-label="Search property" value="Tripoli, Center city">
            </div>
            <!-- End Form -->
          </div>
          <!-- End Col -->

          <div class="col-auto mb-2 mb-lg-0">
            <!-- Dropdown -->
            <div class="dropdown">
              <a class="btn btn-white btn-sm dropdown-toggle" href="#" id="priceFilterFormDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Price</a>

              <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="priceFilterFormDropdown" style="min-width: 21rem;">
                <!-- Card -->
                <div class="card card-sm">
                  <div class="card-body">
                    <!-- Bar Chart -->
                    <div class="position-relative overflow-hidden" style="height: 6rem; width: 18rem;">
                      <div class="position-absolute w-100 overflow-hidden">
                        <div style="height: 6rem; width: 18rem;">
                          <canvas class="js-chart" width='300px' data-hs-chartjs-options='{
                                    "type": "bar",
                                    "data": {
                                      "labels": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
                                      "datasets": [{
                                        "data": [2, 3, 5, 7, 8, 5, 3, 2, 3, 6, 5, 4, 7, 5, 4, 3, 2],
                                        "backgroundColor": "#e7eaf3",
                                        "borderColor": "#e7eaf3"
                                      }]
                                    },
                                    "options": {
                                      "animation": {
                                        "duration": 0
                                      },
                                      "responsive": true,
                                      "scales": {
                                        "y": {
                                          "display": false,
                                          "gridLines": {
                                            "display": false,
                                            "drawBorder": false
                                          },
                                          "ticks": {
                                            "beginAtZero": true
                                          }
                                        },
                                        "x": {
                                          "display": false,
                                          "gridLines": {
                                            "display": false,
                                            "drawBorder": false
                                          }
                                        }
                                      },
                                      "plugins": {
                                        "tooltips": {
                                          "custom": false
                                        }
                                      }
                                    }
                                  }'></canvas>
                        </div>
                      </div>

                      <div id="foregroundBarChartDoubleResult" class="position-absolute overflow-hidden">
                        <div style="height: 6rem; width: 18rem;">
                          <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "bar",
                                    "data": {
                                      "labels": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
                                      "datasets": [{
                                        "data": [2, 3, 5, 7, 8, 5, 3, 2, 3, 6, 5, 4, 7, 5, 4, 3, 2],
                                        "backgroundColor": "#377dff",
                                        "borderColor": "#377dff"
                                      }]
                                    },
                                    "options": {
                                      "animation": {
                                        "duration": 0
                                      },
                                      "scales": {
                                        "y": {
                                          "display": false,
                                          "gridLines": {
                                            "display": false,
                                            "drawBorder": false
                                          },
                                          "ticks": {
                                            "beginAtZero": true
                                          }
                                        },
                                        "x": {
                                          "display": false,
                                          "gridLines": {
                                            "display": false,
                                            "drawBorder": false
                                          }
                                        }
                                      },
                                      "plugins": {
                                        "tooltips": {
                                          "custom": false
                                        }
                                      }
                                    }
                                  }'></canvas>
                        </div>
                      </div>
                    </div>
                    <!-- End Bar Chart -->

                    <div class="range-slider">
                      <div class="js-nouislider" data-hs-nouislider-options='{
                               "range": {
                                 "min": 0,
                                 "max": 10000
                               },
                               "start": [250, 750],
                               "result_min_target_el": "#rangeSliderExampleDouble4MinResult",
                               "result_max_target_el": "#rangeSliderExampleDouble4MaxResult",
                               "foreground_target_el": "#foregroundBarChartDoubleResult"
                             }'>
                      </div>
                    </div>

                    <div class="row justify-content-center mt-5">
                      <div class="col">
                        <span class="d-block small mb-1">Min price:</span>
                        <input type="text" class="form-control form-control-sm" id="rangeSliderExampleDouble4MinResult">
                      </div>
                      <!-- End Col -->

                      <div class="col">
                        <span class="d-block small mb-1">Max price:</span>
                        <input type="text" class="form-control form-control-sm" id="rangeSliderExampleDouble4MaxResult">
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>

                  <div class="card-footer border-top">
                    <div class="d-flex justify-content-end gap-2">
                      <a class="btn btn-white btn-sm" href="#">Clear</a>
                      <a class="btn btn-primary btn-sm" href="#">Save</a>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
          <!-- End Col -->

          <div class="col-auto mb-2 mb-lg-0">
            <!-- Dropdown -->
            <div class="dropdown">
              <a class="btn btn-white btn-sm dropdown-toggle" href="#" id="bedsFilterFormDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">All beds</a>

              <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="bedsFilterFormDropdown" style="min-width: 25rem;">
                <!-- Card -->
                <div class="card card-sm">
                  <div class="card-body">
                    <!-- Radio Button Group -->
                    <div class="btn-group btn-group-segment d-flex" role="group" aria-label="Beds radio button group">
                      <input type="radio" class="btn-check flex-fill" name="bedsBtnRadio" id="bedsBtnRadioStudio" autocomplete="off" checked>
                      <label class="btn btn-sm" for="bedsBtnRadioStudio">Studio</label>

                      <input type="radio" class="btn-check flex-fill" name="bedsBtnRadio" id="bedsBtnRadio1" autocomplete="off">
                      <label class="btn btn-sm" for="bedsBtnRadio1">1+</label>

                      <input type="radio" class="btn-check flex-fill" name="bedsBtnRadio" id="bedsBtnRadio2" autocomplete="off">
                      <label class="btn btn-sm" for="bedsBtnRadio2">2+</label>

                      <input type="radio" class="btn-check flex-fill" name="bedsBtnRadio" id="bedsBtnRadio3" autocomplete="off">
                      <label class="btn btn-sm" for="bedsBtnRadio3">3+</label>

                      <input type="radio" class="btn-check flex-fill" name="bedsBtnRadio" id="bedsBtnRadio4" autocomplete="off">
                      <label class="btn btn-sm" for="bedsBtnRadio4">4+</label>

                      <input type="radio" class="btn-check flex-fill" name="bedsBtnRadio" id="bedsBtnRadio5" autocomplete="off">
                      <label class="btn btn-sm" for="bedsBtnRadio5">5+</label>
                    </div>
                    <!-- End Radio Button Group -->
                  </div>
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
          <!-- End Col -->

          <div class="col-auto mb-2 mb-lg-0">
            <!-- Dropdown -->
            <div class="dropdown">
              <a class="btn btn-white btn-sm dropdown-toggle" href="#" id="propertyTypeFilterFormDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Property type</a>

              <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="propertyTypeFilterFormDropdown" style="min-width: 20rem;">
                <!-- Card -->
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="d-grid gap-2">
                      <!-- Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="propertyTypeHouseCheckbox" checked>
                        <label class="form-check-label" for="propertyTypeHouseCheckbox">
                          House
                          <span class="d-block small text-muted">Find a cozy place</span>
                        </label>
                      </div>
                      <!-- End Check -->

                      <!-- Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="propertyTypeFlatsCheckbox">
                        <label class="form-check-label" for="propertyTypeFlatsCheckbox">
                          Flats
                          <span class="d-block small text-muted">Flats for sale or to rent</span>
                        </label>
                      </div>
                      <!-- End Check -->

                      <!-- Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="propertyTypeMultiFamilyCheckbox" checked>
                        <label class="form-check-label" for="propertyTypeMultiFamilyCheckbox">
                          Land
                          <span class="d-block small text-muted">Land for sale or to rent</span>
                        </label>
                      </div>
                      <!-- End Check -->

                      <!-- Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="propertyTypeFarmsLandCheckbox">
                        <label class="form-check-label" for="propertyTypeFarmsLandCheckbox">
                          Summer House
                          <span class="d-block small text-muted">Summer House for Vecations</span>
                        </label>
                      </div>
                      <!-- End Check -->
                    </div>
                  </div>

                  <div class="card-footer border-top">
                    <div class="d-flex justify-content-end gap-2">
                      <a class="btn btn-white btn-sm" href="#">Clear</a>
                      <a class="btn btn-primary btn-sm" href="#">Save</a>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
          <!-- End Col -->

          <div class="col-auto mb-2 mb-lg-0">
            <a class="btn btn-white btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#realEstateMoreFiltersModal">
              <i class="bi-sliders me-2"></i> More
            </a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </form>
    </div>
    <!-- End Filter Form -->

    <!-- Card List -->
    <div class="container content-space-t-1 content-space-b-2 content-space-b-lg-3">
      <!-- Heading -->
      <div class="mb-5">
        <div class="row align-items-center">
          <div class="col-sm mb-3 mb-sm-0">
            <span class="d-block">128 homes</span>
            <h1 class="h2 mb-0">Property for sale in Tripoli</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <!-- Select -->
            <select class="form-select form-select-sm">
              <option value="mostRecent" selected>Most recent</option>
              <option value="HighestPrice">Highest price</option>
              <option value="LowestPrice">Lowest price</option>
              <option value="mostReduced">Most reduced</option>
              <option value="mostPopular">Most popular</option>
            </select>
            <!-- End Select -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Heading -->

      <div class="d-grid gap-5 mb-7">
        <!-- Card -->
        <div class="card card-flush card-stretched-vertical">
          <div class="row">
            <div class="col-md-4">
              <!-- Card Pinned -->
              <a class="card-pinned" href="{{asset('FrontOffice/assets/img/1920x1080/img32.jpg')}}" data-fslightbox="propertyListGallery1">
                <img class="card-img" src="{{asset('FrontOffice/assets/img/1920x1080/img32.jpg')}}" height="250" alt="Image Description">

                <div class="card-pinned-top-start">
                  <span class="badge bg-success">New</span>
                </div>

                <div class="card-pinned-bottom-end">
                  <span class="btn btn-light btn-xs btn-icon">
                    <i class="bi-images"></i>
                  </span>
                </div>
              </a>
              <!-- End Card Pinned -->

              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img20.jpg')}}" data-fslightbox="propertyListGallery1"></a>
              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img17.jpg')}}" data-fslightbox="propertyListGallery1"></a>
              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img16.jpg')}}" data-fslightbox="propertyListGallery1"></a>
            </div>
            <!-- End Col -->

            <div class="col-md-8">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-md-7">
                    <span class="card-subtitle text-body">For sale</span>

                    <h3 class="card-title">
                      <a class="text-dark" href="property-overview.html">ain-zara, Tripoli</a>
                    </h3>
                  </div>
                  <!-- End Col -->

                  <div class="col-md-5 text-md-end">
                    <h3 class="card-title">
                      <a href="property-overview.html">689,000<sub>LYD</sub></a>
                    </h3>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <ul class="list-inline list-separator text-body small mb-3">
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg fill="currentColor" viewBox="0 0 640 512">
                        <path d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z" />
                      </svg>
                    </span>
                    3 bed
                  </li>
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg fill="currentColor" viewBox="0 0 512 512">
                        <path d="M304,320a16,16,0,1,0,16,16A16,16,0,0,0,304,320Zm32-96a16,16,0,1,0,16,16A16,16,0,0,0,336,224Zm32,64a16,16,0,1,0-16-16A16,16,0,0,0,368,288Zm-32,32a16,16,0,1,0-16-16A16,16,0,0,0,336,320Zm-32-64a16,16,0,1,0,16,16A16,16,0,0,0,304,256Zm128-32a16,16,0,1,0-16-16A16,16,0,0,0,432,224Zm-48,16a16,16,0,1,0,16-16A16,16,0,0,0,384,240Zm-16-48a16,16,0,1,0,16,16A16,16,0,0,0,368,192Zm96,32a16,16,0,1,0,16,16A16,16,0,0,0,464,224Zm32-32a16,16,0,1,0,16,16A16,16,0,0,0,496,192Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,432,256Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,400,288Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,336,352Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,304,384Zm64-64a16,16,0,1,0,16,16A16,16,0,0,0,368,320Zm21.65-218.35-11.3-11.31a16,16,0,0,0-22.63,0L350.05,96A111.19,111.19,0,0,0,272,64c-19.24,0-37.08,5.3-52.9,13.85l-10-10A121.72,121.72,0,0,0,123.44,32C55.49,31.5,0,92.91,0,160.85V464a16,16,0,0,0,16,16H48a16,16,0,0,0,16-16V158.4c0-30.15,21-58.2,51-61.93a58.38,58.38,0,0,1,48.93,16.67l10,10C165.3,138.92,160,156.76,160,176a111.23,111.23,0,0,0,32,78.05l-5.66,5.67a16,16,0,0,0,0,22.62l11.3,11.31a16,16,0,0,0,22.63,0L389.65,124.28A16,16,0,0,0,389.65,101.65Z" />
                      </svg>
                    </span>
                    2 bath
                  </li>
                  <li class="list-inline-item">
                    <i class="bi-rulers text-muted me-1"></i> 1,428 sqft
                  </li>
                </ul>

                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis in velit perferendis! Eius minus dicta, a nisi dignissimos fugit</p>

                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="col-lg mb-2 mb-lg-0">
                      <!-- Media -->
                      <div class="d-flex">
                
                        <div class="flex-grow-1">
                          <p class="card-text small mb-0">Listed on Jan 4, 2019</p>
                          <a class="card-link link-dark" href="#">Property ID: 54678941 </a>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-auto">
                      <!-- Contacts -->
                      <div class="d-flex gap-2">
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-telephone-inbound-fill me-1"></i> (0161) 347 8854
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-envelope-fill me-1"></i> Contact
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-bookmark-fill me-1"></i> Save
                        </a>
                      </div>
                      <!-- End Contacts -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card card-flush card-stretched-vertical">
          <div class="row">
            <div class="col-md-4">
              <!-- Card Pinned -->
              <a class="card-pinned" href="{{asset('FrontOffice/assets/img/1920x1080/img12.jpg')}}" data-fslightbox="propertyListGallery2">
                <img class="card-img" src="{{asset('FrontOffice/assets/img/480x320/img19.jpg')}}" alt="Image Description">

                <div class="card-pinned-bottom-end">
                  <span class="btn btn-light btn-xs btn-icon">
                    <i class="bi-images"></i>
                  </span>
                </div>
              </a>
              <!-- End Card Pinned -->

              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img11.jpg')}}" data-fslightbox="propertyListGallery2"></a>
              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img14.jpg')}}" data-fslightbox="propertyListGallery2"></a>
            </div>
            <!-- End Col -->

            <div class="col-md-8">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-md-7">
                    <span class="card-subtitle text-body">For sale</span>

                    <h3 class="card-title">
                      <a class="text-dark" href="property-overview.html">The Drive, Ilford</a>
                    </h3>
                  </div>
                  <!-- End Col -->

                  <div class="col-md-5 text-md-end">
                    <h3 class="card-title">
                      <a href="property-overview.html">&#163;999,000</a>
                    </h3>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <ul class="list-inline list-separator text-body small mb-3">
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                        <path d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z" />
                      </svg>
                    </span>
                    2 bed
                  </li>
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M304,320a16,16,0,1,0,16,16A16,16,0,0,0,304,320Zm32-96a16,16,0,1,0,16,16A16,16,0,0,0,336,224Zm32,64a16,16,0,1,0-16-16A16,16,0,0,0,368,288Zm-32,32a16,16,0,1,0-16-16A16,16,0,0,0,336,320Zm-32-64a16,16,0,1,0,16,16A16,16,0,0,0,304,256Zm128-32a16,16,0,1,0-16-16A16,16,0,0,0,432,224Zm-48,16a16,16,0,1,0,16-16A16,16,0,0,0,384,240Zm-16-48a16,16,0,1,0,16,16A16,16,0,0,0,368,192Zm96,32a16,16,0,1,0,16,16A16,16,0,0,0,464,224Zm32-32a16,16,0,1,0,16,16A16,16,0,0,0,496,192Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,432,256Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,400,288Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,336,352Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,304,384Zm64-64a16,16,0,1,0,16,16A16,16,0,0,0,368,320Zm21.65-218.35-11.3-11.31a16,16,0,0,0-22.63,0L350.05,96A111.19,111.19,0,0,0,272,64c-19.24,0-37.08,5.3-52.9,13.85l-10-10A121.72,121.72,0,0,0,123.44,32C55.49,31.5,0,92.91,0,160.85V464a16,16,0,0,0,16,16H48a16,16,0,0,0,16-16V158.4c0-30.15,21-58.2,51-61.93a58.38,58.38,0,0,1,48.93,16.67l10,10C165.3,138.92,160,156.76,160,176a111.23,111.23,0,0,0,32,78.05l-5.66,5.67a16,16,0,0,0,0,22.62l11.3,11.31a16,16,0,0,0,22.63,0L389.65,124.28A16,16,0,0,0,389.65,101.65Z" />
                      </svg>
                    </span>
                    1 bath
                  </li>
                  <li class="list-inline-item">
                    <i class="bi-rulers text-muted me-1"></i> 2,123 sqft
                  </li>
                </ul>

                <p class="card-text">Equity estate agents are pleased to offer this modern three Bedroom ground floor split level maisonette situated within easy reach of turkey street and enfield lock Train Stations.</p>

                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="col-lg mb-2 mb-lg-0">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="avatar avatar-sm avatar-soft-dark avatar-circle">
                            <span class="avatar-initials">EP</span>
                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <p class="card-text small mb-0">Listed on Jan 4, 2019 by</p>
                          <a class="card-link link-dark" href="#">Equity Property</a>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-auto">
                      <!-- Contacts -->
                      <div class="d-flex gap-2">
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-telephone-inbound-fill me-1"></i> (0161) 502 9133
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-envelope-fill me-1"></i> Contact
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-star-fill me-1"></i> Save
                        </a>
                      </div>
                      <!-- End Contacts -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card card-flush card-stretched-vertical">
          <div class="row">
            <div class="col-md-4">
              <!-- Card Pinned -->
              <a class="card-pinned" href="{{asset('FrontOffice/assets/img/1920x1080/img26.jpg')}}" data-fslightbox="propertyListGallery3">
                <img class="card-img" src="{{asset('FrontOffice/assets/img/480x320/img20.jpg')}}" alt="Image Description">

                <div class="card-pinned-top-start">
                  <span class="badge bg-primary">New build</span>
                </div>

                <div class="card-pinned-bottom-end">
                  <span class="btn btn-light btn-xs btn-icon">
                    <i class="bi-images"></i>
                  </span>
                </div>
              </a>
              <!-- End Card Pinned -->

              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img18.jpg')}}" data-fslightbox="propertyListGallery3"></a>
              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img15.jpg')}}" data-fslightbox="propertyListGallery3"></a>
            </div>
            <!-- End Col -->

            <div class="col-md-8">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-md-7">
                    <span class="card-subtitle text-body">For sale</span>

                    <h3 class="card-title">
                      <a class="text-dark" href="property-overview.html">Alderney House, Enfield</a>
                    </h3>
                  </div>
                  <!-- End Col -->

                  <div class="col-md-5 text-md-end">
                    <h3 class="card-title">
                      <a href="property-overview.html">&#163;725,000</a>
                    </h3>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <ul class="list-inline list-separator text-body small mb-3">
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                        <path d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z" />
                      </svg>
                    </span>
                    1 bed
                  </li>
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M304,320a16,16,0,1,0,16,16A16,16,0,0,0,304,320Zm32-96a16,16,0,1,0,16,16A16,16,0,0,0,336,224Zm32,64a16,16,0,1,0-16-16A16,16,0,0,0,368,288Zm-32,32a16,16,0,1,0-16-16A16,16,0,0,0,336,320Zm-32-64a16,16,0,1,0,16,16A16,16,0,0,0,304,256Zm128-32a16,16,0,1,0-16-16A16,16,0,0,0,432,224Zm-48,16a16,16,0,1,0,16-16A16,16,0,0,0,384,240Zm-16-48a16,16,0,1,0,16,16A16,16,0,0,0,368,192Zm96,32a16,16,0,1,0,16,16A16,16,0,0,0,464,224Zm32-32a16,16,0,1,0,16,16A16,16,0,0,0,496,192Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,432,256Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,400,288Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,336,352Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,304,384Zm64-64a16,16,0,1,0,16,16A16,16,0,0,0,368,320Zm21.65-218.35-11.3-11.31a16,16,0,0,0-22.63,0L350.05,96A111.19,111.19,0,0,0,272,64c-19.24,0-37.08,5.3-52.9,13.85l-10-10A121.72,121.72,0,0,0,123.44,32C55.49,31.5,0,92.91,0,160.85V464a16,16,0,0,0,16,16H48a16,16,0,0,0,16-16V158.4c0-30.15,21-58.2,51-61.93a58.38,58.38,0,0,1,48.93,16.67l10,10C165.3,138.92,160,156.76,160,176a111.23,111.23,0,0,0,32,78.05l-5.66,5.67a16,16,0,0,0,0,22.62l11.3,11.31a16,16,0,0,0,22.63,0L389.65,124.28A16,16,0,0,0,389.65,101.65Z" />
                      </svg>
                    </span>
                    1 bath
                  </li>
                  <li class="list-inline-item">
                    <i class="bi-rulers text-muted me-1"></i> 1,791 sqft
                  </li>
                </ul>

                <p class="card-text">Mark Owens is pleased to offer this brand new two bedroom, two bathroom ground floor flat for sale.</p>

                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="col-lg mb-2 mb-lg-0">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-sm avatar-circle" src="{{asset('FrontOffice/assets/img/160x160/img5.jpg')}}" alt="Image Description" title="Mark Owens">
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <p class="card-text small mb-0">Listed on Jan 4, 2019 by</p>
                          <a class="card-link link-dark" href="#">Mark Owens</a>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-auto">
                      <!-- Contacts -->
                      <div class="d-flex gap-2">
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-telephone-inbound-fill me-1"></i> (0161) 954 0020
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-envelope-fill me-1"></i> Contact
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-star-fill me-1"></i> Save
                        </a>
                      </div>
                      <!-- End Contacts -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card card-flush card-stretched-vertical">
          <div class="row">
            <div class="col-md-4">
              <!-- Card Pinned -->
              <a class="card-pinned" href="{{asset('FrontOffice/assets/img/1920x1080/img21.jpg')}}" data-fslightbox="propertyListGallery4">
                <img class="card-img" src="{{asset('FrontOffice/assets/img/480x320/img22.jpg')}}" alt="Image Description">

                <div class="card-pinned-bottom-end">
                  <span class="btn btn-light btn-xs btn-icon">
                    <i class="bi-images"></i>
                  </span>
                </div>
              </a>
              <!-- End Card Pinned -->

              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img20.jpg')}}" data-fslightbox="propertyListGallery4"></a>
              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img27.jpg')}}" data-fslightbox="propertyListGallery4"></a>
              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img14.jpg')}}" data-fslightbox="propertyListGallery4"></a>
            </div>
            <!-- End Col -->

            <div class="col-md-8">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-md-7">
                    <span class="card-subtitle">For rent</span>

                    <h3 class="card-title">
                      <a class="text-dark" href="property-overview.html">Burns Way, Hounslow</a>
                    </h3>
                  </div>
                  <!-- End Col -->

                  <div class="col-md-5 text-md-end">
                    <h3 class="card-title">
                      <a href="property-overview.html">&#163;2,500</a>
                    </h3>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <ul class="list-inline list-separator text-body small mb-3">
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                        <path d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z" />
                      </svg>
                    </span>
                    3 bed
                  </li>
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M304,320a16,16,0,1,0,16,16A16,16,0,0,0,304,320Zm32-96a16,16,0,1,0,16,16A16,16,0,0,0,336,224Zm32,64a16,16,0,1,0-16-16A16,16,0,0,0,368,288Zm-32,32a16,16,0,1,0-16-16A16,16,0,0,0,336,320Zm-32-64a16,16,0,1,0,16,16A16,16,0,0,0,304,256Zm128-32a16,16,0,1,0-16-16A16,16,0,0,0,432,224Zm-48,16a16,16,0,1,0,16-16A16,16,0,0,0,384,240Zm-16-48a16,16,0,1,0,16,16A16,16,0,0,0,368,192Zm96,32a16,16,0,1,0,16,16A16,16,0,0,0,464,224Zm32-32a16,16,0,1,0,16,16A16,16,0,0,0,496,192Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,432,256Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,400,288Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,336,352Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,304,384Zm64-64a16,16,0,1,0,16,16A16,16,0,0,0,368,320Zm21.65-218.35-11.3-11.31a16,16,0,0,0-22.63,0L350.05,96A111.19,111.19,0,0,0,272,64c-19.24,0-37.08,5.3-52.9,13.85l-10-10A121.72,121.72,0,0,0,123.44,32C55.49,31.5,0,92.91,0,160.85V464a16,16,0,0,0,16,16H48a16,16,0,0,0,16-16V158.4c0-30.15,21-58.2,51-61.93a58.38,58.38,0,0,1,48.93,16.67l10,10C165.3,138.92,160,156.76,160,176a111.23,111.23,0,0,0,32,78.05l-5.66,5.67a16,16,0,0,0,0,22.62l11.3,11.31a16,16,0,0,0,22.63,0L389.65,124.28A16,16,0,0,0,389.65,101.65Z" />
                      </svg>
                    </span>
                    2 bath
                  </li>
                  <li class="list-inline-item">
                    <i class="bi-rulers text-muted me-1"></i> 2,182 sqft
                  </li>
                </ul>

                <p class="card-text">The property is being offered with no onward chain and is finished to a very high standard throughout.</p>

                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="col-lg mb-2 mb-lg-0">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-sm avatar-circle" src="{{asset('FrontOffice/assets/img/160x160/img5.jpg')}}" alt="Image Description" title="Mark Owens">
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <p class="card-text small mb-0">Listed on Jan 4, 2019 by</p>
                          <a class="card-link link-dark" href="#">Mark Owens</a>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-auto">
                      <!-- Contacts -->
                      <div class="d-flex gap-2">
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-telephone-inbound-fill me-1"></i> (0161) 954 0020
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-envelope-fill me-1"></i> Contact
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-star-fill me-1"></i> Save
                        </a>
                      </div>
                      <!-- End Contacts -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card card-flush card-stretched-vertical">
          <div class="row">
            <div class="col-md-4">
              <!-- Card Pinned -->
              <a class="card-pinned" href="{{asset('FrontOffice/assets/img/1920x1080/img28.jpg')}}" data-fslightbox="propertyListGallery5">
                <img class="card-img" src="{{asset('FrontOffice/assets/img/480x320/img21.jpg')}}" alt="Image Description">

                <div class="card-pinned-top-start">
                  <span class="badge bg-success">New</span>
                </div>

                <div class="card-pinned-bottom-end">
                  <span class="btn btn-light btn-xs btn-icon">
                    <i class="bi-images"></i>
                  </span>
                </div>
              </a>
              <!-- End Card Pinned -->

              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img24.jpg')}}" data-fslightbox="propertyListGallery5"></a>
              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img13.jpg')}}" data-fslightbox="propertyListGallery5"></a>
              <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img25.jpg')}}" data-fslightbox="propertyListGallery5"></a>
            </div>
            <!-- End Col -->

            <div class="col-md-8">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-md-7">
                    <span class="card-subtitle">For rent</span>

                    <h3 class="card-title">
                      <a class="text-dark" href="property-overview.html">14 Oakridge, Dr Unit</a>
                    </h3>
                  </div>
                  <!-- End Col -->

                  <div class="col-md-5 text-md-end">
                    <h3 class="card-title">
                      <a href="property-overview.html">&#163;999</a>
                    </h3>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <ul class="list-inline list-separator text-body small mb-3">
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                        <path d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z" />
                      </svg>
                    </span>
                    1 bed
                  </li>
                  <li class="list-inline-item">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M304,320a16,16,0,1,0,16,16A16,16,0,0,0,304,320Zm32-96a16,16,0,1,0,16,16A16,16,0,0,0,336,224Zm32,64a16,16,0,1,0-16-16A16,16,0,0,0,368,288Zm-32,32a16,16,0,1,0-16-16A16,16,0,0,0,336,320Zm-32-64a16,16,0,1,0,16,16A16,16,0,0,0,304,256Zm128-32a16,16,0,1,0-16-16A16,16,0,0,0,432,224Zm-48,16a16,16,0,1,0,16-16A16,16,0,0,0,384,240Zm-16-48a16,16,0,1,0,16,16A16,16,0,0,0,368,192Zm96,32a16,16,0,1,0,16,16A16,16,0,0,0,464,224Zm32-32a16,16,0,1,0,16,16A16,16,0,0,0,496,192Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,432,256Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,400,288Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,336,352Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,304,384Zm64-64a16,16,0,1,0,16,16A16,16,0,0,0,368,320Zm21.65-218.35-11.3-11.31a16,16,0,0,0-22.63,0L350.05,96A111.19,111.19,0,0,0,272,64c-19.24,0-37.08,5.3-52.9,13.85l-10-10A121.72,121.72,0,0,0,123.44,32C55.49,31.5,0,92.91,0,160.85V464a16,16,0,0,0,16,16H48a16,16,0,0,0,16-16V158.4c0-30.15,21-58.2,51-61.93a58.38,58.38,0,0,1,48.93,16.67l10,10C165.3,138.92,160,156.76,160,176a111.23,111.23,0,0,0,32,78.05l-5.66,5.67a16,16,0,0,0,0,22.62l11.3,11.31a16,16,0,0,0,22.63,0L389.65,124.28A16,16,0,0,0,389.65,101.65Z" />
                      </svg>
                    </span>
                    1 bath
                  </li>
                  <li class="list-inline-item">
                    <i class="bi-rulers text-muted me-1"></i> 1,254 sqft
                  </li>
                </ul>

                <p class="card-text">This superb one bedroom flat rests a stones throw from Kennington tube station and Elephant and Castle train station as well as the leafy Paisley Park.</p>

                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="col-lg mb-2 mb-lg-0">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-sm avatar-circle" src="{{asset('FrontOffice/assets/img/160x160/img9.jpg')}}" alt="Image Description" title="Monica Fox">
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <p class="card-text small mb-0">Listed on Jan 4, 2019 by</p>
                          <a class="card-link link-dark" href="#">Monica Fox</a>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-auto">
                      <!-- Contacts -->
                      <div class="d-flex gap-2">
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-telephone-inbound-fill me-1"></i> (0161) 954 0020
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-envelope-fill me-1"></i> Contact
                        </a>
                        <a class="btn btn-ghost-secondary btn-sm" href="javascript:;">
                          <i class="bi-star-fill me-1"></i> Save
                        </a>
                      </div>
                      <!-- End Contacts -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Card -->
      </div>

      <!-- Pagination -->
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">
                <i class="bi-chevron-double-left small"></i>
              </span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">
                <i class="bi-chevron-double-right small"></i>
              </span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End Pagination -->
    </div>
    <!-- End Card List -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  @include('FrontOffice.en.sections.filters_modal')
  @endsection

