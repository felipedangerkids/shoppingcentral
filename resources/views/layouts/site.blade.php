<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="{{ url('assets/img/favicon.ico') }}" />
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
  <title>Shopping Central</title>
</head>
<style>


</style>

<body style="margin: 0; background: rgba(25, 25, 25, 1)">
  <input type="hidden" id="anPageName" name="page" value="shop-app-home" />
  <div class="container-center-horizontal">
    <div class="shop-app-home screen">
      <div class="flex-col-C61RwL">
        <div class="overlap-group-0xy0vn">
          <div class="barracolorida-y1HRxC">
            <div class="group-11-Xs8u4z">
              <div class="overlap-group1-nzCgta">
                <div class="barra-vermelha-svg-cBBgRE"></div>
                <div class="barra-azul-svg-cBBgRE"></div>
              </div>
              <div class="overlap-group2-nzCgta">
                <div class="barra-rosa-svg-0Ia9xa"></div>
                <div class="barra-branca-svg-0Ia9xa"></div>
              </div>
            </div>
          </div>
          <div class="rectangle-21-y1HRxC"></div>
          <div class="storiestopo-y1HRxC">
            <div class="circulo-svg-bkBUvi">
              <img class="mask-group-jhxcxO" src="{{ url('assets/img/mask-group@2x.svg') }}" />
              <img class="circulo-interno-svg-jhxcxO" src="{{ url('assets/img/circulo-interno-svg@2x.svg') }}" />
            </div>
            <div class="boticrio-i545537-bkBUvi barlow-black-white-20px">Boticário</div>
          </div>
          <div class="storiestopo-pqRchW">
            <div class="circulo-svg-cVM2MY">
              <img class="mask-group-lXOMxY" src="{{ url('assets/img/mask-group@2x.svg') }}" />
              <img class="circulo-interno-svg-lXOMxY" src="{{ url('assets/img/circulo-interno-svg@2x.svg') }}" />
            </div>
            <div class="boticrio-i8548537-cVM2MY barlow-black-white-20px">Boticário</div>
          </div>
          <div class="storiestopo-7bcoqY">
            <div class="circulo-svg-xmYI7Q">
              <img class="mask-group-RBhHiT" src="{{ url('assets/img/mask-group@2x.svg') }}" />
              <img class="circulo-interno-svg-RBhHiT" src="{{ url('assets/img/circulo-interno-svg@2x.svg') }}" />
            </div>
            <div class="boticrio-i8555537-xmYI7Q barlow-black-white-20px">Boticário</div>
          </div>
          <div class="iconemenu-y1HRxC"></div>
          <div class="iconeperfil-y1HRxC"></div>
          <div class="logo-shop-y1HRxC"></div>
        </div>
        <img class="banner-home-img-0xy0vn" src="{{ url('assets/img/banner-home-img@2x.png') }}" />
        @yield('content')
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ url('assets/js/jquery.maskMoney.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
    </script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @if(Session::has('success'))
    <script type="text/javascript">
      Swal.fire({
          icon: 'success',
          title: 'Muito bom!',
          text: "{{Session::get('success')}}",
          
          }).then((value) => {
          location.reload();
          }).catch(swal.noop);
    </script>
    @endif

    <script>
      $('.menu a').click(function(){

$('.trigger').toggle();
// $('.menu').toggleClass('round');
$('.close').toggle();
$('.drop-down').toggleClass('down');


});
    </script>
</body>

</html>