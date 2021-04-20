@extends('layouts.site')

@section('content')
<div>
      <img class="x2021c02-banner-s-docesv2-1-1-C61RwL"
            src="{{ url('assets/img/2021-c02-banner-blog-fragrancias-doces-v2-1-1@2x.png') }}" />
</div>

<div class="overlap-group1-C61RwL">
      <a href="{{ url('delivery') }}">
            <div class="rectangle-12-RH0WJ5"></div>
            <div class="delivery-RH0WJ5 barlow-black-white-18px">DELIVERY</div>
      </a>
      <a href="{{ url('gastronomia') }}">
            <div class="rectangle-17-RH0WJ5"></div>
            <div class="gastronomia-RH0WJ5 barlow-black-white-18px">GASTRONOMIA</div>
      </a>
      <a href="{{ url('lojas') }}">
            <div class="rectangle-18-RH0WJ5"></div>
            <div class="lojas-RH0WJ5 barlow-black-white-18px">LOJAS</div>
      </a>



      <div class="icondelivery-RH0WJ5"><img class="vector-uOpcJf" src="{{ url('assets/img/vector@2x.svg') }}" /></div>
      <div class="iconegastronomia-RH0WJ5"><img class="vector-cWFyrQ" src="{{ url('assets/img/vector-1@2x.svg') }}" />
      </div>
      <div class="iconelojas-RH0WJ5"><img class="vector-Z5mEPh" src="{{ url('assets/img/vector-2@2x.svg') }}" /></div>
</div>
<div class="overlap-group2-C61RwL">
      <a href="{{ url('estetica') }}">
            <div class="rectangle-15-4a9k2Y"></div>
            <div class="esttica-4a9k2Y barlow-black-white-18px">ESTÉTICA</div>
      </a>
      <a href="{{ url('/coming') }}">
            <div class="rectangle-16-4a9k2Y"></div>
            <div class="cadastro-4a9k2Y barlow-black-white-18px">CADASTRO</div>
      </a>
      <img class="ricardo-montanh-2-de-fev-hoje-1-4a9k2Y"
            src="{{ url('assets/img/ricardo-montanha---12-de-fev-hoje-1@1x.png') }}" />

     
      <div class="iconeestetica-4a9k2Y"><img class="vector-USZvDH" src="{{ url('assets/img/vector-3@2x.svg') }}" />
      </div>
      <div class="iconeuser-4a9k2Y"><img class="vector-hQaHjI" src="{{ url('assets/img/vector-5@2x.svg') }}" /></div>
</div>
<div class="overlap-group3-C61RwL">
      <div class="rectangle-19-eSNWXa"></div>
      <div class="rectangle-9-eSNWXa"></div>
      <div class="programa-de-pontos-eSNWXa barlow-black-white-18px">PROGRAMA DE PONTOS</div>
      <div class="agenda-do-ms-eSNWXa barlow-black-white-18px">AGENDA DO MÊS</div>
      <div class="iconepontos-eSNWXa"><img class="vector-RnlF4y" src="{{ url('assets/img/vector-4@2x.svg') }}" /></div>
      <div class="iconearrow-eSNWXa"></div>
</div>


@endsection