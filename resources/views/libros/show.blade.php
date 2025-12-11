<x-app-layout>
    <ul class="list bg-base-100 rounded-box shadow-md">
        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">DETALLES DEL LIBRO</li>

        <li class="list-row flex justify-between p-2">
            <div class="text-xl uppercase font-semibold opacity-60">Título:</div>
            <div class="text-xl uppercase font-semibold opacity-60">{{ $libro->titulo }}</div>
        </li>

        <li class="list-row flex justify-between p-2">
            <div class="text-xl uppercase font-semibold opacity-60">Autor:</div>
            <div class="text-xl uppercase font-semibold opacity-60">{{ $libro->autor }}</div>
        </li>

        <li class="list-row flex flex-col p-2">
            <div class="text-xl uppercase font-semibold opacity-60">Ejemplares:</div>
            <div class="text-xl uppercase font-semibold opacity-60">
                @foreach ($libro->ejemplares as $ejemplar)
                   Ejemplar: {{ $ejemplar->codigo }}
                   @php
                        $prestado = false;
                       $prestado_activo = $ejemplar->prestamos->sortByDesc('fecha_hora')->first();
                       if($prestado_activo){
                        $dias = $prestado_activo->fecha_hora->diffInDays(now());
                        if($dias<30){
                            $prestado = true;
                            $fecha = $prestado_activo->fecha_hora->format('d/m/Y');
                        }
                       }
                   @endphp
                    Estado:
                   @if ($prestado){
                    Prestado
                   }
                   @endif
                @endforeach
            </div>
            <ul class="ml-4">

            </ul>
        </li>
    </ul>

    <div class="mt-4 flex gap-2">
        <a href="{{ route('libros.index') }}" class="btn btn-active btn-primary">Volver</a>
        <a href="{{ route('libros.edit', $libro) }}" class="btn btn-active btn-secondary">Modificar</a>
    </div>
</x-app-layout>
