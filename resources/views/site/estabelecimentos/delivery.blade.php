@extends('layouts.site')

@section('content')
<div class="shop-app-delivery screen">
      <div class="overlap-group1-C61RwL">
            <div class="fundo-roxo-RH0WJ5"></div>
            <div class="delivery-RH0WJ5">DELIVERY</div>
            <div class="icon-delivery-RH0WJ5"><img class="icon-delivery-BuWXEw"
                        src="{{ url('assets/img/icon-delivery@2x.svg') }}" />
            </div>
            <div class="fundo-azul-RH0WJ5"></div>
            <div class="nuncafecha-RH0WJ5">
                  <img class="x-T8eb4S" src="{{ url('assets/img/nuncafecha.svg') }}" />
                  <div class="nuncafecha-T8eb4S">nuncafecha</div>
            </div>
      </div>
      <div class="flex">
            @foreach ($estabelecimentos as $est)
            @if ($est->delivery == 1)
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
                  <a href="{{ url('delivery') }}">
<div class="delivery h-full bg-roxo">
      <img class="mx-auto my-auto w-1/4" src="{{ url('assets/img/delivery.svg') }}" alt="">
      <h2>Delivery</h2>
</div>
</a>
</div>
<div>
      <a href="{{ url('delivery') }}">
            <div class=" bg-cinza h-full py-10">
                  <h2 class="mx-auto "></h2>
            </div>
      </a>

</div>
<div>
      <a href="{{ url('delivery') }}">
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
            @if ($est->delivery == 1)
            <a href="{{ url('cardapio/'.$est->id) }}">
                  <div class="{{ $cores[$count++] }} h-full">
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