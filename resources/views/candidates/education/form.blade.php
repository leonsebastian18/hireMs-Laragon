<x-app-layout>
    <div class="mb-3">
        <label for="institucion" class="form-label">Institution</label>
        <input type="text" name="institucion" class="form-control" value="{{ old('institucion', $education->institucion ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="titulo" class="form-label">Title</label>
        <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $education->titulo ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="nivel_educativo" class="form-label">Education Level</label>
        <input type="text" name="nivel_educativo" class="form-control" value="{{ old('nivel_educativo', $education->nivel_educativo ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="campo_estudio" class="form-label">Field of Study</label>
        <input type="text" name="campo_estudio" class="form-control" value="{{ old('campo_estudio', $education->campo_estudio ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Start Date</label>
        <input type="date" name="fecha_inicio" class="form-control" value="{{ old('fecha_inicio', $education->fecha_inicio ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="fecha_fin" class="form-label">End Date</label>
        <input type="date" name="fecha_fin" class="form-control" value="{{ old('fecha_fin', $education->fecha_fin ?? '') }}">
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="en_curso" value="1" class="form-check-input"
            {{ old('en_curso', $education->en_curso ?? false) ? 'checked' : '' }}>
        <label class="form-check-label">Currently Studying</label>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Description</label>
        <textarea name="descripcion" class="form-control" rows="3">{{ old('descripcion', $education->descripcion ?? '') }}</textarea>
    </div>
</x-app-layout>
