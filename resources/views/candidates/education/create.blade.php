<x-app-layout>
    <div class="container">
    <h2>Add Education for {{ $candidate->nombre }}</h2>
    <form action="{{ route('education.store', $candidate->id) }}" method="POST">
        @csrf
        @include('education.form')
        <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
</div>
</x-app-layout>
