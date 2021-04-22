@extends('layouts.site')

@section('content')
@php
$cores = array("bg-roxo-escuro", "bg-rosa", "bg-cinza", "bg-roxo", "bg-laranja");

@endphp

<div class="shop-app-page-lojas-home screen">
      <div class="overlap-group1-C61RwL">
            <div class="fundobranco-RH0WJ5"></div>
            <a href="https://api.whatsapp.com/send?phone=55{{ $estabelecimento->whatsapp }}&text=">
                  <div class="icon-whats-RH0WJ5">
                        <div class="icon-whats-j0KLxW">
                              <div class="whatsapp-8weeWl">
                                    <div class="icon-pxyNiB">
                                          <img class="vector-7e2oha" src="{{ url('assets/img/vector@2x.svg') }}" />
                                          <img class="vector-EWcNBp" src="{{ url('assets/img/vector-1@2x.svg') }}" />
                                    </div>
                              </div>
                        </div>
                  </div>
            </a>
            <div class="icone-desconto-RH0WJ5">
                  <div class="icon-desconto-7xaecs">
                        <img class="vector-GlHnuz" src="{{ url('assets/img/vector-2@2x.svg') }}" />
                        <img class="vector-JVBPw3" src="{{ url('assets/img/vector-3@2x.svg') }}" />
                        <img class="vector-b6cCCS" src="{{ url('assets/img/vector-4@2x.svg') }}" />
                  </div>
            </div>
            <div class="icon-relogio-RH0WJ5"></div>
            <div class="rectangle-89-RH0WJ5"></div>
            <a href="javascript:history.back()">
                  <div class="icone-arrow-RH0WJ5"><img class="icone-arrow-l6excR"
                              src="{{ url('assets/img/icone-arrow@2x.svg') }}" /></div>
            </a>
            <div class="img-logo">
                  <img class="logo" src="{{ asset('storage/logos/'. $estabelecimento->logo) }}" alt="">
            </div>
            <div class="cart-RH0WJ5"></div>
            <img class="ellipse-2-RH0WJ5" src="{{ url('assets/img/ellipse-2@2x.svg') }}" />
            <div class="x10-RH0WJ5">{{Cart::getTotalQuantity()}}</div>
      </div>
      <div class="flex">
            @foreach ($estabelecimento->categorias as $cat)
            <a href="{{ url('produto/'. $cat->id) }}">
                  <div class="block {!! $cores[array_rand($cores, 1)] !!}">
                        <h4 class="fonte-h4 barlow-black-white-18px">{{ $cat->name }}</h4>
                  </div>
            </a>
            @endforeach
      </div>

</div>




{{-- 
    
<section>
      <div class="container pt-16  {!! $cores[array_rand($cores, 1)] !!} top-cardapio">
            <div class="grid grid-cols-2">
                  <div>
                        <div class="uppercase text-center font-bold text-lg text-white">
                              <h3 class="mx-auto py-12 px-2 my-auto"> {{ $estabelecimento->name }}</h3>
</div>
</div>
<div>
      <div class="logo-client rotate-in-diag-1 justify-self-center">
            <img class="" src="{{ asset('storage/logos/'. $estabelecimento->logo) }}" alt="">
      </div>
</div>
</div>
<div class="relative mx-5 top-8">
      <div class="grid justify-center grid-cols-4">
            <div>
                  <a href="https://api.whatsapp.com/send?phone=55{{ $estabelecimento->whatsapp }}&text="> <img
                              class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/ifood.svg') }}" alt=""></a>
            </div>
            <div>
                  <a href="https://www.ifood.com.br/{{ $estabelecimento->ifood}}"> <img class="w-3/4 mx-auto my-auto"
                              src="{{ url('assets/img/whatsapp.svg') }}" alt=""></a>
            </div>
            <div>
                  <img class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/central.svg') }}" alt="">
            </div>
            <div class="group cursor-pointer">
                  <img class="w-3/4 mx-auto my-auto group" src="{{ url('assets/img/relogio.svg') }}" alt="">
                  <div
                        class="opacity-0 toltip  bg-black text-white text-center text-xs rounded-lg py-2 relative z-10 group-hover:opacity-100 ml-14 px-3 pointer-events-none">
                        {{ $estabelecimento->time }}
                        <svg class="relative text-black h-2 w-full left-0 top-full" x="0px" y="0px"
                              viewBox="0 0 255 255" xml:space="preserve">
                              <polygon class="fill-current" points="0,0 127.5,127.5 255,0" /></svg>
                  </div>
            </div>

      </div>
</div>
</div>
</section>

<section>

</section>

<section class="my-16 products-grid">
      <div class="grid mx-4 gap-3 text-center uppercase font-bold font-xl grid-cols-2">
            @foreach ($estabelecimento->produtos as $produto)
            <a href="{{ url('produto/'. $produto->slug) }}">
                  <div class="img-cardapio">
                        <img src="{{ asset('storage/products/'. $produto->image) }}" alt="">
                        <p>{{ $produto->name }}</p>
                  </div>
            </a>
            @endforeach


      </div>
</section> --}}
@endsection