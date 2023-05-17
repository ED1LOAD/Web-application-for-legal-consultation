<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home page') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="'fleX m-2 p-2">
                <a href="{{route('admin.categories.index')}}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">
                    Категории
                </a>
            </div>
            <div class="m-2 p-2">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Название категории </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Описание</label>
                            <div class="mt-1">
                                <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>
                        <div class="mt-3 p-0">
                            <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">
                                Добавить
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
