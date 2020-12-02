<!DOCTYPE html>
<html lang="en">
<title>Tentang Kami | TeknoFluida</title>
@include('home.partials.head')
  <body>
    <main>
@include('home.partials.header')

      <!-- ARTICLE -->
      <section id="services" class="g-py-80 g-theme-bg-white-v1">
      <div class="container text-center g-width-780 g-color-gray-light-v2 g-mb-60">
          <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
            <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20">Berita</h4>
            <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-black g-mb-minus-10">Purifier Oli - DS-M-36</h2>
          </div>
          <img class="img-fluid w-100 g-mb-25" src="{{asset('vendor/business')}}/assets/img-temp/740x380/img1.jpg" alt="Image Description">
          <p class="g-color-grey mb-0">Kami menyediakan Purifier Oli DS-M-36 untuk menunjang peralatan di pembangkit listrik supaya dapat beroperasi dengan handal. Purifier ini digunakan untuk memperjang umur oli turbin dengan mengeluarkan air, gas dan kontaminan padat dari oli.</p>
        </div>

          
        </div>
      </section>
      <!-- End ARTICLE -->

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
