<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Candidates</h1>
        <a href="{{ route('candidates.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
           + Add Candidate
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Phone</th>
                    <th class="px-4 py-2 text-left">City</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($candidates as $candidate)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2">{{ $candidate->nombre }} {{ $candidate->apellido }}</td>
                    <td class="px-4 py-2">{{ $candidate->email }}</td>
                    <td class="px-4 py-2">{{ $candidate->telefono ?? '-' }}</td>
                    <td class="px-4 py-2">{{ $candidate->ciudad ?? '-' }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-sm
                            {{ $candidate->estado === 'Activo' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $candidate->estado }}
                        </span>
                    </td>
                    <td class="px-4 py-2 flex justify-center gap-2">
                        <a href="{{ route('candidates.show', $candidate) }}"
                           class="text-blue-600 hover:underline">View</a>
                        <a href="{{ route('candidates.edit', $candidate) }}"
                           class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('candidates.destroy', $candidate) }}" method="POST" onsubmit="return confirm('Delete this candidate?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-6 text-center text-gray-500">No candidates found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>
