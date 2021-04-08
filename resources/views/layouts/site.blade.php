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
      <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" >
      <title>Shopping Central</title>
</head>

<body>
      <div id="top" class="color-change-4x"></div>
  
            @if (Request::path() != '/')
            <div class="header flex py-5">

                  <div class="my-auto voltar">
                        <a href="javascript:history.back()" class="ml-8"> <i class="fas fa-arrow-circle-left"></i></a>
                  </div>

                  <div class="img-back mx-10">
                        <div class="img-logo mx-auto">
                              <img class="mx-auto" src="{{ asset('assets/img/logo.svg') }}" alt="">
                        </div>
                  </div>

            </div>
            @else
            <div class="header py-4">
                  <div class="img-back mx-10 ">
                        <div class="img-logo mx-auto">
                              <img class="mx-auto" src="{{ asset('assets/img/logo.svg') }}" alt="">
                        </div>
                  </div>

            </div>
            @endif
    

      @yield('content')

    
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="{{ url('assets/js/jquery.maskMoney.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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