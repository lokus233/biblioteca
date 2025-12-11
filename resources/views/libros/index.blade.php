<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
        <table class="table">
            <thead>
                <th>Título</th>
                <th>Autor</th>
                <th colspan="3">Acciones</th>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>
                        <a href="{{ route('libros.show', $libro) }}" class="btn btn-soft btn-info">Ver Libro</a>
                    </td>
                    <td>
                        <a href="{{ route('libros.edit', $libro) }}" class="btn btn-soft btn-warning">Modificar</a>
                    </td>
                    <td>
                        <form action="{{ route('libros.destroy', $libro) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-soft btn-error">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
