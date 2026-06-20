<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lx text-gray-800 leading-tight">
            {{__('lista de productos')}}
        </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm::6px lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div style="display: flex; justify-content: space-between; align-items: center; margin-botton: 20px;">
                    <h3 class="text-lg font-medium text-gray-900">Catálogo de productos disponibles</h3>
                    <a href="{{ route('productos.create') }}" style="background-color: #2563eb; color: white; padding: 8px 16px; border-radius: 6px; font-weight: bold; text-decoration: none;"> Agregar nuevo producto</a> 
                </div>

                @if (session('success'))
                    <div style="backgroud-color: #d1fae5; color: ##065f46; padding: 12px; border-radius: 6px; margin-bottom: 20px; font-weight:bold;">
                        {{ session('success')}}
                    </div>
                @endif

                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background-color: #f8fafc; border-bottom: 2px solid #e5e7eb;">
                            <th style="padding: 12px; text-align: left;">ID</th>
                            <th style="padding: 12px; text-align: left;">Nombre</th>
                            <th style="padding: 12px; text-align: left;">Descripción</th>
                            <th style="padding: 12px; text-align: left;">Precio</th>
                            <th style="padding: 12px; text-align: left;">Stock</th>
                            <th style="padding: 12px; text-align: left;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 12px;">{{ $producto->id }}</td>
                            <td style="padding: 12px;"><strong>{{ $producto->nombre }}</strong></td>
                            <td style="padding: 12px;"><small style="color: #64748b;">{{ $producto->descripcion }}</small></td>
                            <td style="padding: 12px;">S/. {{ number_format($producto->precio,2)}}</td>
                            <td style="padding: 12px;">{{ $producto->stock }} unid.</td>
                            <td style="padding: 12px;">
                                <a href="{{ route('productos.edit', $producto->id)}}" style="color: #d97706;border: 2px solid #d97706; font-weight: bold; text-decoration: none">Editar</a>

                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none; border: 2px solid #dc2626; color: #dc2626; cursor: pointer; font-weight: bold;" onclick="return confirm('¿Estas seguro de eliminar este producto?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>