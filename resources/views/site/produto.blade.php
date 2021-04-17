@extends('layouts.site')

@section('content')
<meta property="og:image" content="//cdn.example.com/uploads/images/webpage_300x200.png">
<section class="top">
      <div class="img-product">
            <img src="{{ asset('storage/products/'. $produto->image) }}" alt="">
      </div>
</section>
<section class="desc mt-36 mx-5">

      <form action="{{ url('cart-add') }}" method="POST">
            @csrf
            <input type="hidden" name="id"      value="{{ $produto->id }}">
            <input type="hidden" name="name"    value="{{ $produto->name }}">
            <input type="hidden" name="slug"    value="{{ $produto->slug }}">
            <input type="hidden" name="price"   value="{{ $produto->price }}">
            <input type="hidden" name="image"   value=" {{  $produto->image }}">
            <input type="hidden" name="amount"   value="1">
            <input type="hidden" name="category_id"   value=" {{  $produto->category_id }}">

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
</section>

@endsection