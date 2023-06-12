
@extends('FrontOffice.layouts.app')

@section('content')

@include('FrontOffice.en.sections.header')




  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Form -->
    <div class="container content-space-3 content-space-lg-4">
      <div class="w-lg-75 mx-lg-auto">
        <!-- Heading -->
        <div class="text-center mb-2">
          <h1 class="h2">Real estate listing upload form</h1>
          <p class="mb-0">Please proofread your submission carefully before submitting.</p>
          <p>Submissions which exceed maximum word counts will be edited.</p>
        </div>
        <!-- End Heading -->

        <form>
          <div class="mb-5">
            <h4 class="my-7">Listing agent information</h4>

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="listingAgentNameUploadForm">First name</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <i class="bi-person-fill"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="listingAgentNameUploadForm"
                      placeholder="Listing agent First name" aria-label="Listing agent name">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="realEstateAgencyUploadForm">Last name</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <i class="bi-person-fill"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="realEstateAgencyUploadForm"
                      placeholder="Listing agent Last name" aria-label="Real estate agency">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="phoneNumberUploadForm">Phone number</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <i class="bi-telephone-inbound-fill"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="phoneNumberUploadForm"
                      placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="phoneNumberUploadForm">alternative Phone number (optional)</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <i class="bi-telephone-inbound-fill"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="phoneNumberUploadForm"
                      placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <h4 class="my-7">Listing information</h4>

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="currencyUploadForm">Rent Price</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 288 512">
                          <path
                            d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z" />
                        </svg>
                      </span>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="currencyUploadForm" placeholder="Price"
                      aria-label="Price">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <label class="form-label" for="yearBuiltUploadForm">Year built</label>

                <div class="input-group input-group-merge">
                  <span class="input-group-prepend input-group-text">
                    <i class="bi-calendar-week"></i>
                  </span>
                  <select id="yearBuiltUploadForm" class="form-select form-select-lg">
                    <option selected disabled>Select year</option>
                    <option value="yearBuiltSelect2017">2023</option>
                    <option value="yearBuiltSelect2017">2022</option>
                    <option value="yearBuiltSelect2017">2021</option>
                    <option value="yearBuiltSelect2017">2020</option>
                    <option value="yearBuiltSelect2017">2019</option>
                    <option value="yearBuiltSelect2017">2018</option>
                    <option value="yearBuiltSelect2017">2017</option>
                    <option value="yearBuiltSelect2016">2016</option>
                    <option value="yearBuiltSelect2015">2015</option>
                    <option value="yearBuiltSelect2014">2014</option>
                    <option value="yearBuiltSelect2013">2013</option>
                    <option value="yearBuiltSelect2012">2012</option>
                    <option value="yearBuiltSelect2011">2011</option>
                    <option value="yearBuiltSelect2010">2010</option>
                    <option value="yearBuiltSelect2009">2009</option>
                    <option value="yearBuiltSelect2008">2008</option>
                    <option value="yearBuiltSelect2007">2007</option>
                    <option value="yearBuiltSelect2006">2006</option>
                    <option value="yearBuiltSelect2005">2005</option>
                    <option value="yearBuiltSelect2004">2004</option>
                    <option value="yearBuiltSelect2003">2003</option>
                    <option value="yearBuiltSelect2002">2002</option>
                    <option value="yearBuiltSelect2001">2001</option>
                    <option value="yearBuiltSelect2000">2000</option>
                    <option value="yearBuiltSelect1999">1999</option>
                    <option value="yearBuiltSelect1998">1998</option>
                    <option value="yearBuiltSelect1997">1997</option>
                    <option value="yearBuiltSelect1996">1996</option>
                    <option value="yearBuiltSelect1995">1995</option>
                    <option value="yearBuiltSelect1994">1994</option>
                    <option value="yearBuiltSelect1993">1993</option>
                    <option value="yearBuiltSelect1992">1992</option>
                    <option value="yearBuiltSelect1991">1991</option>
                    <option value="yearBuiltSelect1990">1990</option>
                    <option value="yearBuiltSelectOlder">Older</option>
                  </select>
                </div>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="row">

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="cityUploadForm">City</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="input-group-prepend input-group-text">
                        <i class="bi-building"></i>
                      </span>
                    </span>
                    <select id="bedroomUploadForm" class="form-select form-select-lg">
                      <option selected disabled>city</option>
                      <option value="bedroom5">Not furnished</option>
                      <option value="bedroom4">Half furnished</option>
                      <option value="bedroom3">fully furnished</option>
                      <option value="bedroom1">Needs little Maintenance</option>
                      <option value="bedroom2">Needs a Lot of Maintenance</option>
                    </select>
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="cityUploadForm">Area</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="input-group-prepend input-group-text">
                        <i class="bi-pin-fill"></i>
                      </span>
                    </span>
                    <select id="bedroomUploadForm" class="form-select form-select-lg" required >
                      <option selected disabled>area</option>
                      <option value="bedroom5">Not furnished</option>
                      <option value="bedroom4">Half furnished</option>
                      <option value="bedroom3">fully furnished</option>
                      <option value="bedroom1">Needs little Maintenance</option>
                      <option value="bedroom2">Needs a Lot of Maintenance</option>
                    </select>
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
              <div class="col-sm-12">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="addressUploadForm">Address</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <i class="bi-geo-alt-fill"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="addressUploadForm" placeholder="describe the address the best you can"
                      aria-label="Address">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="lotSizeUploadForm">Lot size</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <i class="bi-rulers"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="lotSizeUploadForm"
                      placeholder="Lot size in square meter" aria-label="Lot size">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="postalCodeUploadForm">Living space</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <i class="bi-envelope-open-fill"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="postalCodeUploadForm"
                      placeholder="House size in square meter " aria-label="Postal code">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="bedroomUploadForm">property Status</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="input-group-prepend input-group-text">
                        <i class="bi-gear-wide-connected"></i>
                      </span>
                    </span>
                    <select id="bedroomUploadForm" class="form-select form-select-lg" required>
                      <option selected disabled>Ready To live</option>
                      <option value="bedroom5">Not furnished</option>
                      <option value="bedroom4">Half furnished</option>
                      <option value="bedroom3">fully furnished</option>
                      <option value="bedroom1">Needs little Maintenance</option>
                      <option value="bedroom2">Needs a Lot of Maintenance</option>
                    </select>
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="BathroomUploadForm">Number of Floors</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="input-group-prepend input-group-text">
                        <i class="bi-list-ol"></i>
                      </span>
                    </span>
                    <select id="BathroomUploadForm" class="form-select form-select-lg">
                      <option selected disabled>Select </option>
                      <option value="bathroom1">1</option>
                      <option value="bathroom2">2</option>
                      <option value="bathroom3">3</option>
                      <option value="bathroom4">4</option>
                      <option value="bathroom5plus">5+</option>
                    </select>
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="bedroomUploadForm">Bedroom</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                          <path
                            d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z" />
                        </svg>
                      </span>
                    </span>
                    <select id="bedroomUploadForm" class="form-select form-select-lg">
                      <option selected disabled>Select amount</option>
                      <option value="bedroom1">1</option>
                      <option value="bedroom2">2</option>
                      <option value="bedroom3">3</option>
                      <option value="bedroom4">4</option>
                      <option value="bedroom5plus">5+</option>
                    </select>
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="BathroomUploadForm">Bathroom</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                          <path
                            d="M304,320a16,16,0,1,0,16,16A16,16,0,0,0,304,320Zm32-96a16,16,0,1,0,16,16A16,16,0,0,0,336,224Zm32,64a16,16,0,1,0-16-16A16,16,0,0,0,368,288Zm-32,32a16,16,0,1,0-16-16A16,16,0,0,0,336,320Zm-32-64a16,16,0,1,0,16,16A16,16,0,0,0,304,256Zm128-32a16,16,0,1,0-16-16A16,16,0,0,0,432,224Zm-48,16a16,16,0,1,0,16-16A16,16,0,0,0,384,240Zm-16-48a16,16,0,1,0,16,16A16,16,0,0,0,368,192Zm96,32a16,16,0,1,0,16,16A16,16,0,0,0,464,224Zm32-32a16,16,0,1,0,16,16A16,16,0,0,0,496,192Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,432,256Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,400,288Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,336,352Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,304,384Zm64-64a16,16,0,1,0,16,16A16,16,0,0,0,368,320Zm21.65-218.35-11.3-11.31a16,16,0,0,0-22.63,0L350.05,96A111.19,111.19,0,0,0,272,64c-19.24,0-37.08,5.3-52.9,13.85l-10-10A121.72,121.72,0,0,0,123.44,32C55.49,31.5,0,92.91,0,160.85V464a16,16,0,0,0,16,16H48a16,16,0,0,0,16-16V158.4c0-30.15,21-58.2,51-61.93a58.38,58.38,0,0,1,48.93,16.67l10,10C165.3,138.92,160,156.76,160,176a111.23,111.23,0,0,0,32,78.05l-5.66,5.67a16,16,0,0,0,0,22.62l11.3,11.31a16,16,0,0,0,22.63,0L389.65,124.28A16,16,0,0,0,389.65,101.65Z" />
                        </svg>
                      </span>
                    </span>
                    <select id="BathroomUploadForm" class="form-select form-select-lg">
                      <option selected disabled>Select amount</option>
                      <option value="bathroom1">1</option>
                      <option value="bathroom2">2</option>
                      <option value="bathroom3">3</option>
                      <option value="bathroom4">4</option>
                      <option value="bathroom5plus">5+</option>
                    </select>
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- Form -->
            <div class="mb-4">
              <label class="form-label">Listing description</label>

              <!-- Quill -->
              <div class="quill-custom">
                <div id="editor" style="height: 15rem;">
                </div>
              </div>
              <!-- End Quill -->
            </div>
            <!-- End Form -->
            

            <h4 class="my-7">Payment Process</h4>

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="mortgageUploadForm">First payment Minimem</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512">
                          <path
                            d="M271.06,144.3l54.27,14.3a8.59,8.59,0,0,1,6.63,8.1c0,4.6-4.09,8.4-9.12,8.4h-35.6a30,30,0,0,1-11.19-2.2c-5.24-2.2-11.28-1.7-15.3,2l-19,17.5a11.68,11.68,0,0,0-2.25,2.66,11.42,11.42,0,0,0,3.88,15.74,83.77,83.77,0,0,0,34.51,11.5V240c0,8.8,7.83,16,17.37,16h17.37c9.55,0,17.38-7.2,17.38-16V222.4c32.93-3.6,57.84-31,53.5-63-3.15-23-22.46-41.3-46.56-47.7L282.68,97.4a8.59,8.59,0,0,1-6.63-8.1c0-4.6,4.09-8.4,9.12-8.4h35.6A30,30,0,0,1,332,83.1c5.23,2.2,11.28,1.7,15.3-2l19-17.5A11.31,11.31,0,0,0,368.47,61a11.43,11.43,0,0,0-3.84-15.78,83.82,83.82,0,0,0-34.52-11.5V16c0-8.8-7.82-16-17.37-16H295.37C285.82,0,278,7.2,278,16V33.6c-32.89,3.6-57.85,31-53.51,63C227.63,119.6,247,137.9,271.06,144.3ZM565.27,328.1c-11.8-10.7-30.2-10-42.6,0L430.27,402a63.64,63.64,0,0,1-40,14H272a16,16,0,0,1,0-32h78.29c15.9,0,30.71-10.9,33.25-26.6a31.2,31.2,0,0,0,.46-5.46A32,32,0,0,0,352,320H192a117.66,117.66,0,0,0-74.1,26.29L71.4,384H16A16,16,0,0,0,0,400v96a16,16,0,0,0,16,16H372.77a64,64,0,0,0,40-14L564,377a32,32,0,0,0,1.28-48.9Z" />
                        </svg>
                      </span>
                    </span>
                    <input type="text" class="form-control form-control-lg" id="mortgageUploadForm"
                      placeholder="xxxx number" aria-label="Mortgage">
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="energyUploadForm">payment Method</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="input-group-prepend input-group-text">
                        <i class="bi-shield-shaded"></i>
                      </span>
                    </span>
                    <select id="energyUploadForm" class="form-select form-select-lg">
                      <option selected disabled>payment Method</option>
                      <option value="bathroom1">Cash Only</option>
                      <option value="bathroom2">Check Only</option>
                      <option value="bathroom3">Bank Transfer</option>
                      <option value="bathroom4">All Methods</option>
                    </select>
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="waterUploadForm">lease term</label>

                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                      <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                        <i class="bi-ladder"></i>
                      </span>
                    </span>
                    <select id="waterUploadForm" class="form-select form-select-lg">
                      <option selected disabled>lease term</option>
                      <option value="bathroom1">monthly</option>
                      <option value="bathroom2">3 monthes</option>
                      <option value="bathroom3">6 monthes</option>
                      <option value="bathroom3">9 monthes </option>
                      <option value="bathroom3">yearly</option>
                      <option value="bathroom3">5+ years</option>
                    </select>
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <label class="form-label" for="waterUploadForm">property Documents</label>

                <!-- Dropdown -->
                <div class="dropdown">
                  <p class=" form-select form-select-lg " id="propertyTypeFilterFormDropdown" data-bs-toggle="dropdown">
                    <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                      <i class="bi-newspaper"></i>
                    </span>
                    Property Documents

                  </p>
                  <div class="dropdown-menu dropdown-menu-start dropdown-card"
                    aria-labelledby="propertyTypeFilterFormDropdown" style="min-width: 22rem;">
                    <!-- Card -->
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="d-grid gap-2">
                          <!-- Check -->
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="propertyTypeHouseCheckbox"
                              checked>
                            <label class="form-check-label" for="propertyTypeHouseCheckbox">
                              Real estate certificate
                            </label>
                          </div>
                          <!-- End Check -->

                          <!-- Check -->
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="propertyTypeFlatsCheckbox">
                            <label class="form-check-label" for="propertyTypeFlatsCheckbox">
                              Building Permit
                            </label>
                          </div>
                          <!-- End Check -->

                          <!-- Check -->
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                              id="propertyTypeMultiFamilyCheckbox" checked>
                            <label class="form-check-label" for="propertyTypeMultiFamilyCheckbox">
                              purchase contract
                            </label>
                          </div>
                          <!-- End Check -->

                          <!-- Check -->
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="propertyTypeFarmsLandCheckbox">
                            <label class="form-check-label" for="propertyTypeFarmsLandCheckbox">
                              Certificate of ownership
                            </label>
                          </div>
                          <!-- End Check -->
                        </div>
                      </div>


                    </div>
                    <!-- End Card -->
                  </div>
                </div>
                <!-- End Dropdown -->
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <h4 class="my-7">Upload images</h4>

              <div class="row">
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Property media</label>

                  <!-- File Attachment Input -->
                  <div id="imageDropzone" class="js-dropzone dz-dropzone dz-dropzone-card">
                    <div class="dz-message">
                      <img class="avatar mb-3" src="{{asset('FrontOffice/assets/svg/illustrations/add-file.svg')}}" alt="SVG">
                      <span class="d-block">Browse your device and upload images</span>
                      <span class="d-block text-muted small"></span>
                    </div>
                  </div>
                  <!-- End File Attachment Input -->
                </div>

                <div class="col-lg-6 mb-3">
                  <label class="form-label">Floorplan</label>

                  <!-- File Attachment Input -->
                  <div id="floorplanDropzone" class="js-dropzone dz-dropzone dz-dropzone-card">
                    <div class="dz-message">
                      <img class="avatar mb-3" src="{{asset('FrontOffice/assets/svg/illustrations/add-file.svg')}}" alt="SVG">
                      <span class="d-block">Upload floorplan</span>
                      <span class="d-block text-muted small">Maximum file size is 1MB</span>
                    </div>
                  </div>
                  <!-- End File Attachment Input -->
                </div>
              </div>
            </div>
            <!-- End Row -->

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection

@section('js')
    var node = document.getElementById('editor');
      var options = {
        modules: {
          toolbar: [
              [{ 'header': [1, 2, 3, false] }],
              ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}],
              [{"direction":"rtl"}],
              [{ 'align': 'right' }],
          ]
        },
        placeholder: 'describe your listing...',
        theme: 'snow'
      };
      var editor = new Quill(node, options);
    
      editor.format('direction', 'ltr');
      editor.format('align', 'left');
@endsection