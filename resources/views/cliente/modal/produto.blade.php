<div class="main-modal hidden fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
      style="background: rgba(0,0,0,.7);">
      <div
            class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                  <!--Title-->
                  <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Produtos</p>
                        <div class="modal-close cursor-pointer z-50">
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
                        <form class="bg-white rounded shadow-xl" action="{{ url('produto-store') }}" method="POST"
                              enctype="multipart/form-data">
                              @csrf
                              @foreach ($user->estabelecimento as $est)
                              @if ($loop->first)
                              <input name="est" type="hidden" value="{{ $est->id }}">
                              @endif
                              @endforeach

                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="cus_name" name="image" type="file" required=""
                                          placeholder="Foto do Produto" aria-label="Name">
                              </div>

                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="cus_name" name="name" type="text" required=""
                                          placeholder="Nome do Produto" aria-label="Name">
                              </div>
                              <div class="py-2">
                                    <textarea
                                          class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="message" name="desc" type="text" placeholder="Descrição..."></textarea>
                              </div>
                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="price" name="price" type="text" required="" placeholder="Preço"
                                          aria-label="Name">
                              </div>
                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="cus_name" name="time" type="text" required=""
                                          placeholder="Tempo de Entrega" aria-label="Name">
                              </div>
                              <div class="py-2">
                                    <select
                                          class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          name="category_id" id="">
                                          <option>Categoria</option>
                                          @foreach ($user->categoria as $cat)
                                             <option value="{{ $cat->id }}">{{ $cat->name }}</option> 
                                          @endforeach
                                          
                                      
                                    </select>
                              </div>


                  </div>
                  <!--Footer-->
                  <div class="flex justify-end pt-2">
                        <button
                              class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancelar</button>
                        <button type="submit"
                              class="focus:outline-none px-4 bg-green-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Cadastrar</button>
                  </div>
                  </form>
            </div>
      </div>
</div>