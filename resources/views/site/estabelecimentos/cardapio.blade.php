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
                              <img class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/ifood.svg') }}" alt="">
                        </div>
                        <div>
                              <img class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/whatsapp.svg') }}" alt="">
                        </div>
                        <div>
                              <img class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/central.svg') }}" alt="">
                        </div>
                        <div>
                              <img class="w-3/4 mx-auto my-auto" src="{{ url('assets/img/relogio.svg') }}" alt="">
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