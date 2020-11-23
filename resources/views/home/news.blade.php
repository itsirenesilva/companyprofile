<!DOCTYPE html>
<html lang="id">
<title>TeknoFluida</title>
@include('home.partials.head')

  <body>
    <main>
@include('home.partials.header')

      <!-- Gallery -->
      <section class="container-fluid g-px-0">
        <div class="row align-items-center no-gutters">
          <div class="col-md-6">
            <div class="text-center g-pa-15x">
              <div class="mb-5">
                <h3 class="h1 g-color-black mb-4">The Perfect Idea</h3>
                <p class="g-color-gray-dark-v4 g-font-size-16">Understanding who you are and what you want is our strategy for your brand. We are always figuring out ways to capture your vision, so people can get on board.</p>
              </div>
              <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13" href="#">See more
                <i class="ml-2 fa fa-long-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-md-6">
            <div class="g-flex-centered g-min-height-600 g-bg-secondary text-center">
              <div class="u-shadow-v19 g-bg-white g-pa-25">
                <img class="img-fluid u-shadow-v21" src="{{asset('vendor/home')}}/assets/img-temp/400x270/img15.jpg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery -->

      <!-- Gallery -->
      <section class="container-fluid g-px-0">
        <div class="row align-items-center no-gutters">
          <div class="col-md-6 flex-md-unordered">
            <div class="text-center g-pa-15x">
              <div class="mb-5">
                <h3 class="h1 g-color-black mb-4">Goldrush</h3>
                <p class="g-color-gray-dark-v4 g-font-size-16">Understanding who you are and what you want is our strategy for your brand. We are always figuring out ways to capture your vision, so people can get on board.</p>
              </div>
              <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13" href="#">See more
                <i class="ml-2 fa fa-long-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-md-6 flex-md-first">
            <div class="g-flex-centered g-min-height-600 g-bg-secondary text-center">
              <div class="u-shadow-v19 g-bg-white g-pa-25">
                <img class="img-fluid u-shadow-v21" src="{{asset('vendor/home')}}/assets/img-temp/400x270/img13.jpg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery -->

            <!-- Gallery -->
            <section class="container-fluid g-px-0">
        <div class="row align-items-center no-gutters">
          <div class="col-md-6">
            <div class="text-center g-pa-15x">
              <div class="mb-5">
                <h3 class="h1 g-color-black mb-4">The Perfect Idea</h3>
                <p class="g-color-gray-dark-v4 g-font-size-16">Understanding who you are and what you want is our strategy for your brand. We are always figuring out ways to capture your vision, so people can get on board.</p>
              </div>
              <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13" href="#">See more
                <i class="ml-2 fa fa-long-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-md-6">
            <div class="g-flex-centered g-min-height-600 g-bg-secondary text-center">
              <div class="u-shadow-v19 g-bg-white g-pa-25">
                <img class="img-fluid u-shadow-v21" src="{{asset('vendor/home')}}/assets/img-temp/400x270/img15.jpg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery -->

      <!-- Gallery -->
      <section class="container-fluid g-px-0">
        <div class="row align-items-center no-gutters">
          <div class="col-md-6 flex-md-unordered">
            <div class="text-center g-pa-15x">
              <div class="mb-5">
                <h3 class="h1 g-color-black mb-4">Goldrush</h3>
                <p class="g-color-gray-dark-v4 g-font-size-16">Understanding who you are and what you want is our strategy for your brand. We are always figuring out ways to capture your vision, so people can get on board.</p>
              </div>
              <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13" href="#">See more
                <i class="ml-2 fa fa-long-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-md-6 flex-md-first">
            <div class="g-flex-centered g-min-height-600 g-bg-secondary text-center">
              <div class="u-shadow-v19 g-bg-white g-pa-25">
                <img class="img-fluid u-shadow-v21" src="{{asset('vendor/home')}}/assets/img-temp/400x270/img13.jpg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery -->
      
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
