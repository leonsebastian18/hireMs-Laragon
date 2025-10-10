<x-app-layout>
@section('title', 'Candidate Profile')

<div class="max-w-5xl mx-auto mt-10 bg-white rounded-lg shadow p-8">

    {{-- Botón volver --}}
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">
            {{ $candidate->nombre }} {{ $candidate->apellido }}
        </h2>
        <a href="{{ route('candidates.index') }}"
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md font-semibold hover:bg-gray-300 transition">
           ← Back to Candidates
        </a>
    </div>

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
        <div class="border p-3 rounded mb-3 flex justify-between items-center">
            <div>
                <p><strong>Type:</strong> {{ $doc->tipo_documento ?? 'N/A' }}</p>
                <p><strong>File:</strong>
                    @if($doc->url_archivo)
                        <a href="{{ asset('storage/' . $doc->url_archivo) }}"
                           target="_blank"
                           class="text-blue-600 hover:underline">
                            {{ $doc->nombre_archivo ?? 'View Document' }}
                        </a>
                    @else
                        <span class="text-gray-500">No file uploaded</span>
                    @endif
                </p>
            </div>

            <div class="flex space-x-2">
                <a href="{{ route('candidates.documents.edit', [$candidate->id, $doc->id]) }}"
                   class="px-3 py-1 bg-yellow-500 text-white rounded-md text-xs hover:bg-yellow-600">Edit</a>

                <form action="{{ route('candidates.documents.destroy', [$candidate->id, $doc->id]) }}"
                      method="POST" onsubmit="return confirm('Are you sure you want to delete this document?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="px-3 py-1 bg-red-600 text-white rounded-md text-xs hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @empty
        <p class="text-gray-500">No documents uploaded.</p>
    @endforelse

    <a href="{{ route('candidates.documents.create', $candidate->id) }}"
       class="text-blue-600 hover:underline">➕ Add new document</a>
</div>

    {{-- Experiencia laboral --}}
    <div class="mb-6">
        <h3 class="text-lg font-semibold mb-2">💼 Work Experience</h3>
        @forelse ($candidate->experiencias as $exp)
            <div class="border p-3 rounded mb-3">
                <div class="flex justify-between items-center">
                    <div>
                        <p><strong>{{ $exp->empresa }}</strong> — {{ $exp->cargo }}</p>
                        <p>{{ $exp->fecha_inicio }} - {{ $exp->fecha_fin ?? 'Present' }}</p>
                        <p class="text-gray-600">{{ $exp->descripcion }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('candidates.experiences.edit', [$candidate->id, $exp->id]) }}"
                           class="px-3 py-1 bg-yellow-500 text-white rounded-md text-xs hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('candidates.experiences.destroy', [$candidate->id, $exp->id]) }}"
                              method="POST" onsubmit="return confirm('Are you sure you want to delete this experience?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1 bg-red-600 text-white rounded-md text-xs hover:bg-red-700">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No work experience registered.</p>
        @endforelse
        <a href="{{ route('candidates.experiences.create', $candidate->id) }}"
           class="text-blue-600 hover:underline">➕ Add new work experience</a>
    </div>

    {{-- Educación --}}
    <div class="mb-6">
        <h3 class="text-lg font-semibold mb-2">🎓 Education</h3>
        @forelse ($candidate->educaciones as $edu)
            <div class="border p-3 rounded mb-3 flex justify-between items-center">
                <div>
                    <p><strong>{{ $edu->titulo }}</strong> — {{ $edu->institucion }}</p>
                    <p>{{ $edu->fecha_inicio }} - {{ $edu->fecha_graduacion ?? 'Present' }}</p>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('candidates.education.edit', [$candidate->id, $edu->id]) }}"
                       class="px-3 py-1 bg-yellow-500 text-white rounded-md text-xs hover:bg-yellow-600">Edit</a>

                    <form action="{{ route('candidates.education.destroy', [$candidate->id, $edu->id]) }}"
                          method="POST" onsubmit="return confirm('Are you sure you want to delete this education record?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-3 py-1 bg-red-600 text-white rounded-md text-xs hover:bg-red-700">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No education registered.</p>
        @endforelse
        <a href="{{ route('candidates.education.create', $candidate->id) }}"
           class="text-blue-600 hover:underline">➕ Add new education</a>
    </div>

    {{-- Competencias --}}
    <div>
        <h3 class="text-lg font-semibold mb-2">🧠 Competencies</h3>
        @forelse ($candidate->competencias as $comp)
            <div class="border p-3 rounded mb-3 flex justify-between items-center">
                <div>
                    <p><strong>{{ $comp->nombre }}</strong> ({{ $comp->pivot->nivel_actual }})</p>
                    <p>Experience: {{ $comp->pivot->años_experiencia }} years</p>
                    <p>Certification: {{ $comp->pivot->certificacion ?? '—' }}</p>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('candidates.competencias.edit', [$candidate->id, $comp->id]) }}"
                       class="px-3 py-1 bg-yellow-500 text-white rounded-md text-xs hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('candidates.competencias.destroy', [$candidate->id, $comp->id]) }}"
                          method="POST" onsubmit="return confirm('Are you sure you want to delete this competency?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-3 py-1 bg-red-600 text-white rounded-md text-xs hover:bg-red-700">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No competencies registered.</p>
        @endforelse
        <a href="{{ route('candidates.competencias.create', $candidate->id) }}"
           class="text-blue-600 hover:underline">➕ Add new competency</a>
    </div>

</div>

{{-- AlpineJS for Tabs --}}
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</x-app-layout>
