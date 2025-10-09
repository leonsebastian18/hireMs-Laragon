<x-app-layout>
@section('title', 'Candidate Profile')
<div class="max-w-5xl mx-auto mt-10 bg-white rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">{{ $candidate->nombre }} {{ $candidate->apellido }}</h2>

    {{-- Información básica --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
        <p><strong>Email:</strong> {{ $candidate->email }}</p>
        <p><strong>Phone:</strong> {{ $candidate->telefono }}</p>
        <p><strong>City:</strong> {{ $candidate->ciudad }}</p>
        <p><strong>Country:</strong> {{ $candidate->pais }}</p>
        <p><strong>Status:</strong> {{ $candidate->estado }}</p>
        <p><strong>Preferred Mode:</strong> {{ $candidate->modalidad_preferida ?? '—' }}</p>
    </div>

    <hr class="my-6">

    {{-- Documentos --}}
    <div class="mb-6">
        <h3 class="text-lg font-semibold mb-2">📄 Documents</h3>
        @forelse ($candidate->documentos as $doc)
            <p>
                <a href="{{ asset($doc->ruta) }}" class="text-blue-600 hover:underline" target="_blank">
                    {{ $doc->tipo }}
                </a>
            </p>
        @empty
            <p class="text-gray-500">No documents uploaded.</p>
        @endforelse
        <a href="{{ route('candidates.documents.create', $candidate) }}" class="text-blue-600 hover:underline">
            ➕ Add new document
        </a>
    </div>

    {{-- Experiencia laboral --}}
    <div class="mb-6">
        <h3 class="text-lg font-semibold mb-2">💼 Work Experience</h3>
        @forelse ($candidate->experiencias as $exp)
            <div class="border p-3 rounded mb-3">
                <p><strong>{{ $exp->empresa }}</strong> — {{ $exp->cargo }}</p>
                <p>{{ $exp->fecha_inicio }} - {{ $exp->fecha_fin ?? 'Present' }}</p>
                <p class="text-gray-600">{{ $exp->descripcion }}</p>
            </div>
        @empty
            <p class="text-gray-500">No work experience registered.</p>
        @endforelse
        <a href="{{ route('documents.create', $candidate) }}" class="text-blue-600 hover:underline">
            ➕ Add new document
        </a>
    </div>

    {{-- Educación --}}
    <div class="mb-6">
        <h3 class="text-lg font-semibold mb-2">🎓 Education</h3>
        @forelse ($candidate->educaciones as $edu)
            <div class="border p-3 rounded mb-3">
                <p><strong>{{ $edu->titulo }}</strong> — {{ $edu->institucion }}</p>
                <p>{{ $edu->fecha_inicio }} - {{ $edu->fecha_fin }}</p>
            </div>
        @empty
            <p class="text-gray-500">No education registered.</p>
        @endforelse
        <a href="{{ route('documents.create', $candidate) }}" class="text-blue-600 hover:underline">
            ➕ Add new document
        </a>
    </div>

    {{-- Competencias --}}
    <div>
        <h3 class="text-lg font-semibold mb-2">🧠 Competencies</h3>
        @forelse ($candidate->competencias as $comp)
            <div class="border p-3 rounded mb-3">
                <p><strong>{{ $comp->nombre }}</strong> ({{ $comp->pivot->nivel_actual }})</p>
                <p>Experience: {{ $comp->pivot->años_experiencia }} years</p>
                <p>Certification: {{ $comp->pivot->certificacion ?? '—' }}</p>
            </div>
        @empty
            <p class="text-gray-500">No competencies registered.</p>
        @endforelse
        <a href="{{ route('documents.create', $candidate) }}" class="text-blue-600 hover:underline">
            ➕ Add new document
        </a>
    </div>
</div>

</div>
{{-- AlpineJS for Tabs --}}
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</x-app-layout>
