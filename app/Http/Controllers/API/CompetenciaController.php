<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Competencia;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    public function index($candidateId)
    {
        $candidate = Candidate::findOrFail($candidateId);
        $competencias = $candidate->competencias()->get();
        $todasCompetencias = Competencia::all();

        return view('candidates.competencias.index', compact('candidate', 'competencias', 'todasCompetencias'));
    }

    public function store(Request $request, $candidateId)
    {
        $validated = $request->validate([
            'id_competencia' => 'required|exists:competencias,id',
            'nivel_actual' => 'required|string',
            'años_experiencia' => 'required|numeric|min:0',
            'certificacion' => 'nullable|string',
            'fecha_ultima_actualizacion' => 'nullable|date'
        ]);

        $candidate = Candidate::findOrFail($candidateId);

        $candidate->competencias()->attach($validated['id_competencia'], [
            'nivel_actual' => $validated['nivel_actual'],
            'años_experiencia' => $validated['años_experiencia'],
            'certificacion' => $validated['certificacion'],
            'fecha_ultima_actualizacion' => $validated['fecha_ultima_actualizacion']
        ]);

        return redirect()->back()->with('success', 'Competencia añadida correctamente.');
    }

    public function destroy($candidateId, $competenciaId)
    {
        $candidate = Candidate::findOrFail($candidateId);
        $candidate->competencias()->detach($competenciaId);

        return redirect()->back()->with('success', 'Competencia eliminada correctamente.');
    }
    public function create($candidateId)
{
    $candidate = Candidate::findOrFail($candidateId);
    $todasCompetencias = Competencia::all();
    return view('candidates.competencias.create', compact('candidate', 'todasCompetencias'));
}

public function edit($candidateId, $competenciaId)
{
    $candidate = Candidate::findOrFail($candidateId);
    $competencia = Competencia::findOrFail($competenciaId);
    // Ensure pivot exists; otherwise handle error
    return view('candidates.competencias.edit', compact('candidate', 'competencia'));
}

public function update(Request $request, $candidateId, $competenciaId)
{
    $validated = $request->validate([
        'nivel_actual' => 'required|string|max:100',
        'años_experiencia' => 'required|numeric|min:0',
        'certificacion' => 'nullable|string|max:255',
        'fecha_ultima_actualizacion' => 'nullable|date',
    ]);

    $candidate = Candidate::findOrFail($candidateId);

    $candidate->competencias()->updateExistingPivot($competenciaId, [
        'nivel_actual' => $validated['nivel_actual'],
        'años_experiencia' => $validated['años_experiencia'],
        'certificacion' => $validated['certificacion'] ?? null,
        'fecha_ultima_actualizacion' => $validated['fecha_ultima_actualizacion'] ?? now(),
    ]);

    return redirect()->route('competencias.index', $candidateId)
                     ->with('success', 'Competency updated successfully.');
}
}
