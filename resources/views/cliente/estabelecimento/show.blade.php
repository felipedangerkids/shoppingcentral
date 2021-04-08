@extends('layouts.site')

@section('content')
      <div class="my-5 mx-5">
            <!-- component -->
            <table class="border-collapse w-full">
                  <thead>
                        <tr>
                              <th
                                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Produto</th>
                              <th
                                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Preço</th>
                              <th
                                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Tempo</th>
                              <th
                                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Ações</th>
                        </tr>
                  </thead>
                  <tbody>
      
                        @foreach ($estabelecimentos as $est)
      
                        <tr
                              class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                              <td
                                    class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                    <span
                                          class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Nome</span>
                                    {{ $est->name }}
                              </td>
                              <td
                                    class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                    <span
                                          class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">WhatsApp</span>
                                    {{ $est->whatsapp }}
                              </td>
                              <td
                                    class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                    <span
                                          class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Telefone
                                          de Entrega</span>
                                    {{ $est->telefone }}
                              </td>
                              <td
                                    class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                    <span
                                          class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Ações</span>
      
                                    <a href="{{ url('estabelecimento-edit/'. $est->id) }}" class="text-blue-500 hover:text-blue-600 underline pl-6 open-modal-edit">Editar</a>
                                 
                              </td>
                        </tr>
                        @endforeach
                  </tbody>
      
            </table>
      
      </div>
@endsection