<div class="user-modal-list hidden fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
      style="background: rgba(0,0,0,.7);">
      <div
            class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                  <!--Title-->
                  <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Usuários</p>
                        <div class="fechar-modal-list cursor-pointer z-50">
                              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 18 18">
                                    <path
                                          d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                    </path>
                              </svg>
                        </div>
                  </div>

                  <!--Body-->
                  <div class="my-5">
                        <!-- component -->
                        <table class="border-collapse w-full">
                              <thead>
                                    <tr>
                                          <th
                                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                                Nome</th>
                                          <th
                                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                                Email</th>
                                          <th
                                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                                Status</th>
                                          <th
                                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                                Ações</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    @foreach ($users as $user)
                                        
                                    <tr
                                          class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                          <td
                                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                                <span
                                                      class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Nome</span>
                                               {{ $user->name }}
                                          </td>
                                          <td
                                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                                <span
                                                      class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Email</span>
                                              {{ $user->email }}
                                          </td>
                                          <td
                                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                                <span
                                                      class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                                       <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">Ativo</span>
                                          </td>
                                          <td
                                                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                                <span
                                                      class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Ações</span>
                                                <a href="#" class="text-blue-400 hover:text-blue-600 underline">Editar</a>
                                                <a href="{{ url('user-delete/'. $user->id) }}"
                                                      class="text-red-400 hover:text-blue-600 underline pl-6">Remover</a>
                                          </td>
                                    </tr>
                         @endforeach
                              </tbody>
                           
                        </table>
                        {{ $users->links() }}
                  </div>
            </div>
      </div>