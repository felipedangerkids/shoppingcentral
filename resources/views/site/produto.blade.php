@extends('layouts.site')

@section('content')
<div class="overlap-group-C61RwL">


      <div class="shop-app-page-lojas-produtos screen">
            <div class="overlap-group1-C61RwL">
                  <div class="rectangle-89-RH0WJ5"></div>
                  <a href="javascript:history.back()">
                        <div class="icone-arrow-RH0WJ5"><img class="icone-arrow-l6excR"
                                    src="{{ url('assets/img/icone-arrow@2x.svg') }}" /></div>
                  </a>
                  <div class="cart-RH0WJ5"></div>
                  <img class="ellipse-2-RH0WJ5" src="{{ url('assets/img/ellipse-2@2x.svg') }}" />
                  <div class="x10-RH0WJ5">{{Cart::getTotalQuantity()}}</div>
                  <div class="perfumes-RH0WJ5 valign-text-middle">Categoria</div>
            </div>

            <div class="produto">
                  @foreach ($produto as $prod)
                  <div class="mb-5 mx-auto">
                        <img class="imagem-dXBp89" src="{{ asset('storage/products/'.$prod->image) }}" />
                        <div
                              class="kit-presente-di-ranspirante-75g-BdpSxK valign-text-middle barlow-normal-thunder-18px">
                              {{ $prod->name }}:
                              {{ $prod->desc }}
                        </div>
                        <div class="price-font barlow-black-thunder-25px">
                              {{  'R$ '.number_format($prod->price, 2, ',', '.') }}</div>
                        <div class="add-sacola-AYFtQ1">
                              <form action="{{ url('cart-add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $prod->id }}">
                                    <input type="hidden" name="name" value="{{ $prod->name }}">
                                    <input type="hidden" name="slug" value="{{ $prod->slug }}">
                                    <input type="hidden" name="price" value="{{ $prod->price }}">
                                    <input type="hidden" name="image" value=" {{  $prod->image }}">
                                    <input type="hidden" name="amount" value="1">
                                    <input type="hidden" name="category_id" value=" {{  $prod->category_id }}">
                                    <button type="submit"
                                          class="text-center ttulo-3-i3418834185-QWBGeE ">ADICIONAR</button>
                              </form>
                        </div>
                  </div>
                  @endforeach



            </div>






      </div>



      {{-- <meta property="og:image" content="//cdn.example.com/uploads/images/webpage_300x200.png">
<section class="top">
      <div class="img-product">
            <img src="{{ asset('storage/products/'. $produto->image) }}" alt="">
</div>
</section>
<section class="desc mt-36 mx-5">

      <form action="{{ url('cart-add') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $produto->id }}">
            <input type="hidden" name="name" value="{{ $produto->name }}">
            <input type="hidden" name="slug" value="{{ $produto->slug }}">
            <input type="hidden" name="price" value="{{ $produto->price }}">
            <input type="hidden" name="image" value=" {{  $produto->image }}">
            <input type="hidden" name="amount" value="1">
            <input type="hidden" name="category_id" value=" {{  $produto->category_id }}">

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

                  <button type="submit"
                        class="focus:outline-none text-white text-xl py-2.5 px-10 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg flex items-center">
                        <span class="mr-2"></span> Fazer Pedido
                  </button>
            </div>
      </form>
</section> --}}

@endsection