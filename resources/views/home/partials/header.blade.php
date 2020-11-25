      <!-- Header v1 -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance"
              data-header-fix-moment="100">
        <div class="u-header__section g-theme-bg-blue-dark-v1-opacity-0_9 g-transition-0_3 g-py-25"
             data-header-fix-moment-exclude="g-py-25"
             data-header-fix-moment-classes="g-py-20">
          <nav class="navbar navbar-toggleable-md py-0">
            <div class="container">
              <!-- Logo -->
              <a href="#" class="navbar-brand u-header__logo">
                <img class="u-header__logo-img u-header__logo-img--main" src="{{asset('vendor/business')}}/assets/img/logotekno_tanpatagline.png" alt="Image Description">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
                <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-letter-spacing-2 g-font-size-11 g-pt-20 g-pt-0--lg ml-auto">
                  <li class="nav-item g-mr-15--lg g-mb-7 g-mb-0--lg active">
                    <a href="{{route('home')}}" class="nav-link g-color-white p-0">Beranda <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="about" class="nav-link g-color-white p-0">Tentang Kami</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="product" class="nav-link g-color-white p-0">Produk</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="service" class="nav-link g-color-white p-0">Servis</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="news" class="nav-link g-color-white p-0">Berita</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="career" class="nav-link g-color-white p-0">Karir</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="contact" class="nav-link g-color-white p-0">Kontak</a>
                  </li>
                </ul>
              </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-mt-8 ml-auto" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header v1 -->