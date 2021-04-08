@extends('layouts.site')

@section('content')


            <div class="home-base grid-rows-1 h-100 row-span-1 grid grid-cols-3">
                  <a href="{{ url('delivery') }}">
                        <div class="delivery h-full">
                              <img class="mx-auto my-auto w-1/4" src="{{ url('assets/img/delivery.svg') }}" alt="">
                              <h2>Delivery</h2>
                        </div>
                  </a>
                  <a href="{{ url('gastronomia') }}">
                        <div class="gastronomia h-full">
                              <img class="mx-auto w-1/4" src="{{ url('assets/img/gastronomia.svg') }}" alt="">
                              <h2>Gastronomia</h2>
                        </div>
                  </a>
                  <a href="{{ url('lojas') }}">
                        <div class="loja h-full">
                              <img class="mx-auto w-1/4" src="{{ url('assets/img/loja.svg') }}" alt="">
                              <h2>Lojas</h2>
                        </div>
                  </a>

            </div>
      

            <div class="home-base-2 container grid grid-cols-3">
                  <div class="col-span-2 row-span-full">
                        <img class="object-cover banner" src="{{ url('assets/img/banner.jpg') }}" alt="">
                  </div>
                  <div class="flex flex-col ">
                        <a href="{{ url('cosmeticos') }}">
                              <div class="estetica h-full">
                                    <img class="mx-auto w-1/4" src="{{ url('assets/img/estetica.svg') }}" alt="">
                                    <h2>Estética</h2>
                              </div>
                        </a>

                        <a href="{{ url('coming') }}">
                              <div class="cadastro  h-full">
                                    <img class="mx-auto w-1/4" src="{{ url('assets/img/cadastro.svg') }}" alt="">
                                    <h2>Cadastro</h2>
                              </div>
                        </a>

                  </div>

            </div>
    
            <div class="home-base-3  grid grid-cols-3">

                  <div class="mes slide-in-blurred-right flex items-center col-span-2">
                        <a href="{{ url('coming') }}">
                              <div class="flex items-center ">
                                    <div class="mx-auto ">
                                          <h2 class="font-2xl ml-16">Agenda do Mês</h2>
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



@endsection