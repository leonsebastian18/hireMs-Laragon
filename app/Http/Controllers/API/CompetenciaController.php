<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Competencia;
use App\Models\CandidatoCompetencia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
   public function index(Candidate $candidate)
    {
        $competencias = Competencia::all();
        $candidatoCompetencias = DB::table('candidato_competencias')
            ->where('id_candidato', $candidate->id)
            ->get();

        return view('candidates.competencias.index', compact('candidate', 'competencias', 'candidatoCompetencias'));
    }

    /**
     * Mostrar formulario de creación de competencia.
     */
    public function create(Candidate $candidate)
    {
        $categorias = ['Técnica', 'Blanda', 'Idioma', 'Herramienta'];
        return view('candidates.competencias.create', compact('candidate', 'categorias'));
    }

    /**
     * Guardar una nueva competencia y su relación con el candidato.
     */
    public function store(Request $request, $candidateId)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:80',
            'descripcion' => 'nullable|string',
            'categoria' => 'required|in:Técnica,Blanda,Idioma,Herramienta',
            'nivel_maximo' => 'required|integer|min:1|max:10',
            'nivel_actual' => 'nullable|integer|min:0|max:10',
            'años_experiencia' => 'nullable|integer|min:0|max:50',
            'certificacion' => 'nullable|string|max:100',
        ]);

        // Crear o buscar competencia existente
        $competencia = Competencia::firstOrCreate([
            'nombre' => $validated['nombre'],
        ], [
            'descripcion' => $validated['descripcion'] ?? null,
            'categoria' => $validated['categoria'],
            'nivel_maximo' => $validated['nivel_maximo'],
        ]);

        // Insertar relación candidato - competencia
        DB::table('candidato_competencias')->updateOrInsert(
            [
                'id_candidato' => $candidateId,
                'id_competencia' => $competencia->id,
            ],
            [
                'nivel_actual' => $validated['nivel_actual'] ?? 0,
                'años_experiencia' => $validated['años_experiencia'] ?? 0,
                'certificacion' => $validated['certificacion'] ?? null,
                'fecha_ultima_actualizacion' => now(),
            ]
        );

        return redirect()
            ->route('candidates.show', $candidateId)
            ->with('success', 'Competencia registrada correctamente.');
    }

    /**
     * Editar una competencia y sus datos asociados al candidato.
     */
    public function edit(Candidate $candidate, $competenciaId)
    {
        $competencia = Competencia::findOrFail($competenciaId);
        $relacion = DB::table('candidato_competencias')
            ->where('id_candidato', $candidate->id)
            ->where('id_competencia', $competencia->id)
            ->first();

        $categorias = ['Técnica', 'Blanda', 'Idioma', 'Herramienta'];

        return view('candidates.competencias.edit', compact('candidate', 'competencia', 'relacion', 'categorias'));
    }

    /**
     * Actualizar competencia y relación candidato_competencia.
     */
    public function update(Request $request, Candidate $candidate, $competenciaId)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:80',
            'descripcion' => 'nullable|string',
            'categoria' => 'required|in:Técnica,Blanda,Idioma,Herramienta',
            'nivel_maximo' => 'required|integer|min:1|max:10',
            'nivel_actual' => 'nullable|integer|min:0|max:10',
            'años_experiencia' => 'nullable|integer|min:0|max:50',
            'certificacion' => 'nullable|string|max:100',
        ]);

        $competencia = Competencia::findOrFail($competenciaId);
        $competencia->update([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'] ?? null,
            'categoria' => $validated['categoria'],
            'nivel_maximo' => $validated['nivel_maximo'],
        ]);

        DB::table('candidato_competencias')
            ->where('id_candidato', $candidate->id)
            ->where('id_competencia', $competenciaId)
            ->update([
                'nivel_actual' => $validated['nivel_actual'] ?? 0,
                'años_experiencia' => $validated['años_experiencia'] ?? 0,
                'certificacion' => $validated['certificacion'] ?? null,
                'fecha_ultima_actualizacion' => now(),
            ]);

        return redirect()
            ->route('candidates.show', $candidate)
            ->with('success', 'Competencia actualizada correctamente.');
    }

    /**
     * Eliminar una competencia del candidato.
     */
    public function destroy(Candidate $candidate, $competenciaId)
    {
        DB::table('candidato_competencias')
            ->where('id_candidato', $candidate->id)
            ->where('id_competencia', $competenciaId)
            ->delete();

        return back()->with('success', 'Competencia eliminada correctamente.');
    }
}
