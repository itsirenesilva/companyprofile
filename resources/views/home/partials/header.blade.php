      <!-- Header -->
      <header id="js-header" class="u-header u-header--static">
        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
          <nav class="js-mega-menu navbar navbar-toggleable-md">
            <div class="container">
              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-right-0" type="button"
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

              <!-- Logo -->
              <a href="index" class="navbar-brand">
                <img src="{{asset('vendor/home')}}/assets/img/logo/logo-1.png" alt="Image Description">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
                <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">

                  <!-- Beranda -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="{{route('home')}}" class="nav-link g-py-7 g-px-0">Beranda</a>
                  </li>
                  <!-- End Beranda -->

                  <!-- Tentang Kami -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="about" class="nav-link g-py-7 g-px-0">Tentang Kami</a>
                  </li>
                  <!-- End Tentang Kami -->

                  <!-- Produk -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="product" class="nav-link g-py-7 g-px-0">Produk</a>
                  </li>
                  <!-- End Produk -->

                  <!-- Servis -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="service" class="nav-link g-py-7 g-px-0">Servis</a>
                  </li>
                  <!-- End Servis -->

                  <!-- Berita -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="news" class="nav-link g-py-7 g-px-0">Berita</a>
                  </li>
                  <!-- End Berita -->
                  
                  <!-- Karir -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="career" class="nav-link g-py-7 g-px-0">Karir</a>
                  </li>
                  <!-- End Karir -->

                  <!-- Kontak -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="contact" class="nav-link g-py-7 g-px-0">Kontak</a>
                  </li>
                  <!-- End Kontak -->
                </ul>
              </div>
              <!-- End Navigation -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->