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
      @import url("https://fonts.googleapis.com/css?family=Barlow:900");

      .component-wrapper a,
      .screen a {
            text-decoration: none;
            display: contents;
      }

      .full-width-a {
            width: 100%;
      }

      .full-height-a {
            height: 100%;
      }

      .screen textarea:focus,
      .screen input:focus {
            outline: none;
      }

      .screen *,
      .component-wrapper * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
      }

      .screen div {
            -webkit-text-size-adjust: none;
      }

      .container-center-vertical,
      .container-center-horizontal {
            pointer-events: none;
            display: flex;
            flex-direction: row;
            padding: 0;
            margin: 0;
      }

      .container-center-vertical {
            align-items: center;
            height: 100%;
      }

      .container-center-horizontal {
            justify-content: center;
            width: 100%;
      }

      .container-center-vertical>*,
      .container-center-horizontal>* {
            pointer-events: auto;
            flex-shrink: 0;
      }

      .component-wrapper,
      .screen {
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-all;
            word-break: break-word;
      }

      .auto-animated div {
            opacity: 0;
            position: absolute;
            --z-index: -1;
      }

      .auto-animated .container-center-vertical,
      .auto-animated .container-center-horizontal {
            opacity: 1;
      }

      .overlay {
            position: absolute;
            opacity: 0;
            display: none;
            top: 0;
            width: 100%;
            height: 100%;
            position: fixed;
      }

      .animate-appear {
            opacity: 0;
            display: block;
            animation: reveal 0.3s ease-in-out 1 normal forwards;
      }

      .animate-disappear {
            opacity: 1;
            display: block;
            animation: reveal 0.3s ease-in-out 1 reverse forwards;
      }

      .animate-nodelay {
            animation-delay: 0s;
      }

      @keyframes reveal {
            from {
                  opacity: 0;
            }

            to {
                  opacity: 1;
            }
      }

      .align-self-flex-start {
            align-self: flex-start;
      }

      .align-self-flex-end {
            align-self: flex-end;
      }

      .align-self-flex-center {
            align-self: center;
      }

      .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
      }

      .valign-text-bottom {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
      }

      input:focus {
            outline: none;
      }

      .component-wrapper,
      .component-wrapper * {
            pointer-events: none;
      }

      .component-wrapper a *,
      .component-wrapper a,
      .component-wrapper input,
      .component-wrapper video,
      .component-wrapper iframe,
      .listeners-active,
      .listeners-active * {
            pointer-events: auto;
      }

      .hidden,
      .hidden * {
            visibility: hidden;
            pointer-events: none;
      }

      .smart-layers-pointers,
      .smart-layers-pointers * {
            pointer-events: auto;
            visibility: visible;
      }

      .component-wrapper.not-ready,
      .component-wrapper.not-ready * {
            visibility: hidden !important;
      }

      .listeners-active-click,
      .listeners-active-click * {
            cursor: pointer;
      }

      @import url("https://fonts.googleapis.com/css?family=Barlow:900");

      * {
            box-sizing: border-box;
      }

      .barlow-black-white-18px {
            color: var(--white);
            font-family: var(--font-family-barlow);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 900;
      }

      .barlow-black-white-20px {
            color: var(--white);
            font-family: var(--font-family-barlow);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 900;
      }

      :root {
            --font-family-barlow: "Barlow", Helvetica;
            --font-size-l: 20px;
            --font-size-m: 18px;
            --international-orange: rgba(247, 81, 17, 1);
            --purple-heart: rgba(108, 28, 209, 1);
            --violet: rgba(35, 10, 68, 1);
            --white: rgba(255, 255, 255, 1);
      }
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
                        <div class="inconemenu-4eduM0"></div>
                        <img class="group-8-4eduM0" src="{{ url('assets/img/group-8@2x.svg') }}" />
                        <div class="iconeperfil-4eduM0"></div>
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
</body>

</html>