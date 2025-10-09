<x-app-layout>
    @if($candidate->experiencias->isEmpty())
    <p class="text-muted">No work experience added.</p>
@else
    <div class="list-group">
        @foreach($candidate->experiencias as $exp)
            <div class="list-group-item">
                <h6>{{ $exp->cargo }} <small class="text-muted">at {{ $exp->empresa }}</small></h6>
                <p>{{ $exp->descripcion }}</p>
                <small>{{ $exp->fecha_inicio }} - {{ $exp->fecha_fin ?? 'Present' }}</small>
            </div>
        @endforeach
    </div>
@endif

</x-app-layout>
