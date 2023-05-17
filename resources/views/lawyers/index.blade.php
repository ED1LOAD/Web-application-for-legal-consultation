<x-app-layout>

    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6 w-500">
            @foreach($lawyers as $lawyer)

                <div href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-500">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{Storage::url($lawyer->image)}}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$lawyer->name}}</h5>
                        <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$lawyer->city}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$lawyer->description}}</p>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</x-app-layout>
