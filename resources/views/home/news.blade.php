<!DOCTYPE html>
<html lang="en">
<title>Tentang Kami | TeknoFluida</title>
@include('home.partials.head')
  <body>
    <main>
@include('home.partials.header')

 

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
