  <x-app-layout>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow mt-10">
        <h2 class="text-2xl font-semibold mb-4">Work Experience</h2>

        <a href="{{ route('experiences.create', $candidate) }}" class="text-blue-600 hover:underline mb-4 inline-block">
            ➕ Add Experience
        </a>

        <table class="w-full border border-gray-200 mt-4">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-4 py-2 border">Company</th>
                    <th class="px-4 py-2 border">Position</th>
                    <th class="px-4 py-2 border">Start Date</th>
                    <th class="px-4 py-2 border">End Date</th>
                    <th class="px-4 py-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($experiences as $exp)
                <tr>
                    <td class="px-4 py-2 border">{{ $exp->empresa }}</td>
                    <td class="px-4 py-2 border">{{ $exp->cargo }}</td>
                    <td class="px-4 py-2 border">{{ $exp->fecha_inicio }}</td>
                    <td class="px-4 py-2 border">{{ $exp->fecha_fin ?? 'Present' }}</td>
                    <td class="px-4 py-2 border">
                        <a href="{{ route('experiences.edit', [$candidate, $exp]) }}" class="text-green-600 hover:underline">Edit</a>
                        <form action="{{ route('experiences.destroy', [$candidate, $exp]) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center py-2">No experiences found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
