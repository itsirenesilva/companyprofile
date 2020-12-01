<!DOCTYPE html>
<html lang="en">
<title>Tentang Kami | TeknoFluida</title>
@include('home.partials.head')
  <body>
    <main>
@include('home.partials.header')

      <!-- TYPING BANNER -->
        <section class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-min-height-70vh g-flex-centered g-py-100";>
        <div class="container g-color-white text-center g-z-index-1">
          <div class="mb-5">
            <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase g-mb-30">
              <span class="u-text-animation u-text-animation--typing"></span>
            </h2>

          <!-- Search Form -->
          <form class="g-width-60x--md mx-auto">
            <div class="form-group g-mb-20">
              <div class="input-group u-shadow-v21 rounded g-mb-15">
                <div class="input-group-addon d-flex align-items-center g-font-size-16 g-bg-white g-brd-white g-color-gray-light-v1">
                  <i class="icon-magnifier"></i>
                </div>

                <input class="form-control form-control-md g-brd-white g-font-size-16 border-left-0 border-right-0 rounded-0 px-0 g-py-15" type="text" placeholder="Job Title or Skills">

                <div class="input-group-addon d-flex align-items-center g-font-size-16 g-bg-white g-brd-white g-color-gray-light-v1">
                  <i class="icon-location-pin"></i>
                </div>

                <input class="form-control form-control-md g-brd-white g-font-size-16 border-left-0 border-right-0 rounded-0 pl-0 g-py-15" type="text" placeholder="City, Zip or Country">

                <div class="input-group-btn">
                  <button class="btn btn-md u-btn-primary text-uppercase" type="submit">Search</button>
                </div>
              </div>
              <small class="form-text g-font-size-default">Search any type of work and much more..</small>
            </div>
          </form>
          <!-- End Search Form -->
          </div>
        </div>
        </section>
      <!-- End TYPING BANNER -->

      <!-- LOWONGAN PEKERJAAN -->
        <section id="processes" class="g-theme-bg-white-v1 g-py-80">
        <div class="container text-center g-width-780 g-color-gray-light-v2 g-mb-60">
          <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
            <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">Lowongan Kerja</h4>
            <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-black g-mb-minus-10">Kami Merekrut</h2>
          </div>
        </div>

        <div class="container">
      <!-- Popular Jobs -->
        <section>
        <div class="container">
          <div class="row g-mb-30">
            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <ul class="list-unstyled mb-0">
                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img1.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img2.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img3.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img4.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Snapchat Inc.
                    </span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <ul class="list-unstyled mb-0">
                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img5.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img6.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img5.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img4.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Snapchat Inc.
                    </span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-4">
              <ul class="list-unstyled mb-0">
                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img3.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img2.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img1.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10 g-theme-bg-grey-dark-v2">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/business')}}/assets/img-temp/logos/img5.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-white g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                    <span class="g-font-size-13 g-color-white g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Snapchat Inc.
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="text-center">
            <a class="btn btn-xl u-btn-outline-primary text-uppercase g-font-weight-600 g-font-size-12" href="#">View More Jobs</a>
          </div>
        </div>
        </section>
      <!-- End Popular Jobs -->
        </section>
      <!-- End LOWONGAN PEKERJAAN -->

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
