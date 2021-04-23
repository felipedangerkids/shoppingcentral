@extends('layouts.site')

@section('content')

<div class="overlap-group3-0xy0vn">
      <a href="{{ url('delivery') }}">
            <div class="fundo-roxo-GW1jy1"></div>
            <div class="delivery-GW1jy1 barlow-black-white-18px">DELIVERY</div>
            <div class="icondelivery-GW1jy1"><img class="delivery-svg-Coh1t5"
                        src="{{ url('assets/img/delivery-svg@2x.svg') }}" /></div>
      </a>
      <a href="{{ url('gastronomia') }}">
            <div class="fundo-vermelho-GW1jy1"></div>
            <div class="gastronomia-GW1jy1 barlow-black-white-18px">GASTRONOMIA</div>
            <div class="iconegastronomia-GW1jy1"><img class="gastro-svg-aIZ2L6"
                        src="{{ url('assets/img/gastro-svg@2x.svg') }}" /></div>
      </a>
      <a href="{{ url('lojas') }}">
            <div class="fundo-preto-GW1jy1"></div>
            <div class="lojas-GW1jy1 barlow-black-white-18px">LOJAS</div>
            <div class="loja-svg-GW1jy1"><img class="vector-JA94Z4" src="{{ url('assets/img/loja.svg') }}" /></div>
      </a>
</div>
</div>
<div class="flex-row-C61RwL">
      <div class="flex-col-dXBp89">
            <img class="banner-main-img-0PZcXW" src="{{ url('assets/img/banner-main-img@1x.png') }}" />
            <div class="overlap-group1-0PZcXW">
                  <div class="fundo-cinza-nlxkfa"></div>
                  <div class="agenda-do-ms-nlxkfa barlow-black-white-18px">AGENDA DO MÊS</div>
                  <div class="iconearrow-nlxkfa"></div>
            </div>
      </div>
      <div class="flex-col-Xi618D">
            <a href="{{ url('estetica') }}">
                  <div class="overlap-group4-y0eQTV">
                        <div class="fundo-rosa-prdjcR"></div>
                        <div class="esttica-prdjcR barlow-black-white-18px">ESTÉTICA</div>
                        <div class="iconeestetica-prdjcR"><img class="estetica-svg-weG7u3"
                                    src="{{ url('assets/img/estetica-svg@2x.svg') }}" /></div>
                  </div>
            </a>
            <div class="overlap-group5-y0eQTV">
                  <div class="fundo-roxo-xMQYUC"></div>
                  <div class="cadastro-xMQYUC barlow-black-white-18px">CADASTRO</div>
                  <div class="cadastro-YUXJ3i">
                        <div class="cadastro-svg-RYVSPh">
                              <div class="new-user-1-omrVM0">
                                    <div class="group-Bllyls">
                                          <div class="group-x99SLO">
                                                <img class="vector-6fKz3d"
                                                      src="{{ url('assets/img/cad-1.svg') }}" />
                                                <img class="vector-eElDl1"
                                                      src="{{ url('assets/img/cad-2.svg') }}" />
                                                <img class="vector-kqxW9b"
                                                      src="{{ url('assets/img/cad-3.svg') }}" />
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="overlap-group2-y0eQTV">
                  <div class="fundo-vermelho-8SqM8O"></div>
                  <div class="programa-de-pontos-8SqM8O barlow-black-white-18px">PROGRAMA DE PONTOS</div>
                  <div class="iconepontos-8SqM8O"><img class="pontos-svg-vdrz8r"
                              src="{{ url('assets/img/pontos-svg@2x.svg') }}" /></div>
            </div>
      </div>
</div>
@endsection