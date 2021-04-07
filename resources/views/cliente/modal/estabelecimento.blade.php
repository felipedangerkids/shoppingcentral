<div class="modal hidden fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
      style="background: rgba(0,0,0,.7);">
      <div
            class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                  <!--Title-->
                  <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Estabelecimento</p>
                        <div class="close-modal cursor-pointer z-50">
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
                        <form class="bg-white rounded shadow-xl" action="{{ url('estabelecimento-store') }}"
                              method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="cus_name" name="name" type="text" required=""
                                          placeholder="Nome do estabelecimento" aria-label="Name">
                              </div>

                              <div class="py-2">
                                    <select
                                          class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          name="segmento" id="">
                                          <option value="1">Restaurante</option>
                                          <option value="2">Loja</option>
                                          <option value="3">Cosméticos</option>
                                    </select>
                              </div>
                              <div class="py-2">
                                    <select
                                          class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          name="delivery" id="">
                                          <option>Delivery?</option>
                                          <option value="1">Sim</option>
                                          <option value="2">Não</option>
                                    </select>
                              </div>
                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="telefone" name="telefone" type="text" required=""
                                          placeholder="Telefone do estabelecimento" aria-label="Name">
                              </div>
                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="whatsapp" name="whatsapp" type="text" required=""
                                          placeholder="Whatsapp do estabelecimento" aria-label="Name">
                              </div>

                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="cus_name" name="logo" type="file" required=""
                                          placeholder="Logo do Estabelecimento" aria-label="Name">
                              </div>
                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="cus_name" name="time" type="text" required=""
                                          placeholder="Horario de Atendimento" aria-label="Name">
                              </div>
                              <div class="py-2">
                                    <input class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                          id="cus_name" name="ifood" type="text" 
                                          placeholder="Link do ifood" aria-label="Name">
                              </div>


                  </div>
                  <!--Footer-->
                  <div class="flex justify-end pt-2">
                        <button
                              class="focus:outline-none close-modal px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancelar</button>
                        <button type="submit"
                              class="focus:outline-none px-4 bg-green-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Cadastrar</button>
                  </div>
                  </form>
            </div>
      </div>
</div>