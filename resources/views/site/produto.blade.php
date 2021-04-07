@extends('layouts.site')

@section('content')
<meta property="og:image" content="//cdn.example.com/uploads/images/webpage_300x200.png">
<section class="top">
      <div class="img-product">
            <img src="{{ asset('storage/products/'. $produto->image) }}" alt="">
      </div>
</section>
<section class="desc mt-3 mx-5">
      <div class="uppercase text-2xl font-bold">
            <h2>{{ $produto->name }}</h2>
      </div>
      <div class="uppercase text-2xl font-bold">
            <h2>{{  'R$ '.number_format($produto->price, 2, ',', '.') }}</h2>
      </div>
      <div class="text-base">
            <p>{{ $produto->desc }}</p>
      </div>
      <div class="text-base">
            <p>Tempo de Entrega: {{ $produto->time }}</p>
      </div>
      <div class="my-4">
           <a href="https://api.whatsapp.com/send?phone=55{{ $produto->estabelecimento->whatsapp }}&text={{ Request::url() }}"> <button type="button"
                  class="focus:outline-none text-white text-xl py-2.5 px-10 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg flex items-center">
                 <span class="mr-2"><i class="fab fa-whatsapp"></i></span> Fazer Pedido
            </button></a>
      </div>

</section>  

@endsection