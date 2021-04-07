@extends('layouts.site')

@section('content')
@php
      $cores = array("bg-roxo-escuro", "bg-rosa", "bg-cinza", "bg-roxo", "bg-laranja");  
    
      @endphp

    
<section>
      <div class="container pt-16  {!! $cores[array_rand($cores, 1)] !!} ">
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
                        <div >
                            <a href="https://api.whatsapp.com/send?phone=55{{ $estabelecimento->whatsapp }}&text="> <img class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/ifood.svg') }}" alt=""></a>
                        </div>
                        <div>
                            <a href="https://www.ifood.com.br/{{ $estabelecimento->ifood}}">  <img class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/whatsapp.svg') }}" alt=""></a>
                        </div>
                        <div>
                              <img class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/central.svg') }}" alt="">
                        </div>
                        <div class="group cursor-pointer">
                              <img class="w-3/4 mx-auto my-auto group" src="{{ url('assets/img/relogio.svg') }}" alt="">
                              <div
                                          class="opacity-0 w-28 bg-black text-white text-center text-xs rounded-lg py-2 relative z-10 group-hover:opacity-100 bottom-full -left-3/4 ml-14 px-3 pointer-events-none">
                                         {{ $estabelecimento->time }}
                                          <svg class="relative text-black h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255"
                                                xml:space="preserve">
                                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" /></svg>
                                    </div>
                        </div>
                  
                  </div>
            </div>
      </div>
</section>

<section>

</section>
{{-- <section class="container  my-4">
      <div class="grid grid-cols-2">
            <div class="flex slide-in-left justify-center items-center flex-col">

                  <div class="flex mt-4">
                        <a href="https://api.whatsapp.com/send?phone=55{{ $estabelecimento->whatsapp }}&text=">
<div class="icons">
      <img src="{{ asset('assets/img/whatsapp.png') }}" alt="">
</div>
</a>
<div class="icons">
      <span class="iconify" data-inline="false" data-icon="eva:phone-call-outline" style="font-size: 40px;"></span>
</div>
<div class="icons tooltip">
      <span class="iconify" data-inline="false" data-icon="ant-design:field-time-outlined"
            style="font-size: 46px;"></span>
      <span class="tooltiptext">Horario de atendimento de seg a sex das 10:00 as 14:00</span>
</div>
</div>
</div>
<div class="logo-client rotate-in-diag-1 justify-self-center">
      <img src="{{ asset('storage/logos/'. $estabelecimento->logo) }}" alt="">
</div>
</div>
</section> --}}
<section class="my-10 products-grid">
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
</section>
@endsection