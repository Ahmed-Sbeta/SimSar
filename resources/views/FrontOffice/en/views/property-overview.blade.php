@extends('FrontOffice.layouts.app')

@section('content')

@include('FrontOffice.en.sections.header')

  

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Breadcrumb -->
    <div class="container content-space-t-3 pb-3 mt-4">
      <div class="row align-items-lg-center">
        <div class="col-lg mb-2 mb-lg-0">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
              <h2 class="breadcrumb-item" aria-current="page">470 Lucy Forks, Patriciafurt, YC7B</h2>
          </nav>
          <!-- End Breadcrumb -->
        </div>
        <!-- End Col -->

        <div class="col-lg-auto">
          <a class="btn btn-sm btn-ghost-secondary" href="javascript:;">
            <i class="bi-bookmark me-2"></i> Save
          </a>

          <a class="btn btn-sm btn-ghost-secondary" href="javascript:;">
            <i class="bi-share-fill me-2"></i> Share
          </a>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Breadcrumb -->

    <!-- Gallery -->
    <div class="container mb-5">
      <div class="rounded-2 overflow-hidden">
        <div class="row gx-2">
          <div class="col-md-8">
            <!-- Gallery -->
            <a class="d-block position-relative" href="{{asset('FrontOffice/assets/img/1920x1080/img30.jpg')}}" data-fslightbox="propertyOverviewGallery">
              <img class="img-fluid w-100" src="{{asset('FrontOffice/assets/img/1920x1080/img30.jpg')}}" alt="Image Description">

              <div class="position-absolute bottom-0 end-0 mb-3 me-3">
                <span class="d-md-none btn btn-sm btn-light">
                  <i class="bi-arrows-fullscreen me-2"></i> View photos
                </span>
              </div>
            </a>
            <!-- End Gallery -->
          </div>
          <!-- End Col -->

          <div class="col-md-4 d-none d-md-inline-block">
            <!-- Gallery -->
            <a class="d-block mb-2" href="{{asset('FrontOffice/assets/img/1920x1080/img31.jpg')}}" data-fslightbox="propertyOverviewGallery">
              <img class="img-fluid w-100" src="{{asset('FrontOffice/assets/img/1920x1080/img31.jpg')}}" alt="Image Description">
            </a>
            <!-- End Gallery -->

            <!-- Gallery -->
            <a class="d-block position-relative" href="{{asset('FrontOffice/assets/img/1920x1080/img32.jpg')}}" data-fslightbox="propertyOverviewGallery">
              <img class="img-fluid w-100" src="{{asset('FrontOffice/assets/img/1920x1080/img32.jpg')}}" alt="Image Description">

              <div class="position-absolute bottom-0 end-0 mb-3 me-3">
                <span class="d-none d-md-inline-block btn btn-sm btn-light">
                  <i class="bi-arrows-fullscreen me-2"></i> View photos
                </span>
              </div>
            </a>
            <!-- End Gallery -->

            <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img25.jpg')}}" data-fslightbox="propertyOverviewGallery"></a>
            <a class="d-none" href="{{asset('FrontOffice/assets/img/1920x1080/img20.jpg')}}" data-fslightbox="propertyOverviewGallery"></a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>

      <div class="d-flex justify-content-end mt-2">
        <span class="small text-dark fw-semibold">Published:</span>
        <span class="small ms-1">December 27, 2018</span>
      </div>
    </div>
    <!-- End Gallery -->

    <!-- Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-9 mb-lg-0">
          <div class="row justify-content-lg-between mb-7">
            <div class="col-12 col-sm-6 mb-5 mb-sm-0">
              <h1 class="h2 mb-0">470 Lucy Forks</h1>
              <span class="d-block text-dark mb-3">Patriciafurt, YC7B, London, England</span>

              <ul class="list-inline list-separator font-size-1 text-body">
                <li class="list-inline-item">
                  <i class="fas fa-bed text-muted me-1"></i> 3 bed
                </li>
                <li class="list-inline-item">
                  <i class="fas fa-bath text-muted me-1"></i> 2 bath
                </li>
                <li class="list-inline-item">
                  <i class="fas fa-ruler-combined text-muted me-1"></i> 1,428 sqft
                </li>
              </ul>
            </div>

            <div class="col-sm-6 column-divider-sm">
              <div class="pl-md-4">
                <h2 class="mb-0">8,999,000<sup>LYD</sup></h2>
                <span class="d-block text-dark mb-3">First payment > 25,000<sup>LYD</sup></span>
                <a href="#">Cash / Check </a>
              </div>
            </div>
          </div>
          <!-- End Row -->

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
            <ul class="nav nav-segment nav-fill mb-7" id="propertyOverviewNavTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" href="#propertyOverviewNavOne" id="propertyOverviewNavOne-tab" data-bs-toggle="tab" data-bs-target="#propertyOverviewNavOne" role="tab" aria-controls="propertyOverviewNavOne" aria-selected="true" style="min-width: 7rem;">Details</a>
              </li>

              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#propertyOverviewNavTwo" id="propertyOverviewNavTwo-tab" data-bs-toggle="tab" data-bs-target="#propertyOverviewNavTwo" role="tab" aria-controls="propertyOverviewNavTwo" aria-selected="false" style="min-width: 7rem;">Floorplan</a>
              </li>

              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#propertyOverviewNavThree" id="propertyOverviewNavThree-tab" data-bs-toggle="tab" data-bs-target="#propertyOverviewNavThree" role="tab" aria-controls="propertyOverviewNavThree" aria-selected="false" style="min-width: 7rem;">Map</a>
              </li>
            </ul>
            <!-- End Nav -->
          </div>
          <!-- End Nav Scroller -->

          <!-- Tab Content -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="propertyOverviewNavOne" role="tabpanel" aria-labelledby="propertyOverviewNavOne-tab">
              <div class="mb-4">
                <h4>Home details</h4>
              </div>

              <div class="row justify-content-md-between">
                <div class="col-md-5">
                  <dl class="row">
                    <dt class="col-6">Property ID:</dt>
                    <dd class="col-6">HG328e91UA</dd>

                    <dt class="col-6">Property type:</dt>
                    <dd class="col-6">House</dd>

                    <dt class="col-6">Year built:</dt>
                    <dd class="col-6">2023</dd>
                  </dl>
                  <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-md-5">
                  <dl class="row">
                    <dt class="col-6">Lot size:</dt>
                    <dd class="col-6">1,428 sq.m.</dd>

                    <dt class="col-6">House size:</dt>
                    <dd class="col-6">1,000 sq.m</dd>

                    <dt class="col-6">Rooms:</dt>
                    <dd class="col-6">12</dd>
                    
                  </dl>
                  <!-- End Row -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <div class="border-top border-bottom py-4 mt-4 mb-7">
                <div class="row col-sm-divider">
                  <div class="col-sm-6 text-sm-end mb-2 mb-sm-0">
                    <div class="pe-md-4">
                      <span>Last 30 days:</span>
                      <span class="text-dark fw-semibold">920 page views</span>
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <div class="ps-md-4">
                      <span>Since listed:</span>
                      <span class="text-dark fw-semibold">471 page views</span>
                    </div>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>

              <div class="mb-4">
                <h4>Description</h4>
              </div>

              <p>This extremely spacious two/three bedroom duplex apartment occupies a desirable position to the South-West of Harrogate's town centre and offers a huge amount of scope to update and re-model to suit the individual including a large eaves storage room ripe for conversion into a second bathroom.</p>

              <p>Accessed via a communal hall up to the first floor, the apartment opens into a split level hall. To the front elevation there is a lovely, light and airy lounge with far reaching views towards the town centre and countryside beyond. Adjoining there is a well proportioned double bedroom with a fitted wardrobe.</p>

              <!-- Collapse Link - Content -->
              <div class="collapse" id="propertyOverviewDescriptionViewMoreCollapse">
                <div class="mb-4">
                  <h4>Directions</h4>
                </div>

                <p>Proceed up the Otley Road from the Prince Of Wales roundabout and through the traffic lights with the turning into Harlow Moor Road. Continue ahead where the property can be found on the left hand side.</p>

                <div class="mb-4">
                  <h4>Strictly by appointment through Front House</h4>
                </div>

                <p>You may download, store and use the material for your own personal use and research. You may not republish, retransmit, redistribute or otherwise make the material available to any party or make the same available on any website, online service or bulletin board of your own or of any other party or make the same available in hard copy or in any other media without the website owner's express prior written consent. The website owner's copyright must remain on all reproductions of material taken from this website.</p>
              </div>
              <!-- End Collapse Link - Content -->

              <!-- Collapse Link -->
              <a class="link link-collapse" data-bs-toggle="collapse" href="#propertyOverviewDescriptionViewMoreCollapse" role="button" aria-expanded="false" aria-controls="propertyOverviewDescriptionViewMoreCollapse">
                <span class="link-collapse-default">View More</span>
                <span class="link-collapse-active">View Less</span>
              </a>
              <!-- End Collapse Link -->

              <hr class="my-6">

              <div class="mb-4">
                <h4>Accessibility</h4>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <!-- List -->
                  <ul class="list-unstyled list-py-1 mb-0">
                    <li class="d-flex align-items-center">
                      <h6 class="mb-0">Location</h6>

                      <div class="d-flex gap-1 ms-auto">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                      </div>
                    </li>

                    <li class="d-flex align-items-center">
                      <h6 class="mb-0">Area safety</h6>

                      <div class="d-flex gap-1 ms-auto">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star-half.svg')}}" alt="Review rating" width="16">
                      </div>
                    </li>

                    <li class="d-flex align-items-center">
                      <h6 class="mb-0">Close to essintials</h6>

                      <div class="d-flex gap-1 ms-auto">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star-half.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star-muted.svg')}}" alt="Review rating" width="16">
                      </div>
                    </li>
                  </ul>
                  <!-- End List -->
                </div>

                <div class="col-sm-6">
                  <!-- List -->
                  <ul class="list-unstyled list-py-1 mb-0">
                    <li class="d-flex align-items-center">
                      <h6 class="mb-0">Low cost</h6>

                      <div class="d-flex gap-1 ms-auto">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                      </div>
                    </li>

                    <li class="d-flex align-items-center">
                      <h6 class="mb-0">Built around</h6>

                      <div class="d-flex gap-1 ms-auto">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star-muted.svg')}}" alt="Review rating" width="16">
                      </div>
                    </li>

                    <li class="d-flex align-items-center">
                      <h6 class="mb-0">Value</h6>

                      <div class="d-flex gap-1 ms-auto">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star-muted.svg')}}" alt="Review rating" width="16">
                        <img src="{{asset('FrontOffice/assets/svg/illustrations/star-muted.svg')}}" alt="Review rating" width="16">
                      </div>
                    </li>
                  </ul>
                  <!-- End List -->
                </div>
              </div>
              <!-- End Row -->

              <hr class="my-6">

              <h4 class="mb-1">Estimated running costs</h4>
              <p class="small">Based on The Website counsel group</p>

              <div class="row">
                <div class="col-md-6">
                  <span class="h1">Very Good</span>
                  <p>Approximate Estimated Based on The Website counsel group</p>
                </div>
                <!-- End Col -->

                <div class="col-md-6">
                  <dl class="row">
                    <dt class="col-6">
                      <i class="bi-bank2 me-2"></i> Mortgage
                    </dt>
                    <dd class="col-6 text-end">&#163;700 p/m</dd>

                    <dt class="col-6">
                      <i class="bi-lightning-charge-fill me-2"></i> Energy
                    </dt>
                    <dd class="col-6 text-end">from &#163;72 p/m</dd>

                    <dt class="col-6">
                      <i class="bi-droplet-half me-2"></i> Water
                    </dt>
                    <dd class="col-6 text-end">
                      from &#163;38 p/m
                    </dd>

                    <dt class="col-6 text-dark">
                      <i class="bi-shield-shaded me-2"></i> Home insurance
                    </dt>
                    <dd class="col-6 text-end">not known</dd>
                  </dl>
                  <!-- End Row -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>

            <div class="tab-pane fade" id="propertyOverviewNavTwo" role="tabpanel" aria-labelledby="propertyOverviewNavTwo-tab">
              <a href="{{asset('FrontOffice/assets/img/others/img1.png')}}" data-fslightbox="propertyOverviewFloorplan">
                <img class="img-fluid" src="{{asset('FrontOffice/assets/img/others/img1.png')}}" alt="Image Description">
              </a>

            </div>

            <div class="tab-pane fade" id="propertyOverviewNavThree" role="tabpanel" aria-labelledby="propertyOverviewNavThree-tab">
              <!-- Gmap -->
              <div id="map" class="leaflet" data-hs-leaflet-options='{
                     "map": {
                       "scrollWheelZoom": false,
                       "coords": [37.4040344, -122.0289704]
                     },
                     "marker": [
                       {
                         "coords": [37.4040344, -122.0289704],
                         "icon": {
                           "iconUrl": "{{asset('FrontOffice/assets/svg/components/map-pin.svg')}}",
                           "iconSize": [50, 45]
                         },
                         "popup": {
                           "text": "153 Williamson Plaza, Maggieberg",
                           "title": "Address"
                         }
                       }
                     ]
                    }'></div>
              <!-- End Gmap -->
            </div>

            
          </div>
          <!-- End Tab Content -->
          <!-- End Row -->
        </div>
        <!-- End Col -->

        <div class="col-lg-4">
          <!-- Sticky Block -->
          <div id="stickyBlockStartPoint">
            <div class="js-sticky-block" data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "breakpoint": "lg",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 24,
                 "stickyOffsetBottom": 0
               }'>
              <!-- Card -->
              <div class="card card-bordered">
                <div class="card-body">
                  <!-- Media -->
                  <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-circle" src="{{asset('FrontOffice/assets/img/Logo/khayma_NoText.png')}}" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h4 class="card-title">Take actions or maybe Take a Tour</h4>
                    </div>
                  </div>
                  <!-- End Media -->

                  <!-- Form -->
                  <form>
                    <select class="form-select mb-2">
                      <option value="aboutProperty1">Request a showing Date</option>
                      <option value="aboutProperty2">Request neighborhood information</option>
                      <option value="aboutProperty3">Request recent area sales</option>
                    </select>

                    <div class="mb-2">
                      <label for="fullNamePropertyOverviewContactForm" class="form-label visually-hidden">Full Name</label>
                      <input type="text" class="form-control" id="fullNamePropertyOverviewContactForm" placeholder="Full Name" aria-label="Full Name">
                    </div>

                    <div class="mb-2">
                      <label for="emailPropertyOverviewContactForm" class="form-label visually-hidden">Email</label>
                      <input type="email" class="form-control" id="emailPropertyOverviewContactForm" placeholder="Email" aria-label="Email">
                    </div>

                    <div class="mb-2">
                      <label for="phoneNumberPropertyOverviewContactForm" class="form-label visually-hidden">Phone number</label>
                      <input type="tel" class="form-control" id="phoneNumberPropertyOverviewContactForm" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx">
                    </div>

                    <div class="mb-2">
                      <label for="questionPropertyOverviewContactForm" class="form-label visually-hidden">Property question</label>
                      <textarea class="form-control" id="questionPropertyOverviewContactForm" placeholder="Ask a question about the property ..." aria-label="I would like more information about ..." rows="4"></textarea>
                    </div>

                    <div class="d-grid">
                      <button type="button" class="btn btn-primary">Request</button>
                    </div>
                  </form>
                  <!-- End Form -->
                </div>
                <!-- End Card -->
              </div>
            </div>
          </div>
          <!-- End Sticky Block -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Sticky Block End Point -->
      <div id="stickyBlockEndPoint"></div>
    </div>
    <!-- End Content -->

    <!-- Card Grid -->
    <div class="container content-space-2">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 mb-4">
        <h3>Similar properties you may like</h3>
      </div>
      <!-- End Heading -->

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
        <div class="swiper-slide">
          <!-- Card -->
          <a class="card card-flush shadow-none" href="property-overview.html">
            <div class="card-pinned">
              <img class="card-img" src="{{asset('FrontOffice/assets/img/480x320/img23.jpg')}}" alt="Image Description">

              <div class="card-pinned-top-start">
                <span class="badge bg-success">New</span>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body">
              <span class="card-subtitle text-body">For sale</span>

              <div class="row align-items-center mb-3">
                <div class="col">
                  <h4 class="card-title text-inherit">Borrett Close, Tripoli</h4>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <h3 class="card-title text-primary">689,000 <sub>LYD</sub></h3>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <ul class="list-inline list-separator text-body small">
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
                  <i class="bi-rulers text-muted me-1"></i> 1,428 sqft
                </li>
              </ul>
            </div>
            <!-- End Body -->
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="swiper-slide">
          <!-- Card -->
          <a class="card card-flush shadow-none" href="property-overview.html">
            <div class="card-pinned">
              <img class="card-img" src="{{asset('FrontOffice/assets/img/480x320/img19.jpg')}}" alt="Image Description">
            </div>

            <!-- Body -->
            <div class="card-body">
              <span class="card-subtitle text-body">For sale</span>

              <div class="row align-items-center mb-3">
                <div class="col">
                  <h4 class="card-title text-inherit">The Drive, Ilford</h4>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <h3 class="card-title text-primary">&#163;999,000</h3>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <ul class="list-inline list-separator text-body small">
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
            </div>
            <!-- End Body -->
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="swiper-slide">
          <!-- Card -->
          <a class="card card-flush shadow-none" href="property-overview.html">
            <div class="card-pinned">
              <img class="card-img" src="{{asset('FrontOffice/assets/img/480x320/img20.jpg')}}" alt="Image Description">

              <div class="card-pinned-top-start">
                <span class="badge bg-primary">New build</span>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body">
              <span class="card-subtitle text-body">For sale</span>

              <div class="row align-items-center mb-3">
                <div class="col">
                  <h4 class="card-title text-inherit">Alderney House, Enfield</h4>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <h3 class="card-title text-primary">&#163;725,000</h3>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <ul class="list-inline list-separator text-body small">
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
            </div>
            <!-- End Body -->
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  @endsection