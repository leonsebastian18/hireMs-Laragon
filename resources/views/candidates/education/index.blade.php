<x-app-layout>
    <div class="container">
        <h2>Education History for {{ $candidate->nombre }} {{ $candidate->apellido }}</h2>
        <a href="{{ route('candidates.education.create', $candidate->id) }}" class="btn btn-primary mb-3">Add Education</a>

        @if ($educaciones->isEmpty())
            <p>No education records found.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Institution</th>
                        <th>Title</th>
                        <th>Level</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>In Progress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($educaciones as $edu)
                        <tr>
                            <td>{{ $edu->institucion }}</td>
                            <td>{{ $edu->titulo }}</td>
                            <td>{{ $edu->nivel_educativo }}</td>
                            <td>{{ $edu->fecha_inicio ? $edu->fecha_inicio->format('Y-m-d') : '—' }}</td>
                            <td>{{ $edu->fecha_fin ? $edu->fecha_fin->format('Y-m-d') : '—' }}</td>
                            <td>{{ $edu->en_curso ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ route('candidates.education.edit', [$candidate->id, $edu->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('candidates.education.destroy', [$candidate->id, $edu->id]) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
