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

                  @foreach ($produtos as $produto)

                  <tr
                        class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td
                              class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Produto</span>
                              {{ $produto->name }}
                        </td>
                        <td
                              class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                              <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Preço</span>
                              {{ $produto->price }}
                        </td>
                        <td
                              class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                              <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Tempo
                                    de Entrega</span>
                              {{ $produto->time }}
                        </td>
                        <td
                              class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                              <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Ações</span>
                         
                                    <a class="text-blue-500 hover:text-blue-600 underline pl-6 open-modal-edit">Editar</a>
                              <a href="{{ url('product-delete/'. $produto->id) }}"
                                    class="text-red-400 hover:text-blue-600 underline pl-6">Remover</a>
                        </td>
                  </tr>
                  @endforeach
            </tbody>

      </table>

</div>

@include('cliente.modal.produto-edit')


@endsection