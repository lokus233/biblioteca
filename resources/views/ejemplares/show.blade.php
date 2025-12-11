<x-app-layout>
    <ul class="list bg-base-100 rounded-box shadow-md">
        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">DETALLES DEL Ejemplar</li>

        <li class="list-row flex justify-between p-2">
            <div class="text-xl uppercase font-semibold opacity-60">Codigo ejemplar:</div>
            <div class="text-xl uppercase font-semibold opacity-60">{{ $ejemplar->codigo }}</div>
        </li>

        <li class="list-row flex justify-between p-2">
            <div class="text-xl uppercase font-semibold opacity-60">Libro:</div>
            <div class="text-xl uppercase font-semibold opacity-60">{{ $ejemplar->libro->titulo }}</div>
        </li>
        <li class="list-row flex justify-between p-2">
            <div class="text-xl uppercase font-semibold opacity-60">Prestamo:</div>
            @foreach ($ejemplar->prestamos as $prestamo )
            @php
                $prestado = false;
                $prestado_activo = $ejemplar->prestamos->sortByDesc('fecha_hora')->first();
                if($prestado_activo){
                    $dias = $prestado_activo->fecha_hora->diffInDays(now());
                    if($dias<30){
                        $prestado = true;
                        $fecha=$prestado_activo->fecha_hora->format('d/m/Y');
                    }
                }
            @endphp

            @if ($prestamo)
                Está bien prestado.
                @else
                Prestamo vencido.
            @endif


            @endforeach
        </li>

</x-app-layout>
