    <!-- JS Global Compulsory -->
    <script src="{{asset('vendor/business')}}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/jquery.easing/js/jquery.easing.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/tether.min.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{asset('vendor/business')}}/assets/vendor/appear.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/gmaps/gmaps.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{asset('vendor/business')}}/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/typedjs/typed.min.js"></script>
    <script src="{{asset('vendor/business')}}/assets/vendor/circles/circles.min.js"></script>

    <!-- JS Unify -->
    <script src="{{asset('vendor/business')}}/assets/js/hs.core.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.header.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/helpers/hs.hamburgers.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.scroll-nav.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.carousel.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/gmap/hs.map.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.go-to.js"></script>

    <!-- JS Unify -->
    <script src="{{asset('vendor/business')}}/assets/js/helpers/hs.height-calc.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.tabs.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.popup.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/text-animation/hs.text-slideshow.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.rating.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.onscroll-animation.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.counter.js"></script>
    <script src="{{asset('vendor/business')}}/assets/js/components/hs.chart-pie.js"></script>

    <!-- JS Customization -->
    <script src="{{asset('vendor/business')}}/assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      // initialization of google map
      function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
      }

      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#carouselCus1').slick('setOption', 'responsive', [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }], true);

        $('#carouselCus2').slick('setOption', 'responsive', [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }], true);

        $('#carouselCus3').slick('setOption', 'responsive', [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 5
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }], true);

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700,
          easing: 'easeOutExpo'
        });
      });
    </script>

    <!-- JS Plugins Init. BANNER -->
    <script>
      $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of header height offset
        $.HSCore.helpers.HSHeightCalc.init();

        // initialization of scroll animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of chart pies with rtl option
        var rtlItems = $.HSCore.components.HSChartPie.init('.js-pie-rtl', {
          rtl: true
        });

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
          spacing: 4
        });

        // initialization of popups with media
        $.HSCore.components.HSPopup.init('.js-fancybox-media', {
          helpers: {
            media: {},
            overlay: {
              css: {
                'background': 'rgba(255, 255, 255, .8)'
              }
            }
          }
        });

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
          strings: [
            "berkarir di teknofluida"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 1500
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
    </script>