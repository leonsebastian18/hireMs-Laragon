<x-app-layout>

    @if($candidate->competencias->isEmpty())
    <p class="text-muted">No competencies assigned.</p>
@else
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Experience (years)</th>
                <th>Certification</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidate->competencias as $comp)
                <tr>
                    <td>{{ $comp->nombre }}</td>
                    <td>{{ $comp->categoria }}</td>
                    <td>{{ $comp->pivot->nivel_actual }}</td>
                    <td>{{ $comp->pivot->años_experiencia }}</td>
                    <td>{{ $comp->pivot->certificacion ?? '—' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

</x-app-layout>
