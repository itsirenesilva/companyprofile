<!DOCTYPE html>
<html lang="en">
<title>Beranda | TeknoFluida</title>
@include('home.partials.head')
  <body>
    <main>
@include('home.partials.header')

      <!-- Promo Block -->
      <section class="g-flex-centered g-bg-pos-center g-bg-img-hero g-pos-rel g-z-index-1 g-overflow-hidden" style="background-image: url(../../assets/img-temp/1920x1080/img14.jpg);" data-calc-target="#js-header">
        <div class="g-pos-abs g-top-0 g-left-0"
             data-animation="fadeInDown"
             data-animation-delay="100"
             data-animation-duration="1500">
          <img class="img-fluid" src="{{asset('vendor/business')}}/assets/img-temp/1600x1075/img1.jpg" alt="Image Description">
        </div>
        <div class="g-pos-abs g-bottom-0 g-right-0"
             data-animation="fadeInUp"
             data-animation-delay="1800"
             data-animation-duration="1500">
          <img class="img-fluid" src="{{asset('vendor/business')}}/assets/img-temp/1600x1075/img1.jpg" alt="Image Description">
        </div>

        <div class="container text-center g-z-index-1">
          <div class="mb-4">
            <h1 class="h2 d-inline-block g-color-black g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1"
                data-animation="fadeInDown"
                data-animation-delay="1000"
                data-animation-duration="1500">The</h1>
            <h2 class="h2 d-inline-block g-color-black g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1"
                data-animation="fadeInDown"
                data-animation-delay="1200"
                data-animation-duration="1500">Green</h2>
            <h2 class="h2 d-inline-block g-color-primary g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1"
                data-animation="fadeInDown"
                data-animation-delay="1400"
                data-animation-duration="1500">Unify</h2>
          </div>

          <div class="mx-auto g-max-width-600 g-overflow-hidden">
            <p class="g-color-black g-font-size-18 g-font-size-24--md g-mb-40"
               data-animation="fadeInDown"
               data-animation-delay="1600"
               data-animation-duration="1500">
              Unify is creative technology company providing key digital services on web and mobile. We minimize the gap between technology and its audience.
            </p>
          </div>

          <div
               data-animation="fadeInDown"
               data-animation-delay="2000"
               data-animation-duration="1500">
            <a class="btn btn-lg u-btn-outline-black g-font-weight-600 g-font-size-13 text-uppercase g-rounded-50 mx-2 g-px-25 g-py-15" href="#">Discover More</a>
            <a class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-50 mx-2 g-px-25 g-py-15" href="#">Purchase Now</a>
          </div>
        </div>
      </section>
      <!-- End Promo Block -->


      <!-- ABOUT US, VISI, MISI, SERVICE -->
      <section id="about" class="container-fluid px-0">
        <div class="row no-gutters">
          <div class="hidden-lg-down col-lg-4 g-bg-img-hero" style="background-image: url({{asset('vendor/business')}}/assets/img-temp/1600x1920/img2.jpg);"></div>

          <div class="col-md-6 col-lg-4 g-flex-centered g-theme-bg-white-v1">
            <div class="text-center g-color-gray-light-v2 g-pa-30">
              <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">TEKNOFLUIDA</h4>
                <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-black g-mb-minus-10">TENTANG KAMI
                  </h2>
              </div>

              <p align="justify" class="g-color-grey mb-0">PT. Tekno Fluida Indonesia adalah perusahaan yang memiliki tenaga-tenaga professional berkualitas dengan total pengetahuan dan pengalaman kolektif lebih dari 25 tahun di bidang industri teknologi fluida. Kami menjual peralatan kebutuhan industri, memberikan jasa engineering serta desain dan integrasi. Spesialisasi kami adalah mendesain dan mengintegrasi produk-produk ke dalam sistem teknologi fluida.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 g-theme-bg-blue-dark-v2">
            <div class="js-carousel g-pb-90"
                 data-infinite="true"
                 data-slides-show="true"
                 data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-30">
              <div class="js-slide">
                <img class="img-fluid w-100" src="{{asset('vendor/business')}}/assets/img-temp/450x300/img1.jpg" alt="Image description">

                <div class="g-pa-30">
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-20 g-color-white g-mb-10">VISI</h3>
                  <p class="g-color-gray-light-v2 g-mb-10">Menjadi perusahaan engineering yang berkompeten dan dapat diandalkan di bidang teknologi fluida untuk seluruh pelanggan kami di seluruh Indonesia.</p>
                </div>
              </div>

              <div class="js-slide">
                <img class="img-fluid w-100" src="{{asset('vendor/business')}}/assets/img-temp/450x300/img2.jpg" alt="Image description">

                <div class="g-pa-30">
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-20 g-color-white g-mb-10">MISI</h3>
                  <p class="g-color-gray-light-v2 g-mb-10">Dengan keseluruhan pengetahuan teknis dan keahlian engineering, kami selalu berupaya untuk memberikan pelayanan yang lebih dari ekspektasi di industri ini. Kami memberikan solusi teknik dengan kualitas terbaik, menyediakan dukungan dan servis yang terbaik.</p>
                </div>
              </div>

              <div class="js-slide">
                <img class="img-fluid w-100" src="{{asset('vendor/business')}}/assets/img-temp/450x300/img3.jpg" alt="Image description">

                <div class="g-pa-30">
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-20 g-color-white g-mb-10">SERVICE</h3>
                  <p class="g-color-gray-light-v2 g-mb-10">Dalam menjalin kerjasama dengan pelanggan, kami mendedikasikan diri sepenuhnya untuk selalu mencari solusi yang paling efektif dan untuk tetap melakukan penyempurnaan di setiap masalah dari unit-unit engineering di pelanggan kami.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section ABOUT US, VISI, MISI, SERVICE -->

      <!-- WHY US? -->
      <section id="processes" class="g-theme-bg-blue-dark-v1 g-py-80">
        <div class="container text-center g-width-780 g-color-gray-light-v2 g-mb-60">
          <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
            <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">Memberikan Service terbaik</h4>
            <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-white g-mb-minus-10">Mengapa Memilih Kami?</h2>
          </div>

          <p class="g-color-gray-light-v2 mb-0">Keinginan pelanggan adalah prioritas dan sumber inspirasi kami. Seluruh staff dan karyawan kami berkomitmen untuk memberikan pelayanan yang terbaik agar dapat selalu memenuhi keinginan dan kepuasan pelanggan kami.</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-6 g-px-30 g-mb-40">
              <!-- Icon Blocks -->
              <div class="g-pos-rel g-parent g-theme-bg-blue-dark-v2 g-py-35 g-px-25 g-pl-70--sm">
                <div class="hidden-xs-down g-absolute-centered--y g-left-0">
                  <div class="g-pull-50x-left g-brd-around g-brd-5 g-brd-primary-dark-v3 g-rounded-50x g-overflow-hidden">
                    <span class="d-block g-pos-abs g-top-0 g-left-0 g-width-95 g-height-95 g-brd-around g-brd-5 g-brd-primary g-rounded-50x" style="background-image: url({{asset('vendor/business')}}/assets/img-temp/80x80/img1.jpg);"></span>
                    <span class="u-icon-v3 u-icon-size--xl g-width-95 g-height-95 g-color-white g-bg-primary g-opacity-1 opacity-0--parent-hover g-transition-0_1 g-transition--ease-in">
                      <i class="icon-fire"></i>
                    </span>
                  </div>
                </div>

                <h3 class="h5 text-uppercase g-color-gray-light-v2 g-mb-10">1. PENGHEMATAN BIAYA</h3>
                <p class="g-color-gray-light-v2 mb-0">Dimulai dari tahap perencanaan, konstruksi sampai kepada tahap pemeliharaan, kami menerapkan sistem pengadaan barang yang komprehensif, yang memungkinkan pelanggan untuk mendapatkan penawaran yang terbaik dan dengan keuntungan finansial dalam jangka panjang.</p>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-6 g-px-30 g-mb-40">
              <!-- Icon Blocks -->
              <div class="g-pos-rel g-parent g-theme-bg-blue-dark-v2 g-py-35 g-px-25 g-pl-70--sm">
                <div class="hidden-xs-down g-absolute-centered--y g-left-0">
                  <div class="g-pull-50x-left g-brd-around g-brd-5 g-brd-primary-dark-v3 g-rounded-50x g-overflow-hidden">
                    <span class="d-block g-pos-abs g-top-0 g-left-0 g-width-95 g-height-95 g-brd-around g-brd-5 g-brd-primary g-rounded-50x" style="background-image: url({{asset('vendor/business')}}/assets/img-temp/80x80/img2.jpg);"></span>
                    <span class="u-icon-v3 u-icon-size--xl g-width-95 g-height-95 g-color-white g-bg-primary g-opacity-1 opacity-0--parent-hover g-transition-0_1 g-transition--ease-in">
                      <i class="icon-energy"></i>
                    </span>
                  </div>
                </div>

                <h3 class="h5 text-uppercase g-color-gray-light-v2 g-mb-10">2. DAPAT DIANDALKAN</h3>
                <p class="g-color-gray-light-v2 mb-0">Team marketing dan service kami akan mendampingi pelanggan sebelum, selama dan sesudah proyek. Perencanaan, instalasi dan prosedur eksekusi dapat dilakukan oleh Team engineering kami yang berpengalaman dan ahli dibidangnya.</p>
                <br>              
              </div>
              <!-- End Icon Blocks -->
            </div>
          </div>
          <!-- End Icon Blocks -->

          <!-- Icon Blocks -->
          <div class="row g-mb-50">
            <div class="col-lg-6 g-px-30 g-mb-40">
              <!-- Icon Blocks -->
              <div class="g-pos-rel g-parent g-theme-bg-blue-dark-v2 g-py-35 g-px-25 g-pl-70--sm">
                <div class="hidden-xs-down g-absolute-centered--y g-left-0">
                  <div class="g-pull-50x-left g-brd-around g-brd-5 g-brd-primary-dark-v3 g-rounded-50x g-overflow-hidden">
                    <span class="d-block g-pos-abs g-top-0 g-left-0 g-width-95 g-height-95 g-brd-around g-brd-5 g-brd-primary g-rounded-50x" style="background-image: url({{asset('vendor/business')}}/assets/img-temp/80x80/img3.jpg);"></span>
                    <span class="u-icon-v3 u-icon-size--xl g-width-95 g-height-95 g-color-white g-bg-primary g-opacity-1 opacity-0--parent-hover g-transition-0_1 g-transition--ease-in">
                      <i class="icon-rocket"></i>
                    </span>
                  </div>
                </div>

                <h3 class="h5 text-uppercase g-color-gray-light-v2 g-mb-10">3. KEAMANAN DAN KUALITAS</h3>
                <p class="g-color-gray-light-v2 mb-0">Kami berusaha memberikan desain, solusi dan implementasi sistem yang aman dan berkualitas baik. Kualitas sistem yang kami ajukan harus dapat melewati tes ketahanan dan masa aktif (life time).</p>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-6 g-px-30 g-mb-40">
              <!-- Icon Blocks -->
              <div class="g-pos-rel g-parent g-theme-bg-blue-dark-v2 g-py-35 g-px-25 g-pl-70--sm">
                <div class="hidden-xs-down g-absolute-centered--y g-left-0">
                  <div class="g-pull-50x-left g-brd-around g-brd-5 g-brd-primary-dark-v3 g-rounded-50x g-overflow-hidden">
                    <span class="d-block g-pos-abs g-top-0 g-left-0 g-width-95 g-height-95 g-brd-around g-brd-5 g-brd-primary g-rounded-50x" style="background-image: url({{asset('vendor/business')}}/assets/img-temp/80x80/img4.jpg);"></span>
                    <span class="u-icon-v3 u-icon-size--xl g-width-95 g-height-95 g-color-white g-bg-primary g-opacity-1 opacity-0--parent-hover g-transition-0_1 g-transition--ease-in">
                      <i class="icon-layers"></i>
                    </span>
                  </div>
                </div>

                <h3 class="h5 text-uppercase g-color-gray-light-v2 g-mb-10">4. MITRA KEPERCAYAAN</h3>
                <p class="g-color-gray-light-v2 mb-0">Komitmen utama kami adalah membangun hubungan baik dan dalam jangka waktu lama dengan pelanggan-pelanggan dan supplier-supplier kami, dengan berlandaskan kepercayaan dan keuntungan bersama.</p>
              </div>
              <!-- End Icon Blocks -->
            </div>
          </div>
          <!-- End Icon Blocks -->
      </section>
      <!-- End WHY US? -->

      <!-- CERTIFICATION -->
      <section id="services" class="g-py-80">
        <div class="container">
          <div class="text-uppercase text-center u-heading-v2-4--bottom g-brd-primary g-mb-80">
            <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">title</h4>
            <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-mb-minus-10">CERTIFICATION</h2>
          </div>

          <!-- Icon Blocks -->
          <div class="row no-gutters">
            <div class="col-md-6 col-lg-3 g-parent g-brd-around g-brd-gray-light-v4 g-brd-bottom-primary--hover g-brd-bottom-2--hover g-mb-30 g-mb-0--lg g-transition-0_2 g-transition--ease-in">
              <!-- Icon Blocks -->
              <div class="text-center g-px-10 g-px-30--lg g-py-40 g-pt-25--parent-hover g-transition-0_2 g-transition--ease-in">
                <span class="d-block g-color-primary g-font-size-40 g-mb-15">
                <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img1.png" alt="Image Description">
                </span>
                <h3 class="h5 text-uppercase g-color-black g-mb-10">Analisys</h3>

                <div class="d-inline-block g-width-40 g-brd-bottom g-brd-2 g-brd-primary g-my-15"></div>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-3 g-parent g-brd-around g-brd-gray-light-v4 g-brd-bottom-primary--hover g-brd-bottom-2--hover g-mb-30 g-mb-0--md g-ml-minus-1 g-transition-0_2 g-transition--ease-in">
              <!-- Icon Blocks -->
              <div class="text-center g-px-10 g-px-30--lg g-py-40 g-pt-25--parent-hover g-transition-0_2 g-transition--ease-in">
                <span class="d-block g-color-primary g-font-size-40 g-mb-15">
                <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img1.png" alt="Image Description">
                </span>
                <h3 class="h5 text-uppercase g-color-black g-mb-10">Strategy</h3>

                <div class="d-inline-block g-width-40 g-brd-bottom g-brd-2 g-brd-primary g-my-15"></div>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-3 g-parent g-brd-around g-brd-gray-light-v4 g-brd-bottom-primary--hover g-brd-bottom-2--hover g-mb-30 g-mb-0--md g-ml-minus-1 g-transition-0_2 g-transition--ease-in">
              <!-- Icon Blocks -->
              <div class="text-center g-px-10 g-px-30--lg g-py-40 g-pt-25--parent-hover g-transition-0_2 g-transition--ease-in">
                <span class="d-block g-color-primary g-font-size-40 g-mb-15">
                <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img1.png" alt="Image Description">
                </span>
                <h3 class="h5 text-uppercase g-color-black g-mb-10">Social media</h3>
                
                <div class="d-inline-block g-width-40 g-brd-bottom g-brd-2 g-brd-primary g-my-15"></div>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-3 g-parent g-brd-around g-brd-gray-light-v4 g-brd-bottom-primary--hover g-brd-bottom-2--hover g-mb-30 g-mb-0--md g-ml-minus-1 g-transition-0_2 g-transition--ease-in">
              <!-- Icon Blocks -->
              <div class="text-center g-px-10 g-px-30--lg g-py-40 g-pt-25--parent-hover g-transition-0_2 g-transition--ease-in">
                <span class="d-block g-color-primary g-font-size-40 g-mb-15">
                <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img1.png" alt="Image Description">
                </span>
                <h3 class="h5 text-uppercase g-color-black g-mb-10">Marketing</h3>

                <div class="d-inline-block g-width-40 g-brd-bottom g-brd-2 g-brd-primary g-my-15"></div>
              </div>
              <!-- End Icon Blocks -->
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </section>
      <!-- End CERTIFICATION -->

      <!-- ACHIEVEMENT -->
      <section id="projects" class="g-pt-115 g-pb-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">title</h4>
                <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-mb-minus-10">ACHIEVEMENT</h2>
              </div>

              <p class="g-mb-10">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel odio.</p>
              <p class="mb-0">In rutrum tellus vitae blandit lacinia. Phasellus eget sapien odio. Phasellus eget sapien odio. Vivamus at risus quis leo tincidunt scelerisque non et erat.</p>
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
                    </div>
                  </div>
                </div>
                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img10.jpg" alt="Image description">
                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Support &amp; development</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in nulla non arcu at lectus.</p>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img11.jpg" alt="Image description">
                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Boston global</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">In rutrum tellus vitae blandit lacinia. Phasellus eget sapien odio. Phasellus eget sapien odio.</p>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img12.jpg" alt="Image description">
                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Marketing group</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor.</p>
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
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img11.jpg" alt="Image description">

                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Boston global</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">In rutrum tellus vitae blandit lacinia. Phasellus eget sapien odio. Phasellus eget sapien odio.</p>
                    </div>
                  </div>
                </div>

                <div class="js-slide g-pa-5">
                  <div class="g-parent g-pos-rel g-overflow-hidden">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_3 g-transition--ease-in" src="{{asset('vendor/business')}}/assets/img-temp/400x269/img12.jpg" alt="Image description">

                    <div class="g-pos-abs g-top-0 g-left-0 w-100 h-100 g-bg-primary-opacity-0_8 g-color-white opacity-0 g-opacity-1--parent-hover g-pa-25 g-transition-0_3 g-transition--ease-in">
                      <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-white mb-0">Marketing group</h3>
                      <p class="g-font-size-12 g-color-gray-light-v4 mb-0">Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor.</p>
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
      <section id="news" class="g-theme-bg-blue-dark-v1 g-pt-80">
        <div class="container text-center g-width-780 g-color-gray-light-v2 g-mb-60">
          <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
            <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">Kami bekerja dengan keras untuk memberikan Anda solusi terbaik</h4>
            <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-gray-light-v2 g-mb-minus-10">PRODUK KAMI</h2>
          </div>

          <p class="g-color-gray-light-v2 mb-0">Kami menyediakan secara terpadu produk-produk dari berbagai merek ternama dan teknologi berkualitas tinggi dengan harga yang kompetitif.</p>
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
              <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">Our clients</h4>
              <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-mb-minus-10">Who work with us</h2>
            </div>
          </div>

          <div id="carouselCus3" class="js-carousel g-mb-60"
               data-autoplay="true"
               data-infinite="true"
               data-slides-show="6">
            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img1.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img2.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img3.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img4.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img5.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img6.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img7.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img8.png" alt="Image Description">
            </div>

            <div class="js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
              <img class="img-fluid g-max-width-170--md mx-auto" src="{{asset('vendor/business')}}/assets/img-temp/200x150/img9.png" alt="Image Description">
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
