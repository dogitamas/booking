<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ingatlanok kezelése') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="relative overflow-x-auto">


                        @if($success)
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                <span class="font-medium"> Success!</span>
                            </div>

                        @endif
                            <div class="mb-4">
                                <a href="/properties/create">
                                    <button class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded pl-[35px]">
                                        Új ingatlan létrehozása
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 absolute top-[8px] left-[6px]">
                                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                            </div>

                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Ingatlan neve
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    cime
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ára
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    modositas
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($properties as $property)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$property['title']}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$property['location']}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$property['price_per_night']}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="/properties/edit/{{$property['id']}}">Szerkesztés</a>
                                    </td>
                                </tr>
                            @endforeach



                            </tbody>
                        </table>
                    </div>







                </div>
            </div>
        </div>
    </div>
</x-app-layout>
