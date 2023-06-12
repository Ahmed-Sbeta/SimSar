@extends('FrontOffice.layouts.app')

@section('content')

@include('FrontOffice.en.sections.header')


 <!-- ========== MAIN CONTENT ========== -->
 <main id="content" role="main">
    <!-- Form -->
    <div class="container content-space-3 content-space-t-lg-4 content-space-b-lg-3">
      <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
        <!-- Heading -->
        <div class="text-center mb-5 mb-md-7">
          <h1 class="h2">Forgot password?</h1>
          <p>Enter your email address below and we'll get you back on track.</p>
        </div>
        <!-- End Heading -->

        @include('FrontOffice.en.sections.alerts')

        <!-- Form -->
        <form class="js-validate needs-validation" novalidate action="{{ route('password.email') }}" method="POST">
          @csrf
          <!-- Form -->
          <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <label class="form-label" for="signupSimpleResetPasswordEmail" tabindex="0">Your email</label>

              <a class="form-label-link" href="/login">
                <i class="bi-chevron-left small ms-1"></i> Back to Log in
              </a>
            </div>

            <input type="email" class="form-control form-control-lg" name="email" id="signupSimpleResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
            <span class="invalid-feedback">Please enter a valid email address.</span>
          </div>
          <!-- End Form -->

          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
        </form>
        <!-- End Form -->
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

@endsection