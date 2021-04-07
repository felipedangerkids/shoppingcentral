@extends('layouts.site')

@section('content')
<div class="modal-content py-4 text-left px-6">
      <!--Title-->
      <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Estabelecimento</p>
            <div class="close-modal cursor-pointer z-50">
                  <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                              d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                  </svg>
            </div>
      </div>
      <!--Body-->
      <div class="my-5">
            <form class="bg-white rounded shadow-xl" action="{{ url('estabelecimento-update/'. $estabelecimento->id) }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="py-2">
                        <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              id="cus_name" name="name" value="{{ $estabelecimento->name }}" type="text" required=""
                              placeholder="Nome do estabelecimento" aria-label="Name">
                  </div>

                  <div class="py-2">
                        @php
                        $arr = ['1','2','3'];

                        @endphp
                        <select
                              class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              name="segmento" id="">
                              @foreach ($arr as $item)
                              <option @if( $estabelecimento->segmento === $item ) selected @endif
                                    value="{{ $item }}">@if ($item == 1)
                                    Restaurante
                                    @elseif($item == 2)
                                    Loja
                                    @elseif($item == 3)
                                    Cosméticos
                                    @endif
                              </option>
                              @endforeach


                        </select>
                  </div>
                  <div class="py-2">
                        @php
                              $arr1 = ['1','2'];

                        @endphp
                        <select
                              class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              name="delivery" id="">
                              {{-- <option>Delivery?</option> --}}
                             @foreach ($arr1 as $item)
                                 <option @if( $estabelecimento->delivery === $item ) selected @endif value="{{ $item }}">@if($item == 1) Sim @else Não @endif</option>
                             @endforeach
                        </select>
                  </div>
                  <div class="py-2">
                        <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              id="telefone" name="telefone" type="text" required=""
                              placeholder="Telefone do estabelecimento" value="{{ $estabelecimento->telefone }}"
                              aria-label="Name">
                  </div>
                  <div class="py-2">
                        <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              id="whatsapp" name="whatsapp" type="text" required=""
                              placeholder="Whatsapp do estabelecimento" value="{{ $estabelecimento->whatsapp }}"
                              aria-label="Name">
                  </div>

                  <div class="py-2">
                        <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              id="cus_name" name="logo" type="file"  placeholder="Logo do Estabelecimento"
                              aria-label="Name">
                  </div>
                  <div class="py-2">
                        <img src="{{ asset('storage/logos/'. $estabelecimento->logo) }}" id="profile-img-tag" height="100" width="100">
                       
                  </div>
                  <div class="py-2">
                        <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              id="cus_name" name="time" type="text" required="" value="{{ $estabelecimento->time }}"
                              placeholder="Horario de Atendimento" aria-label="Name">
                  </div>
                  <div class="py-2">
                        <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                              id="cus_name" name="ifood" type="text" required="" value="{{ $estabelecimento->ifood }}"
                              placeholder="Link do ifood" aria-label="Name">
                  </div>


      </div>
      <!--Footer-->
      <div class="flex justify-end pt-2">
            <button
                  class="focus:outline-none close-modal px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancelar</button>
            <button type="submit"
                  class="focus:outline-none px-4 bg-green-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Alterar</button>
      </div>
      </form>
</div>



@endsection