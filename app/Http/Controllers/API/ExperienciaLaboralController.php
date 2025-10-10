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
        $experiences = $candidate->experiencias;
        return view('candidates.experiences.index', compact('candidate', 'experiences'));
    }

    public function create(Candidate $candidate)
    {
        return view('candidates.experiences.create', compact('candidate'));
    }

    public function store(Request $request, Candidate $candidate)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:500',
        ]);

        ExperienciaLaboral::create([
            'id_candidato' => $candidate->id,
            'empresa' => $validated['company'],
            'cargo' => $validated['position'],
            'fecha_inicio' => $validated['start_date'],
            'fecha_fin' => $validated['end_date'] ?? null,
            'descripcion' => $validated['description'] ?? null,
        ]);

        return redirect()->route('candidates.show', $candidate)
            ->with('success', 'Work experience added successfully.');
    }

    public function edit(Candidate $candidate, ExperienciaLaboral $experience)
    {
        return view('candidates.experiences.edit', compact('candidate', 'experience'));
    }

    public function update(Request $request, Candidate $candidate, ExperienciaLaboral $experience)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:500',
        ]);

        $experience->update([
            'empresa' => $validated['company'],
            'cargo' => $validated['position'],
            'fecha_inicio' => $validated['start_date'],
            'fecha_fin' => $validated['end_date'] ?? null,
            'descripcion' => $validated['description'] ?? null,
        ]);

        return redirect()->route('candidates.show', $candidate)
            ->with('success', 'Experience updated successfully.');
    }

    public function destroy(Candidate $candidate, ExperienciaLaboral $experience)
    {
        $experience->delete();

        return back()->with('success', 'Experience deleted successfully.');
    }
}
