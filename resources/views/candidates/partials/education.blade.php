<x-app-layout>
    @if($candidate->educaciones->isEmpty())
    <p class="text-muted">No education records.</p>
@else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Institution</th>
                <th>Degree</th>
                <th>Field</th>
                <th>Start</th>
                <th>End</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidate->educaciones as $edu)
                <tr>
                    <td>{{ $edu->institucion }}</td>
                    <td>{{ $edu->titulo }}</td>
                    <td>{{ $edu->area_estudio }}</td>
                    <td>{{ $edu->fecha_inicio }}</td>
                    <td>{{ $edu->fecha_graduacion ?? 'In progress' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

</x-app-layout>
