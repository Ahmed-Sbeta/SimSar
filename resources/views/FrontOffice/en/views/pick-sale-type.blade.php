@extends('FrontOffice.layouts.app')

@section('content')

@include('FrontOffice.en.sections.header')

  

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Gallery -->
    <div class="container content-space-t-3 content-space-t-lg-5">
      <!-- Heading -->
      <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-md-9">
        <h1>What exactly do you want to Sell.</h1>
      </div>
    </div>
    <!-- End Gallery -->
    <!-- Card Grid -->
    <div class="container ">
      <div class="row">
        <div class="col-lg-6 mb-4 ">
          <!-- Card -->
          <div class="card bg-primary h-100 overflow-hidden">
            <div class="card-body">
              <div class="w-65 pe-2">
                <h2 class="card-title text-white">House</h2>
                <p class="card-text text-white">Once you publish your House SimSar Well do all the Advertisement for you.</p>
                <a class="btn btn-light btn-sm btn-transition" href="property-seller.html">Sell Now <i class="bi-chevron-right small ms-1"></i></a>
              </div>

              <div class="position-absolute end-0 bottom-0 w-50 mb-n3 me-n7">
                <img class="card-img" src="{{asset('FrontOffice/assets/svg/illustrations/house2.png')}}" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6 mb-4">
          <!-- Card -->
          <div class="card bg-info h-100 overflow-hidden">
            <div class="card-body">
              <div class="w-65 pe-2">
                <h2 class="card-title text-white">Flat</h2>
                <p class="card-text text-white">Once you publish your Flat Simsar Well do all the Advertisement for you.</p>
                <a class="btn btn-light btn-sm btn-transition" href="property-Renter.html">Sell Now <i class="bi-chevron-right small ms-1"></i></a>
              </div>

              <div class="position-absolute end-0 bottom-0 w-50 mb-n3 me-n7">
                <img class="card-img mb-4 me-4" src="{{asset('FrontOffice/assets/svg/illustrations/flat2.png')}}" height="200px" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6 mb-4">
          <!-- Card -->
          <div class="card bg-info h-100 overflow-hidden">
            <div class="card-body">
              <div class="w-65 pe-2">
                <h2 class="card-title text-white">Land / farm</h2>
                <p class="card-text text-white">Once you publish your Land SimSar Well do all the Advertisement for you.</p>
                <a class="btn btn-light btn-sm btn-transition" href="property-Renter.html">Sell Now <i class="bi-chevron-right small ms-1"></i></a>
              </div>

              <div class="position-absolute end-0 bottom-0 w-50 mb-n5 me-n7">
                <img class="card-img" src="{{asset('FrontOffice/assets/svg/illustrations/land10-bg.png')}}" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6 mb-4 ">
          <!-- Card -->
          <div class="card bg-primary h-100 overflow-hidden">
            <div class="card-body">
              <div class="w-65 pe-2">
                <h2 class="card-title text-white">Vacation House</h2>
                <p class="card-text text-white">publish your Vacation House SimSar Well do all the Advertisement for you.</p>
                <a class="btn btn-light btn-sm btn-transition" href="property-seller.html">Sell Now <i class="bi-chevron-right small ms-1"></i></a>
              </div>

              <div class="position-absolute end-0 bottom-0 w-50 mb-2 me-n5">
                <img class="card-img" src="{{asset('FrontOffice/assets/svg/illustrations/vecation.png')}}" alt="Image Description">
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