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
          <h1 class="h2">Welcome to Front</h1>
          <p>Fill out the form to get started.</p>
        </div>
        <!-- End Heading -->
        @include('FrontOffice.en.sections.alerts')

        <!-- Form -->
        <form class="js-validate needs-validation" novalidate action="{{ route('register') }}" method="POST">
          @csrf
           <!-- Form -->
           <div class="mb-3">
            <label class="form-label" for="signupSimpleSignupEmail">Your name</label>
            <input type="text" class="form-control form-control-lg" name="name" id="signupSimpleSignupName" placeholder="ali mohamed" aria-label="ali mohamed" required>
            <span class="invalid-feedback">Please enter a valid name.</span>
          </div>
          <!-- End Form -->

          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="signupSimpleSignupEmail">Your email</label>
            <input type="email" class="form-control form-control-lg" name="email" id="signupSimpleSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
            <span class="invalid-feedback">Please enter a valid email address.</span>
          </div>
          <!-- End Form -->

          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="signupSimpleSignupPassword">Password</label>

            <div class="input-group input-group-merge" data-hs-validation-validate-class>
              <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSimpleSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" minlength="8" required data-hs-toggle-password-options='{
                         "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                         "defaultClass": "bi-eye-slash",
                         "showClass": "bi-eye",
                         "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                       }'>
              <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                <i class="js-toggle-passowrd-show-icon-1 bi-eye"></i>
              </a>
            </div>

            <span class="invalid-feedback">password must be at least 8 characters. </span>
          </div>
          <!-- End Form -->

          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="signupSimpleSignupConfirmPassword">Confirm password</label>

            <div class="input-group input-group-merge" data-hs-validation-validate-class>
              <input type="password" class="js-toggle-password form-control form-control-lg" name="password_confirmation" id="signupSimpleSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-hs-validation-equal-field="#signupSimpleSignupPassword" data-hs-toggle-password-options='{
                       "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                       "defaultClass": "bi-eye-slash",
                       "showClass": "bi-eye",
                       "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                     }'>
              <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
                <i class="js-toggle-passowrd-show-icon-2 bi-eye"></i>
              </a>
            </div>

            <span class="invalid-feedback">Password does not match the confirm password.</span>
          </div>
          <!-- End Form -->

          <!-- Check -->
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="signupHeroFormPrivacyCheck" name="signupFormPrivacyCheck" required>
            <label class="form-check-label small" for="signupHeroFormPrivacyCheck"> By submitting this form I have read and acknowledged the <a href=page-privacy.html>Privacy Policy</a></label>
            <span class="invalid-feedback">Please accept our Privacy Policy.</span>
          </div>
          <!-- End Check -->

          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
          </div>

          <div class="text-center">
            <p>Already have an account? <a class="link" href="/login">Log in here</a></p>
          </div>
        </form>
        <!-- End Form -->
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

@endsection