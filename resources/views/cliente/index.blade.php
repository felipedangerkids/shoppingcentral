@extends('layouts.site')

@section('content')



<section>
      <div class="container grid my-5 justify-items-center grid-cols-2">
            <div class="font-bold  text-xl">
                  <h2 class="mx-auto text-center">Logado como:</h2>

                  <h1 class="text-2xl mx-auto uppercase text-center mx-auto mt-4">{{ auth()->user()->name }}</h1>
                  <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                       <span class="px-14 pt-10"><i class="fas fa-sign-out-alt"></i> Sair</span> 
                  </a>
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                  </form>
            </div>
            <div class="">
                  <img width="120" src="{{ url('assets/img/domingos.jpg') }}" alt="">
            </div>

      </div>
</section>
<section>
      @if ($errors->any())
                  <div class="bg-red-50 border-l-8 border-red-900 mb-2">
                        <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                        </ul>
                  </div>
                  @endif
      <div class="container py-10">
            <div class="grid mx-5  justify-items-center grid-cols-2">

                  <div class="text-center @if ($user->estabelecimento->count() > 0) hidden @endif py-2 show-modal">
                        <img width="100" class="mx-auto" src="{{ url('assets/img/botao.png') }}" alt="">
                        <p class="mt-4 font-bold text-xl uppercase">Cadastrar Estabelecimento</p>
                  </div>




                  <div class="text-center @if ($user->estabelecimento->count() == 0) hidden @endif py-2 abrir-modal">
                        <img width="100" class="mx-auto" src="{{ url('assets/img/botao.png') }}" alt="">
                        <p class="mt-4 font-bold text-xl uppercase">Cadastrar Produto</p>
                  </div>

    

                  <div class="text-center @if ($user->permission != 1) hidden @endif py-2 open-modal">
                        <img width="100" class="mx-auto" src="{{ url('assets/img/botao.png') }}" alt="">
                        <p class="mt-4 font-bold text-xl uppercase">Cadastrar Usuario</p>
                  </div>

                  <div class="text-center @if ($user->permission != 1) hidden @endif py-2 open-modal-list">
                        <img width="100" class="mx-auto" src="{{ url('assets/img/botao.png') }}" alt="">
                        <p class="mt-4 font-bold text-xl uppercase">Listar Usuarios</p>
                  </div>

    


            </div>
      </div>
</section>

@include('cliente.modal.produto')
@include('cliente.modal.estabelecimento')
@include('cliente.modal.usuario')
@include('cliente.modal.usuario-list')



@endsection