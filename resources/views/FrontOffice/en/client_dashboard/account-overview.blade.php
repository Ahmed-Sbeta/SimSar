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
                <li class="breadcrumb-item active" aria-current="page">Personal Info</li>
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

    <!-- Content -->
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
                      <a class="nav-link active" href="account-overview.html">
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
            <div class="card">
              <div class="card-header border-bottom">
                <h4 class="card-header-title">Basic info</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <form>
                  <!-- Form -->
                  <div class="row mb-4">
                    <label class="col-sm-3 col-form-label form-label">Profile photo</label>

                    <div class="col-sm-9">
                      <!-- Media -->
                      <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <label class="avatar avatar-xl avatar-circle" for="avatarUploader">
                          <img id="avatarImg" class="avatar-img" src="{{asset('FrontOffice/assets/img/160x160/img9.jpg')}}" alt="Image Description">
                        </label>

                        <div class="d-grid d-sm-flex gap-2 ms-4">
                          <div class="form-attachment-btn btn btn-primary btn-sm">Upload photo
                            <input type="file" class="js-file-attach form-attachment-btn-label" id="avatarUploader" data-hs-file-attach-options='{
                                      "textTarget": "#avatarImg",
                                      "mode": "image",
                                      "targetAttr": "src",
                                      "resetTarget": ".js-file-attach-reset-img",
                                      "resetImg": "./assets/img/160x160/img1.jpg",
                                      "allowTypes": [".png", ".jpeg", ".jpg"]
                                   }'>
                          </div>
                          <!-- End Avatar -->

                          <button type="button" class="js-file-attach-reset-img btn btn-white btn-sm">Delete</button>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="row mb-4">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full name <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="first name" aria-label="Clarice" value="">
                        <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="last name" aria-label="Boone" value="">
                      </div>
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="row mb-4">
                    <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="emailLabel" placeholder="email@example.com" aria-label="email@example.com" >
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="js-add-field row mb-4" data-hs-add-field-options='{
                          "template": "#addPhoneFieldTemplate",
                          "container": "#addPhoneFieldContainer",
                          "defaultCreated": 0
                        }'>
                    <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone <span class="form-label-secondary">(Optional)</span></label>

                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" placeholder="+218(9x)xxx-xx-xx" aria-label="++218(9x)xxx-xx-xx" data-hs-mask-options='{
                                 "mask": "+{218}(00)000-00-00"
                               }'>

                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select form-select" name="phoneSelect" data-hs-tom-select-options='{
                                    "width": "8rem",
                                    "hideSearch": true
                                  }'>
                            <option value="Mobile" selected>Mobile</option>
                            <option value="Work">Work</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>

                      <!-- Container For Input Field -->
                      <div id="addPhoneFieldContainer"></div>

                      <a href="javascript:;" class="js-create-field form-link">
                        <i class="bi-plus-circle me-1"></i> Add phone
                      </a>
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Add Phone Input Field -->
                  <div id="addPhoneFieldTemplate" style="display: none; position: relative;">
                    <div class="input-group input-group-add-field">
                      <input type="text" class="js-input-mask-dynamic form-control" data-name="additionlPhone" placeholder="+218(9x)xxx-xx-xx" aria-label="+218(9x)xxx-xx-xx" data-hs-mask-options='{
                               "mask": "+{218}(00)000-00-00"
                             }'>

                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select-dynamic form-select" data-name="additionlPhoneSelect" data-hs-tom-select-options='{
                                    "width": "8rem",
                                    "hideSearch": true
                                  }'>
                          <option value="Mobile" selected>Mobile</option>
                          <option value="Work">Work</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                      <i class="bi-x-lg"></i>
                    </a>
                  </div>
                  <!-- End Add Phone Input Field -->

                  <!-- Form -->
                  <div class="row mb-4">
                    <label class="col-sm-3 col-form-label form-label">Gender</label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-md-down-break">
                        <!-- Radio Check -->
                        <label class="form-control" for="genderTypeRadio1">
                          <span class="form-check">
                            <input type="radio" class="form-check-input" name="genderTypeRadio" id="genderTypeRadio1">
                            <span class="form-check-label">Male</span>
                          </span>
                        </label>
                        <!-- End Radio Check -->

                        <!-- Radio Check -->
                        <label class="form-control" for="genderTypeRadio2">
                          <span class="form-check">
                            <input type="radio" class="form-check-input" name="genderTypeRadio" id="genderTypeRadio2" checked>
                            <span class="form-check-label">Female</span>
                          </span>
                        </label>
                        <!-- End Radio Check -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="row mb-4">
                    <label class="col-sm-3 col-form-label form-label">BIO</label>

                    <div class="col-sm-9">
                      <!-- Quill -->
                      <div class="quill-custom">
                        <div class="js-quill" style="height: 15rem;" data-hs-quill-options='{
                             "placeholder": "Type your message...",
                              "modules": {
                                "toolbar": [
                                  ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                                ]
                              }
                             }'>
                        </div>
                      </div>
                      <!-- End Quill -->
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="row align-items-center">
                    <label for="disableAdCheckbox" class="col-sm-3 col-form-label form-label">Disable ads <span class="badge badge-primary text-uppercase ms-1">PRO</span></label>

                    <div class="col-sm-9">
                      <!-- Check -->
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="disableAdCheckbox">
                        <label class="form-check-label" for="disableAdCheckbox">if this was enabled we can't send you all the new listings that you might like.</label>
                      </div>
                      <!-- End Check -->
                    </div>
                  </div>
                  <!-- End Form -->
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
            <!-- Card -->
            <div class="card">
              <div class="card-header border-bottom">
                <h4 class="card-header-title">Delete your account</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <p class="card-text">When you delete your account, you lose access to your account permanently, and we permanently delete all your personal data. including all your listings.</p>

                <div class="mb-4">
                  <!-- Check -->
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="deleteAccountCheckbox">
                    <label class="form-check-label" for="deleteAccountCheckbox">Confirm that I want to delete my account.</label>
                  </div>
                  <!-- End Check -->
                </div>

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-danger">Delete</button>
                </div>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
  @endsection
  