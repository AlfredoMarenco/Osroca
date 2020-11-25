<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar informacion - ') }} {{ $casa->name }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('success'))
                    <div class="p-3 bg-green-400 w-full text-white text-center mx-auto">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="md:grid md:grid-cols-1 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="{{ route('casas.update', $casa) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="user_id" value="">
                            <div class=" sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-4 gap-6">
                                        <div class="col-span-6 sm:col-span-2">
                                            <label class="block text-sm font-medium leading-5 text-gray-700">
                                                Nombre del modelo
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input
                                                    class="form-input flex-1 block w-full rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                    placeholder="Nombre del modelo de casa" name="name"
                                                    value="{{ $casa->name }}">
                                            </div>
                                            @error('name')
                                                <small style="color: red;">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="company_website"
                                                class="block text-sm font-medium text-gray-700">
                                                Precio
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span
                                                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                    $
                                                </span>
                                                <input type="text"
                                                    class="form-input focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                    value="{{ $casa->price }}" name="price">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-5 gap-6 mt-6">
                                        <div class="col-span-4 sm:col-span-2">
                                            <label class="block text-sm font-medium leading-5 text-gray-700">
                                                Color de fondo
                                            </label>
                                            <div class="mt-1 flex block rounded-md w-full shadow-sm">
                                                <input type="color" name="bgcolor" value="{{ $casa->bgcolor }}">
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-2">
                                            <label class="block text-sm font-medium leading-5 text-gray-700">
                                                Color de texto
                                            </label>
                                            <div class="mt-1 flex block rounded-md w-full shadow-sm">
                                                <input type="color" name="textcolor" value="{{ $casa->textcolor }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <span class="inline-flex rounded-md shadow-sm">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                            Actualizar
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
