

<x-app-layout>
<div class="max-w-lg mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Detalles del Candidato</h1>

    <div class="bg-white shadow rounded-lg p-4 space-y-2">
        <p><strong>ID:</strong> {{ $candidate->id }}</p>
        <p><strong>Teléfono:</strong> {{ $candidate->phone }}</p>
        <p><strong>Dirección:</strong> {{ $candidate->address }}</p>
        <p><strong>CV:</strong> {{ $candidate->cv }}</p>
        <p><strong>Creado:</strong> {{ $candidate->created_at->format('d/m/Y H:i') }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('candidate.index') }}" class="text-blue-600 hover:underline">Volver a la lista</a>
    </div>
</div>
</x-app-layout>
