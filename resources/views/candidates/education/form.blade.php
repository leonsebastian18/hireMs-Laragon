<div>
    <label for="institucion" class="block text-sm font-medium text-gray-700">Institution</label>
    <input type="text" name="institucion" id="institucion"
        value="{{ old('institucion', $education->institucion ?? '') }}"
        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
        required>
</div>

<div>
    <label for="titulo" class="block text-sm font-medium text-gray-700">Title</label>
    <input type="text" name="titulo" id="titulo"
        value="{{ old('titulo', $education->titulo ?? '') }}"
        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
        required>
</div>

{{-- CAMPO AJUSTADO --}}
<div>
    <label for="nivel_educativo" class="block text-sm font-medium text-gray-700">Education Level</label>
    <select name="nivel_educativo" id="nivel_educativo"
        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
        required>
        <option value="">-- Select Level --</option>
        <option value="Técnico" {{ old('nivel_educativo', $education->nivel_educativo ?? '') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
        <option value="Tecnológico" {{ old('nivel_educativo', $education->nivel_educativo ?? '') == 'Tecnológico' ? 'selected' : '' }}>Tecnológico</option>
        <option value="Pregrado" {{ old('nivel_educativo', $education->nivel_educativo ?? '') == 'Pregrado' ? 'selected' : '' }}>Pregrado</option>
        <option value="Especialización" {{ old('nivel_educativo', $education->nivel_educativo ?? '') == 'Especialización' ? 'selected' : '' }}>Especialización</option>
        <option value="Maestría" {{ old('nivel_educativo', $education->nivel_educativo ?? '') == 'Maestría' ? 'selected' : '' }}>Maestría</option>
        <option value="Doctorado" {{ old('nivel_educativo', $education->nivel_educativo ?? '') == 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
    </select>
</div>

<div>
    <label for="area_estudio" class="block text-sm font-medium text-gray-700">Field of Study</label>
    <input type="text" name="area_estudio" id="area_estudio"
        value="{{ old('area_estudio', $education->area_estudio ?? '') }}"
        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    <div>
        <label for="fecha_inicio" class="block text-sm font-medium text-gray-700">Start Date</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio"
            value="{{ old('fecha_inicio', $education->fecha_inicio ?? '') }}"
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div>
        <label for="fecha_graduacion" class="block text-sm font-medium text-gray-700">End Date</label>
        <input type="date" name="fecha_graduacion" id="fecha_graduacion"
            value="{{ old('fecha_graduacion', $education->fecha_graduacion ?? '') }}"
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div>
    <label for="promedio" class="block text-sm font-medium text-gray-700">GPA / Average</label>
    <input type="number" name="promedio" id="promedio" step="0.01" min="0" max="10"
        value="{{ old('promedio', $education->promedio ?? '') }}"
        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
</div>
</div>

<div class="flex items-center space-x-2 mt-4">
    <!-- Siempre enviar 0 si no se marca -->
    <input type="hidden" name="en_curso" value="0">

    <!-- optional() evita el error si $education no existe -->
    <input
        type="checkbox"
        name="en_curso"
        id="en_curso"
        value="1"
        {{ old('en_curso', optional($education)->en_curso) ? 'checked' : '' }}
        class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
    >
    <label for="en_curso" class="ml-2 text-sm text-gray-700">Currently Studying</label>
</div>




