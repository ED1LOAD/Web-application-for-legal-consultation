<x-app-layout>
    <section class="pt-12 pb-12 bg-white">
        <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
            <div class="w-full">

                <h1
                    class="mb-4 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-600">
                    Задать вопрос
                </h1>
                <div class="gap-2 mb-8 lg:flex">
                    <div class="w-full">
                        <label class="block text-base">
                            ФИО
                        </label>
                        <input type="text"
                               class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                               placeholder="Ваше ФИО" />
                    </div>
                </div>
                <div class="gap-2 mb-8 lg:flex">
                    <div class="w-full">
                        <label class="block text-base">
                            Номер телефона
                        </label>
                        <input type="text"
                               class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                               placeholder="Ваш телефон" />
                    </div>
                </div>
                <div class="gap-2 mb-8 lg:flex">
                    <div class="w-full">
                        <label class="block text-base">
                            Время ближайшего ответа
                        </label>
                        <input type="date"
                               class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                               placeholder="Your Number" />
                    </div>
                </div>
                <div class="">
                    <label class="block text-base">
                        Ваш вопрос
                    </label>
                    <textarea name="" id="" rows="8" cols="30"
                              class="w-full p-3 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                              placeholder=""></textarea>
                </div>
                <a
                    class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                    href="/dashboard">
                    Отправить
                </a>

            </div>
        </div>
    </section>
</x-app-layout>
