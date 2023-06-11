 <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Real Estate More Filters Modal -->
  <div class="modal fade" id="realEstateMoreFiltersModal" tabindex="-1" aria-labelledby="realEstateMoreFiltersModalLabel" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h3 class="modal-title" id="realEstateMoreFiltersModalLabel">More filters</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <label class="input-label">Status</label>

          <!-- Radio Button Group -->
          <div class="btn-group btn-group-segment d-flex mb-4" role="group" aria-label="Status radio button group">
            <input type="radio" class="btn-check flex-fill" name="statusBtnRadioMoreFilters" id="statusBtnRadioBuyMoreFilters" autocomplete="off" checked>
            <label class="btn btn-sm" for="statusBtnRadioBuyMoreFilters">Buy</label>

            <input type="radio" class="btn-check flex-fill" name="statusBtnRadioMoreFilters" id="statusBtnRadioRentMoreFilters" autocomplete="off">
            <label class="btn btn-sm" for="statusBtnRadioRentMoreFilters">Rent</label>

            
          </div>
          <!-- End Radio Button Group -->

          <div class="mb-4">
            <label for="featuresLabelMoreFilters" class="form-label">Features</label>

            <!-- Select -->
            <select id="featuresLabelMoreFilters" class="js-select form-select" multiple data-hs-tom-select-options='{
                      "hideSearch": true
                    }'>
              <option value="bedValueAny" selected>Any</option>
              <option value="Pets allowed">Pets allowed</option>
              <option value="Parking lot">Parking lot</option>
              <option value="Balcony">Balcony</option>
              <option value="Garden">Garden</option>
              <option value="Laundry">Laundry</option>
              <option value="Heating">Heating</option>
              <option value="AC">AC</option>
            </select>
            <!-- End Select -->
          </div>

          <div class="row gx-3">
            <div class="col-6">
              <div class="mb-4">
                <label for="bedsLabelMoreFilters" class="form-label">Beds</label>

                <!-- Select -->
                <select id="bedsLabelMoreFilters" class="js-select form-select" data-hs-tom-select-options='{
                          "hideSearch": true
                        }'>
                  <option value="bedValueAny" selected>Any</option>
                  <option value="bedValueMin1">1</option>
                  <option value="bedValueMin2">2</option>
                  <option value="bedValueMin3">3</option>
                  <option value="bedValueMin4">4</option>
                  <option value="bedValueMin5">5+</option>
                </select>
                <!-- End Select -->
              </div>
            </div>
            <!-- End Col -->

            <div class="col-6">
              <div class="mb-4">
                <label for="bathLabelMoreFilters" class="form-label">Baths</label>

                <!-- Select -->
                <select id="bathLabelMoreFilters" class="js-select form-select" data-hs-tom-select-options='{
                          "hideSearch": true
                        }'>
                  <option value="bedValueAny" selected>Any</option>
                  <option value="bedValueMax1">1</option>
                  <option value="bedValueMax2">2</option>
                  <option value="bedValueMax3">3</option>
                  <option value="bedValueMax4">4</option>
                  <option value="bedValueMax5">5+</option>
                </select>
                <!-- End Select -->
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <label for="squareFeetLabelMoreFilters" class="form-label">Square feet</label>

          <div class="row gx-3">
            <div class="col-6">
              <div class="mb-4">
                <input type="text" class="form-control" id="squareFeetLabelMoreFilters" placeholder="No min">
              </div>
            </div>
            <!-- End Col -->

            <div class="col-6">
              <div class="mb-4">
                <input type="text" class="form-control" placeholder="No max">
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="mb-4">
            <label for="lotSizeLabelMoreFilters" class="form-label">Lot size</label>

            <!-- Select -->
            <select id="lotSizeLabelMoreFilters" class="js-select form-select" data-hs-tom-select-options='{
                      "hideSearch": true
                    }'>
              <option value="No Min">No Min</option>
              <option value="200+ sqft">200+ sqft</option>
              <option value="300+ sqft">300+ sqft</option>
              <option value="400+ sqft">400+ sqft</option>
              <option value="500+ sqft">500+ sqft</option>
              <option value="750+ sqft">750+ sqft</option>
              <option value="0.25+ acre / 10890+ sqft">0.25+ acre / 10890+ sqft</option>
              <option value="0.5+ acre / 21780+ sqft">0.5+ acre / 21780+ sqft</option>
              <option value="1+ acre">1+ acre</option>
              <option value="2+ acre">2+ acre</option>
              <option value="5+ acre">5+ acre</option>
              <option value="10+ acre">10+ acre</option>
            </select>
            <!-- End Select -->
          </div>

          <div class="mb-4">
            <label for="yearBuiltLabelMoreFilters" class="form-label">Year built</label>

            <div class="row gx-3">
              <div class="col-6">
                <input type="text" class="form-control" id="yearBuiltLabelMoreFilters" placeholder="Min year">
              </div>
              <!-- End Col -->

              <div class="col-6">
                <input type="text" class="form-control" placeholder="Max year">
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Body -->

        <div class="card-footer border-top">
          <div class="d-flex justify-content-end gap-3">
            <a class="btn btn-white" href="#">Clear</a>
            <a class="btn btn-primary" href="#">Apply Filters</a>
          </div>
        </div>
      </div>
    </div>
  </div>