<x-app-layout>
    <div class="container">
    <h2>Edit Education Record</h2>
    <form action="{{ route('education.update', [$candidate->id, $education->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('education.form')
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
</x-app-layout>
