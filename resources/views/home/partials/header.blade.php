      <!-- Header v1 -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance g-z-index-9999"
              data-header-fix-moment="100">
        <div class="light-theme u-header__section g-bg-black-opacity-0_7 g-transition-0_3 g-py-10"
             data-header-fix-moment-exclude="light-theme g-bg-black-opacity-0_7"
             data-header-fix-moment-classes="dark-theme g-bg-white-opacity-0_9">
          <nav class="navbar navbar-toggleable-md g-py-0">
            <div class="container">
              <!-- Logo -->
              <a href="{{route('home')}}" class="navbar-brand u-header__logo">
                <img class="u-header__logo-img u-header__logo-img--main d-block" src="{{asset('vendor/business')}}/assets/img/logotekno_tanpatagline.png" alt="Image description"
                     data-header-fix-moment-exclude="d-block"
                     data-header-fix-moment-classes="d-none">

                <img class="u-header__logo-img u-header__logo-img--main d-none" src="{{asset('vendor/business')}}/assets/img/logotekno_tanpatagline.png" alt="Image description"
                     data-header-fix-moment-exclude="d-none"
                     data-header-fix-moment-classes="d-block">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div class="js-mega-menu collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-font-weight-600 ml-auto">
                <li class="nav-item g-mx-20--lg">
                  <a href="{{route('home')}}" class="nav-link g-px-0">Beranda <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item g-mx-20--lg">
                  <a href="about" class="nav-link g-px-0">Tentang Kami</a>
                </li>

                <li class="nav-item g-mx-20--lg">
                  <a href="product" class="nav-link g-px-0">Produk</a>
                </li>

                <li class="nav-item g-mx-20--lg">
                  <a href="service" class="nav-link g-px-0">Servis</a>
                </li>

                <li class="nav-item hs-has-sub-menu active g-mx-20--lg">
                  <a href="#" class="nav-link g-px-0" id="nav-link-1"
                     aria-haspopup="true"
                     aria-expanded="false"
                     aria-controls="nav-submenu-1"
                  >Berita</a>

                  <!-- Submenu -->
                  <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-1"
                      aria-labelledby="nav-link-1">
                    <li class="dropdown-item"><a class="nav-link g-px-0" href="achievement">Achievement</a></li>
                    <li class="dropdown-item"><a class="nav-link g-px-0" href="article">Artikel</a></li>
                    <li class="dropdown-item"><a class="nav-link g-px-0" href="news">Berita</a></li>
                  </ul>
                  <!-- End Submenu -->
                </li>

                <li class="nav-item g-mx-20--lg">
                  <a href="career" class="nav-link g-px-0">Karir</a>
                </li>

                <li class="nav-item g-ml-20--lg g-mr-0--lg">
                  <a href="contact" class="nav-link g-px-0">Kontak</a>
                </li>
              </ul>
            </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-mt-15 ml-auto" type="button"
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