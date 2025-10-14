<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\ExperienciaLaboral;
use Illuminate\Http\Request;

class ExperienciaLaboralController extends Controller
{
       public function index(Candidate $candidate)
    {
        $experiences = ExperienciaLaboral::where('id_candidato', $candidate->id)->get();

        return view('candidates.experiences.index', compact('candidate', 'experiences'));
    }

    public function create(Candidate $candidate)
    {
        return view('candidates.experiences.create', compact('candidate'));
    }

    public function store(Request $request, $candidateId)
    {
        $candidate = Candidate::findOrFail($candidateId);

        $data = $request->validate([
            'empresa' => 'required|string|max:100',
            'cargo' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
            'actualmente_trabaja' => 'nullable|boolean',
            'salario' => 'nullable|numeric|min:0',
            'logros' => 'nullable|string',
            'referencias' => 'nullable|string',
        ]);

        // 🔹 Relación correcta con el candidato
        $data['id_candidato'] = $candidate->id;
        $data['actualmente_trabaja'] = $request->has('actualmente_trabaja') ? 1 : 0;
        \Log::info('Guardando experiencia', $data);

        // 🔹 Guarda la experiencia
        ExperienciaLaboral::create($data);

        return redirect()
            ->route('candidates.show', $candidateId)
            ->with('success', 'Experiencia laboral agregada correctamente.');
    }

    public function edit(Candidate $candidate, ExperienciaLaboral $experience)
    {
        return view('candidates.experiences.edit', compact('candidate', 'experience'));
    }

    public function update(Request $request, Candidate $candidate, ExperienciaLaboral $experience)
    {
        $validated = $request->validate([
            'empresa' => 'required|string|max:100',
            'cargo' => 'required|string|max:80',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
            'actualmente_trabaja' => 'nullable|boolean',
            'salario' => 'nullable|numeric|min:0',
            'logros' => 'nullable|string',
            'referencias' => 'nullable|string',
        ]);

        $validated['actualmente_trabaja'] = $request->has('actualmente_trabaja') ? 1 : 0;

        $experience->update($validated);

        return redirect()->route('candidates.show', $candidate)
            ->with('success', 'Experiencia laboral actualizada correctamente.');
    }

    public function destroy(Candidate $candidate, ExperienciaLaboral $experience)
    {
        $experience->delete();

        return back()->with('success', 'Experiencia laboral eliminada correctamente.');
    }
}

