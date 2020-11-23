<!DOCTYPE html>
<html lang="id">
<title>TeknoFluida</title>
@include('home.partials.head')

  <body>
    <main>
@include('home.partials.header')
    
                  <!-- Section Content -->
                  <section id="FAQ" class="g-py-90">
        <div class="container">
          <div class="text-uppercase g-line-height-1_3 g-mb-20">
            <h4 class="g-font-weight-700 g-font-size-11 g-mb-15"><span class="g-color-primary">Kapabilitas</span> Kami</h4>
            <h2 class="g-font-size-36 mb-0">Apa yang bisa <strong>kami kerjakan?</strong></h2>
          </div>

          <p class="g-mb-65">Dengan tim yang berpengalaman dan berkualifikasi, kami mampu memberikan pelayanan jasa yang luas dan komprehensif kepada pelanggan kami.</p>

          <!-- Nav tabs -->
          <ul class="nav u-nav-v5-1 text-uppercase g-line-height-1_4 g-font-weight-700 g-font-size-11 g-brd-bottom--md g-brd-gray-light-v4" role="tablist"
              data-target="FAQTabs"
              data-tabs-mobile-type="slide-up-down"
              data-btn-classes="btn btn-md u-btn-primary btn-block rounded-0 u-btn-outline-lightgray">
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md active" data-toggle="tab" href="#filtrasi" role="tab">Filtrasi dan Purifikasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#varnisholi" role="tab">Kontrol Varnish Oli</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#pendingin" role="tab">Sistem Pendingin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#akumulator" role="tab">Sistem Akumulator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#hidrolik" role="tab">Hidrolik dan Lubrikasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#pemipaan" role="tab">Sistem Pemipaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#flushing" role="tab">Service Flushing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#sewa" role="tab">Penyewaan Alat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#monitoring" role="tab">Monitoring Kondisi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link g-px-0--md g-pb-15--md g-mr-30--md" data-toggle="tab" href="#training" role="tab">Training Engineering Fluida</a>
            </li>
          </ul>
          <!-- End Nav tabs -->

          <!-- Filtrasi -->
          <div id="FAQTabs" class="tab-content g-pt-20">
            <div class="tab-pane fade show active" id="filtrasi" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">

                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Filtrasi</h4>
                <img class="img-fluid u-shadow-v21" src="{{asset('vendor/home')}}/assets/img-temp/400x270/img1.jpg" alt="Image Description">
              <br></br>
                <p class="g-font-size-default g-mb-30">Kami berkomitmen untuk memberikan kepada pelanggan-pelanggan kami solusi filtrasi terbaik di bidang Proses Teknologi, Sistem Fluida dan Udara Industri. Kami menawarkan filter beserta peralatan dan sistem untuk membersihkan dan memproses oli-oli industri dan pelumas-pelumas, filtrasi partikel dari udara dan gas, filtrasi diesel serta filtrasi air.</p>
              </div>

              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Purifikasi Oli</h4>
                <p class="g-font-size-default g-mb-30">Kami ahli di dalam memberikan solusi untuk menghilangkan partikel dan air dari oli lubrikasi, oli hidrolik, diesel and fluida hidrokarbon lainnya. Vacuum Oil Purifier kami dapat digunakan secara efektif untuk menghilangkan partikel, air, gas dan mengoptimalkan kondisi fluida. Kami juga menawarkan pelanggan-pelanggan kami oil conditioning systems, yang dapat digunakan secara cepat dan efektif untuk menghilangkan air dan partikel dari oli turbin.</p>
              </div>
            </div>

            <!-- Varnish Oli -->
            <div class="tab-pane fade" id="varnisholi" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Kontrol Kontaminasi</h4>
                <p class="g-font-size-default g-mb-30">Kami mempunyai kapabilitas untuk memberikan Anda teknologi mitigasi varnish terdepan untuk mengontrol kontaminasi-kontaminasi di sistem lubrikasi vital Anda. Dengan teknologi ESP dari Fluitec memungkinkan Anda untuk menghilangkan mayoritas kontaminasi-kontaminasi yang paling merusak di dalam fluida Anda dan memperpanjang aset pelumas Anda serta meningkatkan efisiensi pabrik dan waktu operasi.</p>
              </div>

              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Monitor Degradasi Oli dan Varnish</h4>
                <p class="g-font-size-default g-mb-30">Implementasi rencana untuk memonitor kesehatan dari oli dan sistem Anda merupakan faktor yang sangat penting untuk memastikan bahwa pelumas Anda terlindungi dari degradasi yang berlebihan. Dengan basis dari analisa-analisa oli, kami mampu memonitor proses degradasi oli. Tim kami menawarkan dukungan teknis terbaik dan berbagai referensi program-program memonitor kontaminasi.</p>
              </div>

              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Peningkatan Mutu Fluida</h4>
                <p class="g-font-size-default g-mb-30">Fluitec telah menciptakan teknologi paten yang dapat menambah anti oksidan yang telah terdegradasi di dalam oli - mengganti kimiawi yang buruk dengan kimiawi baik. Boost AO dapat melipatgandakan umur oli Anda dengan meregenerasi anti oksidan kritis di sistem Anda. Boost VR  adalah sebuah metode yang lebih aman dan murah untuk menghilangkan varnish dan deposit di sistem lubrikasi Anda.</p>
              </div>
            </div>

            <!-- Sistem Pendingin -->
            <div class="tab-pane fade" id="pendingin" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Sistem Pendingin</h4>
                <p class="g-font-size-default g-mb-30">Temperatur dari fluida memegang peranan penting didalam mengoperasikan sistem hidrolik dan lubrikasi pada efisiensi optimalnya. Panas yang berlebihan atau sistem pendingin yang berlebihan dapat menyebabkan kebocoran yang tak terduga, biaya operasional yang tinggi, biaya perawatan yang tinggi dan kehilangan produktifitas.
