<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido a tu dashboard") }}
                </div>
                <div style="margin-bottom: 20px;">
                <a href="{{ route('productos.index') }}" style="background-color: #2563eb; border-radius: 6px; color: #fff; padding: 10px 20px; font-weight: bold; text-decoration: none;">Vista principal Productos</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
