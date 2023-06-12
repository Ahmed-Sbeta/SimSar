@extends('FrontOffice.layouts.app')

@section('content')

<header>
  
</header>
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Form -->
    <div class="container content-space-3 content-space-t-lg-4 content-space-b-lg-3">
      <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
        <!-- Heading -->
        <div class="text-center mb-5 mb-md-7">
          <h1 class="h2">Reset your password</h1>
          <p>Fill out the form to get started.</p>
        </div>
        <!-- End Heading -->
        @include('FrontOffice.en.sections.alerts')

        <!-- Form -->
        <form class="js-validate needs-validation" novalidate  method="POST" action="{{ route('password.store') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="signupSimpleSignupEmail">Your email</label>
            <input type="email" class="form-control form-control-lg" value="{{ $request->email }}" name="email" id="signupSimpleSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
            <span class="invalid-feedback">Please enter a valid email address.</span>
          </div>
          <!-- End Form -->

          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="signupSimpleSignupPassword">Password</label>

           <div class="input-group input-group-merge" data-hs-validation-validate-class>
              <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSimpleSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" minlength="8">
             
            </div>

            <span class="invalid-feedback">Your password is invalid. Please try again.</span>
          </div>
          <!-- End Form -->

          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="signupSimpleSignupConfirmPassword">Confirm password</label>

            <div class="input-group input-group-merge" data-hs-validation-validate-class>
              <input type="password" class="js-toggle-password form-control form-control-lg" name="password_confirmation" id="signupSimpleSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-hs-validation-equal-field="#signupSimpleSignupPassword">
              
            </div>

            <span class="invalid-feedback">Password does not match the confirm password.</span>
          </div>
          <!-- End Form -->

          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Reset</button>
          </div>

          
        </form>
        <!-- End Form -->
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

@endsection
