<x-app-layout>
    @if($candidate->documentos->isEmpty())
    <p class="text-muted">No documents uploaded.</p>
@else
    <ul class="list-group">
        @foreach($candidate->documentos as $doc)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $doc->nombre_archivo }}
                <a href="{{ $doc->url_archivo }}" target="_blank" class="btn btn-sm btn-outline-primary">View</a>
            </li>
        @endforeach
    </ul>
@endif

</x-app-layout>
