<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home page') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="'flex justify-end m-2 p-2">
                <a href="{{route('admin.lawyers.create')}}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">
                    Добавить юриста
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Фото
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Юрист
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Город
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Описание
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lawyers as $lawyer)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{Storage::url($lawyer->image)}}" class="object-scale-down w-40 h-40 ">
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$lawyer->name}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$lawyer->city}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$lawyer->description}}
                            </th>
                        </tr>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex space-x-2">
                                <a href="{{route('admin.lawyers.edit', $lawyer->id)}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                                    Изменить
                                </a>
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                      method="POST"
                                      action="{{route('admin.lawyers.destroy',$lawyer->id)}}"
                                      onsubmit="return confirm('Точно?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        Удалить
                                    </button>
                                </form>
                            </div>
                        </td>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
