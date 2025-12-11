<x-app-layout>

    <div class="w-full max-w-sm mx-auto">
        <h2 class="text-2xl font-bold mb-3">Insertar un videojuego</h2>
        <form action="/libros" method="POST"
            class="card bg-base-200 p-6 shadow">
            @csrf
            <label for="titulo" class="floating-label">
                <span>Titulo:*</span>
                <input class="input" type="text" id="titulo"
                    name="titulo" value="{{ old('titulo') }}"><br>
            </label>
            <label for="autor" class="floating-label">
                <span>Autor:</span>
                <input class="input" type="text" id="autor"
                    name="autor" value="{{ old('autor') }}"><br>
            </label>
            <div class="flex-2">
                <button class="btn btn-soft btn-success"
                    type="submit">Insertar</button>
                <a href="/videojuegos" class="btn btn-soft btn-info">Volver</a>
            </div>
        </form>
    </div>
</x-app-layout>
