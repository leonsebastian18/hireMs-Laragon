<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Candidate Details</h1>

        <div class="space-y-2">
            <p><strong>Full name:</strong> {{ $candidate->first_name }} {{ $candidate->last_name }}</p>
            <p><strong>Email:</strong> {{ $candidate->email }}</p>
            <p><strong>Phone:</strong> {{ $candidate->phone }}</p>
            <p><strong>Position:</strong> {{ $candidate->position }}</p>
        </div>

        <div class="mt-4">
            <strong>CV:</strong>
            @if ($candidate->cv)
                <a href="{{ asset('storage/' . $candidate->cv) }}" class="text-blue-600 hover:underline" target="_blank">See CV</a>
            @else
                <span class="text-gray-500">No file</span>
            @endif
        </div>

        <div class="mt-6">
            <a href="{{ route('candidate.index') }}" class="text-blue-600 hover:underline">← Return</a>
        </div>
    </div>
</x-app-layout>
