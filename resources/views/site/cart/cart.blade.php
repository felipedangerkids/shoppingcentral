@extends('layouts.site')

@section('content')
<input type="hidden" id="anPageName" name="page" value="shop-app-page-lojas-produtos-modal" />
<div class="container-center-horizontal">
      <div class="shop-app-page-lojas-produtos-modal screen">
            <div class="adicionamos-o-p-ao-seu-carrinho-C61RwL valign-text-middle">
                  ADICIONAMOS O PRODUTO AO SEU CARRINHO
            </div>
            <div class="d-flex flex-column mx-auto">
                  @foreach (Cart::getContent() as $item)
                  {{-- @php
                  $img = $item->attributes->images;
                  $images = json_decode($img);
                  $categorie = $item->attributes->categories;
                  $cats = json_decode($categorie);
                  @endphp --}}
                  <div class="mx-auto">
                        <img class="imagem-C61RwL mx-auto" src="{{  url('storage/products/'.$item->attributes->image)  }}" />
                        <div class="kit-presente-di-ranspirante-75g-C61RwL mx-auto text-center">
                              {{ $item->name }}
                        </div>
                        <div class="r-17990-C61RwL text-center">{{  'R$ '.number_format($item->price, 2, ',', '.') }}</div>
                        <div class="quantidade-C61RwL input-qty">
                              <select class="x1-unidade-i128396103618-7DbPHH " name="" id="">
                                    <option value="1" selected>Unidade 1</option>
                                    <option value="2">Unidade 2</option>
                                    <option value="3">Unidade 3</option>
                                    <option value="4">Unidade 4</option>
                                    <option value="5">Unidade 5</option>
                              </select>

                        </div>
                  </div>
                  @endforeach
            </div>
            <div class="add-sacola-C61RwL">
                 <a href="{{ url('/') }}"><div class="ttulo-3-i9213034185-t19rXt valign-text-middle">CONTINUAR COMPRANDO</div></a>
            </div>
            <div class="btnconfirmar-C61RwL">
                  <div class="btnsaibamais-45Msah">
                        <div class="ttulo-3-i9615111634185-7GpFpC valign-text-middle">IR PARA CHECKOUT</div>
                  </div>
            </div>
      </div>
</div>
@endsection