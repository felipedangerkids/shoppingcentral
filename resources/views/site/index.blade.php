@extends('layouts.site')

@section('content')

<section>
      <div class="home-base container grid grid-cols-3">
            <a href="{{ url('delivery') }}">
                  <div class="delivery flip-in-hor-top">
                        <img class="mx-auto my-auto w-1/4" src="{{ url('assets/img/delivery.svg') }}" alt="">
                        <h2>Delivery</h2>
                  </div>
            </a>
            <a href="{{ url('gastronomia') }}">
                  <div class="gastronomia flip-in-hor-top">
                        <img class="mx-auto w-1/4" src="{{ url('assets/img/gastronomia.svg') }}" alt="">
                        <h2>Gastronomia</h2>
                  </div>
            </a>
            <a href="{{ url('lojas') }}">
                  <div class="loja flip-in-hor-top">
                        <img class="mx-auto w-1/4" src="{{ url('assets/img/loja.svg') }}" alt="">
                        <h2>Lojas</h2>
                  </div>
            </a>

      </div>
</section>
<section>
      <div class="home-base-2 container grid grid-cols-3">
            <div class="col-span-2 slide-in-blurred-right">
                  <img class="object-cover banner" src="{{ url('assets/img/banner.jpg') }}" alt="">
            </div>
            <div class="flex flex-col slide-in-blurred-right">
                  <a href="{{ url('cosmeticos') }}">
                        <div class="estetica">
                              <img class="mx-auto w-1/4" src="{{ url('assets/img/estetica.svg') }}" alt="">
                              <h2>Estética</h2>
                        </div>
                  </a>

                  <a href="{{ url('coming') }}">
                        <div class="cadastro slide-in-blurred-right">
                              <img class="mx-auto w-1/4" src="{{ url('assets/img/cadastro.svg') }}" alt="">
                              <h2>Cadastro</h2>
                        </div>
                  </a>

            </div>

      </div>
</section>
<section>
      <div class="home-base-2 container grid grid-cols-3">

            <div class="mes slide-in-blurred-right flex items-center col-span-2">
                  <a href="{{ url('coming') }}">
                        <div class="flex items-center flex items-center col-span-2">
                              <div class="mx-auto ">
                                    <h2 class="font-2xl">Agenda do Mês</h2>
                              </div>
                              <div>
                                    <img class="mx-auto w-1/4" src="{{ url('assets/img/mes.svg') }}" alt="">
                              </div>
                        </div>
                  </a>
            </div>

            <div class="pontos slide-in-blurred-right"><a href="{{ url('coming') }}">
                        <img class="mx-auto w-1/4" src="{{ url('assets/img/pontos.svg') }}" alt="">
                        <h2>Programa de Pontos</h2>
                  </a>
            </div>

      </div>
</section>
{{-- <section class="slide-product my-12">
      <div class="container font-extrabold uppercase text-xl">
            <div class="products">
                  @foreach ($estabelecimentos as $est)
                  <a href="{{ url('cardapio/'.$est->id) }}">
<div class="text-center mx-2">
      <img src="{{ asset('storage/logos/'. $est->logo) }}" alt="">
      <span>Ver Cardapio</span>
</div>
</a>
@endforeach




</div>
</div>
</section> --}}
@endsection