Staff kami yang mumpuni dan berpengalaman akan membantu Anda untuk memilih teknologi pendingin yang tepat. Kami akan bekerja dengan optimal untuk memastikan bahwa sistem pendingin bisa berjalan dengan sangat efisien dan efektif.</p>
              </div>
            </div>

            <!-- Akumulator -->
            <div class="tab-pane fade" id="akumulator" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Akumulator</h4>
                <p class="g-font-size-default g-mb-30">Kami mempunyai pengalaman di 3 jenis akumulator utama - tipe bladder, tipe diafragma dan tipe piston, kami memberikan konsultasi yang komperensif kepada pelanggan-pelanggan kami didalam memilih tipe akumulator dan menentukan model akumulator yang tepat.</p>
              </div>

              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Servis Akumulator</h4>
                <p class="g-font-size-default g-mb-30">Teknisi kami yang berpengalaman dan mumpuni mempunyai kemampuan untuk memelihara dan memperbaiki mayoritas akumulator-akumulator hidrolik yang ada. Jika Anda mempunyai masalah dengan akumulator Anda di mana pun di Indonesia, Anda dapat menghubungi kami dan kami akan memperbaikinya. Gunakan kesempatan ini untuk mendapatkan pelayanan terbaik dari kemampuan dan pengetahuan kami.</p>
              </div>

              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Aksesoris Akumulator</h4>
                <p class="g-font-size-default g-mb-30">Kami juga menawarkan aksesoris akumulator, perlengkapan-perlengkapan instalasi dan peralatan keamanan untuk kenyamanan dan keamanan Anda. Kami selalu di sini untuk membantu Anda.</p>
              </div>
            </div>

            <!-- Hidrolik -->
            <div class="tab-pane fade" id="hidrolik" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Hidrolik dan Lubrikasi</h4>
                <p class="g-font-size-default g-mb-30">Tim engineering kami merupakan spesialis didalam merancang dan memproduksi sistem hidrolik dan lubrikasi standard atau khusus. Kami mempunyai spesialis yang kompeten dan memliki variasi produk yang luas.
Unit-unit hidrolik dan lubrikasi yang kami buat, dirancang dan diproduksi secara internal menggunakan teknologi termutahir. Setiap unit yang kami kirim dilengkapi dengan sirkuit diagram dan daftar material yang lengkap. Kami juga dapat memberikan jasa instalasi, dukungan pengujian operasional, servis dan perawatan dari sistem di lokasi jika dibutuhkan. Anda tinggal memberikan spesifikasi-spesifikasi yang diperlukan dan kami akan menentukan solusi terbaik untuk memenuhi kebutuhan Anda.</p>
              </div>
            </div>

            <!-- Pemipaan -->
            <div class="tab-pane fade" id="pemipaan" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Pemipaan</h4>
                <p class="g-font-size-default g-mb-30">Kami menyediakan jasa yang berkualitas dan efisien untuk instalasi pipa hidrolik dan lubrikasi, mulai dari konsep sampai pengujian operasional, yang mencakup desain, supervisi, perakitan, instalasi, tes tekanan dan flushing. 
