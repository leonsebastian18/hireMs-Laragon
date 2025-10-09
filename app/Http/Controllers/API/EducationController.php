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

        return view('education.index', compact('candidate', 'educaciones'));
    }

    public function create($candidateId)
    {
        $candidate = Candidate::findOrFail($candidateId);
        return view('education.create', compact('candidate'));
    }

    public function store(Request $request, $candidateId)
    {
        $request->validate([
            'institucion' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'nivel_educativo' => 'required|string|max:255',
            'campo_estudio' => 'nullable|string|max:255',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
            'en_curso' => 'boolean',
            'descripcion' => 'nullable|string',
        ]);

        $candidate = Candidate::findOrFail($candidateId);

        $candidate->educaciones()->create($request->all());

        return redirect()->route('education.index', $candidateId)
            ->with('success', 'Education record added successfully.');
    }

    public function edit($candidateId, $id)
    {
        $candidate = Candidate::findOrFail($candidateId);
        $education = Educacion::findOrFail($id);

        return view('education.edit', compact('candidate', 'education'));
    }

    public function update(Request $request, $candidateId, $id)
    {
        $request->validate([
            'institucion' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'nivel_educativo' => 'required|string|max:255',
            'campo_estudio' => 'nullable|string|max:255',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
            'en_curso' => 'boolean',
            'descripcion' => 'nullable|string',
        ]);

        $education = Educacion::findOrFail($id);
        $education->update($request->all());

        return redirect()->route('education.index', $candidateId)
            ->with('success', 'Education record updated successfully.');
    }

    public function destroy($candidateId, $id)
    {
        $education = Educacion::findOrFail($id);
        $education->delete();

        return redirect()->route('education.index', $candidateId)
            ->with('success', 'Education record deleted successfully.');
    }
}
