@extends('FrontOffice.layouts.app')

@section('content')

@include('FrontOffice.en.sections.header')

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Gallery -->
    <div class="container content-space-t-3 content-space-t-lg-5">
      <!-- Heading -->
      <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-md-9">
        <h1>puplish your Properties on Khayma And we will Handle The rest.</h1>
      </div>
    </div>
    <!-- End Gallery -->
    <!-- Card Grid -->
    <div class="container ">
      <div class="row">
        <div class="col-lg-6 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card bg-primary h-100 overflow-hidden">
            <div class="card-body">
              <div class="w-65 pe-2">
                <h2 class="card-title text-white">Sell Property</h2>
                <p class="card-text text-white">Once you publish your property Khayma Well do all the Advertisement for you.</p>
                <a class="btn btn-light btn-sm btn-transition" href="property-seller.html">Sell Now <i class="bi-chevron-right small ms-1"></i></a>
              </div>

              <div class="position-absolute end-0 bottom-0 w-50 mb-n2 me-n4">
                <img class="card-img" src="{{asset('FrontOffice/assets/svg/illustrations/sell3-bg.png')}}" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6">
          <!-- Card -->
          <div class="card bg-info h-100 overflow-hidden">
            <div class="card-body">
              <div class="w-65 pe-2">
                <h2 class="card-title text-white">Rent Property</h2>
                <p class="card-text text-white">Once you publish your property Khayma Well do all the Advertisement for you.</p>
                <a class="btn btn-light btn-sm btn-transition" href="property-Renter.html">Rent Now <i class="bi-chevron-right small ms-1"></i></a>
              </div>

              <div class="position-absolute end-0 bottom-0 w-50 mb-n3 me-n4">
                <img class="card-img" src="{{asset('FrontOffice/assets/svg/illustrations/rent4-bg.png')}}" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->

    <!-- FAQ -->
    <div class="container content-space-2 content-space-lg-3">
      
    </div>
    <!-- End FAQ -->  
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

 @endsection