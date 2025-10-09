<x-app-layout>
    <div class="container">
    <h2>Edit Education Record</h2>
    <form action="{{ route('candidates.education.update', [$candidate->id, $education->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('candidates.education.form')
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
</x-app-layout>
