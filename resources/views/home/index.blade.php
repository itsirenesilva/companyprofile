<!DOCTYPE html>
<html lang="en">
<title>Beranda | TeknoFluida</title>
@include('home.partials.head')
  <body>
    <main>
@include('home.partials.header')

      <!-- Promo Block -->
      <section class="g-bg-cover g-flex-centered g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after" style="background-image: url({{asset('vendor/business')}}/assets/img-temp/1920x1080/img24.jpg);" data-calc-target="#js-header">
        <div class="container g-z-index-1 g-py-100">
          <div class="row">
            <div class="col-lg-5 align-self-center g-mb-40 g-mb-0--lg">
              <div class="g-bg-white g-rounded-5 g-pa-40">
                <h3 class="h6 g-color-black g-font-weight-600 text-uppercase text-center g-mb-25">Find Your Product</h3>

                <!-- Promo Block - Form -->
                <form>
                  <div class="form-group g-mb-20">
                    <a> Product Category</a>
                    <select class="js-custom-select u-select-v1 form-control g-brd-gray-light-v5 g-color-gray-light-v1 g-bg-gray-light-v5 g-px-10 g-py-13" style="width: 100%;" data-placeholder="Product Type" data-control-classes="g-color-gray-dark-v2 g-bg-gray-light-v5" data-disable-search="1" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                      <option></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>

                  <div class="form-group g-mb-20">
                    <a> Products</a>
                    <select class="js-custom-select u-select-v1 form-control g-brd-gray-light-v5 g-color-gray-light-v1 g-bg-gray-light-v5 g-px-10 g-py-13" style="width: 100%;" data-placeholder="Product Type" data-control-classes="g-color-gray-dark-v2 g-bg-gray-light-v5" data-disable-search="1" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                      <option></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>

                  <button class="btn btn-lg btn-block u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-5 g-py-13" type="submit">Find My Product</button>
                </form>
                <!-- End Promo Block - Form -->
              </div>
            </div>

            <!-- Promo Block - Info -->
            <div class="col-lg-7 align-self-center g-color-white">
              <div class="g-px-50--lg">
                <h2 class="g-color-white g-font-weight-600 g-font-size-40 g-font-size-50--md text-uppercase g-line-height-1_2 g-mb-20">Planning
                  <br>&amp; Delivering</h2>
                <p class="lead g-color-white-opacity-0_8 g-mb-35">This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key.</p>
                <a class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-5 g-px-25 g-py-15" href="#">Hire Unify</a>
              </div>
            </div>
            <!-- End Promo Block - Info -->
          </div>
        </div>
      </section>
      <!-- End Promo Block -->

      <!-- ACHIEVEMENT -->
      <section id="projects" class="g-pt-115 g-pb-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">title</h4>
                <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-mb-minus-10">ACHIEVEMENT</h2>
              </div>

              <p  class="g-color-grey g-mb-10">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel odio.</p>
              <p class="g-color-grey mb-0">In rutrum tellus vitae blandit lacinia. Phasellus eget sapien odio. Phasellus eget sapien odio. Vivamus at risus quis leo tincidunt scelerisque non et erat.</p>
            </div>

            <div class="col-lg-8">
              <div id="carouselCus1" class="js-carousel g-line-height-0"
                   data-infinite="true"
                   data-speed="5000"
                   data-rows="2"
                   data-slides-show="2"
                   data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-100x g-right-0 g-width-35 g-height-35 g-font-size-default g-color-gray g-color-white--hover g-bg-gray-light-v5 g-bg-primary--hover g-mb-5 g-transition-0_2 g-transition--ease-in"
                   data-arrow-left-classes="fa fa-angle-left g-mr-50"
                   data-arrow-right-classes="fa fa-angle-right g-mr-5">
                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img9.jpg" alt="Image description">

                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">The moon ltd</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit.</p>
                      <a class="u-link-v2" href="article"></a>
                    </div>
                  </div>
                </div>
                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img10.jpg" alt="Image description">
                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Support &amp; development</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in nulla non arcu at lectus.</p>
                      <a class="u-link-v2" href="article"></a>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img11.jpg" alt="Image description">
                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Boston global</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">In rutrum tellus vitae blandit lacinia. Phasellus eget sapien odio. Phasellus eget sapien odio.</p>
                      <a class="u-link-v2" href="article"></a>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img12.jpg" alt="Image description">
                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Marketing group</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor.</p>
                      <a class="u-link-v2" href="article"></a>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img9.jpg" alt="Image description">

                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">The moon ltd</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit.</p>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img10.jpg" alt="Image description">

                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Support &amp; development</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in nulla non arcu at lectus.</p>
                      <a class="u-link-v2" href="article"></a>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img11.jpg" alt="Image description">

                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Boston global</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">In rutrum tellus vitae blandit lacinia. Phasellus eget sapien odio. Phasellus eget sapien odio.</p>
                      <a class="u-link-v2" href="article"></a>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img12.jpg" alt="Image description">

                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Marketing group</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor.</p>
                      <a class="u-link-v2" href="article"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End ACHIEVEMENT -->

      <!-- PRODUCT -->
      <section id="news" class="g-theme-bg-grey-dark-v2 g-pt-60">
        <div class="container text-center g-width-780 g-color-gray-light-v2 g-mb-60">
          <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-20">
            <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">Kami bekerja dengan keras untuk memberikan Anda solusi terbaik</h4>
            <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-white g-mb-minus-10">PRODUK KAMI</h2>
          </div>

          <p class="g-color-white mb-0">Kami menyediakan secara terpadu produk-produk dari berbagai merek ternama dan teknologi berkualitas tinggi dengan harga yang kompetitif.</p>
        </div>

        <div class="container-fluid px-0">
          <div id="carouselCus2" class="js-carousel g-line-height-0"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-rows="2"
               data-slides-show="4">
            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img1.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img2.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img3.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img4.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img5.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img6.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img7.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img8.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img1.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img2.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img3.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img4.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img5.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img6.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img7.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="js-slide">
              <div class="g-parent g-pos-rel g-overflow-hidden">
                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img8.jpg" alt="Image description">

                <div class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-brd-around g-brd-10 g-brd-white g-pa-30 g-transition-0_3 g-transition--ease-in">
                  <div class="g-flex-middle-item--bottom">
                    <header class="g-mb-5">
                      <h4 class="g-font-weight-700 g-font-size-12 g-color-gray-light-v4 g-mb-5">May 20, 2017</h4>
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-18 mb-0">
                        <a class="g-color-white" href="#">Master class of the week</a>
                      </h3>
                    </header>

                    <p class="g-color-gray-light-v4 mb-0">By Kate Lee for Business</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End PRODUCT -->

      <!-- PARTNER -->
      <section class="text-center g-py-80">
        <div class="container">
          <div class="container g-width-780 g-mb-60">
            <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-45">
              <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">Our Partners</h4>
              <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-mb-minus-10">Who work with us</h2>
            </div>
          </div>

          <div id="carouselCus3" class="js-carousel g-mb-60"
               data-autoplay="true"
               data-infinite="true"
               data-slides-show="6">
            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/rexroth.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/rotelmann.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/tdz.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/teknofluida.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/universalhydraulik.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/vsehbe.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/argohytos.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/beinlich.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/caproni.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/dropsa.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/filtrationgroup.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/GWB.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/hydrotechnik.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/hylok.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/kaori.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/kracht.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/oleotec.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/ponar.png" alt="Image Description">
            </div>

          </div>
        </div>
      </section>
      <!-- End PARTNER -->


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
