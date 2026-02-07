<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Department Details</h1>

        <div class="bg-white shadow rounded-lg p-6 space-y-4">
            <p>
                <strong>Company:</strong>
                {{ $department->empresa->nombre ?? 'N/A' }}
            </p>

            <p>
                <strong>Department Name:</strong>
                {{ $department->nombre }}
            </p>

            <p>
                <strong>Description:</strong>
                {{ $department->descripcion ?? '-' }}
            </p>

            <p>
                <strong>Annual Budget:</strong>
                {{ $department->presupuesto_anual
                    ? '$' . number_format($department->presupuesto_anual, 2)
                    : '-' }}
            </p>

            <a href="{{ route('departments.index') }}"
               class="inline-block mt-4 px-4 py-2 bg-gray-200 rounded-lg">
                Back
            </a>
        </div>
    </div>
</x-app-layout>
