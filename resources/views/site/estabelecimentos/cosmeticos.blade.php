@extends('layouts.site')

@section('content')
<div class="shop-app-estetica screen">
      <div class="overlap-group2-C61RwL">
            <div class="fundo-rosa-4a9k2Y"></div>
            <div class="fundo-roxo-4a9k2Y"></div>
            <div class="modaebeleza-4a9k2Y">
                  <img class="x-ygXrXb" src="{{ url('assets/img/-@2x.svg') }}" />
                  <div class="modaebeleza-ygXrXb">modaebeleza</div>
            </div>
            <div class="esttica-4a9k2Y">ESTÉTICA</div>
            <div class="icone-estetica-4a9k2Y"><img class="icone-estetica-yAffTz" src="{{ url('assets/img/icone-estetica@2x.svg') }}" />
            </div>
      </div>
     <div class="flex">
           @foreach ($estabelecimentos as $est)
            @if ($est->segmento == 3)
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
                  <a href="{{ url('cosmeticos') }}">
<div class="delivery h-full bg-roxo">
      <img class="mx-auto my-auto w-1/4" src="{{ url('assets/img/estetica.svg') }}" alt="">
      <h2>Estética</h2>
</div>
</a>
</div>
<div>
      <a href="{{ url('cosmeticos') }}">
            <div class="bg-cinza h-full py-10">
                  <h2 class="mx-auto "></h2>
            </div>
      </a>

</div>
<div>
      <a href="{{ url('cosmeticos') }}">
            <div class="bg-roxo-escuro h-full py-10">
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
            @if ($est->segmento == 3)
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