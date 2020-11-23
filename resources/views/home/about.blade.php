<!DOCTYPE html>
<html lang="id">
<title>TeknoFluida</title>
@include('home.partials.head')

  <body>
    <main>
@include('home.partials.header')

      <!-- Promo Block -->
      <section class="g-flex-centered g-bg-pos-center g-bg-img-hero g-pos-rel g-z-index-1 g-overflow-hidden" style="background-image: url({{asset('vendor/home')}}/assets/img-temp/1920x1080/img15.png);" data-calc-target="#js-header">
        <div class="g-pos-abs g-top-0 g-left-0"
             data-animation="fadeInDown"
             data-animation-delay="100"
             data-animation-duration="1500">
          <img class="img-fluid" src="{{asset('vendor/home')}}/assets/img-temp/1920x1080/img15.png" alt="Image Description">
        </div>
        <div class="g-pos-abs g-bottom-0 g-right-0"
             data-animation="fadeInUp"
             data-animation-delay="1800"
             data-animation-duration="1500">
          <img class="img-fluid" src="{{asset('vendor/home')}}/assets/img-temp/1920x1080/img16.png" alt="Image Description">
        </div>

        <div class="container text-center g-z-index-1">
          <div class="mb-4">
            <h1 class="h2 d-inline-block g-color-black g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1"
                data-animation="fadeInDown"
                data-animation-delay="1000"
                data-animation-duration="1500"></h1>
            <h2 class="h2 d-inline-block g-color-white g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1"
                data-animation="fadeInDown"
                data-animation-delay="1200"
                data-animation-duration="1500">Tekno</h2>
            <h2 class="h2 d-inline-block g-color-white g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1"
                data-animation="fadeInDown"
                data-animation-delay="1400"
                data-animation-duration="1500">Fluida</h2>
          </div>

          <div class="mx-auto g-max-width-600 g-overflow-hidden">
            <p class="g-color-white g-font-size-18 g-font-size-24--md g-mb-40"
               data-animation="fadeInDown"
               data-animation-delay="1600"
               data-animation-duration="1500">
               Partner Anda Dalam Solusi Teknologi Fluida
            </p>
          </div>

          <div
               data-animation="fadeInDown"
               data-animation-delay="2000"
               data-animation-duration="1500">
          </div>
        </div>
      </section>
      <!-- End Promo Block -->

      <!-- About -->
      <section class="container g-pt-100 g-pb-70">
        <div class="row align-items-center">
          <div class="col-md-7 g-mb-30">
            <div class="g-mb-20">
              <span class="d-block g-color-gray-dark-v3 g-font-weight-700 g-font-size-13 text-uppercase"></span>
              <h2 class="h1 g-color-black g-font-weight-700 text-uppercase">Tentang Kami</h2>
            </div>

            <p class="lead">PT. Tekno Fluida Indonesia adalah perusahaan yang memiliki tenaga-tenaga professional berkualitas dengan total pengetahuan dan pengalaman kolektif lebih dari 25 tahun di bidang industri teknologi fluida. Kami menjual peralatan kebutuhan industri, memberikan jasa engineering serta desain dan integrasi. Spesialisasi kami adalah mendesain dan mengintegrasi produk-produk ke dalam sistem teknologi fluida.</p>          </div>

          <div class="col-md-5 g-mb-30">
            <img class="img-fluid mb-4" src="{{asset('vendor/home')}}/assets/img-temp/770x502/img1.png" alt="Image description">
          </div>
        </div>
      </section>
      <!-- End About -->

            <!-- Icon Blocks -->
            <section class="g-bg-gray-light-v5 g-pt-100 g-pb-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 g-mb-30">
              <!-- Icon Blocks -->
              <div class="text-center">
              <span class="d-block g-color-primary g-font-size-35 g-mb-5">
                <i class="icon-education-087 u-line-icon-pro"></i>
              </span>
                <h3 class="h5 g-color-black text-uppercase mb-3">Visi Kami</h3>
                <p class="g-color-gray-dark-v4">Menjadi perusahaan engineering yang berkompeten dan dapat diandalkan di bidang teknologi fluida untuk seluruh pelanggan kami di seluruh Indonesia.</p>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-4 g-mb-30">
              <!-- Icon Blocks -->
              <div class="text-center">
              <span class="d-block g-color-primary g-font-size-35 g-mb-5">
                <i class="icon-education-035 u-line-icon-pro"></i>
              </span>
                <h3 class="h5 g-color-black text-uppercase mb-3">Misi Kami</h3>
                <p class="g-color-gray-dark-v4">Dengan keseluruhan pengetahuan teknis dan keahlian engineering, kami selalu berupaya untuk memberikan pelayanan yang lebih dari ekspektasi di industri ini. Kami memberikan solusi teknik dengan kualitas terbaik, menyediakan dukungan dan servis yang terbaik.</p>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-4 g-mb-30">
              <!-- Icon Blocks -->
              <div class="text-center">
              <span class="d-block g-color-primary g-font-size-35 g-mb-5">
                <i class="icon-education-141 u-line-icon-pro"></i>
              </span>
                <h3 class="h5 g-color-black text-uppercase mb-3">Service Kami</h3>
                <p class="g-color-gray-dark-v4">Dalam menjalin kerjasama dengan pelanggan, kami mendedikasikan diri sepenuhnya untuk selalu mencari solusi yang paling efektif dan untuk tetap melakukan penyempurnaan di setiap masalah dari unit-unit engineering di pelanggan kami.</p>
              </div>
              <!-- End Icon Blocks -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Icon Blocks -->
      
      <!-- Icon Blocks -->
      <section class="g-pos-rel g-overflow-hidden">
        <div class="container g-pt-100 g-pb-50">
          <div class="row justify-content-between">
            <div class="col-lg-5 g-mb-50">
              <!-- Heading -->
              <div class="u-heading-v6-2 g-mb-60">
                <h2 class="u-heading-v6__title g-color-black g-font-weight-600 g-mb-30">Mengapa<br>Memilih Kami?
                </h2>
                <p class=" g-pl-90">Keinginan pelanggan adalah prioritas dan sumber inspirasi kami. Seluruh staff dan karyawan kami berkomitmen untuk memberikan pelayanan yang terbaik agar dapat selalu memenuhi keinginan dan kepuasan pelanggan kami.</p>
              </div>
              <!-- End Heading -->
            </div>

            <div class="col-lg-6">
              <!-- Icon Blocks -->
              <div class="row">
                <div class="col-sm-6 text-center text-lg-left g-mb-50">
                  <!-- Icon Blocks -->
                  <span class="u-icon-v1 u-icon-size--lg g-color-teal g-bg-teal-opacity-0_1 g-font-size-18 rounded-circle mb-4">
                  <i class="icon-education-087 u-line-icon-pro"></i>
                </span>
                  <h3 class="h5 g-color-black g-font-weight-600 mb-2">Penghematan Biaya</h3>
                  <p class="mb-0">Dimulai dari tahap perencanaan, konstruksi sampai kepada tahap pemeliharaan, kami menerapkan sistem pengadaan barang yang komprehensif, yang memungkinkan pelanggan untuk mendapatkan penawaran yang terbaik dan dengan keuntungan finansial dalam jangka panjang.</p>
                  <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 text-center text-lg-left g-mb-50">
                  <!-- Icon Blocks -->
                  <span class="u-icon-v1 u-icon-size--lg g-color-cyan g-bg-cyan-opacity-0_1 g-font-size-18 rounded-circle mb-4">
                  <i class="icon-education-035 u-line-icon-pro"></i>
                </span>
                  <h3 class="h5 g-color-black g-font-weight-600 mb-2">Dapat Diandalkan</h3>
                  <p class="mb-0">Team marketing dan service kami akan mendampingi pelanggan sebelum, selama dan sesudah proyek. Perencanaan, instalasi dan prosedur eksekusi dapat dilakukan oleh Team engineering kami yang berpengalaman dan ahli dibidangnya.</p>
                  <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 text-center text-lg-left g-mb-50">
                  <!-- Icon Blocks -->
                  <span class="u-icon-v1 u-icon-size--lg g-color-darkblue g-bg-darkblue-opacity-0_1 g-font-size-18 rounded-circle mb-4">
                  <i class="icon-education-141 u-line-icon-pro"></i>
                </span>
                  <h3 class="h5 g-color-black g-font-weight-600 mb-2">Keamanan dan Kualitas</h3>
                  <p class="mb-0">Kami berusaha memberikan desain, solusi dan implementasi sistem yang aman dan berkualitas baik. Kualitas sistem yang kami ajukan harus dapat melewati tes ketahanan dan masa aktif (life time).</p>
                  <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 text-center text-lg-left g-mb-50">
                  <!-- Icon Blocks -->
                  <span class="u-icon-v1 u-icon-size--lg g-color-purple g-bg-purple-opacity-0_1 g-font-size-18 rounded-circle mb-4">
                  <i class="icon-finance-256 u-line-icon-pro"></i>
                </span>
                  <h3 class="h5 g-color-black g-font-weight-600 mb-2">Mitra Kepercayaan</h3>
                  <p class="mb-0">Komitmen utama kami adalah membangun hubungan baik dan dalam jangka waktu lama dengan pelanggan-pelanggan dan supplier-supplier kami, dengan berlandaskan kepercayaan dan keuntungan bersama.</p>
                  <!-- End Icon Blocks -->
                </div>
              </div>
              <!-- End Icon Blocks -->
            </div>
          </div>
          <img class="g-width-600 g-pos-abs g-bottom-minus-25x g-z-index-minus-1" src="{{asset('vendor/home')}}/assets/img/maps/map3.png" alt="Image Description">
        </div>
      </section>
      <!-- End Icon Blocks -->

            <!-- PRODUK -->
      <section class="container g-pt-100 g-pb-70">
        <!-- Heading -->
        <div class="row justify-content-center text-center g-mb-50">
          <div class="col-lg-9">
            <h2 class="h3 g-color-black g-font-weight-600 text-uppercase mb-2">Produk Kami</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <p class="lead mb-0">Kami bekerja dengan keras untuk memberikan Anda solusi terbaik</p>
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

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--v1 u-block-hover__additional--slide-down g-bg-orange-opacity-0_9 g-pa-30">
                <div class="u-block-hover__additional--v1 g-flex-middle">
                  <div class="text-center g-flex-middle-item">
                    <h4 class="h4 g-color-white g-mb-5">Biodiesel B30 B20 Fuel Treatment</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 g-font-weight-600 text-uppercase g-color-white-opacity-0_9">Fuel Water Separator, Fuel Treatment Daily Tank, Main Tank, Unloading Pump Other </em>
                    <a class="u-link-v2" href="product"></a>
                  </div>
                </div>
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Team Block -->
          </div>

          <div class="col-lg-3 col-sm-6 g-mb-30">
            <!-- PRODUK -->
            <figure class="u-block-hover">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x450/img2.jpg" alt="Image description">
              <!-- End Figure Image-->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--v1 u-block-hover__additional--slide-up g-bg-orange-opacity-0_9 g-pa-30">
                <div class="u-block-hover__additional--v1 g-flex-middle">
                  <div class="text-center g-flex-middle-item">
                    <h4 class="h4 g-color-white g-mb-5">Hydraulic Power and Lubrication Unit</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 g-font-weight-600 text-uppercase g-color-white-opacity-0_9">Hydraulic Power, Lubrication Unit, Small Power Pack Unit</em>
                    <a class="u-link-v2" href="product"></a>
                  </div>
                </div>
              </figcaption>
              <!-- End Figure Caption -->
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
                    <h4 class="h4 g-color-white g-mb-5">Filtration Unit</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 g-font-weight-600 text-uppercase g-color-white-opacity-0_9">Hydraulic and Lubricant Filter, Filter Element, Low Pressure Filter, Maintenance Indicator (Clogging Indicator)</em>
                    <a class="u-link-v2" href="product"></a>
                  </div>
                </div>
              </figcaption>
              <!-- End Produk 3 -->
            </figure>
            <!-- End Team Block -->
          </div>

          <div class="col-lg-3 col-sm-6 g-mb-30">
            <!-- PRODUK -->
            <figure class="u-block-hover">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x450/img4.jpg" alt="Image description">
              <!-- End Figure Image-->

              <!-- Produk 4 -->
              <figcaption class="u-block-hover__additional--v1 u-block-hover__additional--slide-right g-bg-orange-opacity-0_9 g-pa-30">
                <div class="u-block-hover__additional--v1 g-flex-middle">
                  <div class="text-center g-flex-middle-item">
                    <h4 class="h4 g-color-white g-mb-5">Fluid Separation Unit</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 g-font-weight-600 text-uppercase g-color-white-opacity-0_9">Crude and Waste Oil Dewatering Unit, Oil Purifier Unit</em>
                    <a class="u-link-v2" href="product"></a>
                  </div>
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

    <!-- Service -->
    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
        <!-- Parallax Image -->
        <div class="dzsparallaxer--target w-100 g-bg-size-cover g-bg-pos-center" style="height: 200%; background-image: url({{asset('vendor/home')}}/assets/img-temp/1920x800/img1.jpg);"></div>
        <!-- End Parallax Image -->

        <!-- SERVIS -->
        <div class="container text-center g-py-130">
          <h3 class="h3 g-color-white g-font-weight-300 mb-2">Servis Kami</h3>
          <p class="g-color-white g-font-weight-600 g-font-size-35 text-uppercase">Dengan tim yang berpengalaman dan berkualifikasi, kami mampu memberikan pelayanan jasa yang luas dan komprehensif kepada pelanggan kami.</p>
        </div>
        <!-- Promo Block Content -->
      </section>
      <!-- End Promo Block -->

      <!-- News Blocks -->
      <section class="container g-pt-100 g-pb-70">
        <div class="row">
          <div class="col-lg-4 g-mb-30">
            <!-- Article -->
            <article class="u-shadow-v1-3">
              <figure class="g-pos-rel">
                <img class="img-fluid w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x270/img1.jpg" alt="Image Description">
              </figure>

              <div class="g-pa-20">
                <h3 class="h4 g-font-weight-300 g-mb-15">
                  <a class="u-link-v5 g-color-main g-color-primary--hover g-text-underline--none--hover" href="service">Filtrasi dan Purifikasi</a>
                </h3>
                <div class="g-mb-30">
                  <p>Kami berkomitmen untuk memberikan kepada pelanggan-pelanggan kami solusi filtrasi terbaik di bidang Proses Teknologi, Sistem Fluida dan Udara Industri. Kami menawarkan filter beserta peralatan dan sistem untuk membersihkan dan memproses oli-oli industri dan pelumas-pelumas, filtrasi partikel dari udara dan gas, filtrasi diesel serta filtrasi air.</p>
                </div>
                <div class="media g-font-size-12">
                  <div class="align-self-center">
                  </div>
                </div>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="col-lg-4 g-mb-30">
            <!-- Article -->
            <article class="u-shadow-v1-3">
              <figure class="g-pos-rel">
                <img class="img-fluid w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x270/img13.jpg" alt="Image Description">
              </figure>
              <div class="g-pa-20">
                <h3 class="h4 g-font-weight-300 g-mb-15">
                  <a class="u-link-v5 g-color-main g-color-primary--hover g-text-underline--none--hover" href="service">Monitoring Kondisi</a>
                </h3>
                <div class="g-mb-30">
                  <p>Monitoring kondisi adalah bagian yang sangat penting dari kesehatan sistem hidrolik atau lubrikasi. Tim kami akan memberikan kepada Anda solusi monitoring kondisi yang modern, yang akan dapat menaikkan produktifias, menurunkan biaya operasi dan mengoptimalkan performa peralatan.</p>
                </div>
                <div class="media g-font-size-12">
                <div class="align-self-center">
                  </div>
                </div>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="col-lg-4 g-mb-30">
            <!-- Article -->
            <article class="u-shadow-v1-3">
              <figure class="g-pos-rel">
                <img class="img-fluid w-100" src="{{asset('vendor/home')}}/assets/img-temp/400x270/img8.jpg" alt="Image Description">
              </figure>
              <div class="g-pa-20">
                <h3 class="h4 g-font-weight-300 g-mb-15">
                  <a class="u-link-v5 g-color-main g-color-primary--hover g-text-underline--none--hover" href="service">Biodiesel Fuel Treatment</a>
                </h3>
                <div class="g-mb-30">
                  <p></p>
                </div>
                <div class="media g-font-size-12">
                  <div class="align-self-center">
                  </div>
                </div>
              </div>
            </article>
            <!-- End Article -->
          </div>
        </div>
      </section>
      <!-- End News Blocks -->

      <!-- Clients -->
      <section>
        <div id="clients" class="js-carousel g-brd-top g-brd-bottom g-brd-gray-light-v4"
             data-autoplay="true"
             data-lazy-load="ondemand"
             data-slides-show="6">
          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img1.png" alt="Image description">
          </div>

          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img2.png" alt="Image description">
          </div>

          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img3.png" alt="Image description">
          </div>

          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img4.png" alt="Image description">
          </div>

          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img5.png" alt="Image description">
          </div>

          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img6.png" alt="Image description">
          </div>

          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img7.png" alt="Image description">
          </div>

          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img8.png" alt="Image description">
          </div>

          <div class="js-slide u-block-hover g-brd-left g-brd-gray-light-v4 g-py-50">
            <img class="mx-auto g-width-120 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src= "{{asset('vendor/home')}}/assets/img-temp/200x100/img9.png" alt="Image description">
          </div>
        </div>
      </section>
      <!-- End Clients -->

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
