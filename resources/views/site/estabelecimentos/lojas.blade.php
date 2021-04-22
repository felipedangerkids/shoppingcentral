@extends('layouts.site')

@section('content')
<div class="shop-app-lojas screen">
      <div class="overlap-group2-C61RwL">
            <div class="fundo-roxo-4a9k2Y"></div>
            <div class="fundo-vermelho-4a9k2Y"></div>
            <div class="lojas-4a9k2Y">LOJAS</div>
            <div class="icone-lojas-4a9k2Y"><img class="icone-lojas-Bm1G0g"
                        src="{{ url('assets/img/icone-lojas@2x.svg') }}" /></div>
            <div class="comodidade-4a9k2Y">
                  <img class="x-kdIUlB" src="{{ url('assets/img/-@2x.svg') }}" />
                  <div class="comodidade-kdIUlB">comodidade</div>
            </div>
      </div>
      <div class="flex">
           @foreach ($estabelecimentos as $est)
            @if ($est->segmento == 2)
            <a href="{{ url('cardapio/'.$est->id) }}">
                  <div class="img">
                        <img class="img-logos" src="{{ asset('storage/logos/'. $est->logo) }}" alt="">
                  </div>
            </a>
            @endif
            @endforeach

      </div>
</div>

{{-- <section>
      <div class="container delivery-base grid grid-cols-3">
            <div>
                  <a href="{{ url('lojas') }}">
<div class="delivery h-full bg-roxo">
      <img class="mx-auto my-auto w-1/4" src="{{ url('assets/img/loja.svg') }}" alt="">
      <h2>Lojas</h2>
</div>
</a>
</div>
<div>
      <a href="{{ url('lojas') }}">
            <div class=" bg-cinza h-full py-10">
                  <h2 class="mx-auto "></h2>
            </div>
      </a>

</div>
<div>
      <a href="{{ url('lojas') }}">
            <div class=" bg-roxo-escuro h-full py-10">
                  <h2 class="mx-auto"></h2>
            </div>
      </a>
</div>
</div>
</section>
<section>
      @php
      $cores = array("bg-roxo-escuro", "bg-rosa", "bg-cinza", "bg-roxo", "bg-laranja");
      $count = 0;

      @endphp

      <div class="container delivery-base-2 grid grid-cols-2">

            @foreach ($estabelecimentos as $est)
            @if ($est->segmento == 2)
            <a href="{{ url('cardapio/'.$est->id) }}">
                  <div class="{{ $cores[$count++] }}">
                        <h2>{{ $est->name }}</h2>
                  </div>
            </a>
            @if ($count == count($cores))
            @php
            $count = 0;
            @endphp
            @endif
            @endif
            @endforeach

      </div>
</section> --}}


@endsection