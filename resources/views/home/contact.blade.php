<!DOCTYPE html>
<html lang="id">
<title>TeknoFluida</title>
@include('home.partials.head')

  <body>
    <main>
@include('home.partials.header')

<!-- Icon Blocks -->
<section class="clearfix g-brd-bottom g-brd-gray-light-v4">
        <!-- Icons Block -->
        <div class="row no-gutters g-py-60">
          <div class="col-md-6 col-lg-4 g-brd-right--md g-brd-gray-light-v4">
            <!-- Icon Blocks -->
            <div class="text-center g-py-20">
              <span class="u-icon-v1 u-icon-size--xl g-color-orange g-mb-10">
                <i class="icon-real-estate-027 u-line-icon-pro"></i>
              </span>
              <h4 class="h5 g-font-weight-600 g-mb-5">Alamat</h4>
              <span class="d-block">Kawasan Multiguna</span>
              <span class="d-block">Taman Tekno BSD - Sektor XI</span>
              <span class="d-block">Blok H2 No. 3A</span>
              <span class="d-block">15314 Tangerang, Indonesia</span>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-md-6 col-lg-4 g-brd-right--md g-brd-gray-light-v4">
            <!-- Icon Blocks -->
            <div class="text-center g-py-20">
              <span class="u-icon-v1 u-icon-size--xl g-color-orange g-mb-10">
                <i class="icon-communication-062 u-line-icon-pro"></i>
              </span>
              <h4 class="h5 g-font-weight-600 g-mb-5">Email</h4>
              <span class="d-block">info@teknofluida.id</span>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-md-6 col-lg-4 g-brd-right--md g-brd-gray-light-v4">
            <!-- Icon Blocks -->
            <div class="text-center g-py-20">
              <span class="u-icon-v1 u-icon-size--xl g-color-orange g-mb-10">
                <i class="icon-electronics-005 u-line-icon-pro"></i>
              </span>
              <h4 class="h5 g-font-weight-600 g-mb-5">Phone Number</h4>
              <span class="d-block">+62-21-75876580</span>
            </div>
            <!-- End Icon Blocks -->

      </section>
      <!-- End Icon Blocks -->

      <!-- Contact Form -->
      <section class="container g-py-100">
        <div class="row justify-content-center g-mb-70">
          <div class="col-lg-7">
            <!-- Heading -->
            <div class="text-center">
              <h2 class="h1 g-color-gray g-font-weight-700 text-uppercase mb-4">Beritahu Kami Tentang Anda</h2>
              <div class="d-inline-block g-width-300 g-height-2 g-bg-orange mb-4"></div>
              <p class="g-font-size-18 mb-0">Silahkan tinggalkan pesan atau pertanyaan dengan mengisi formulir dibawah ini. Tim sales kami akan segera menghubungi Anda.</p>
            </div>
            <!-- End Heading -->
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <form>
              <div class="row">
                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="text" placeholder="Name">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="email" placeholder="Email">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="text" placeholder="Subject">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="tel" placeholder="Phone">
                </div>

                <div class="col-md-12 form-group g-mb-40">
                  <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover g-resize-none rounded-3 g-py-13 g-px-15" rows="7" placeholder="Message"></textarea>
                </div>
              </div>

              <div class="text-center">
                <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-25 g-py-15 g-px-30" type="submit" role="button">Send Request</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- End Contact Form -->
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
