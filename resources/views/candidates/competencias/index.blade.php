   <x-app-layout>
    <div class="container">
        <h2 class="mb-4">Competencias de {{ $candidate->nombre }} {{ $candidate->apellido }}</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('candidates.competencias.store', $candidate->id) }}" method="POST" class="mb-4">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="id_competencia">Competencia</label>
                    <select name="id_competencia" class="form-control" required>
                        <option value="">Seleccione...</option>
                        @foreach($todasCompetencias as $comp)
                            <option value="{{ $comp->id }}">{{ $comp->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="nivel_actual">Nivel</label>
                    <input type="text" name="nivel_actual" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="años_experiencia">Años Exp.</label>
                    <input type="number" name="años_experiencia" class="form-control" min="0" required>
                </div>
                <div class="col-md-2">
                    <label for="certificacion">Certificación</label>
                    <input type="text" name="certificacion" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="fecha_ultima_actualizacion">Última actualización</label>
                    <input type="date" name="fecha_ultima_actualizacion" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3">Agregar</button>
        </form>

        <h4>Competencias Registradas</h4>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Competencia</th>
                    <th>Nivel</th>
                    <th>Años Exp.</th>
                    <th>Certificación</th>
                    <th>Última actualización</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($competencias as $competencia)
                    <tr>
                        <td>{{ $competencia->nombre }}</td>
                        <td>{{ $competencia->pivot->nivel_actual }}</td>
                        <td>{{ $competencia->pivot->años_experiencia }}</td>
                        <td>{{ $competencia->pivot->certificacion ?? 'N/A' }}</td>
                        <td>{{ $competencia->pivot->fecha_ultima_actualizacion ?? 'N/A' }}</td>
                        <td>
                            <form action="{{ route('candidates.competencias.destroy', [$candidate->id, $competencia->id]) }}" method="POST" onsubmit="return confirm('¿Eliminar esta competencia?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </x-app-layout>