Berikan kami kesempatan untuk melayani Anda dan kami akan menunjukkan kepada Anda mengapa pelanggan-pelanggan kami menghubungi TeknoFluida untuk permintaan-permintaan pipa, katup dan perlengkapan mereka!</p>
              </div>
            </div>

            <!-- Flushing -->
            <div class="tab-pane fade" id="flushing" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Mechanical Flushing</h4>
                <p class="g-font-size-default g-mb-30">TeknoFluida memberikan jasa flushing oli dengan kecepatan tinggi, menggunakan oli panas yang mengalir turbulen untuk membersihkan partikel-partikel dan kontaminasi dari dalam pipa dan komponen di sistem.</p>
              </div>

              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Chemical Flushing</h4>
                <p class="g-font-size-default g-mb-30">Dengan chemical cleaning / pickling kami memastikan bahwa residu kontaminasi dan campuran kimia dari partikel-partikel karat dan korosif tidak mengkontaminasi oli dan merusak komponen-komponen.</p>
              </div>

              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Solubility Enhanced System Cleaning</h4>
                <p class="g-font-size-default g-mb-30">Kami juga menawarkan aksesoris akumulator, perlengkapan-perlengkapan instalasi dan peralatan keamanan untuk kenyamanan dan keamanan Anda. Kami selalu di sini untuk membantu Anda.</p>
              </div>
            </div>

            <!-- Sewa -->
            <div class="tab-pane fade" id="sewa" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Penyewaan Alat</h4>
                <p class="g-font-size-default g-mb-30">Pada saat peralatan dibutuhkan hanya untuk masa waktu yang singkat, misalnya pada peralatan spesial atau peralatan yang harganya sangat mahal, sewa mungkin akan menjadi solusi yang paling mudah dan yang paling ekonomis untuk para pengguna. TeknoFluida dapat menawarkan paket sewa, satu alternatif yang lebih ekonomis bila dibandingkan dengan pengadaan peralatan khusus yang membutuhkan biaya yang besar dalam waktu yang singkat.
Beberapa pelanggan-pelanggan kami pada awalnya mengambil kesempatan untuk mencoba kualitas produk dan pelayanan kami melalui sewa, sebelum mereka akhirnya memutuskan untuk membeli produk kami.
Jika Anda membutuhkan purifier, peralatan tes, sistem filtrasi mobile atau unit flushing, kami siap membantu Anda untuk memberikan saran dan servis yang Anda minta. Paket sewa yang kami tawarkan mencakup dukungan teknis selama instalasi dan pengujian operasional.
Silahkan menghubungi kami untuk menanyakan ketersediaan, spesifikasi teknis dan harga-harga sewa dari peralatan kami.</p>
              </div>
            </div>

            <!-- Monitoring -->
            <div class="tab-pane fade" id="monitoring" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Monitoring Kondisi</h4>
                <p class="g-font-size-default g-mb-30">Di TeknoFluida kami mengerti bahwa pencegahan lebih baik dari "penyembuhan". 
Monitoring kondisi adalah bagian yang sangat penting dari kesehatan sistem hidrolik atau lubrikasi. Tim kami akan memberikan kepada Anda solusi monitoring kondisi yang modern, yang akan dapat menaikkan produktifias, menurunkan biaya operasi dan mengoptimalkan performa peralatan.
Kami dapat menganalisa permasalahan Anda dan menawarkan peralatan monitoring kondisi yang komprehensif, yang berasal dari merek-merek berkualitas terdepan di dunia.</p>
              </div>
            </div>

            <!-- Training -->
            <div class="tab-pane fade" id="training" role="tabpanel">
              <div class="g-brd-bottom g-theme-brd-gray-light-v1 g-py-40">
                <h4 class="h6 text-uppercase g-font-weight-700 g-mb-10">Training Engineering Fluida</h4>
                <p class="g-font-size-default g-mb-30">Kami mengerti bahwa sangat penting bagi kami untuk tidak hanya menjual komponen-komponen dan service terbaik, akan tetapi juga menjual kompetensi. Kami membagikan pengetahuan dan memberikan edukasi dan training kepada pelanggan-pelanggan kami.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->

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
