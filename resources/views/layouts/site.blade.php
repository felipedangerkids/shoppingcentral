<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="shortcut icon" href="{{ url('assets/img/favicon.ico') }}" />
      <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
      <!-- Add the slick-theme.css if you want default styling -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
      <!-- Add the slick-theme.css if you want default styling -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
      <title>Shopping Central</title>
</head>
<style>


</style>

<body style="margin: 0; background: rgba(25, 25, 25, 1)">

      <div class="container-center-horizontal">
            <div class="shop-app-home screen">
                  <div class="overlap-group-C61RwL">
                        <div class="barracolorida-4eduM0">
                              <div class="group-11-HIUWuo">
                                    <div class="overlap-group4-vzsVjG">
                                          <div class="rectangle-11-25fHuc"></div>
                                          <div class="rectangle-12-25fHuc"></div>
                                    </div>
                                    <div class="overlap-group5-vzsVjG">
                                          <div class="rectangle-13-wZSuRl"></div>
                                          <div class="rectangle-14-wZSuRl"></div>
                                    </div>
                              </div>
                        </div>

                        <div class="rectangle-21-4eduM0"></div>
                        <div class="storiestopo-4eduM0">
                              <div class="stories-RXWVqI">
                                    <img class="mask-group-QfrZdW" src="{{ url('assets/img/mask-group@2x.svg') }}" />
                                    <img class="ellipse-2-QfrZdW" src="{{ url('assets/img/ellipse-2@2x.svg') }}" />
                              </div>
                              <div class="boticrio-i545537-RXWVqI barlow-black-white-20px">Boticário</div>
                        </div>
                        <div class="storiestopo-BJQsbv">
                              <div class="stories-hb2xV8">
                                    <img class="mask-group-o2nuKq" src="{{ url('assets/img/mask-group-1@2x.svg') }}" />
                                    <img class="ellipse-2-o2nuKq" src="{{ url('assets/img/ellipse-2@2x.svg') }}" />
                              </div>
                              <div class="boticrio-i552537-hb2xV8 barlow-black-white-20px">Lens</div>
                        </div>
                        <div class="storiestopo-6sb1qn">
                              <div class="stories-uxFvNA">
                                    <img class="mask-group-5Gam2Z" src="{{ url('assets/img/mask-group@2x.svg') }}" />
                                    <img class="ellipse-2-5Gam2Z" src="{{ url('assets/img/ellipse-2@2x.svg') }}" />
                              </div>
                              <div class="boticrio-i566537-uxFvNA barlow-black-white-20px">Boticário</div>
                        </div>
                        <div class="menu">
                              <a class="inconemenu-4eduM0 trigger" href="#"><div id="menu-toggle" class="inconemenu-4eduM0 menuBtn"></div></a>
                              <a class="inconemenu-4eduM0 close" href="#">&times;</a>
                        </div>
                   

                        <img class="group-8-4eduM0" src="{{ url('assets/img/group-8@2x.svg') }}" />

                        <div class="iconeperfil-4eduM0"></div>
                  </div>
                  <div class="drop-down">
                        <nav role='navigation'>
                              <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Cosméticos</a></li>
                                    <li><a href="#">Lojas</a></li>
                                    <li><a href="#">Gastronomia</a></li>
                              </ul>
                        </nav>
                        <div class="menu">
                        
                              <a class="close" href="#">&times;</a>
                        </div>
                  </div>

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