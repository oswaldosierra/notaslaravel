<x-app-layout>
    <div class="justify-center flex">
        <div class="w-9/12 py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
              <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
            </div>
            <div>
              <h2 class="text-gray-800 text-3xl font-semibold">{{$nota->title}}</h2>
              <p class="mt-2 text-gray-600">{{$nota->content}}</p>
            </div>
            @isset($nota->archivo)
              <div class="flex justify-center">
                <img src="{{$nota->archivo}}" alt="" height="500px" width="500px">
              </div>
            @endisset
        </div>
    </div>
</x-app-layout>