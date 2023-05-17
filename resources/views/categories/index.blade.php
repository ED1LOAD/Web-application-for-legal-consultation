<x-app-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach($categories as $category)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <div class="px-6 py-4">
                        <a href="{{route('categories.show', $category->id)}}">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-blue-500 hover:text-blue-700 uppercase">{{$category->name}}</h4>
                        </a>
                        <p class="leading-normal text-gray-700">{{$category->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
