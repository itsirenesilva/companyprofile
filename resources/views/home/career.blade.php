<!DOCTYPE html>
<html lang="id">
<title>Karir</title>
@include('home.partials.head')

  <body>
    <main>
@include('home.partials.header')

      <!-- Quotes -->
      <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll">
        <!-- Parallax Image -->
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-white-gradient-opacity-v2--after" style="height: 160%; background-image: url(../../assets/img-temp/1920x1080/img5.jpg);"></div>
        <!-- End Parallax Image -->

        <div class="container u-bg-overlay__inner g-color-white text-center g-py-50">
          <h2 class="g-font-size-40 g-font-size-70--md text-uppercase g-font-weight-700 "><span class="u-text-animation u-text-animation--typing"></span></h2>
          <p class="g-font-size-24">Berkembang bersama kami</p>
        </div>
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
      </section>
      <!-- End Quotes -->
      
      <!-- Popular Jobs -->
      <section class="g-py-100">
        <div class="container">
          <header class="text-center g-width-60x--md mx-auto g-mb-50">
            <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Lowongan Pekerjaan</h2>
            <p class="lead">Beragam lowongan pekerjaan yang terbuka untuk anda</p>
          </header>

          <div class="row g-mb-30">
            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <ul class="list-unstyled mb-0">
                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img1.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img2.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img3.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img4.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Snapchat Inc.
                    </span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <ul class="list-unstyled mb-0">
                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img5.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img6.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img5.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img4.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Snapchat Inc.
                    </span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-4">
              <ul class="list-unstyled mb-0">
                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img3.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img2.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img1.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                  </div>
                </li>

                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <img class="g-width-40 g-height-40" src="{{asset('vendor/home')}}/assets/img-temp/logos/img5.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
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
    @include('home.partials.foot')
   @include('home.partials.scripts')
  </body>
</html>
