<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-center md:justify-end -mt-16">
                          <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                        </div>
                        <div>
                          <h2 class="text-gray-800 text-3xl font-semibold">{{$nota->title}}</h2>
                          <p class="mt-2 text-gray-600">{{$nota->content}}</p>
                        </div>
                        <div class="flex justify-end mt-4">
                          <a href="#" class="text-xl font-medium text-indigo-500">{{ Auth::user()->name }}</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>