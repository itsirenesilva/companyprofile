<!DOCTYPE html>
<html lang="en">
<title>Tentang Kami | TeknoFluida</title>
@include('home.partials.head')
  <body>
    <main>
@include('home.partials.header')

<!-- PRODUCT GROUPS -->
      <section class="container g-py-100">
        <div class="text-center g-mb-50">
        <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-45">
              <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">Product Groups</h4>
              <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-mb-minus-10">Valves</h2>
            </div>
        </div>

        <div class="row no-gutters g-mx-minus-10">
          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('vendor/business')}}/assets/img-temp/425x250/img1.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Clocks</span>
              <h3 class="h4 g-font-weight-600 mb-0">Alarm Clock</h3>

              <a class="u-link-v2" href="servovalves"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('vendor/business')}}/assets/img-temp/425x250/img2.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Others</span>
              <h3 class="h4 g-font-weight-600 mb-0">Brochure</h3>

              <a class="u-link-v2" href="#"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('vendor/business')}}/assets/img-temp/425x250/img7.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-Tech</span>
              <h3 class="h4 g-font-weight-600 mb-0">Desk Clock</h3>

              <a class="u-link-v2" href="#"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('vendor/business')}}/assets/img-temp/425x250/img10.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Cosmetics</span>
              <h3 class="h4 g-font-weight-600 mb-0">Cream</h3>

              <a class="u-link-v2" href="#"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('vendor/business')}}/assets/img-temp/425x250/img5.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-Tech</span>
              <h3 class="h4 g-font-weight-600 mb-0">Tivoli Radio</h3>

              <a class="u-link-v2" href="#"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('vendor/business')}}/assets/img-temp/425x250/img6.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Cosmetics</span>
              <h3 class="h4 g-font-weight-600 mb-0">Spa Cosmetics</h3>

              <a class="u-link-v2" href="#"></a>
            </div>
            <!-- End Projects -->
          </div>
        </div>
      </section>
<!-- End PRODUCT GROUPS -->

@include('home.partials.foot')

      <a class="js-go-to u-go-to-v1" href="#"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>
@include('home.partials.scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>
  </body>
</html>
