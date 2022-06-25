<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="mx-auto w-full max-w-[550px]">
                      <form action="{{ route('notas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                          <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                            Titulo
                          </label>
                          <input type="text" name="title" id="title" placeholder="Titulo"class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                        </div>
                        <div class="mb-5">
                          <label for="content" class="mb-3 block text-base font-medium text-[#07074D]">
                            Contenido
                          </label>
                          <textarea rows="4" name="content" id="content" placeholder="Contendio" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                        </div>
                        <div class="mb-5">
                          <label for="content" class="mb-3 block text-base font-medium text-[#07074D]">
                            Archivo
                          </label>
                          <input type="file" name="archivo" id="archivo" accept="image/*">
                        </div>
                        <input type="hidden" name="user_id" id="user_id" value="{{ auth()->id() }}">
                        <div>
                          <button type="submit" class="border text-white border-indigo-500 bg-indigo-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Guardar</button>
                        </div>
                      </form>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>