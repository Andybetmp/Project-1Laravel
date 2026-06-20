<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(('Editar Producto'))}} : {{ $producto->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            
            <div style="margin-bottom: 20px:">
                <a href="{{ route('productos.index') }}" style="background-color: #2563eb; border-radius: 4px; color: #fff; padding: 5px 10px; font-weight: bold; text-decoration: none;">Volver a vista principal</a>
            </div>

            @if ($errors->any())
                <div style="background-color: #fee2e2; color: #991b1b; padding: 12px; border-radius: 6px; margin bottom: 20px;">
                    <strong>Tienes algunos errores</strong>
                    <ul style="margin-top: 5px; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div style="margin-bottom: 15px;">
                    <label for="nombre" style="display: block; font-weight: bold; margin-bottom: 5px;">Nombre del producto:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="descripcion" style="display: block; font-weight: bold; margin-bottom: 5px;">Descripción :</label>
                    <textarea  id="descripcion" name="descripcion" rows="3" style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px;">{{ old('descripcion', $producto->descripcion) }}</textarea>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="precio" style="display: block; font-weight: bold; margin-bottom: 5px;">Precio: (S/.)</label>
                    <input type="text" id="precio" step="0.01" name="precio" value="{{ old('precio', $producto->precio) }}" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="stock" style="display: block; font-weight: bold; margin-bottom: 5px;">Stock disponible:</label>
                    <input type="text" id="stock" name="stock" value="{{ old('stock', $producto->stock) }}" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;">
                </div>

                <button type="submit" style="background-color: #2563eb; color: white; padding: 10px 20px; border-radius: 6px; font-weight: bold; cursor: pointer;">Actualizar Producto</button>
            </form>
        </div>
    </div>
</x-app-layout>