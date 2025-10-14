<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Educacion;
use App\Models\Candidate;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index($candidateId)
    {
        $candidate = Candidate::findOrFail($candidateId);
        $educaciones = $candidate->educaciones;

        return view('candidates.education.index', compact('candidate', 'educaciones'));
    }

    public function create($candidateId)
    {
        $candidate = Candidate::findOrFail($candidateId);
        // Pasamos education como null para evitar errores en el form
        $education = null;

        return view('candidates.education.create', compact('candidate', 'education'));
    }

    public function store(Request $request, $candidateId)
    {
        $request->validate([
            'institucion' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'nivel_educativo' => 'required|string|max:255',
            'area_estudio' => 'nullable|string|max:255',
            'fecha_inicio' => 'nullable|date',
            'fecha_graduacion' => 'nullable|date|after_or_equal:fecha_inicio',
            'en_curso' => 'boolean',
            'promedio' => 'nullable|numeric|min:0|max:10',
        ]);

        $candidate = Candidate::findOrFail($candidateId);

        // Convertir en_curso a boolean correctamente
        $data = $request->all();
        $data['en_curso'] = $request->boolean('en_curso');
        $data['id_candidato'] = $candidateId;

        $candidate->educaciones()->create($data);

        return redirect()
            ->route('candidates.show', $candidateId)
            ->with('success', 'Registro de educación agregado correctamente.');
    }

    public function edit($candidateId, $id)
    {
        $candidate = Candidate::findOrFail($candidateId);
        $education = Educacion::findOrFail($id);

        return view('candidates.education.edit', compact('candidate', 'education'));
    }

    public function update(Request $request, $candidateId, $id)
    {
        $request->validate([
            'institucion' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'nivel_educativo' => 'required|string|max:255',
            'area_estudio' => 'nullable|string|max:255',
            'fecha_inicio' => 'nullable|date',
            'fecha_graduacion' => 'nullable|date|after_or_equal:fecha_inicio',
            'en_curso' => 'boolean',
            'promedio' => 'nullable|numeric|min:0|max:10',
        ]);

        $education = Educacion::findOrFail($id);

        // Convertir en_curso correctamente (true/false)
        $data = $request->all();
        $data['en_curso'] = $request->boolean('en_curso');

        $education->update($data);

        return redirect()
            ->route('candidates.show', $candidateId)
            ->with('success', 'Registro de educación actualizado correctamente.');
    }

    public function destroy($candidateId, $id)
    {
        $education = Educacion::findOrFail($id);
        $education->delete();

        return redirect()
            ->route('candidates.show', $candidateId)
            ->with('success', 'Registro de educación eliminado correctamente.');
    }
}
