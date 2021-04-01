@extends('layouts.site')

@section('content')
<section>
      <div class="container delivery-base grid grid-cols-3">
            <div>
                  <a href="{{ url('delivery') }}">
                        <div class="delivery  bg-roxo">
                              <img class="mx-auto my-auto w-1/4" src="{{ url('assets/img/delivery.svg') }}" alt="">
                              <h2>Delivery</h2>
                        </div>
                  </a>
            </div>
            <div>
                  <a href="{{ url('delivery') }}">
                        <div class="bg-cinza py-10">
                              <h2 class="mx-auto ">Delivery</h2>
                        </div>
                  </a>

            </div>
            <div>
                  <a href="{{ url('delivery') }}">
                        <div class="bg-roxo-escuro py-10">
                              <h2 class="mx-auto">Delivery</h2>
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
            @if ($est->segmento == 1)
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
</section>


@endsection