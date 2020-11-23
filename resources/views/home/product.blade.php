<!DOCTYPE html>
<html lang="id">
<title>TeknoFluida</title>
@include('home.partials.head')

  <body>
    <main>
@include('home.partials.header')

      <!-- Promo Block -->
      <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
        <div class="divimage dzsparallaxer--target w-100 g-bg-pos-bottom-center" style="height: 120%; background-image: url({{asset('vendor/home')}}/assets/img-temp/1920x1080/img25.jpg);"></div>

        <div class="container g-py-200">
          <div class="row">
            <div class="col-md-6">
              <h3 class="g-color-black g-font-weight-300 g-font-size-40 g-line-height-1_2 mb-4">Produk dan<br>service yang inovatif
              </h3>
              <span class="d-block g-color-black-opacity-0_8 g-font-size-16 mb-5">Kami bekerja dengan keras untuk memberikan Anda solusi terbaik.</span>
              <a class="js-fancybox u-link-v5 g-color-black" href="https://vimeo.com/167434033" title="Single Image">
                <span class="align-middle u-icon-v3 u-block-hover--scale g-bg-white g-color-black g-color-primary--hover g-rounded-50x g-cursor-pointer mr-2">
                  <i class="g-font-size-18 g-pos-rel g-left-2 fa fa-play"></i>
                </span>
                1:41 minutes
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Promo Block -->

            <!-- Team Blocks -->
            <section class="container g-pt-100 g-pb-70">
        <!-- Heading -->
        <div class="row justify-content-center text-center g-mb-50">
          <div class="col-lg-9">
            <h2 class="h3 g-color-black g-font-weight-600 text-uppercase mb-2">Produk Kami</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <p class="lead mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
          </div>
        </div>
        <!-- End Heading -->

        <div class="row">
          <div class="col-lg-3 col-sm-6 g-mb-30">

            <!-- PRODUK -->
            <figure class="u-block-hover">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x450/img1.jpg" alt="Image description">
              <!-- End Figure Image-->

              <!-- Produk 1 -->
              <figcaption class="u-block-hover__additional--v1 u-block-hover__additional--slide-down g-bg-orange-opacity-0_9 g-pa-30">
                <div class="u-block-hover__additional--v1 g-flex-middle">
                  <div class="text-center g-flex-middle-item">
                    <h4 class="h4 g-color-white g-mb-5">Leyla Watson</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 g-font-weight-600 text-uppercase g-color-white-opacity-0_9">leyla@gmail.com</em>
                  </div>
                </div>
              </figcaption>
              <!-- End Produk 1 -->
            </figure>
            <!-- End Team Block -->
          </div>

          <div class="col-lg-3 col-sm-6 g-mb-30">
            <!-- PRODUK -->
            <figure class="u-block-hover">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x450/img2.jpg" alt="Image description">
              <!-- End Figure Image-->

              <!-- Produk 2 -->
              <figcaption class="u-block-hover__additional--v1 u-block-hover__additional--slide-up g-bg-orange-opacity-0_9 g-pa-30">
                <div class="u-block-hover__additional--v1 g-flex-middle">
                  <div class="text-center g-flex-middle-item">
                    <h4 class="h4 g-color-white g-mb-5">Tina Krueger</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 g-font-weight-600 text-uppercase g-color-white-opacity-0_9">krueger@gmail.com</em>
                  </div>
                </div>
              </figcaption>
              <!-- End Produk 2 -->
            </figure>
            <!-- End Team Block -->
          </div>

          <div class="col-lg-3 col-sm-6 g-mb-30">
            <!-- PRODUK -->
            <figure class="u-block-hover">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x450/img3.jpg" alt="Image description">
              <!-- End Figure Image-->

              <!-- Produk 3 -->
              <figcaption class="u-block-hover__additional--v1 u-block-hover__additional--slide-left g-bg-orange-opacity-0_9 g-pa-30">
                <div class="u-block-hover__additional--v1 g-flex-middle">
                  <div class="text-center g-flex-middle-item">
                    <h4 class="h4 g-color-white g-mb-5">David Case</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 g-font-weight-600 text-uppercase g-color-white-opacity-0_9">case@gmail.com</em>
                  </div>
                </div>
              </figcaption>
              <!-- End Produk 3 -->
            </figure>
            <!-- End Team Block -->
          </div>

          <div class="col-lg-3 col-sm-6 g-mb-30">
            <!-- Team Block -->
            <figure class="u-block-hover">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x450/img4.jpg" alt="Image description">
              <!-- End Figure Image-->

              <!-- Produk 4 -->
              <figcaption class="u-block-hover__additional--v1 u-block-hover__additional--slide-right g-bg-orange-opacity-0_9 g-pa-30">
                <div class="u-block-hover__additional--v1 g-flex-middle">
                  <div class="text-center g-flex-middle-item">
                    <h4 class="h4 g-color-white g-mb-5">Sara Lisbon</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 g-font-weight-600 text-uppercase g-color-white-opacity-0_9">lisbon@gmail.com</em>
                  </div>
                </div>
              </figcaption>
              <!-- End Produk 4 -->
            </figure>
            <!-- End Team Block -->
          </div>
        </div>
      </section>
      <!-- End Team Blocks -->

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
