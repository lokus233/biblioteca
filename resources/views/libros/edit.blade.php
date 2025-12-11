<x-app-layout>
    <form action="/libros/{{ $libro->id }}" method="POST">
        @method('PUT')
        @csrf
        <label for="titulo">Titulo:* </label>
        <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $libro->titulo) }}"><br>
        <label for="autor">Autor:* </label>
        <input type="text" id="autor" name="autor" value="{{ old('autor', $libro->autor) }}"><br>
        <button type="submit">Modificar</button>
    </form>
</x-app-layout>
